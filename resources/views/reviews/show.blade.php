<x-app-layout>

        <h1>Review Show Page</h1>
        <div class='review'>
            <h1 class='review_title'>
                Review Title
                「{{$review->title}}」
            </h1>
            
            <h2 class='review_neta'>
                Target Script
                「{{$review->neta->name}}」
            </h2>
            
            <h3 class='review_combination'>
                Comedian
                「{{$review->neta->combination->name}}」
            </h3>
            
            <h4 class='review_genre'>
                Genre
                「{{$review->neta->genre->name}}」
            </h4>
            
            <h5 class='review_body'>
                Review Body
                「{{$review->body}}」
            </h5>
            
            <h5 class='review_user'>
                User
                「{{$review->user->name}}」
            </h5>
            
            <h5 class='review_votes'>
                Rates to the neta＝
                「{{$review->votes}}」
            </h5>
            
            <h5 class='rate_from_comment'>
                Rate from Comments＝
                @foreach($comments_avgs as $comment_avg)
                @if($comment_avg->review_id===$review->id)
                「{{$comment_avg->vote_avg}}」
                @endif
                @endforeach
            </h5>
        
        
        </div> 
        
        <div class='review_delete'>
            <form action='/reviews/{{$review->id}}' 
                  id='form_{{$review->id}}' 
                  method='post' 
                  style='display:inline'>
                @csrf
                @method("DELETE")
                <button type='submit'>投稿削除</button>
            </form>
        </div>
        
        <div class='go_to_edit'>
            <a href='/reviews/{{$review->id}}/edit'>レビューを編集する</a>
        </div>
        
        <div class='reviewscomment' >
            <h1>Review Comments</h1>
            @foreach($comments as $comment)
            <div class='reviewcomment'>
                @if($comment->review_id===$review->id)
                <p>コメントユーザー</p>
                <p class='user'>「{{$comment->user->name}}」</p>

                <p2 class='body'>
                    コメント「{{$comment->body}}」
                </p2>
                <br>
                <p1 class='votes'>
                    レビューへの評価＝「{{$comment->votes}}」
                </p1>
                <br>
                <p1 class='go_to_edit'>
                <a href='/comments/{{$review->id}}/{{$comment->id}}/edit'>コメントを編集する</a>
                </p1>
                <br>
                @endif
            </div>
            @endforeach
        <br>
        
        <div class='paginate'>
            {{$comments->links()}}
        </div>
        
        <div class='go_to_commentcreate'>
            <p>
            <a href='/comments/{{$review->id}}/create'>レビューに対してコメントする!</a>
            </p>
        </div>
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
   
</x-app-layout>