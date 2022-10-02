<x-app-layout>
     <x-slot name="header">
        <h1>Office Show Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'> 
        <h1 class="text-3xl font-bold">事務所詳細ページ</h1>
        
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>       
            <div class='text-3xl'>{{$offices->name}}</div>
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
    </div>
</x-app-layout>