<x-app-layout>
     <x-slot name="header">
        　<h1>Conte Ranking</h1> 

    </x-slot>
        <h1 class="text-3xl">コントランキング</h1>
         <div class='text-2xl text-blue-400'>
            <p>
            <a href='/neta/rank' class="hover:text-blue-600 transition-all duration-300">
            コント・漫才ランキング</a>
            </p>
            <p>
            <a href='/neta/mrank' class="hover:text-blue-600 transition-all duration-300">
            漫才ランキング</a>
            </P>
            <p>
            <a href='/neta/rrank' class="hover:text-blue-600 transition-all duration-300">
            レビュー数ランキング</a>
            </p>
        </div>
        <div class='cranks'>
            @foreach($ranks as $rank)
            <div class="box-border h-50 w-50 p-2 border-4 text-3xl">{{$loop->index+1}}位
            <div class='text-2xl'>
                @foreach($netas as $neta)
                @if($neta->id===$rank->neta_id)
                <h1 class="text-blue-400">
                <a href='/netas/{{$neta->id}}' class="hover:text-blue-600 transition-all duration-300">
                    {{$neta->name}}</a>
                ({{$neta->combination->name}})
                </h1>
                <p>
                評価{{$rank->votes_avg}}
                </p>
                <p>
                レビュー数({{$rank->count_id}})
                </p>
                @endif
                @endforeach
            </div>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$ranks->links()}}
        </div>
</x-app-layout>