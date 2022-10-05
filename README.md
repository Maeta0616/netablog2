# Neta Seeker   

"Neta Seeker"とは、ユーザーが見た、または知っている漫才やコントについてレビューしていくアプリです。
<br>
<br>
漫才やコントをアプリ内に登録、編集することができます。
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
写真を載せる



# Link
デプロイ先はherokuです。
<br>
<a href=https://netablog2-0727.herokuapp.com/>https://netablog2-0727.herokuapp.com/</a>
ログインには以下のメールアドレスとパスワードを使用してください。
Mail:test@gmail.com
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