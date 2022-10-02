<x-app-layout>
     <x-slot name="header">
        　<h1>Pin Ranking</h1> 

    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl font-bold">コントランキング</h1>
        <p class="text-sm">
            (このランキングは、レビューによるネタ評価によって順位が付けられています)
        </p>
        <div class="md:flex justify-between mx-auto container items-center bg-gray-100 shadow-lg rounded-md my-10 box-border p-10 max-w-full text-2xl">
            <p>
            <a href='/neta/rank' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
            ・コント・漫才ランキング</a>
            </p>
            <p>
            <a href='/neta/mrank' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
            ・漫才ランキング</a>
            </p>
            <p>
            <a href='/neta/crank' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
            ・コントランキング</a>
            </p>
            <p>
            <a href='/neta/rrank' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
            ・レビュー数ランキング</a>
            </p>
        </div>
        <div class='cranks'>
            @foreach($ranks as $rank)
            <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-3xl'>
                {{$loop->index+1}}位
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
    </div>    
</x-app-layout>