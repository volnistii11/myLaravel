@extends('layout')

@section('title')
    Добавить новую новость
@endsection

@section('main_content')
    <h1>Форма добавления новости</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/news/create" method="post">
        @csrf
        <select name="category_id" id="category_id" class="form-control" required="required">
            <option value="">Выберите категорию</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>
        <input type="text" name="title" id="title" placeholder="Введите title" class="form-control"><br>
        <textarea name="description" id="description" class="form-control" placeholder="Введите description"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
