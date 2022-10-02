<x-app-layout>
     <x-slot name="header">
        　<h1>Review Show Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'> 
        <h1 class="text-3xl font-bold">レビュー詳細ページ</h1>
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>        
                <h1 class='text-2xl'>
                Review title
                <br>
                「{{$review->title}}」
                </h1>
            
                <h1 class='text-2xl'>
                Neta
                <br>
                <a href="/netas/{{$review->neta->id}}" class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                    「{{$review->neta->name}}」
                </a>
                </h1>
            
                <h1 class='text-2xl'>
                Comedian
                <br>
                「{{$review->neta->combination->name}}」
                </h1>
            
                <h1 class='text-2xl'>
                Genre
                <br>
                「{{$review->neta->genre->name}}」
                </h1>
            
                <h1 class='text-2xl'>
                Impression
                <br>
                「{{$review->body}}」
                </h1>
            
                <h1 class='text-2xl'>
                User
                <br>
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
        </div>
            <div class='go_to_edit'>
                <a href='/reviews/{{$review->id}}/edit' class="text-2xl text-blue-400 hover:text-blue-800 transitiona-all duration-300">
                    レビュー編集ページ
                </a>
            </div>
        
        <div class='reviewscomment' >
            <h1 class="text-4xl font-bold">Review Comments</h1>
            <div class='go_to_commentcreate'>
                    <a href='/comments/{{$review->id}}/create' class="text-2xl text-blue-400 hover:text-blue-800 transition-all duration-300">
                    レビューに対してコメントする
                    </a>
            </div>
            @foreach($comments as $comment)
            <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-1xl'>        
                @if($comment->review_id===$review->id)
                <div class="md:flex md:space-x-8">
                    ・Comment User
                    <br>
                    「{{$comment->user->name}}」
                    <br>
                    ・Comment
                    <br>
                    「{{$comment->body}}」
                    <br>
                    ・レビューへの評価＝「{{$comment->votes}}」
                </div>
                <a href='/comments/{{$review->id}}/{{$comment->id}}/edit' class="text-blue-400 hover:text-blue-800 transition-all duration-300">コメントを編集する</a>
                @endif
            </div>
            @endforeach
        <div class='paginate'>
            {{$comments->links()}}
        </div>

        <div class='back_to_reviews'>
            <a href='/' class="text-blue-400 hover:text-blue-800 transition-all duration-300">レビューに戻る</a>
        </div>
   
</x-app-layout>