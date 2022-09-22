@extends('layouts.app')
@section('head')
<title>Office Regist Page</title>
@endsection
@section('content')

        <h1>Office Regist</h1>
        <form action="/offices/{{$office->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method("PUT")
            <div class='attention'>
                <h2>事務所編集ページ</h2>
            </div>
            
            <div class='name'>
                <h2>芸能事務所名</h2>
                <input type='text' name='offices[name]' placeholder='事務所名' value='{{$office->name}}'/>
              <p class="name__error" style="color:red">{{ $errors->first('offices.name') }}</p>
            </div>
    
            <div class='anker'>
                <h2>Link(Wikipedia推奨)</h2>
                <textarea name='combinations[anker]' placeholder='https~' value='{{$office->anker}}'></textarea>
            </div>
            
            <input type='submit' value='再登録'/>
        </form>
        
        <div class='office_delete'>
            <form action='/offices/{{$office->id}}' 
                  id='form_{{$office->id}}' 
                  method='post' 
                  style='display:inline'>
                @csrf
                @method("DELETE")
                <button type='submit'>登録削除</button>
            </form>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='back_to_offices'>
            <a href='/office'>芸能事務所一覧</a>
        </div>

@endsection