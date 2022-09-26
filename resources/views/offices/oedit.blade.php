<x-app-layout>
     <x-slot name="header">
        <h1>Office Edit Page</h1> 
    </x-slot>
        <h1 class="text-3xl">事務所編集ページ</h1>
        <form action="/offices/{{$office->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method("PUT")
            
            <div class='name'>
                <h1 class="text-2xl">芸能事務所名</h1>
                <input type='text' name='offices[name]' placeholder='事務所名' value='{{$office->name}}'/>
              <p class="text-red-500" style="color:red">{{ $errors->first('offices.name') }}</p>
            </div>
    
            <div class='anker'>
                <h1 class="text-2xl">Link(Wikipedia推奨)</h1>
                <textarea name='combinations[anker]' placeholder='https~' value='{{$office->anker}}'></textarea>
            </div>
            
            <input type='submit' value='再登録' class="px-4 py-1 rounded-md bg-blue-600 hover:bg-blue-800 transition-all duration-300 cursor-pointer"/>
        </form>
        <br>
        <div class='office_delete'>
            <form action='/offices/{{$office->id}}' 
                  id='form_{{$office->id}}' 
                  method='post' 
                  style='display:inline'>
                @csrf
                @method("DELETE")
                <button type='submit' class="px-4 py-1 bg-blue-600 rounded-md hover:bg-blue-800 transition-all duration-300 cursor-pointer">
                    登録削除</button>
            </form>
        </div>
        <br>
        <div class='back_to_offices'>
            <a href='/office' class="text-blue-400 hover:text-blue-600 transition-all duration-300">芸能事務所一覧</a>
        </div>

</x-app-layout>