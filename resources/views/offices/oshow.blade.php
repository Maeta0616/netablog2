<x-app-layout>
     <x-slot name="header">
        <h1>Office Show Page</h1> 
    </x-slot>
        <h1 class="text-3xl">事務所詳細ページ</h1>
        <div class='box-border h-50 w-50 p-2 border-4' >
            <h1 class='text-2xl'>「{{$offices->name}}」</h1>
            <h1 class='text-2xl'>
                所属お笑いコンビ(トリオ)一覧
                <br>
                 @foreach($combinations as $combination)
                 @if($offices->id===$combination->office_id)
                 「<a href='/combinations/{{$combination->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                     {{$combination->name}}</a>」
                 <br>
                 @endif
                 @endforeach
            </h1>
            <a href='{{$offices->anker}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                事務所詳細(wikipedia)</a>
        </div>
        <div class='go_to_oedit'>
            <a href='/offices/{{$offices->id}}/oedit' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">編集する</a>
        </div>
</x-app-layout>