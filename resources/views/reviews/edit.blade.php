<x-app-layout>
     <x-slot name="header">
        　<h1>Review Edit Page</h1> 
    </x-slot>
        <h1 class="text-2xl">Review Edit</h1>
        <form action="/reviews/{{$review->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method('PUT')
            <!----メソッドをPUTとした--->
            <div class='attention'>
                <h2 class="text-red-500">新規ネタレビューはネタ登録してから再投稿してください</h2>
            
            <div class='title'>
                <h2 class="text-2xl">Review title</h2>
                <input type='text' name='reviews[title]' placeholder='Title' value='{{$review->title}}'/>
              <p class="title__error" style="color:red">{{ $errors->first('reviews.title') }}</p>
            </div>
            
            </div>
            <div class='neta'>
                <h2 class="text-2xl">ネタ</h2>
                <select name='reviews[neta_id]'>
                    @foreach($netas as $neta)
                    <option value='{{$neta->id}}'>{{$neta->name}}（{{$neta->combination->name}}）</option>
                    @endforeach
                </select>
                <p class="neta__error" style="color:red">{{ $errors->first('reviews.neta_id') }}</p>
            </div>
            
            <div class='body'>
                <h2 class="text-2xl">Body</h2>
                <textarea name='reviews[body]' value='{{$review->body}}'>{{old('reviews.body')}}</textarea> 
            <p class="body__error" style="color:red">{{ $errors->first('reviews.body')}}</p>
            </div>
            
            <div class='rates'>
                <h2 class="text-2xl">Rates to the neta</h2>
                <select name='reviews[votes]'>
                    <option value=''>--please choose an option</option>
                    <option value='1'>☆</option>
                    <option value='2'>☆☆</option>
                    <option value='3'>☆☆☆</option>
                    <option value='4'>☆☆☆☆</option> 
                    <option value='5'>☆☆☆☆☆</option>
                </select>
                <p class="votes__error" style="color:red">{{ $errors->first('reviews.votes') }}</p>
            </div>
            <br>
            <input type='submit' value='再投稿' class="px-4 py-1 bg-blue-600 rounded-md hover:bg-blue-800 cursor-pointer transition-all duration-300"/>
        </form>
        <div class='back_to_reviews_show'>
            <p class="text-blue-400">
            <a href='/reviews/{{$review->id}}' class="hover:text-blue-800 transition-all duration-300">レビュー詳細に戻る</a>
            </p>
        </div>
        
        <div class='back_to_reviews'>
            <p class="text-blue-400">
            <a href='/' class="hover:text-blue-800 transition-all duration-300">レビューに戻る</a>
            </p>
        </div>
        
</x-app-layout>