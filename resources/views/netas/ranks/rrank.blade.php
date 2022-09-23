<x-app-layout>

        <h1>コント・漫才（レビュー数ランキング）</h1>
        
        <div class='ranks' >
            @foreach($ranks as $rank)
            <h2>{{$loop->index+1}}位</h2>
            <div class='rank'>
                
                @foreach($netas as $neta)
                @if($rank->neta_id===$neta->id)
                <h2 class='neta_rank'>
                <a href='/netas/{{$neta->id}}'>{{$neta->name}}</a>
                ({{$neta->combination->name}})
                <br>
                レビュー数「{{$rank->count_id}}」
                </h2>
                <h5>評価{{$rank->votes_avg}}</h5>
                @endif
                @endforeach
            </div>
            @endforeach
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
        <div class='back_to_rank'>
            <a href='/neta/rank'>コント・漫才ランキングに戻る</a>
        </div>
        <div class='mrank'>
　　　　    <a href='/neta/mrank'>漫才ランキング</a>
　　　　</div>
　　　　<div class='crank'>
　　　　    <a href='/neta/crank'>コントランキング</a>
　　　　</div>
</x-app-layout>
    