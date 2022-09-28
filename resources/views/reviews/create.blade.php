<x-app-layout>
    <x-slot name="header">
             <h1>Review Create Page</h1>
    </x-slot>
        <h1 class="text-3xl">レビュー作成ページ</h1>
        <form action="/review" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='attention'>
                <h2 class="font-bold text-red-500">新規ネタレビューはネタ登録してから投稿してください</h2>
            </div>
            <div class='neta'>
                <h2 class="text-2xl">ネタ名</h2>
                <select name='reviews[neta_id]'>
                    @foreach($netas as $neta)
                    <option value='{{$neta->id}}'>{{$neta->name}}（{{$neta->combination->name}}）</option>
                    @endforeach
                </select>
                <p class="neta__error" style="color:red">{{ $errors->first('reviews.neta_id') }}</p>
            </div>
            <div class='title'>
                <h2 class="text-2xl">レビュータイトル</h2>
                <input type='text' name='reviews[title]' placeholder='Title' value='{{old('reviews.title')}}'/>
              <p class="title__error" style="color:red">{{ $errors->first('reviews.title') }}</p>
            </div>
            <div class='body'>
                <label for="message" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">感想</label>
                <textarea id="message" name="reviews[body]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="面白かったところを書いてみよう!!(オチは書かないでね)"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('reviews.body')}}</p>
            </div>
            
            <div class='rates'>
                <h2 class="text-2xl">ネタへの評価</h2>
                <select name='reviews[votes]'>
                    <option value=''>--please choose an option</option>
                    <option value='1'>☆</option>
                    <option value='2'>☆☆</option>
                    <option value='3'>☆☆☆</option>
                    <option value='4'>☆☆☆☆</option> 
                    <option value='5'>☆☆☆☆☆</option>
                </select>
                <p class="votes__error" style="color:red">{{ $errors->first('reviews.votes') }}</p>
            </div>
            <br>
            <input type='submit' value='投稿' class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 cursor-pointer transition-all duration-300"/>
        </form>
        <div class='back_to_reviews'>
            <p class="text-blue-400">
            <a href='/' class="hover:text-blue-800 transition-all duration-300">レビューに戻る</a>
            </p>
        </div>
        
</x-app-layout>
    