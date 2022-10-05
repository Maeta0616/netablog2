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
                <div class="bg-blue-300 max-w-full py-6 mx-auto">
                    <nav class="sm:flex justify-between container items-center">
                    <h1 class="text-5xl mx-auto sm:mx-auto">
                        <span class="italic">Neta Seeker</span>
                    </h1>
                    </nav>
                    
                </div>
            </header>

            <!-- Page Content -->
            <main>
            <div class="mx-6 my-4 py-2 px-3">
                <div class="text-3xl">
                    {{ $header }}
                </div>
                <div class="md:flex justify-between mx-auto container items-center bg-white shadow-lg rounded-md my-10 box-border p-10 max-w-full">
                    <h1 class="text-3xl font-bold">Function</h1>
                     
                    <div class="review page">
                        <a href="/" class="text-blue-400 hover:text-blue-800 transition-all duration-300">レビューページ</a>
                    </div>
                     
                    <div class='review_create'>
                        <a href='/reviews/create' class="text-blue-400 hover:text-blue-800 transition-all duration-300">レビュー作成</a>
                    </div>
                     
                    <div class="neta">
                         <a href='/neta' class="text-blue-400 hover:text-blue-800 transition-all duration-300">ネタ検索</a>
                    </div>
                    
                    <div class='combination_full_page'>
                        <a href='/combination' class="text-blue-400 hover:text-blue-800 transition-all duration-300">お笑いコンビ（トリオ・ピン）検索</a>
                    </div>
        
                    <div class='offices_full_page'>
                        <a href='/company' class="text-blue-400 hover:text-blue-800 transition-all duration-300">芸能事務所一覧</a>
                    </div>
                
                    <div class='rank'>
                        <a href='/neta/rank' class="text-blue-400 hover:text-blue-800 transition-all duration-300">ネタランキング</a>
                    </div>
                
                    <div class='neta_create_page'>
                        <a href='/netas/ncreate' class="text-blue-400 hover:text-blue-800 transition-all duration-300">新規ネタ登録</a>
                    </div>
        
                    <div class='combination_create_page'>
                        <a href='/combinations/ccreate' class="text-blue-400 hover:text-blue-800 transition-all duration-300">新規お笑いコンビ(トリオ)登録</a>
                    </div>
                
                </div>
                {{ $slot }}
            </div>
            </main>
        </div>
    </body>
</html>
