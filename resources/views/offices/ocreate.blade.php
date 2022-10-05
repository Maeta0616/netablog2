<x-app-layout>
 <x-slot name="header">
        <h1>Office Regist Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'>   
        <h1 class="text-3xl font-bold">新規事務所登録ページ</h1>
        <form action="/company" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>             
            <div class="office_name">
                <div class="mb-6">
                    <label for="default-input" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-300">芸能事務所</label>
                    <input type="text" name='offices[name]' 
                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p class="text-red-500" style="color:red">{{ $errors->first('offices.name') }}</p>
                </div>
            </div>
    
            <div class='offices_anker'>
                <label for="message" class="text-2xl block mb-2 font-bold text-gray-900 dark:text-gray-400">Link(Wikipedia推奨)</label>
                <textarea name="offices[anker]" rows="2" class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='WikipediaのURIを貼り付けてみよう！'></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('offices.anker')}}</p>
            </div>
            
            <input type='submit' value='登録' class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 transition-all duration-300"/>
        </div>
        </form>
        
        <div class="go_to_office">
            <a href="/company" class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
                芸能事務所一覧ページに戻る
            </a>
        </div>
        
    </div>
</x-app-layout>