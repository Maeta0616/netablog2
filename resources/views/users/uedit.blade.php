@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('head')
<title>User Edit Page</title>
@endsection
@section('content')

        <h1>User Edit</h1>
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method('PUT')
            <!----メソッドをPUTとした--->
            <div class='user_name' >
                <h2>名前</h2>
                <input type='text' name='users[name]' value='{{$user->name}}'/>
            </div>
        
            <div class='user_age'>
                <h2>年齢</h2>
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
                <h2>性別</h2>
                <select name='users[sex]'>
                <option value='{{$user->sex}}'>{{$user->sex}}性</option>
                <option value='男性'>男性</option>
                <option value='女性'>女性</option>
                </select>
            </div>
        
            <div class='user_neta'>
            <h2>お気に入りネタ</h2>
            <input 
            type='text' 
            name='users[neta]' 
            placeholder='ネタ名（コメディ名）' 
            value='{{$user->neta}}'/>
            </div>
            <br>
             <input type='submit' value='再登録'/>
        </form>
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='back_to_users'>
            <a href='/users/{{$user->id}}'>ユーザー詳細画面に戻る</a>
        </div>

@endsection