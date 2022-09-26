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
            
            <div class='name'>
                <h1 class="text-2xl">ネタ名</h1>
                <input type='text' name='netas[name]' placeholder='ネタ名' value='{{$neta->name}}'/>
              <p class="text-red-500" style="color:red">{{ $errors->first('netas.name') }}</p>
            </div>
            
            <div class='combination'>
                <h1 class="text-2xl">コンビ名</h1>
                <select name='netas[combination_id]'>
                    @foreach($combinations as $combination)
                    <option value='{{$combination->id}}'>{{$combination->name}}</option>
                    @endforeach
                </select>
            <p class="tect-red-500" style="color:red">{{ $errors->first('netas.combination_id')}}</p>
            </div>
            
            <div class='genre'>
                <h1 class="text-2xl">ジャンル</h1>
                <select name='netas[genre_id]'>
                    @foreach($genres as $genre)
                    <option value='{{$genre->id}}'>{{$genre->name}}</option>
                    @endforeach
                </select>
            <p class='text-red-500' style='coler:red'>{{$errors->first('netas.genre_id')}}</p>    
            </div>
            
            <div class='overview'>
                <h1 class="text-2xl">ネタ内容</h1>
                <textarea name='netas[overview]' placeholder='ネタ内容'>{{$neta->overview}}</textarea>
                <p class='text-red-500'style='coler:red'>{{$errors->first('netas.overview')}}</p>
            </div>
            
            <div class='anker'>
                <h1 class="text-2xl">Link(Youtube推奨)</h2>
                <textarea name='netas[anker]' placeholder='https~'>{{$neta->anker}}</textarea>
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
    

    