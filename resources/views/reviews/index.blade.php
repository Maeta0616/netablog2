<x-app-layout>
    <x-slot name="header">
        　Review 
    </x-slot>
        <h1>Review Page</h1>
        <div class='neta_full_page'>
            <p class="text-3xl font-bold underline text-blue-600">
                <a href='/neta'>ネタ検索</a>
            </p>
        </div>
        
        <div class='combination_full_page'>
            <p class='combination_full'>
                <a href='/combination'>お笑いコンビ（トリオ）検索</a>
            </p>
        </div>
        
        <div class='offices_full_page'>
            <p class='office_full'>
                <a href='/office'>芸能事務所一覧</a>
            </p>
        </div>
        
        <div class='combination_create_page'>
            <p class='combination_create'>
                <a href='/combinations/ccreate'>新規お笑いコンビ(トリオ)登録</a>
            </p>
        </div>
        
        <div class='neta_create_page'>
            <p class='neta_create'>
                <a href='/netas/ncreate'>新規ネタ登録</a>
            </p>
        </div>
        
        <div class='review_create'>
            <p class='create'>
                <a href='/reviews/create'>レビュー作成</a>
            </p>
        </div>
        
        <div class='rank'>
            <p class='ranking'>
                <a href='/neta/rank'>ネタランキング</a>
            </p>
        </div>
        
        <h1>Review Page</h1>
        <div class='reviews' >
            @foreach($reviews as $review)
            <div class='review'>
                <h2 class="text-2xl font-bold underline text-blue-600">
                    Review title
                    <a href='/reviews/{{$review->id}}'>「{{$review->title}}」</a>
                    </h2>
                <p class='neta_id'>
                    Script
                    <a href='/netas/{{$review->neta->id}}'>「{{$review->neta->name}}」</a>
                </p>
                <p clas='combination'>
                    Comedian
                    <a href='/combinations/{{$review->neta->combination->id}}'>「{{$review->neta->combination->name}}」</a>
                </p>
                <p class='genre'>
                    Genre
                    「{{$review->neta->genre->name}}」
                    </p>
                <p class='body'>
                    Body
                    「{{$review->body}}」
                    </p>
                <p class='votes'>
                    Rates to the neta＝「{{$review->votes}}」
                    </p>
                <p class='users'>
                    User
                    <a href='/users/{{$review->user_id}}'>「{{$review->user->name}}」</a>
                </p>
            </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{$reviews->links()}}
        </div>
        
</x-app-layout>
    