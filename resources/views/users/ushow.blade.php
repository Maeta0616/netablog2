<x-app-layout>
     <x-slot name="header">
        <h1>User Show Page</h1> 
    </x-slot>
        <h1 class="text-3xl">ユーザー詳細ページ</h1>
        <div class='text-2xl'>
        <p class='name'>
            名前：{{$user->name}}
        </p>
        <p class='age'>
            年齢：{{$user->age}}代
        </p>
        <p class='sex'>
            性別：{{$user->sex}}
        </p>
        <p class='neta'>
        お気に入り芸人：{{$user->combination->name}}
        </p>
        <p>
            Twitter
            <a href="{{$user->twitter}}" class="text-blue-400 hover:text-blue-600 transition-all duration-300">「{{$user->twitter}}」</a>
        </p>
        </div>
        
        </div>
        <div class='back_to_review'>
            <a href='/' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                レビューページに戻る</a>
        </div>
        
</x-app-layout>