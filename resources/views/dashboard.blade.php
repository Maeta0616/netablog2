<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!  Welcome to the Neta Seeker World!!!
                    <br>
                    If you visit this website for the first time, I want you to click this
                    <a href="/introduction" class="text-blue-400 hover:text-blue-600 transition-all duration:300">anker</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
