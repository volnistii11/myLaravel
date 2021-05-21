@props(['categories'])

<li>
    <a href="{{ route('categories.show', ['category' => $categories->id]) }}">{{ $categories->name }}</a>
</li>

