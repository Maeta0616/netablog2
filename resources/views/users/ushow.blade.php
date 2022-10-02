<x-app-layout>
     <x-slot name="header">
        <h1>User Show Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl font-bold">ユーザー詳細ページ</h1>
        <div class="bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl">    
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
        </div>
            <div class="Review">
                <h1 class="text-3xl font-bold">今まで投稿したレビュー</h1>
                @foreach($reviews as $review)
                <div class="bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl">    
                    <h1 class="text-2xl">
                        Review title
                        <p class="text-blue-400">
                            <a href='/reviews/{{$review->id}}' 
                            class="hover:text-blue-800 transition-all duration-300">
                            「{{$review->title}}」</a>
                        </p>
                    </h1>
                    <h1 class="text-1xl">
                        Neta
                        <p class="text-blue-400">
                            <a href='/netas/{{$review->neta->id}}'
                            class="hover:text-blue-800 transition-all duration-300">
                            「{{$review->neta->name}}」</a>
                        </p>
                    </h1>
                    <h1 class="text-1xl">
                        Comedian
                        <p class="text-blue-400">
                            <a href='/combinations/{{$review->neta->combination->id}}'
                            class="hover:text-blue-800 transition-all duration-300">
                            「{{$review->neta->combination->name}}」</a>
                        </p>
                    </h1>
                    <h1 class="text-1xl">
                        Genre
                        <p class="text-blue-400">
                            <a href="/neta/genre/{{$review->neta->genre->id}}"
                            class="hover:text-blue-800 transition-all duration-300">
                            「{{$review->neta->genre->name}}」</a>
                        </p>
                    </h1>
                    <h1 class="text-1xl">
                        Rates to the neta
                        <p class="rate">「{{$review->votes}}」</p>
                    </h1>
                    <h1 class="text-1xl">
                        User
                        <p class="text-blue-400">
                            <a href='/users/{{$review->user_id}}' 
                            class="hover:text-blue-800 transition-all duration-300" >
                            「{{$review->user->name}}」</a>
                        </p>
                    </h1>
                </div>
            @endforeach
            </div>
        
    </div>
</x-app-layout>