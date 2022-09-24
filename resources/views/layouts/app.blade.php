<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="shadow">
                <div class="bg-blue-400 max-w-10xl mx-auto py-1 px-6 sm:px-6 lg:px-10">
                    <nav class="flex justify-between mx-auto container items-center">
                    <h1 class="text-4xl">Neta Seeker</h1>
                        <div class="space-x-12 font-bold ">
                        <a href="/" class="hover:text-green-200 transition-all duration-300">ホーム</a>
                        <a href="" class="hover:text-green-200 transition-all duration-300">問い合わせ</a>
                        <a href="/introduction" class="hover:text-green-200 transition-all duration-300">使い方</a>
                        </div>
                    </nav>
                    <div class="text-3xl">
                    {{ $header }}
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="md:flex justify-between mx-auto container items-center box-border h-50 w-50 p-2 border-4">
                    <h1 class="text-3xl text-red-500">機能一覧</h1>
                     
                     <div class="review page">
                         <p class="text-blue-400">
                             <a href="/" class="hover:text-blue-800 transition-all duration-300">レビューページ</a>
                         </p>
                     </div>
                     
                     <div class="neta">
                     <p class="text-blue-400">
                     <a href='/neta' class="hover:text-blue-800 transition-all duration-300">ネタ検索ページ</a>
                     </p>
                    </div>
                    
                   <div class='combination_full_page'>
                    <p class="text-blue-400">
                     <a href='/combination' class="hover:text-blue-800 transition-all duration-300">お笑いコンビ（トリオ）検索ページ</a>
                   </p>
                  </div>
        
                  <div class='offices_full_page'>
                  <p class="text-blue-400">
                <a href='/office' class="hover:text-blue-800 transition-all duration-300">芸能事務所一覧</a>
                   </p>
                </div>
        
               <div class='combination_create_page'>
                 <p class="text-blue-400">
                  <a href='/combinations/ccreate' class="hover:text-blue-800 transition-all duration-300">新規お笑いコンビ(トリオ)登録</a>
                  </p>
              </div>
        
                 <div class='neta_create_page'>
                 <p class="text-blue-400">
                 <a href='/netas/ncreate' class="hover:text-blue-800 transition-all duration-300">新規ネタ登録</a>
                 </p>
                  </div>
        
                  <div class='review_create'>
                 <p class="text-blue-400">
                 <a href='/reviews/create' class="hover:text-blue-800 transition-all duration-300">レビュー作成</a>
                </p>
                </div>
        
                 <div class='rank'>
                <p class="text-blue-400">
                <a href='/neta/rank' class="hover:text-blue-800 transition-all duration-300">ネタランキング</a>
                  </p>
                 </div>
                 </div>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
