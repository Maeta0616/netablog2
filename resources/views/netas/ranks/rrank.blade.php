<x-app-layout>
     <x-slot name="header">
        <h1>Review Ranking</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl font-bold">コント・漫才（レビュー数ランキング）</h1>
        <p class="text-sm">
            (このランキングは、レビューによるネタ評価によって順位が付けられています)
        </p>
        <div class='md:flex md:space-x-12 text-2xl text-blue-400 box-border border-4'>
            <p>
            <a href='/neta/rank' class="hover:text-blue-600 transition-all duration-300">
            ・コント・漫才ランキング</a>
            </p>
            <p>
            <a href='/neta/mrank' class="hover:text-blue-600 transition-all duration-300">
            ・漫才ランキング</a>
            </p>
            <p>
            <a href='/neta/crank' class="hover:text-blue-600 transition-all duration-300">
            ・コントランキング</a>
            </p>
            <p>
            <a href='/neta/prank' class="hover:text-blue-600 transition-all duration-300">
            ・ピンランキング</a>
            </p>
        </div>
        <div class='rranks' >
            @foreach($ranks as $rank)
            <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-3xl'>
                {{$loop->index+1}}位
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
    </div>
</x-app-layout>
    