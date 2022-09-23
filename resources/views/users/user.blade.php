<x-app-layout>
 <x-slot name="header">
        　User Show Page
    </x-slot>
        <h1>User Description</h1>
        <div class='netas' >
            @foreach($users as $user)
            <div class='user'>
                <h2 class='id'>{{$user->id}}</h2>
                <h2 class='name'>{{$user->name}}</h2>
                <p class='email'>{{$user->email}}</p>
                <p class='age'>{{$user->age}}</p>
                <p class='sex'>{{$user->sex}}</p>
                <p class='neta'>{{$user->neta->name}}</p>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$users->links()}}
        </div>
        
</x-app-layout>