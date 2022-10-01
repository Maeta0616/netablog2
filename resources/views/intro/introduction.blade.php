<x-app-layout>
    <x-slot name="header">
        　    <h1>Introduction</h1>
    </x-slot>
     <h1 class="text-4xl font-bold">このアプリの使い方</h1>
     
    <div class="intoroduction">
        <div class="box-border h-50 w-50 p-2 border-4">
            <p class="text-3xl font-bold">
                ①ユーザー情報を登録してみよう！
            </p>
            <p class="text-2xl">
                以下のアンカーから名前、性別、年齢、お気に入り芸人、Twitterの自分のアカウントを入力してみましょう！
                <br>
                <a href="/users/{{Auth::user()->id}}/uedit" class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                ユーザーを編集する
            </a>
            </p>
        </div>
        
        <div class="box-border h-50 w-50 p-2 border-4">
            <p class="text-3xl font-bold">
                ②みんなのレビューを見てみよう！
            </p>
            <p class="text-2xl">
                「<a href="/" class="text-blue-400 hover:text-blue-600 transition-all duration-300">レビューページ</a>」
                からみんなのレビューを見て、そのレビューにコメントと評価をしてみよう！
            </p>
        </div>
        
        <div class="box-border h-50 w-50 p-2 border-4">
            <p class="text-3xl font-bold ">
                ③レビューを投稿してみよう！
            </p>
            <p class="text-2xl">
                「<a href="/reviews/create" class="text-blue-400 hover:text-blue-600 transition-all duration-300">レビュー作成ページ</a>」
                からレビューを投稿してみよう！
                <br>
                <br>
                Q：もし、投稿したいネタがプルダウンにない場合は？
                <br>
                <br>
                A：「<a href"/netas/ncreate" class="text-blue-400 hover:text-blue-600 transition-all duration-300">新規ネタ登録ページ</a>」
                からネタを登録してから投稿できるようになります！
                <br>
                <br>
                Q：新規ネタ登録ページにて芸人の候補内に登録したい芸人がいない場合は？
                <br>
                <br>
                A：「<a href="/combinations/ccreate" class="text-blue-400 hover:text-blue-600 transition-all duration-300">新規芸人(ピン・コンビ・トリオ)</a>」
                から芸人を登録してから投稿できるようになります！
            </p>
        </div>
        
        <div class="box-border h-50 w-50 p-2 border-4">
            <p class="text-3xl font-bold">
                ④ランキングを見てみよう！
            </p>
            <p class="text-2xl">
                「<a href="/neta/rank" class="text-blue-400 hover:text-blue-600 transition-all duration-300">ネタランキング</a>」
                からレビューの評価によるランキングが見られます。ジャンル別でも見られるので是非見てみてください！
            </p>
        </div>
    </div>
</x-app-layout>
    