<x-app-layout>
    <x-slot name="header">
        　    <h1>Review Page</h1>
    </x-slot>
        <div class='mx-6 my-4 py-2 px-3' >
            <h1 class="text-3xl font-bold">TimeLine</h1>
            @foreach($reviews as $review)
            <div class='md:space-x-12 md:flex bg-gray-200 shadow-lg rounded-md my-10 box-border p-10'>
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
        
        <div class='paginate'>
            {{$reviews->links()}}
        </div>
        
</x-app-layout>
    