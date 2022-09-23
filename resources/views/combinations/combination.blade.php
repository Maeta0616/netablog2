<x-app-layout>
     <x-slot name="header">
        　検索ページ 
    </x-slot>

        <h1>お笑いコンビ(トリオ)検索</h1>
        
        <div class='search_combination'>
            <form action='/combination' method='GET'>
                <input type='text' name='keyword' placeholder='コンビorトリオor芸人を入力'>
                <input type='submit' value='検索'>
            </form>
        </div>
        <br>
        <div class='combinations' >
            @foreach($combinations as $combination)
            <div class='combination'>
                <h2 class='name'>
                    登録名:「<a href='/combinations/{{$combination->id}}'>{{$combination->name}}</a>」
                </h2>
                
                <h3 class='office'>
                    所属事務所:「{{$combination->office->name}}」
                </h3>
                
                <p class='anker'>
                  <a href='{{$combination->anker}}'>お笑いコンビ(トリオ)詳細(wikipedia)</a>
                </p>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$combinations->links()}}
        </div>
        
        <div class='go_to_ncreate'>
            <a href='netas/ncreate'>新規ネタ登録</a>
        </div>
        
        <div class='go_to_cceate'>
            <a href='/combinations/ccreate'>新規芸人登録</a>
        </div>
        
         <div class='footer'>
            <a href='/'>レビューに戻る</a>
        </div>
        
</x-app-layout>