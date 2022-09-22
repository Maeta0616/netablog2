@extends('layouts.app')
@section('head')
<title>Review Edit Page</title>
@endsection
@section('content')
        <h1>Review Edit</h1>
        <form action="/reviews/{{$review->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method('PUT')
            <!----メソッドをPUTとした--->
            <div class='attention'>
                <h2>新規ネタレビューはネタ登録してから再投稿してください</h2>
            
            </div>
            <div class='neta'>
                <h2>ネタ</h2>
                <select name='reviews[neta_id]'>
                    @foreach($netas as $neta)
                    <option value='{{$neta->id}}'>{{$neta->name}}（{{$neta->combination->name}}）</option>
                    @endforeach
                </select>
                <p class="neta__error" style="color:red">{{ $errors->first('reviews.neta_id') }}</p>
            </div>
            
            <div class='title'>
                <h2>Review's title</h2>
                <input type='text' name='reviews[title]' placeholder='Title' value='{{$review->title}}'/>
              <p class="title__error" style="color:red">{{ $errors->first('reviews.title') }}</p>
            </div>
            
            <div class='body'>
                <h2>Review's body</h2>
                <textarea name='reviews[body]' value='{{$review->body}}'>{{old('reviews.body')}}</textarea> 
            <p class="body__error" style="color:red">{{ $errors->first('reviews.body')}}</p>
            </div>
            
            <div class='rates'>
                <h2>Neta's rates</h2>
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
            
            <input type='submit' value='再投稿'/>
        </form>
        <div class='back_to_reviews_show'>
            <a href='/reviews/{{$review->id}}'>レビュー詳細に戻る</a>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
@endsection