# Neta Seeker   

"Neta Seeker"とは、ユーザーが見た、または知っている漫才やコントについてレビューし他のユーザーがコメントするアプリです。
<br>
<br>
漫才やコント、芸人、芸能事務所などをアプリ内に登録、編集することができます。
<br>
<br>
当アプリに登録していない漫才やコントがあるためユーザーと共にサイトの質を高めていく辞書アプリです



# Description

アプリ内で、漫才やコントをレビューするには、レビュー作成ページでネタ一覧から漫才あるいはコントを選んで頂き、
タイトルとネタについての感想、評価をして投稿していただきます。
<br>
<br>
候補内に漫才あるいはコントが存在しない場合、ネタ登録ページ
でネタの名前、ジャンル(漫才orコント)、
芸人を候補から選んでいただき登録してからそのネタについてのレビュー作成&投稿ができます。
<br>
<br>
また、ネタを登録する際、登録したい芸人が候補にいない場合は、芸人登録ページ
で芸人を登録していただきます。
レビューについては、他のユーザーがレビューについて評価したりコメントすることができます。
<br>
<br>
そして、レビューの評価に基づいた「ネタランキング」
があり、どのネタが１番評価が高いのか、
１番投稿されているのはどのネタなのかを全体あるいはジャンル別など見ることができます。


# Demo
①ホームページでどんなレビューがあるか確認してみよう！
![写真1](https://user-images.githubusercontent.com/108321016/194873514-e0c48504-2bb9-49aa-a7fd-8140dfbc6e66.png)
<br>
②レビューを作成してみよう！
(ネタの候補は登録されているものしか選択できません。レビューしたいネタが有る場合は、ネタ登録ページで事前にネタを登録してください)
![写真2](https://user-images.githubusercontent.com/108321016/194874570-9abad29f-7dee-4eaf-b07f-dbcff30b17d7.png)
<br>
③ネタを検索してみよう!
![写真5](https://user-images.githubusercontent.com/108321016/194876012-363ad9d6-7a64-4c29-81a8-90b73dff8541.png)
<br>
④知っているネタを登録してみよう！
(すでに登録されているネタを登録することはできません。また、芸人の候補には登録されているものしか選択できません。先に芸人登録ページで芸人を登録してください)
![写真4](https://user-images.githubusercontent.com/108321016/194875533-e01fa2f3-dc39-41c1-b7a7-85aef1d4f4c1.png)
<br>
⑤知っている芸人を登録してみよう！
(すでに登録されている芸人を登録することはできません)
![写真3](https://user-images.githubusercontent.com/108321016/194875062-5882ad23-22d9-4475-8a67-c3868c32dc0b.png)
<br>
⑥ランキングを確認してみよう！
（ジャンル別もあります）
![写真6](https://user-images.githubusercontent.com/108321016/194877042-7595afb5-5d61-4d2c-b2e2-67066982c9e0.png)





# Link
デプロイ先はherokuです。
<br>
<a href=https://netablog2-0727.herokuapp.com/>https://netablog2-0727.herokuapp.com/</a>
<br>
ログインには以下のメールアドレスとパスワードを使用してください。
<br>
Mail:test@gmail.com
<br>
Password:Test2022

# Features
このアプリで実装した機能
・コメント機能
・検索機能
・認可(Policy)
・ソーシャルログイン(OAuth認証)
・バリデーション
・ランキング機能

このアプリを作る上で工夫した点は、ソーシャルログインと検索機能の導入です。

ソーシャルログインとして、GithubのOAuth認証とTwitterのOAuth認証を取り入れました。
<br>
２つのソーシャルログインを入れるときに、２つのルートを設定するのではなく、
<br>
[('/auth/{provider}/redirect]として{provider}に入る変数を可変にし、
providerを番号で管理するmigrationファイル、Seederファイル、idによってソーシャルログインの種類が変更するようにOauthコントローラーを作成することで
コード量が減りソーシャルログインの追加を簡易的にしました。
<br>
<br>
検索機能においては、アプリ内でネタ検索や芸人検索ができるviewファイルを作成しましたが、ネタ検索では、芸人テーブルを主テーブル、ネタテーブルを従テーブルとしリレーションさせることで
芸人名で検索しても芸人の持ちネタとしてネタが検索結果として表示されるようにしました。
# Coding languages
使用言語
<br>
・PHP -- Laravel9 

# 使用方法
```
$ git clone https://github.com/Maeta0616/netablog2.git

$ cd netablog2

$ composer install 

$ npm install && npm run build

$ cp .env.example .env

$ php artisan key:generate 

//.envファイルにデータベース情報(DB_DATABASE,DB_USERNAME,DB_PASSWORD)を記述後、下記のコマンドを実行
$ php artisan migrate --seed


```

# Note
・スマートフォンでTwitterのソーシャルログインが上手くいかない場合があります。現在原因を調査中です。
<br>
（PCの場合は、正しく動作します）
<br>
・スマートフォンでログインした場合、Tailwind CSSが機能しないページがあります。現在原因を調査中です。

# Author

・前原遼太
<br>
・宇都宮大学工学部情報電子オプティクスコース情報工学科
<br>
・maeryo616@gmail.com

# License

"Neta Seeker" is not under license

Enjoy making reviews and comments!

Thank you!