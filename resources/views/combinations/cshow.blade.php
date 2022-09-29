<x-app-layout>
     <x-slot name="header">
        <h1>Commedian Show Page</h1> 
    </x-slot>

        <h1 class="text-3xl">お笑いコンビ(トリオ・ピン)詳細ページ</h1>
        <div class='box-border h-50 w-50 p-2 border-4' >
            <p class="text-2xl">・コンビ名(トリオ・ピン)
            <br>
            「{{$combinations->name}}」</p>
            <p class="text-2xl">・メンバー
            <p class='text-2xl'>
                {{$combinations->member1}}
                <br>
                {{$combinations->member2}}
                <br>
                {{$combinations->member3}}
                <br>
                {{$combinations->member4}}
            </p>
            <p class="text-2xl">・特徴</p>
            <br>
            {{$combinations->feature}}
            <div class='neta'>
            <p class="text-2xl">
                ・持ちネタ
            </p>
            <h1 class='neta'>
                @foreach($netas as $neta)
                @if($neta->combination_id===$combinations->id)
                    <a href='/netas/{{$neta->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                    「{{$neta->name}}」</a>
                <br>
                @endif
                @endforeach
            </h1>
            </div>
            
            <p class="text-2xl">・所属事務所</p>
            
            <h1 class='office'>
                「{{$combinations->office->name}}」
            </h1>
            
            <p>
                <a href='{{$combinations->anker}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                ・詳細(Wikipedia)</a>
            </p>
            <p class="text-red-500">
                リンク押しても詳細ページに移らない場合があります。<br>編集ページにてリンクを追加していただけると幸いです。
            </p>
        </div>
        
        <div class='go_to_cedit'>
            <a href='/combinations/{{$combinations->id}}/cedit' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
                お笑いコンビ(トリオ・ピン)編集ページ
            </a>
        </div>
  
</x-app-layout>