<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $news->title }}
        </h2>
    </x-slot>

    <x-content-body>
        <h1 class="text-lg">{{ $news->title }}</h1>
        <p class="text-xs text-gray-500 mt-10">{{ $news->created_at->format('d.m.Y') }}</p>
        <p class="mt-4">{{ $news->description }}</p>
    </x-content-body>
</x-app-layout>


