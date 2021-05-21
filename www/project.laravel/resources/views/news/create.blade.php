<x-app-layout>
    <x-slot name="header">
        <h2>Форма добавления новости</h2>
    </x-slot>

    <x-content-body>
        <div class="my-8">
            <x-auth-validation-errors :errors="$errors"/>
        </div>
        <form action="{{ route('news.store') }}" method="post">
            @csrf
            <div>
                <x-label for="title" :vtitle="__('Title')"/>

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required
                         autofocus/>
            </div>

            <div class="mt-4">
                <x-label for="category_id" :value="__('Category')"/>

                <select name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-label for="description" :value="__('Description')"/>

                <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                         :value="old('description')" required autofocus/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Create') }}
                </x-button>
            </div>


        </form>

    </x-content-body>
</x-app-layout>
