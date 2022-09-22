@extends('layouts.app')
@section('head')
<title>Neta Regist Page</title>
@endsection
@section('content')
        
        <h1>Neta Regist</h1>
        <form action="/netas" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='attention'>
                <h2>新規ネタ追加ページ</h2>
                <p>目的のお笑いコンビ(トリオ)が見つからない場合、「新規お笑いコンビ(トリオ)登録」から登録してください</p>
            </div>
            
            <div class='name'>
                <h2>ネタ名</h2>
                <input type='text' name='netas[name]' placeholder='ネタ名' value='{{old('netas.name')}}'/>
              <p class="title__error" style="color:red">{{ $errors->first('netas.name') }}</p>
            </div>
            
            <div class='combination'>
                <h2>コンビ名</h2>
                <select name='netas[combination_id]'>
                    @foreach($combinations as $combination)
                    <option value='{{$combination->id}}'>{{$combination->name}}</option>
                    @endforeach
                </select>
            <p class="combination__error" style="color:red">{{ $errors->first('netas.combination_id')}}</p>
            </div>
            
            <div class'genre'>
                <h2>ジャンル</h2>
                <select name='netas[genre_id]'>
                    @foreach($genres as $genre)
                    <option value='{{$genre->id}}'>{{$genre->name}}</option>
                    @endforeach
                </select>
            <p class='genre_error' style='coler:red'>{{$errors->first('netas.genre_id')}}</p>    
            </div>
            
            <div class='overview'>
                <h2>ネタ内容</h2>
                <textarea name='netas[overview]' placeholder='ネタ内容'>{{old('netas[overview]')}}</textarea>
                <p class='overview_error'style='coler:red'>{{$errors->first('netas.overview')}}</p>
            </div>
            
            <div class='anker'>
                <h2>Link(Youtube推奨)</h2>
                <textarea name='netas[anker]' placeholder='https~'></textarea>
            </div>
            
            <input type='submit' value='登録'/>
        </form>
        
        <div class='go_to_ccreate'>
            <a href='/combinations/ccreate'>新規お笑いコンビ(トリオ)登録</a>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
    
        <div class='back_to_reviews'>
            <a href='/neta'>ネタ検索</a>
        </div>
@endsection
   
    