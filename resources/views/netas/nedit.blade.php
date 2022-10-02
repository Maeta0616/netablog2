<x-app-layout>
     <x-slot name="header">
        　<h1>Neta Edit</h1> 
    </x-slot>

        <h1 class="text-2xl">ネタ編集ページ</h1>
        <form action="/netas/{{$neta->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method("PUT")
            <!----methodをPUTに変更--->
            <div class='attention'>
                <p class="text-red-500">目的のお笑いコンビ(トリオ)が見つからない場合、「新規お笑いコンビ(トリオ)登録」から登録してください</p>
            </div>
            
            <div class="mb-6">
                <label for="default-input" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ネタ名</label>
                <input type="text" name='netas[name]'  placeholder='ネタ名' value='{{$neta->name}}'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.name') }}</p>
            </div>
            
            <div class='combination'>
                <label for="combination_select" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">芸名</label>
                <select name='netas[combination_id]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a Comedian</option>
                    @foreach($combinations as $combination)
                    <option value='{{$combination->id}}'>{{$combination->name}}</option>
                    @endforeach
                </select>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.combination_id') }}</p>
            </div>
            
            <div class='genre'>
                <label for="combination_select" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">ジャンル</label>
                <select name='netas[genre_id]' 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a genre</option>
                    @foreach($genres as $genre)
                    <option value='{{$genre->id}}'>{{$genre->name}}</option>
                    @endforeach
                </select>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.genre_id') }}</p>
            </div>
            
            <div class='overview'>
                <label for="message" class="text-2xl block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">ネタ内容</label>
                <textarea name="netas[overview]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='ネタ概要'>{{$neta->overview}}</textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.overview')}}</p>
            </div>
            
            <div class='anker'>
                <label for="message" class="text-2xl block mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">Link(Youtube推奨)</label>
                <textarea name="netas[anker]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='ネタ動画のURIを貼り付けてみよう！'></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.anke')}}</p>
            </div>
            
            <input type='submit' value='再登録' class="px-4 py-1 rounded-md bg-blue-600 text-white hover:bg-blue-800 transition-all duration-300"/>
        </form>
        
        <div class='go_to_ccreate'>
            <p class="text-blue-400">
            <a href='/combinations/ccreate' class="hover:text-blue-600 transition-all duration-300">新規お笑いコンビ(トリオ)登録ページ</a>
            </p>
        </div>
        
        <div class='back_to_reviews'>
            <p class="text-blue-400">
            <a href='/' class="hover:text-blue-600 transition-all duration-300">レビューに戻る</a>
            </p>
        </div>
</x-app-layout>
    

    