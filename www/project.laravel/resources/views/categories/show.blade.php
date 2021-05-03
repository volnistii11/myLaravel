@extends('layout')

@section('title')
    Новости категории {{ $category->name }}
@endsection

@section('main_content')
    <h1>Новости категории {{ $category->name }}</h1>
    <ul>
        @foreach ($news as $newsItem)
            <li>
                <a href="{{ route('news.show', ['news' => $newsItem]) }}">{{ $newsItem->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection

