@extends('layout')

@section('title')
    Выбранная новость {{ $news->title }}
@endsection

@section('main_content')
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->description }}</p>
@endsection

