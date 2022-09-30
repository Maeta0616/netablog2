<x-app-layout>
     <x-slot name="header">
        <h1>Office Page</h1> 
    </x-slot>
        <h1 class="text-3xl">芸能事務所一覧ページ</h1>
        
        <p class="text-red-400">
            お探しの芸能事務所がない場合、「新規芸能事務所登録ページ」から登録してください
            </p>
        
        <div class="text-2xl">
            <a href="/offices/ocreate" class="text-blue-400 hover:text-blue-800 transition-all duration-300">
                新規芸能事務所登録ページ
            </a>
        </div>
        
        <div class='offices' >
            @foreach($offices as $office)
            <div class='box-border h-50 w-50 p-2 border-4'>
                <h1 class='text-2xl'>
                    芸能事務所名:「<a href='/offices/{{$office->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                        {{$office->name}}</a>」
                    <br>
                    <!--<a href='$office->anker' class="text-blue-400 hover:text-blue-600 transition-all duration-300">-->
                    <!--    事務所詳細wikipedia</a>-->
                </h1>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$offices->links()}}
        </div>
</x-app-layout>