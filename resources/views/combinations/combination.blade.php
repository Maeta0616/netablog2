<x-app-layout>
     <x-slot name="header">
        <h1>Commedian Page</h1> 
    </x-slot>
    
        <h1 class="text-3xl">お笑いコンビ(トリオ)検索</h1>
        <div class="attention">
            <p class="text-red-500">
                登録したいお笑いコンビ(トリオ)がいる場合「新規お笑いコンビ(トリオ)登録ページ」から登録してください
            </p>
        </div>
        
        <div class='search_combination'>
            <form action="/combination" method="GET">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">検索</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                    </path>
                    </svg>
                </div>
                <input type="text" name='keyword' class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="コンビorトリオor芸人を入力">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">検索</button>
                </div>
            </form>
        </div>
        
        <div class='combinations' >
            @foreach($combinations as $combination)
            <div class='md:flex space-x-12 text-2xl box-border h-50 w-50 p-2 border-4'>
                <h1 class='name'>
                    登録名:「<a href='/combinations/{{$combination->id}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">{{$combination->name}}</a>」
                </h1>
                
                <h3 class='office'>
                    所属事務所:「{{$combination->office->name}}」
                </h3>
                
                <p class='anker'>
                  <a href='{{$combination->anker}}' class="text-blue-400 hover:text-blue-600 transition-all duration-300">お笑いコンビ(トリオ)詳細(wikipedia)</a>
                </p>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$combinations->links()}}
        </div>
        
        <div class='go_to_ncreate'>
            <a href='netas/ncreate' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                新規ネタ登録ページ</a>
        </div>
        
        <div class='go_to_cceate'>
            <a href='/combinations/ccreate' class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                新規お笑いコンビ(トリオ)登録ページ</a>
        </div>
        
</x-app-layout>