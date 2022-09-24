<x-app-layout>
     <x-slot name="header">
        　<h1>Review Show Page</h1> 
    </x-slot>
        <div class='review'>
            <h1 class='text-2xl'>
                Review Title
                「{{$review->title}}」
            </h1>
            
            <h1 class='text-2xl'>
                Target Script
                「{{$review->neta->name}}」
            </h1>
            
            <h1 class='text-2xl'>
                Comedian
                「{{$review->neta->combination->name}}」
            </h1>
            
            <h1 class='text-2xl'>
                Genre
                「{{$review->neta->genre->name}}」
            </h1>
            
           <h1 class='text-2xl'>
                Review Body
                「{{$review->body}}」
            </h1>
            
            <h1 class='text-2xl'>
                User
                「{{$review->user->name}}」
            </h1>
            
            <h1 class='text-2xl'>
                Rates to the neta＝
                「{{$review->votes}}」
            </h1>
            
            <h1 class='text-2xl'>
                Rate from Comments＝
                @foreach($comments_avgs as $comment_avg)
                @if($comment_avg->review_id===$review->id)
                「{{$comment_avg->vote_avg}}」
                @endif
                @endforeach
            </h1>
        
        
        </div> 
        
        <div class='review_delete'>
            <form action='/reviews/{{$review->id}}' 
                  id='form_{{$review->id}}' 
                  method='post' 
                  style='display:inline'>
                @csrf
                @method("DELETE")
                <button type='submit' class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 cursor-pointer transition-all duration-300">投稿削除</button>
            <!----rounded meとはボタンの外枠が丸みを帯びる-->
            </form>
        </div>
        
        <div class='go_to_edit'>
            <p class="text-blue-400">
            <a href='/reviews/{{$review->id}}/edit' class="hover:text-blue-800 transitiona-all duration-300">レビューを編集する</a>
            </p>
        </div>
        
        <div class='go_to_commentcreate'>
            <p class="text-blue-400">
            <a href='/comments/{{$review->id}}/create' class="hover:text-blue-800 transition-all duration-300">レビューに対してコメントする</a>
            </p>
        </div>
        
        <div class='reviewscomment' >
            <h1 class="text-2xl">Review Comments</h1>
            @foreach($comments as $comment)
            <div class='box-border h-50 w-50 p-2 border-4'>
                @if($comment->review_id===$review->id)
                <p class="text-1xl">Comment User</p>
                <p class="text-1xl">「{{$comment->user->name}}」</p>
                <p class="text-1xl">
                    Comment
                </p>
                <p class="text-1xl">
                    「{{$comment->body}}」
                </p>
                <p class="text-1xl">
                    レビューへの評価＝「{{$comment->votes}}」
                </p>
                <p class="text-blue-400">
                <a href='/comments/{{$review->id}}/{{$comment->id}}/edit' class="hover:text-blue-800 transition-all duration-300">コメントを編集する</a>
                </p>
                @endif
            </div>
            @endforeach
        <div class='paginate'>
            {{$comments->links()}}
        </div>

        <div class='back_to_reviews'>
            <p class="text-blue-400">
            <a href='/' class="hover:text-blue-800 transition-all duration-300">レビューに戻る</a>
            </p>
        </div>
   
</x-app-layout>