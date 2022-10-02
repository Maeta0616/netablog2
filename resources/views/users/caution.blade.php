<x-app-layout>
 <x-slot name="header">
        　Caution
    </x-slot>
    <div class='mx-6 my-4 py-2 px-3'>   
        <h1 class="text-3xl font-bold text-red-500">
            あなたにその権限がありません!!
        </h1>
        <div class='bg-gray-200 shadow-lg rounded-md my-10 box-border p-10 text-2xl'>        
            <div class="text-2xl">
                あなたはそのページにアクセスする権限がありません。
            <br>
                あなたのIDと編集しようとしているUserのIDが正しいか今一度お確かめください
            </div>
        </div>
    </div>
</x-app-layout>