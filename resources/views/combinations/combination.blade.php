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
            <form action='/combination' method='GET'>
                <input type='text' name='keyword' placeholder='コンビorトリオor芸人を入力'>
                <input type='submit' value='検索' class="px-4 py-1 bg-blue-600 text-white curor-pointer rounded-md hover:bg-blue-800 transition-all duration-300">
            </form>
        </div>
        <div class='combinations' >
            @foreach($combinations as $combination)
            <div class='text-2xl box-border h-50 w-50 p-2 border-4'>
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