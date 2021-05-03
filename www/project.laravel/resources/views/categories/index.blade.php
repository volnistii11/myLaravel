@extends('layout')

@section('title')
    Категории новостей
@endsection

@section('main_content')
    <h1>Категории новостей</h1>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection


