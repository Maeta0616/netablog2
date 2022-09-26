<x-app-layout>
     <x-slot name="header">
        <h1>Comedian Regist Page</h1>
    </x-slot>
        <form action="/combinations" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='attention'>
                <h1 class="text-3xl">新規お笑いコンビ(トリオ)登録ページ</h1>
                <p class="text-red-500">目的の芸能事務所が見つからない場合、「新規芸能事務所登録」から登録してください</p>
            </div>
            
            <div class='go_to_ocreate'>
            <p class="text-blue-400">
            <a href='offices/ocreate' class="hover:text-blue-600 transition-all duration-300">新規事務所登録ページ</a>
            </p>
            </div>
            
            <div class='name'>
                <h1 class="text-2xl">コンビ名(トリオ名)</h1>
                <input type='text' name='combinations[name]' placeholder='芸名' value='{{old('combinations.name')}}'/>
              <p class="text-red-500" style="color:red">{{ $errors->first('combinations.name') }}</p>
            </div>
            
            <div class='member'>
                <h1 class="text-2xl">メンバー</h1>
                <p>名字と名前の間に半角スペースを入れてください</p>
                <input type='text' name='combinations[member1]' placeholder='メンバー名' value='{{old('combinations.member1')}}'/>
                <br>
                <input type='text' name='combinations[member2]' placeholder='メンバー名' value='{{old('combinations.member2')}}'/>
                <br>
                <input type='text' name='combinations[member3]' placeholder='メンバー名' value='{{old('combinations.member3')}}'/>
                <br>
                <input type='text' name='combinations[member4]' placeholder='メンバー名' value='{{old('combinations.member4')}}'/>
            </div>
            
            <div class='feature'>
                <h1 class="text-2xl">特徴</h1>
                <p>コンビあるいはトリオの知ってることを記入してください！(箇条書き&空白可)</p>
                <textarea 
                name='combinations[feature]' 
                placeholder='第〇世代・〇〇は既婚者等' 
                value='{{old('combinations.feature')}}'></textarea>
            </div>
            
            <div class='offices'>
                <h1 class="text-2xl">芸能事務所</h1>
                <select name='combinations[office_id]'>
                    @foreach($offices as $office)
                    <option value='{{$office->id}}'>{{$office->name}}</option>
                    @endforeach
                </select>
            <p class="offices__error" style="color:red">{{ $errors->first('combinations.office_id')}}</p>
            </div>
            
            <div class='anker'>
                <h1 class="text-2xl">Link(Wikipedia推奨)</h2>
                <textarea name='combinations[anker]' placeholder='https~'></textarea>
            </div>
            
            <input type='submit' value='登録' class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 transiton-all duration-300"/>
        </form>
</x-app-layout>