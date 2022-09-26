<x-app-layout>
     <x-slot name="header">
        <h1>Review Ranking</h1> 
    </x-slot>
        <h1 class="text-3xl">コント・漫才（レビュー数ランキング）</h1>
         <div class='text-2xl text-blue-400'>
            <p>
            <a href='/neta/rank' class="hover:text-blue-600 transition-all duration-300">
            コント・漫才ランキング</a>
            </p>
            <p>
            <a href='/neta/crank' class="hover:text-blue-600 transition-all duration-300">
            コントランキング</a>
            </P>
            <p>
            <a href='/neta/rrank' class="hover:text-blue-600 transition-all duration-300">
            レビュー数ランキング</a>
            </p>
        </div>
        <div class='rranks' >
            @foreach($ranks as $rank)
            <div class="box-border h-50 w-50 p-2 border-4 text-3xl">{{$loop->index+1}}位
            <div class='text-2xl'>
                @foreach($netas as $neta)
                @if($rank->neta_id===$neta->id)
                <p class='text-blue-400'>
                <a href='/netas/{{$neta->id}}' class="hover:text-blue-600 transiton-all duration-300">
                    {{$neta->name}}</a>
                ({{$neta->combination->name}})
                </p>
                <p>
                レビュー数「{{$rank->count_id}}」
                </p>
                <p>
                評価{{$rank->votes_avg}}
                </p>
                @endif
                @endforeach
            </div>
            </div>
            @endforeach
        </div>
</x-app-layout>
    