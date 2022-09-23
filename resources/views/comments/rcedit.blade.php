<x-app-layout>
     <x-slot name="header">
        　ReviewComment Edit Page 
    </x-slot>

        <h1>ReviewComment Edit Page </h1>
        <form action="/comments/{{$comment->id}}" method="POST">
            @csrf
            @method('PUT')
        <!--<div class='title'>-->
        <!--    <h2>Comment Title</h2>-->
        <!--    <input type='text' name='reviewcomments[title]' placeholder='Title' value='$comment->title'/>-->
        <!--    <p class='title_error' style='coler:red'>$errors->first reviewcomments.title </p>-->
        <!--</div>-->
        
        <div class='body'>
            <h2>Comment </h2>
            <textarea name='reviewcomments[body]' placeholder='Body' value='{{$comment->body}}'>{{$comment->body}}</textarea>
            <p class='body_error' style='coler:red'>{{$errors->first('reviewcomment.body')}}</p>
        </div>
        
         <div class='review_id'>
            <h2>Target Review</h2>
            <select name='reviewcomments[review_id]'>
                <option value={{$review->id}}>{{$review->title}}</option>
            </select>
            <p class="review_id_error" style="color:red">{{ $errors->first('reviewcomments.review_id') }}</p>
        </div>
        
        <div class='votes'>
            <h2>Review's Rates</h2>
                <select name='reviewcomments[votes]'>
                    <option value=''>--please choose an option</option>
                    <option value=1>☆</option>
                    <option value=2>☆☆</option>
                    <option value=3>☆☆☆</option>
                    <option value=4>☆☆☆☆</option> 
                    <option value=5>☆☆☆☆☆</option>
                </select>
                <p class="votes__error" style="color:red">{{ $errors->first('reviewcomments.votes') }}</p>
        </div>
        
        <div class='submit'>
            <input type='submit' value='再投稿'/>
        </div>
        </form>
        
        <div class='delete_comments'>
        <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">投稿削除</button> 
        </form>　　
        </div>
        
        <div class='back_to_reviews'>
            <a href='/reviews/{{$review->id}}'>レビュー詳細画面に戻る</a>
        </div>

</x-app-layout>
    