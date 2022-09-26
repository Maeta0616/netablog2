<x-app-layout>
 <x-slot name="header">
        <h1>Office Regist Page</h1> 
    </x-slot>
        <h1 class="text-3xl">新規事務所登録ページ</h1>
        <form action="/offices" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='name'>
                <h1 class="text-2xl">芸能事務所名</h1>
                <input type='text' name='offices[name]' placeholder='事務所名' value='{{old('offices.name')}}'/>
              <p class="text-red-500" style="color:red">{{ $errors->first('offices.name') }}</p>
            </div>
    
            <div class='anker'>
                <h1 class="text-2xl">Link(Wikipedia推奨)</h1>
                <textarea name='combinations[anker]' placeholder='https~'></textarea>
            </div>
            
            <input type='submit' value='登録' class="px-4 py-1 bg-blue-600 rounded-md text-white hover:bg-blue-800 transition-all duration-300"/>
        </form>

</x-app-layout>