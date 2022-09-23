<x-app-layout>

        <h1>お笑いコンビ(トリオ)詳細ページ</h1>
        <div class='combinations' >
            <p>コンビ名(トリオ名)</p>
            <h2 class='name'>「{{$combinations->name}}」</h2>
            <p>メンバー</p>
            <h3 class='member'>
                {{$combinations->member1}}
                <br>
                {{$combinations->member2}}
                <br>
                {{$combinations->member3}}
                <br>
                {{$combinations->member4}}
            </h3>
            <br>
            <div class='feature'>
                <p>特徴</p>
                <h3>{{$combinations->feature}}</h3>
            </div>
            <div class='neta'>
            <p>持ちネタ</p>
            <h3 class='neta'>
                @foreach($netas as $neta)
                @if($neta->combination_id===$combinations->id)
                <a href='/netas/{{$neta->id}}'>「{{$neta->name}}」</a>
                <br>
                @endif
                @endforeach
            </h3>
            </div>
            
            <p>所属事務所</p>
            <h3 class='office'>「{{$combinations->office->name}}」
            </h3>
            
            <h3>
            <a href='{{$combinations->anker}}'>詳細(Wikipedia)</a>
            </h3>
            <p>リンク押しても詳細ページに移らない場合があります。編集ページにてリンクを追加していただけると幸いです。</p>
        </div>
        <div class='go_to_cedit'>
            <a href='/combinations/{{$combinations->id}}/cedit'>編集する</a>
        </div>
        
        
        <br>
        <div class='back_to_combinations'>
            <a href='/combination'>お笑いコンビ(トリオ)検索へ戻る</a>
        </div>
        
        <div class='go_to_cceate'>
            <a href='/combinations/ccreate'>新規お笑いコンビ(トリオ)登録</a>
        </div>
        
         <div class='footer'>
            <a href='/'>レビューに戻る</a>
        </div>
  
</x-app-layout>