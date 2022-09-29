<x-app-layout>
     <x-slot name="header">
        <h1>Comedian Regist Page</h1>
    </x-slot>
        <form action="/combinations" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='attention'>
                <h1 class="text-3xl">新規お笑いコンビ(トリオ・ピン)登録ページ</h1>
                
            </div>
            
            <div class="combination_name">
                <div class="mb-6">
                    <label for="default-input" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">芸名（コンビ・トリオ・ピン）</label>
                    <input type="text" name='combinations[name]' placeholder='芸名（コンビ・トリオ・ピン）'  
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <p class="text-red-500" style="color:red">{{ $errors->first('combinations.name') }}</p>
                </div>
            </div>
            
            <div class='member'>
                <label for="default-input" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">メンバー</label>
                <p>名字と名前の間に半角スペースを入れてください</p>
                <p>(４人分入れなくても登録可)</p>
                <input type='text' name='combinations[member1]' placeholder='メンバー名' value='{{old('combinations.member1')}}'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                <br>
                <input type='text' name='combinations[member2]' placeholder='メンバー名' value='{{old('combinations.member2')}}'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                <br>
                <input type='text' name='combinations[member3]' placeholder='メンバー名' value='{{old('combinations.member3')}}'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                <br>
                <input type='text' name='combinations[member4]' placeholder='メンバー名' value='{{old('combinations.member4')}}'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                    block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            
            <div class='combination_feature'>
                <label for="message" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">特徴</label>
                <p>コンビあるいはトリオの知ってることを記入してください！(箇条書き&空白可)</p>
                <textarea name="combinations[feature]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder='第〇世代・〇〇は既婚者等' ></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('combinations.feature')}}</p>
            </div>
            
            <div class='offices'>
                <label for="offices_select" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">芸能事務所</label>
                <select name='combinations[office_id]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a office</option>
                    @foreach($offices as $office)
                    <option value='{{$office->id}}'>{{$office->name}}</option>
                    @endforeach
                </select>
                <p class="text-red-500" style="color:red">{{ $errors->first('combinations.office_id') }}</p>
            </div>
            
            <div class='go_to_ocreate'>
            <p class="text-red-500">目的の芸能事務所が見つからない場合、「新規芸能事務所登録」から登録してください</p>
            <a href='offices/ocreate' class="text-blue-400 hover:text-blue-600 transition-all duration-300">新規事務所登録ページ</a>
            </div>
            
            <div class='anker'>
                <label for="message" class="text-2xl block mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">Link(Wikipedia推奨)</label>
                <textarea name="combinations[anker]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='WikipediaのURIを貼り付けてみよう！'></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.anker')}}</p>
            </div>
            
            <input type='submit' value='登録' class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-800 transiton-all duration-300"/>
        </form>
</x-app-layout>