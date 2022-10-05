<x-app-layout>
     <x-slot name="header">
        　<h1>Review Edit Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'>   
        <h1 class="text-3xl font-bold">レビュー編集ページ</h1>
        <form action="/reviews/{{$review->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method('PUT')
            <!----メソッドをPUTとした--->
            <h2 class="text-sm text-red-500">新規ネタレビューはネタ登録してから再投稿してください</h2>
            
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>            
            <div class='neta'>
                <label for="neta_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">ネタ名</label>
                <select name='reviews[neta_id]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="{{$review->neta_id}}">{{$review->neta->name}}（{{$review->neta->combination->name}}）</option>
                @foreach($netas as $neta)
                    <option value='{{$neta->id}}'>{{$neta->name}}（{{$neta->combination->name}}）</option>
                @endforeach
                </select>
                <p class="text-red-500" style="color:red">{{ $errors->first('reviews.neta_id') }}</p>
            </div>
            
            <div class="mb-6">
                <label for="default-input" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-300">レビュータイトル</label>
                <input type="text" name='reviews[title]' value='{{$review->title}}' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p class="text-red-500" style="color:red">{{ $errors->first('reviews.title') }}</p>
            </div>
            
            <div class='body'>
                <label for="message" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">感想</label>
                <textarea id="message" name="reviews[body]" rows="2" 
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="面白かったところを書いてみよう!!(オチは書かないでね)"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('reviews.body')}}</p>
            </div>
            
            <div class='rates'>
                <label for="votes_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">ネタへの評価</label>
                <select name='reviews[votes]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a rate</option>
                    <option value='1'>☆</option>
                    <option value='2'>☆☆</option>
                    <option value='3'>☆☆☆</option>
                    <option value='4'>☆☆☆☆</option> 
                    <option value='5'>☆☆☆☆☆</option>
                </select>
                <p class="votes__error" style="color:red">{{ $errors->first('reviews.votes') }}</p>
            </div>
            <br>
            <input type='submit' value='再投稿' class="text-white px-4 py-1 bg-blue-600 rounded-md hover:bg-blue-800 cursor-pointer transition-all duration-300"/>
            <br>
            <br>
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
        </form>
        
        
        <div class='back_to_reviews_show'>
            <a href='/reviews/{{$review->id}}' class="text-blue-400 text-2xl hover:text-blue-800 transition-all duration-300">レビュー詳細に戻る</a>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/' class="text-blue-400 text-2xl hover:text-blue-800 transition-all duration-300">レビューに戻る</a>
        </div>
    </div>    
</x-app-layout>