<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-content-body>
        <ul>
            @foreach ($categories as $category)
                <x-categories.categories-preview :categories="$category"/>
            @endforeach
        </ul>
    </x-content-body>
</x-app-layout>

