<x-app-layout>

        <h1>Comedian Edit</h1>
        <form action="/combinations/{{$combination->id}}" method="POST">
            @csrf
            <!----認めていないサイトからのアクセスを認めない-->
            @method("PUT")
            <div class='attention'>
                <h2>お笑いコンビ(トリオ)編集ページ</h2>
                <p>目的の芸能事務所が見つからない場合、「新規芸能事務所登録」から登録してください</p>
            </div>
            
            <div class='name'>
                <h2>コンビ名(トリオ名)</h2>
                <input type='text' name='combinations[name]' placeholder='登録名' value='{{$combination->name}}'/>
              <p class="name__error" style="color:red">{{ $errors->first('combinations.name') }}</p>
            </div>
            
            <div class='member'>
                <h2>メンバー</h2>
                <p>名字と名前の間に半角スペースを入れてください</p>
                <input type='text' name='combinations[member1]' placeholder='メンバー名' value='{{$combination->member1}}'/>
                <br>
                <input type='text' name='combinations[member2]' placeholder='メンバー名' value='{{$combination->member2}}'/>
                <br>
                <input type='text' name='combinations[member3]' placeholder='メンバー名' value='{{$combination->member3}}'/>
                <br>
                <input type='text' name='combinations[member4]' placeholder='メンバー名' value='{{$combination->member4}}'/>
            </div>
            
            <div class='feature'>
                <h2>特徴</h2>
                <p>コンビあるいはトリオの知ってることを記入してください！(箇条書き&空白可)</p>
                <textarea 
                name='combinations[feature]' 
                placeholder='第〇世代・〇〇は既婚者等' 
                value='{{old($combination->feature)}}'></textarea>
            </div>
            
            <div class='offices'>
                <h2>芸能事務所</h2>
                <select name='combinations[office_id]'>
                    @foreach($offices as $office)
                    <option value='{{$office->id}}'>{{$office->name}}</option>
                    @endforeach
                </select>
            <p class="offices__error" style="color:red">{{ $errors->first('combinations.office_id')}}</p>
            </div>
            
            <div class='anker'>
                <h2>Link(Wikipedia推奨)</h2>
                <textarea name='combinations[anker]' value='{{$combination->anker}}'></textarea>
            </div>
            
            <input type='submit' value='再登録'/>
        </form>
        <div class='back_to_reviews'>
            <a href='/'>レビューに戻る</a>
        </div>
        
        <div class='back_to_combination'>
            <a href='/combination'>芸人一覧</a>
        </div>
</x-app-layout>