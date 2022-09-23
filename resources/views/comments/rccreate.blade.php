<x-app-layout>
 <x-slot name="header">
        　ReviewComment Create Page
    </x-slot>
        <h1>ReviewComment Create Page </h1>
        <form action="/comments/{{$review->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
        
        <div class='body'>
            <h2>Comment </h2>
            <textarea name='reviewcomments[body]' placeholder='Body' value='{{old('reviewcomments.body')}}'></textarea>
            <p class='body_error' style='coler:red'>{{$errors->first('reviewcomment.body')}}</p>
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
        
        <div class='review_id'>
            <h2>Target Review</h2>
            <select name='reviewcomments[review_id]'>
                <option value={{$review->id}}>{{$review->title}}</option>
            </select>
            <p class="review_id_error" style="color:red">{{ $errors->first('reviewcomments.review_id') }}</p>
            
        </div>
        
        <div class='submit'>
            <input type='submit' value='投稿'/>
        </div>
        
        </form>
        <div class='review'>
            <h2 class='review_title'>
                Review's Title
                「{{$review->title}}」
            </h2>
            
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
                Body
                「{{$review->body}}」
            </h5>
            
            <h5 class='review_user'>
                User
                「{{$review->user->name}}」
            </h5>
        </div> 
        <div class='back_to_reviews'>
            <a href='/reviews/{{$review->id}}'>レビュー詳細に戻る</a>
        </div>
</x-app-layout>
    