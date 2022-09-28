<x-app-layout>
     <x-slot name="header">
        <h1>Neta Show Page</h1>
    </x-slot>
        <h1 class="text-3xl text-red-500">ネタ詳細ページ</h1>
        <div class='text-2xl box-border h-50 w-50 p-2 border-4'>
            <h1>ネタ名</h1>
            <p>
            「{{$neta->name}}」
            </p>
            <h1>コンビ名(トリオ名)</h1>
            <p>
            「{{$neta->combination->name}}」
            </P>
            <h1>ジャンル</h1>
            <p>
            「{{$neta->genre->name}}」
            </p>
            <h1>内容</h1>
            <p>
            「{{$neta->overview}}」
            </p>
            <h1>ネタ動画(Youtube)</h1>
                <a href='{{$neta->anker}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                    「{{$neta->anker}}」</a>
                <p class="text-red-500">
                    (リンク先がYoutubeではない場合注意してください)
                </p>
            <h1>更新日時</h1>
            <p>
              「{{$neta->updated_at}}」
            </p>
            <h1>評価平均</h1>
            <p class='votes'>
            @foreach($reviews as $review)
            @if($neta->id===$review->neta_id)
            「{{$review->votes_avg}}」
            @endif
            @endforeach
            </p>
            <div class='go_to_nedit'>
            <p class="text-blue-400">
            <a href='/netas/{{$neta->id}}/nedit' class="hover:text-blue-600 transition-all duration-300">
                ネタを編集する</a>
            </p>    
            </div>
        </div>
        
        <div class='back_to_netas'>
            <p class="text-blue-400">
            <a href='/neta' class="hover:text-blue-600 transition-all duration-300">
                ネタ検索に戻る</a>
            </p>
        </div>
</x-app-layout>
    