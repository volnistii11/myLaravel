@extends('layout')

@section('title')
    Новости
@endsection

@section('main_content')
    <h1>Новости</h1>
    <ul>
        @foreach ($news as $newsItem)
            <li>
                <a href="{{ route('news.show', ['news' => $newsItem]) }}">{{ $newsItem->category->name }} {{ $newsItem->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection

