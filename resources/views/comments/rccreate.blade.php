<x-app-layout>
 <x-slot name="header">
        <h1>ReviewComment Create Page</h1>
    </x-slot>
    <div class="mx-6 my-4 py-2 px-3">
        <h1 class="text-3xl font-bold">
            レビューコメント作成ページ
        </h1>
        <form action="/comments/{{$review->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
    <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>   
        <div class='body'>
                <label for="message" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">コメント</label>
                <textarea name="reviewcomments[body]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="レビューに対するコメントを書いてみよう!"></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('reviewcomments.body')}}</p>
        </div>
        
        <div class='rates'>
                <label for="votes_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">レビューへの評価</label>
                <select name='reviewcomments[votes]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a rate</option>
                    <option value='1'>☆</option>
                    <option value='2'>☆☆</option>
                    <option value='3'>☆☆☆</option>
                    <option value='4'>☆☆☆☆</option> 
                    <option value='5'>☆☆☆☆☆</option>
                </select>
                <p class="votes__error" style="color:red">{{ $errors->first('reviewcomments.votes') }}</p>
            </div>
        
        <div class='review_id'>
            <label class="text-2xl block mb-2 font-bold text-gray-900 dark:text-gray-400">Target Review</label>
            <select name='reviewcomments[review_id]'
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value={{$review->id}}>{{$review->title}}</option>
            </select>
            <p class="text-red-500" style="color:red">{{ $errors->first('reviewcomments.review_id') }}</p>
        </div>
        
        <div class='submit'>
            <input type='submit' value='投稿' class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 transition-all duration-300"/>
        </div>
        </form>
        <div class='text-1xl'>
            <h1 class='review_title'>
                Review Title
                「{{$review->title}}」
            </h1>
            
            <h1 class='review_neta'>
                Neta
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
                Impression
                <br>
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
    </div>
    </div>
</x-app-layout>
    