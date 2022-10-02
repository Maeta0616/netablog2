<x-app-layout>
     <x-slot name="header">
        <h1>My Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl font-bold">マイページ</h1>
        <div class="bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl">    
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
                <h1 class="text-3xl font-bold">今まで投稿したレビュー</h1>
                @foreach($reviews as $review)
                <div class="bg-gray-200 shadow-lg rounded-md my-10 box-border p-10">    
                    <h1 class="text-2xl">
                        Review title
                        <a href='/reviews/{{$review->id}}' 
                        class="text-blue-400 hover:text-blue-800 transition-all duration-300">
                            「{{$review->title}}」</a>
                        
                    </h1>
                    <h1 class="text-1xl">
                        Neta
                        <p class="text-blue-400">
                            <a href='/netas/{{$review->neta->id}}'
                            class="text-blue-400 hover:text-blue-800 transition-all duration-300">
                            「{{$review->neta->name}}」</a>
                        </p>
                    </h1>
                    <h1 class="text-1xl">
                        Comedian
                            <a href='/combinations/{{$review->neta->combination->id}}'
                            class="text-blue-400 hover:text-blue-800 transition-all duration-300">
                            「{{$review->neta->combination->name}}」</a>
                    </h1>
                    <h1 class="text-1xl">
                        Genre
                            <a href="/neta/genre/{{$review->neta->genre->id}}"
                            class="text-blue-400 hover:text-blue-800 transition-all duration-300">
                            「{{$review->neta->genre->name}}」</a>
                    </h1>
                    <h1 class="text-1xl">
                        Rates to the neta
                        <p class="rate">「{{$review->votes}}」</p>
                    </h1>
                    <h1 class="text-1xl">
                        User
                            <a href='/users/{{$review->user_id}}' 
                            class="text-blue-400 hover:text-blue-800 transition-all duration-300">
                            「{{$review->user->name}}」</a>
                    </h1>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>