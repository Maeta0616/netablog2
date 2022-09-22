@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('head')
<title>User Show Page</title>
@endsection
@section('content')

        <h1>User Show</h1>
        <div class='user' >
        <p class='name'>
            名前：{{$user->name}}
        
        </p>
        <p class='age'>
            年齢：{{$user->age}}代
        </p>
        
        <p class='sex'>
            性別：{{$user->sex}}
        </p>

        <p class='neta'>
        お気に入りネタ：{{$user->neta}}</a>
        </p>
        </div>
        
        <div class='go_to_uedit'>
            <a href='/users/{{$user->id}}/uedit'>編集する</a>
        </div>
        <div class='back_to_review'>
            <a href='/'>レビューに戻る</a>
        </div>
        
@endsection