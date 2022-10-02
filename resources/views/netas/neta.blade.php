<x-app-layout>
     <x-slot name="header">
          <h1>Neta Search</h1>
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3' >
        <h1 class="text-3xl">
            ネタ検索(コント・漫才)ページ
        </h1>
        <div class='search_neta'>
            <p class="text-red-500">探したいネタもしくは芸人を入力してください</p>
            <form action="/neta" method="GET">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">検索</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                    </path>
                    </svg>
                </div>
                <input type="text" name='keyword' class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ネタorユニットor芸人">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">検索</button>
                </div>
            </form>
        </div>
        
        <div class='netas' >
            @foreach($netas as $neta)
            <div class='md:space-x-12 bg-gray-200 shadow-lg rounded-md my-10 box-border p-10'>
                <div class='text-2xl'>
                    ネタ
                    <p class="text-blue-400">
                    <a href='/netas/{{$neta->id}}' class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->name}}」</a>
                    </p>
                    ジャンル
                    <p class="text-blue-400">
                    <a href="" class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->genre->name}}」</a>
                    </p>
                    芸人
                    <p class="text-blue-400">
                    <a href="/combinations/{{$neta->combination->id}}" class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->combination->name}}」</a>
                    </p>
                    芸能事務所
                    <p class="text-blue-400">
                    <a href="/offices/{{$neta->combination->office->id}}" class="hover:text-blue-600 transition-all duration-300">
                        「{{$neta->combination->office->name}}」</a>
                    </p>
                    内容
                    <p class='overview'>「{{$neta->overview}}」</p>
                    評価
                    <p>
                    @foreach($reviews as $review)
                    @if($neta->id===$review->neta_id)
                    「{{$review->votes_avg}}」
                    @endif
                    @endforeach
                    </P>
                    ネタ動画(Youtube)
                
                <p class='text-sm text-blue-400 text-ellipsis overflow-hidden ...'>
                <a href='{{$neta->anker}}' class="hover:text-blue-600 transition-all duration-300">
                「{{$neta->anker}}」</a>
                </p>
                <p class="text-sm text-red-500">
                (リンク先がYoutubeではない場合注意してください)
                </p>
                <p class='text-sm'>{{$neta->created_at}}</p>
                <p class='text-sm'>{{$neta->updated_at}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        <div class='paginate'>
            {{$netas->links()}}
        </div>
</x-app-layout>