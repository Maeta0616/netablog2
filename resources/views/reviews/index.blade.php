<x-app-layout>
    <x-slot name="header">
        　    <h1>Review Page</h1>
    </x-slot>
        <div class='reviews' >
            <h1 class="text-3xl">TimeLine</h1>
            @foreach($reviews as $review)
            <div class='box-border h-50 w-50 p-2 border-4'>
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
                    //漫才一覧、コント一覧ページを作成する(2022/09/24)//
                    <p class="text-blue-400">
                    <a href=""
                    class="hover:text-blue-800 transition-all duration-300">
                    「{{$review->neta->genre->name}}」</a>
                    </p>
                </h2>
                <h2 class="text-1xl">
                    Body
                    <p class="text-blue-400">「{{$review->body}}」</p>
                </h2>
                <h2 class="text-1xl">
                    Rates to the neta
                    <p class="text-blue-400">「{{$review->votes}}」</p>
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
        
        <div class='paginate'>
            {{$reviews->links()}}
        </div>
        
</x-app-layout>
    