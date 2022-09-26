<x-app-layout>
 <x-slot name="header">
        <h1>ReviewComment Create Page</h1>
    </x-slot>
        <h1 class="text-3xl">レビューコメント作成ページ</h1>
        <form action="/comments/{{$review->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
        
        <div class='body'>
            <h1 class="text-2xl">Comment</h1>
            <textarea name='reviewcomments[body]' placeholder='Body' value='{{old('reviewcomments.body')}}'></textarea>
            <p class='text-red-500' style='coler:red'>{{$errors->first('reviewcomment.body')}}</p>
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
                <p class="text-red-500" style="color:red">{{ $errors->first('reviewcomments.votes') }}</p>
        </div>
        
        <div class='review_id'>
            <h1 class="text-2xl">Target Review</h2>
            <select name='reviewcomments[review_id]'>
                <option value={{$review->id}}>{{$review->title}}</option>
            </select>
            <p class="text-red-500" style="color:red">{{ $errors->first('reviewcomments.review_id') }}</p>
        </div>
        
        <div class='submit'>
            <input type='submit' value='投稿' class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 transition-all duration-300"/>
        </div>
        </form>
        <div class='text-2xl'>
            <h1 class='review_title'>
                Review's Title
                「{{$review->title}}」
            </h1>
            
            <h1 class='review_neta'>
                Target Script
                「{{$review->neta->name}}」
            </h1>
            
            <h1 class='review_combination'>
                Comedian
                「{{$review->neta->combination->name}}」
            </h1>
            
            <h1 class='review_genre'>
                Genre
                「{{$review->neta->genre->name}}」
            </h1>
            
            <h1 class='review_body'>
                Body
                「{{$review->body}}」
            </h1>
            
            <h1 class='review_user'>
                User
                「{{$review->user->name}}」
            </h1>
        </div> 
        <div class='back_to_reviews'>
            <a href='/reviews/{{$review->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">レビュー詳細ページに戻る</a>
        </div>
</x-app-layout>
    