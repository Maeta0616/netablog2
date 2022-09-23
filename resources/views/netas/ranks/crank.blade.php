<x-app-layout>
 <x-slot name="header">
        　Conte Ranking 
    </x-slot>
        <h1>コントランキング</h1>
        
        <div class='mranks' >
            @foreach($ranks as $rank)
            <h2>{{$loop->index+1}}位</h2>
            <div class='mrank'>
                <h2 class='neta_mrank'>
                @foreach($netas as $neta)
                @if($neta->id===$rank->neta_id)
                <a href='/netas/{{$neta->id}}'>{{$neta->name}}</a>
                ({{$neta->combination->name}})
                評価{{$rank->votes_avg}}
                @endif
                @endforeach
                </h2>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$ranks->links()}}
        </div>
        
        <div class='back_to_rank'>
            <a href='/neta/rank'>コント・漫才ランキングに戻る</a>
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
        <div class='mrank'>
　　　　    <a href='/neta/mrank'>漫才ランキング</a>
　　　　</div>
        
</x-app-layout>