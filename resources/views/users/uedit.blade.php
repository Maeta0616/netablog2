<x-app-layout>
 <x-slot name="header">
        <h1>User Edit Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'> 
        <h1 class="text-3xl font-bold">ユーザー編集ページ</h1>
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method('PUT')
            <!----メソッドをPUTとした--->
        
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>            
            <div class="mb-6">
                <label for="default-input" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-300">名前</label>
                <input type="text" name='users[name]' value='{{$user->name}}' placeholder="(例)山田太郎"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p class="text-red-500" style="color:red">{{ $errors->first('users.title') }}</p>
            </div>
        
            <div class='user_age'>
                <label for="votes_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">年齢</label>
                <select name='users[age]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value='10'>１０代</option>
                <option value='20'>２０代</option>
                <option value='30'>３０代</option>
                <option value='40'>４０代</option>
        　　　　    <option value='50'>５０代</option>
                </select>
            </div>
        
            
        
            <div class='user_sex'>
                <label for="votes_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">性別</label>
                <select name='users[sex]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value='男性'>男性</option>
                <option value='女性'>女性</option>
                </select>
            </div>
            
            <div class='user_combination'>
             <label for="default-input" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-300">お気に入り芸人</label>
                <input type="text" name='users[combination]' value='{{$user->combination}}' placeholder="(例)銀シャリ"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p class="text-red-500" style="color:red">{{ $errors->first('users.combination') }}</p>
            </div>
            
            <div class='user_twitter'>
             <label for="default-input" class="text-2xl block mb-2 font-bold text-gray-900 dark:text-gray-300">Twitter</label>
             <p class="text-1xl">Twitterの自分のアカウントを載せみよう（空欄可）</p>
             <p class="text-red-500">個人情報の取扱にはご注意ください</p>
                <input type="text" name='users[twitter]' value='{{$user->twitter}}' placeholder="https://twitter.com/qmggjiggrk1mw7e"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p class="text-red-500" style="color:red">{{ $errors->first('users.twitter') }}</p>
            </div>
            
            <br>
            <input type='submit' value='再登録' class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 transition-all duration-300"/>
        </div>
        </form>
        
        <div class='back_to_users'>
            <a href='/users/{{$user->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                ユーザー詳細画面に戻る</a>
        </div>
    </div>
</x-app-layout>