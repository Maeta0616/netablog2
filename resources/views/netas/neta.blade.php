@extends('layouts.app')
@section('head')
<title>Neta Script</title>
@endsection
@section('content')

        <h1>ネタ検索(コント・漫才)</h1>
        
        <div class='search_neta'>
            <p>探したいネタもしくは芸人を入力してください</p>
            <form action='/neta' method='GET'>
                <input type='text' name='keyword' placeholder='ネタorユニットor芸人'>
                <input type='submit' value='検索'>
            </form>
        </div>
        <br>
        <div class='netas' >
            @foreach($netas as $neta)
            <div class='neta'>
                <div class='go_to_nedit'>
                <h2 class='title'>
                    <a href='/netas/{{$neta->id}}'>{{$neta->name}}</a>
                </h2>
                </div>
                <p class='genre'>{{$neta->genre->name}}</p>
                <p class='combination'>{{$neta->combination->name}}</p>
                <p class='office'>{{$neta->combination->office->name}}</p>
                <p class='overview'>{{$neta->overview}}</p>
                <p class='votes'>{{$neta->votes}}</p>
                <p class='link'>
                    <a href='{{$neta->anker}}'>ネタ動画(Youtube)</a>
                    </p>
                <p class='createtime'>{{$neta->created_at}}</p>
                <p class='upldatetime'>{{$neta->updated_at}}</p>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$netas->links()}}
        </div>
        
        <div class='footer'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='go_to_nceate'>
            <a href='/netas/ncreate'>新規ネタ作成</a>
        </div>
        
        <div class='go_to_create'>
            <a href='/reviews/create'>レビュー作成</a>
        </div>
        
@endsection
    