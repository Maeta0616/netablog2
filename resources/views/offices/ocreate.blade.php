<x-app-layout>
 <x-slot name="header">
        　Office Regist Page 
    </x-slot>
        <h1>Office Regist</h1>
        <form action="/offices" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='attention'>
                <h2>新規事務所登録ページ</h2>
            </div>
            
            <div class='name'>
                <h2>芸能事務所名</h2>
                <input type='text' name='offices[name]' placeholder='事務所名' value='{{old('offices.name')}}'/>
              <p class="name__error" style="color:red">{{ $errors->first('offices.name') }}</p>
            </div>
    
            <div class='anker'>
                <h2>Link(Wikipedia推奨)</h2>
                <textarea name='combinations[anker]' placeholder='https~'></textarea>
            </div>
            
            <input type='submit' value='登録'/>
        </form>
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='back_to_offices'>
            <a href='/office'>芸能事務所一覧</a>
        </div>

</x-app-layout>