<x-app-layout>
     <x-slot name="header">
          <h1>Neta Search</h1>
    </x-slot>
        <h1 class="text-3xl">ネタ検索(コント・漫才)ページ</h1>
        
        <div class='search_neta'>
            <p class="text-red-500">探したいネタもしくは芸人を入力してください</p>
            <form action='/neta' method='GET'>
                <input type='text' name='keyword' placeholder='ネタorユニットor芸人'>
                <input type='submit' value='検索' class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 transiton-all duration-300 cursor-pointer">
            </form>
        </div>
        <br>
        <div class='netas' >
            @foreach($netas as $neta)
            <div class='box-border h-50 w-50 p-2 border-4'>
                <div class='text-2xl'>
                    ネタ
                    <p class="text-blue-400">
                    <a href='/netas/{{$neta->id}}' class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->name}}」</a>
                    </p>
                    ジャンル
                    <p class="text-blue-400">
                    <a href="" class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->genre->name}}」</a>
                    </p>
                    芸人
                    <p class="text-blue-400">
                    <a href="/combinations/{{$neta->combination->id}}" class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->combination->name}}」</a>
                    </p>
                    芸能事務所
                    <p class="text-blue-400">
                    <a href="/offices/{{$neta->combination->office->id}}" class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->combination->office->name}}」</a>
                    </p>
                    内容
                    <p class='overview'>「{{$neta->overview}}」</p>
                    評価
                    <p>
                    @foreach($reviews as $review)
                    @if($neta->id===$review->neta_id)
                    「{{$review->votes_avg}}」
                    @endif
                    @endforeach
                    </P>
                    ネタ動画(Youtube)
                </div>
                <div class="text-1xl">
                    <p class='text-blue-400'>
                    <a href='{{$neta->anker}}' class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->anker}}」</a>
                    <p class="text-red-500">
                        (リンク先がYoutubeではない場合注意してください)
                    </p>
                    <p class='createtime'>{{$neta->created_at}}</p>
                    <p class='upldatetime'>{{$neta->updated_at}}</p>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$netas->links()}}
        </div>
</x-app-layout>