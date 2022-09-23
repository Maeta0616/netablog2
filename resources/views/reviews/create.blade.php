<x-app-layout>

        <h1>Review Create</h1>
        <form action="/review" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            <div class='attention'>
                <h2>新規ネタレビューはネタ登録してから投稿してください</h2>
            </div>
            <div class='neta'>
                <h2>ネタ</h2>
                <select name='reviews[neta_id]'>
                    @foreach($netas as $neta)
                    <option value='{{$neta->id}}'>{{$neta->name}}（{{$neta->combination->name}}）</option>
                    @endforeach
                </select>
                <p class="neta__error" style="color:red">{{ $errors->first('reviews.neta_id') }}</p>
            </div>
            <div class='title'>
                <h2>Review's title</h2>
                <input type='text' name='reviews[title]' placeholder='Title' value='{{old('reviews.title')}}'/>
              <p class="title__error" style="color:red">{{ $errors->first('reviews.title') }}</p>
            </div>
            <div class='body'>
                <h2>Review's body</h2>
                <textarea name='reviews[body]' placeholder='body'>{{old('reviews.body')}}</textarea> 
            <p class="body__error" style="color:red">{{ $errors->first('reviews.body')}}</p>
            </div>
            <div class='rates'>
                <h2>Neta's rates</h2>
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
            <input type='submit' value='投稿'/>
        </form>
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
</x-app-layout>
    