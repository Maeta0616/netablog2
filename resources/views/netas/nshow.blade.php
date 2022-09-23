<x-app-layout>
     <x-slot name="header">
        　Neta Show Page 
    </x-slot>
        <h1>Neta Show Page</h1>
        <div class='neta'>
            <p>ネタ名</p>
            <h2 class='title'>
                「{{$neta->name}}」
            </h2>
            <p>コンビ名(トリオ名)</p>
            <h2 class='combination'>
                「{{$neta->combination->name}}」
            </h3>
            <p>ジャンル</p>
            <h4 class='genre'>
                「{{$neta->genre->name}}」
            </h4>
            <p>内容</p>
            <h4 class='overview'>
            「{{$neta->overview}}」
            </h4>
            <p>更新日時</p>
            <p class='updated_at'>
              「{{$neta->updated_at}}」
            </p>
            <p>評価平均</p>
            <p class='votes'>
            @foreach($reviews as $review)
            @if($neta->id===$review->neta_id)
            「{{$review->votes_avg}}」
            @endif
            @endforeach
            </p>
        </div>
        <div class='go_to_nedit'>
            <a href='/netas/{{$neta->id}}/nedit'>ネタ編集</a>
        </div>
        
        
        <div class='back_to_netas'>
            <a href='/neta'>ネタ検索に戻る</a>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/'>レビューへ戻る</a>
        </div>
        
        
    </body>
</html>
</x-app-layout>
    