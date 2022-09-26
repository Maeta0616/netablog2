<x-app-layout>
 <x-slot name="header">
        <h1>User Edit Page</h1> 
    </x-slot>
        <h1 class="text-3xl">ユーザー編集ページ</h1>
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method('PUT')
            <!----メソッドをPUTとした--->
            <div class='user_name' >
                <h1 class="text-2xl">名前</h1>
                <input type='text' name='users[name]' value='{{$user->name}}'/>
            </div>
        
            <div class='user_age'>
                <h1 class="text-2xl">年齢</h1>
                <select name='users[age]'>
                <option value='{{$user->age}}'>{{$user->age}}代</option>
                <option value='10'>１０代</option>
                <option value='20'>２０代</option>
                <option value='30'>３０代</option>
                <option value='40'>４０代</option>
        　　　　    <option value='50'>５０代</option>
                </select>
            </div>
        
            <div class='user_sex'>
                <h1 class="text-2xl">性別</h2>
                <select name='users[sex]'>
                <option value='{{$user->sex}}'>{{$user->sex}}性</option>
                <option value='男性'>男性</option>
                <option value='女性'>女性</option>
                </select>
            </div>
        
            <div class='user_combination'>
            <h1 class="text-2xl">お気に入り芸人</h1>
            <select name="users[combination_id]" >
                @foreach($combinations as $combination)
                <option value='{{$combination->id}}'>{{$combination->name}}</option>
                @endforeach
            </select>
            <p class="text-red-500" style="color:red">{{ $errors->first('users.combination_id') }}</p>
            </div>
             <input type='submit' value='再登録' class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 transition-all duration-300"/>
        </form>
    
        <div class='back_to_users'>
            <a href='/users/{{$user->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                ユーザー詳細画面に戻る</a>
        </div>

</x-app-layout>