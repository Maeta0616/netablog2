<x-app-layout>
     <x-slot name="header">
        　<h1>Neta Regist Page</h1> 
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'>   
        <h1 class="text-3xl font-bold">ネタ登録ページ</h1>
        <form action="/netas" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <p class="text-sm text-red-500">目的のお笑いコンビ(トリオ)が見つからない場合、「新規お笑いコンビ(トリオ)登録ページ」から登録してください</p>
            
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>        
            <div class="mb-6">
                <label for="default-input" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-300">ネタ名</label>
                <input type="text" name='netas[name]'  placeholder='ネタ名' value='{{old('netas.name')}}'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.name') }}</p>
            </div>
            
            <div class='combination'>
                <label for="combination_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">芸名</label>
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
                <label for="combination_select" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">ジャンル</label>
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
                <label for="message" class="text-2xl block mb-2 font-medium text-gray-900 dark:text-gray-400">ネタ内容</label>
                <textarea name="netas[overview]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='ネタ概要'></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.overview')}}</p>
            </div>
            
            <div class='anker'>
                <label for="message" class="text-2xl block mb-2 font-bold text-gray-900 dark:text-gray-400">Link(Youtube推奨)</label>
                <textarea name="netas[anker]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='ネタ動画のURIを貼り付けてみよう！'></textarea>
                <p class="text-red-500" style="color:red">{{ $errors->first('netas.anke')}}</p>
            </div>
            
            <input type='submit' value='登録' class="px-4 py-1 rounded-md bg-blue-600 text-white cursor-pointer hover:bg-blue-800 transition-all duration-300"/>
        </div>
        </form>
        
        <div class='go_to_ccreate'>
            <a href='/combinations/ccreate' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
                新規お笑いコンビ(トリオ)登録ページ</a>
        </div>
        
        <div class='back_to_reviews'>
            <a href='/' class="text-2xl text-blue-400 hover:text-blue-600 transition-all duration-300">
                レビューに戻る</a>
        </div>
    </div>
</x-app-layout>
    