<x-app-layout>
     <x-slot name="header">
        <h1>My Page</h1> 
    </x-slot>
        <h1 class="text-3xl">マイページ</h1>
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
            お気に入り芸人：{{$user->combination}}
            </p>
            <p>
            Twitter
            <a href="{{$user->twitter}}" class="text-blue-400 hover:text-blue-600 transition-all duration-300">「{{$user->twitter}}」</a>
            </p>
        </div>
        
        <div class="edit">
            <a href="/users/{{$user->id}}/uedit" class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">ユーザー情報を編集する</a>
        </div>
        
        <div class="Review">
            <h1 class="text-3xl">今まで投稿したレビュー</h1>
            @foreach($reviews as $review)
            <div class='md:space-x-8 md:flex box-border h-50 w-50 p-2 border-4 '>
                <h1 class="text-2xl">
                    Review title
                    <p class="text-blue-400">
                    <a href='/reviews/{{$review->id}}' 
                    class="hover:text-blue-800 transition-all duration-300">
                        「{{$review->title}}」</a>
                    </p>
                </h1>
                <h2 class="text-1xl">
                    Neta
                    <p class="text-blue-400">
                    <a href='/netas/{{$review->neta->id}}'
                     class="hover:text-blue-800 transition-all duration-300">
                        「{{$review->neta->name}}」</a>
                    </p>
                </h2>
                <h2 class="text-1xl">
                    Comedian
                    <p class="text-blue-400">
                    <a href='/combinations/{{$review->neta->combination->id}}'
                     class="hover:text-blue-800 transition-all duration-300">
                        「{{$review->neta->combination->name}}」</a>
                    </p>
                </h2>
                <h2 class="text-1xl">
                    Genre
                    <p class="text-blue-400">
                    <a href="/neta/genre/{{$review->neta->genre->id}}"
                    class="hover:text-blue-800 transition-all duration-300">
                    「{{$review->neta->genre->name}}」</a>
                    </p>
                </h2>
                <h2 class="text-1xl">
                    Rates to the neta
                    <p class="rate">「{{$review->votes}}」</p>
                </h2>
                <h2 class="text-1xl">
                    User
                    <p class="text-blue-400">
                    <a href='/users/{{$review->user_id}}' 
                    class="hover:text-blue-800 transition-all duration-300" >
                    「{{$review->user->name}}」</a>
                    </p>
                </h2>
            </div>
            @endforeach
        </div>
</x-app-layout>