<x-app-layout>
     <x-slot name="header">
        <h1>Office Edit Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'> 
        <h1 class="text-3xl font-bold">事務所編集ページ</h1>
        <form action="/offices/{{$office->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method("PUT")
            
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>
            <div class="office_name">
                <div class="mb-6">
                    <label for="default-input" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-300">芸能事務所</label>
                    <input type="text" name='offices[name]' value="{{$office->name}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/ p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p class="text-red-500" style="color:red">{{ $errors->first('offices.name') }}</p>
                </div>
            </div>
    
             <div class='offices_anker'>
                <label for="message" class="text-2xl block mb-2 font-bold text-gray-900 dark:text-gray-400">Link(Wikipedia推奨)</label>
                <textarea name="offices[anker]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='WikipediaのURIを貼り付けてみよう！'></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('offices.anker')}}</p>
            </div>
            
            <input type='submit' value='再登録' class="px-4 py-1 text-white rounded-md bg-blue-600 hover:bg-blue-800 transition-all duration-300 cursor-pointer"/>
        </form>
        <br>
        <br>
            <div class='office_delete'>
                <form action='/offices/{{$office->id}}' id='form_{{$office->id}}' method='post' style='display:inline'>
                    @csrf
                    @method("DELETE")
                    <button type='submit' class="px-4 py-1 text-white bg-blue-600 rounded-md hover:bg-blue-800 transition-all duration-300 cursor-pointer">
                        登録削除</button>
                </form>
            </div>
        </div>

        <div class='back_to_offices'>
            <a href='/office' class="text-blue-400 hover:text-blue-600 transition-all duration-300">芸能事務所一覧</a>
        </div>
    </div>
</x-app-layout>