<x-app-layout>
     <x-slot name="header">
        <h1>Neta Show Page</h1>
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl">ネタ詳細ページ</h1>
        <div class='md:space-x-12 bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>
            ネタ名
            <br>
            「{{$neta->name}}」
            <br>
            コンビ名(トリオ名)
            <br>
            「{{$neta->combination->name}}」
            <br>
            ジャンル
            <br>
            「{{$neta->genre->name}}」
            <br>
            内容
            <br>
            「{{$neta->overview}}」
            <br>
            ネタ動画(Youtube)
            <p class="text-ellipsis overflow-hidden ... text-sm text-blue-400">
                <a href='{{$neta->anker}}' class="hover:text-blue-600 transition-all duration-300">
                    「{{$neta->anker}}」</a>
            </p>
            <p class="text-red-500 text-sm">
                (リンク先がYoutubeではない場合注意してください)
            </p>
            更新日時
            <br>
              「{{$neta->updated_at}}」
            <br>
            評価平均
            <br>
            @foreach($reviews as $review)
            @if($neta->id===$review->neta_id)
            「{{$review->votes_avg}}」
            @endif
            @endforeach
        </div>
        
        <div class='back_to_netas'>
        <a href='/netas/{{$neta->id}}/nedit' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
            ネタを編集する</a>
        <br>
        <a href='/neta' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
            ネタ検索に戻る</a>
        </div>
    </div>
</x-app-layout>
    