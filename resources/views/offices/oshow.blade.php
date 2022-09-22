@extends('layouts.app')
@section('head')
<title>Office Show</title>
@endsection
@section('content')
        <h1>事務所詳細ページ</h1>
        <div class='offices' >
            <h2 class='name'>{{$offices->name}}</h2>
            <h4 class='comedian'>
                所属お笑いコンビ(トリオ)一覧
                <br>
                 @foreach($combinations as $combination)
                 @if($offices->id===$combination->office_id)
                 <a href='/combinations/{{$combination->id}}'>{{$combination->name}}
                 <br>
                 @endif
                 @endforeach
            </h4>
            <a href='{{$offices->anker}}'>事務所詳細</a>
        </div>
        <br>
        <div class='go_to_oedit'>
            <a href='/offices/{{$offices->id}}/oedit'>編集する</a>
        </div>
        <br>
        
        <div class='back_to_offices'>
            <a href='/office'>事務所一覧へ戻る</a>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='go_to_oceate'>
            <a href='/offices/ocreate'>新規芸能事務所登録</a>
        </div>

@endsection