<x-app-layout>
     <x-slot name="header">
        <h1>ReviewComment Edit Page</h1> 
    </x-slot>

        <h1 class="text-3xl">レビューコメント編集ページ</h1>
        
        <form action="/comments/{{$comment->id}}" method="POST">
            @csrf
            @method('PUT')
            
        <div class='body'>
            <h1 class="text-2xl">Comment</h1>
            <textarea name='reviewcomments[body]' placeholder='Body' value='{{$comment->body}}'>{{$comment->body}}</textarea>
            <p class='body_error' style='coler:red'>{{$errors->first('reviewcomment.body')}}</p>
        </div>
        
         <div class='review_id'>
            <h1>Target Review</h1>
            <select name='reviewcomments[review_id]'>
                <option value={{$review->id}}>{{$review->title}}</option>
            </select>
            <p class="review_id_error" style="color:red">{{ $errors->first('reviewcomments.review_id') }}</p>
        </div>
        
        <div class='votes'>
            <h1 class="text-2xl">Rates to the review</h1>
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
        <br>
        <div class='submit'>
            <input type='submit' value='再投稿' class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 transition-all duration-300 cursor-pointer"/>
        </div>
        </form>
        <br>
        <div class='delete_comments'>
        <form action="/comments/{{$review->id}}/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 transition-all duration-300">
            投稿削除
            </button> 
        </form>　　
        </div>
        <br>
        <div class='back_to_reviews'>
            <a href='/reviews/{{$review->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                レビュー詳細画面に戻る</a>
        </div>

</x-app-layout>
    