<x-app-layout>
     <x-slot name="header">
        　Office Page 
    </x-slot>
        <h1>芸能事務所一覧</h1>
        <div class='offices' >
            @foreach($offices as $office)
            <div class='office'>
                <h2 class='name'>
                    芸能事務所名:「<a href='/offices/{{$office->id}}'>{{$office->name}}</a>」
                </h2>
              　<p>
                  <a href='{{$office->anker}}'>事務所詳細(wikipedia)</a>
                </p>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$offices->links()}}
        </div>
        
        <div class='footer'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='go_to_cceate'>
            <a href='/combinations/ccreate'>新規お笑いコンビ(トリオ)登録</a>
        </div>
        
        <div class'go_to_ocreate'>
            <a href='/offices/ocreate'>新規事務所登録</a>
        </div>
        
</x-app-layout>