<x-app-layout>
    <x-slot name="header">
        　    <h1>Introduction</h1>
    </x-slot>
     <h1 class="text-4xl font-bold">このアプリの使い方</h1>
     
     <div class="intoroduction">
        <p class="text-3xl">
             ①初めに
        </p>
        <p class="text-2xl">
            ・ユーザー情報を登録してみよう！
            <br>
            以下のアンカーから名前、性別、年齢、お気に入り芸人を入力してみましょう！
            <a href="" class="text-blue-400 hover:text-blue-600 transition-all duration-300">
                ユーザーを編集する
            </a>
        </p>
        <br>
        <p class="text-2xl">
            ・レビューを投稿してみよう！
            <br>
            「<a href="/reviews/create" class="text-blue-400 hover:text-blue-600 transition-all duration-300">レビュー作成ページ</a>」
            からレビューを投稿してみよう！
            <br>
            もし、投稿したいネタがプルダウンにない場合は？
            <br>
            「<a href"/netas/ncreate" class="text-blue-400 hover:text-blue-600 transition-all duration-300">新規ネタ登録ページ</a>」
            からネタを登録してから投稿できるようになります！
            <br>
            新規ネタ登録ページにて芸人の候補内に登録したい芸人がいない場合は？
            <br>
            「<a href="/combinations/ccreate" class="text-blue-400 hover:text-blue-600 transition-all duration-300">新規芸人(ピン・コンビ・トリオ)</a>」
            から芸人を登録してから投稿できるようになります！
        </p>
        <br>
        <p class="text-2xl">
            ・ランキングを見てみよう！
            「<a href="/neta/rank" class="text-blue-400 hover:text-blue-600 transition-all duration-300">ネタランキング</a>」
            からレビューの評価によるランキングが見られます。ジャンル別でも見られるので是非見てみてください！
        </p>
     </div>
</x-app-layout>
    