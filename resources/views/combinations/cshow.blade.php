<x-app-layout>
     <x-slot name="header">
        <h1>Commedian Show Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl font-bold">お笑いコンビ(トリオ・ピン)詳細ページ</h1>
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>
                <p class="text-2xl">・コンビ名(トリオ・ピン)
                    <br>
                    「{{$combinations->name}}」</p>
                <p class="text-2xl">
                    ・メンバー
                    <br>
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
            
                <p class="text-2xl">
                    ・所属事務所
                    <br>
                    「{{$combinations->office->name}}」
                </p>
            
                <p>
                    <a href='{{$combinations->anker}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                    ・詳細(Wikipedia)</a>
                </p>
                <p class="text-red-500">
                    リンク押しても詳細ページに移らない場合があります。<br>編集ページにてリンクを追加していただけると幸いです。
                </p>
            <div class='go_to_cedit'>
                <a href='/combinations/{{$combinations->id}}/cedit' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
                    お笑いコンビ(トリオ・ピン)編集ページ
                </a>
            </div>
        </div>
    </div>
</x-app-layout>