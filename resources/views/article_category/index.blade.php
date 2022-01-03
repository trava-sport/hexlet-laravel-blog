@extends('layouts.app')

@section('content')
    <small><a href="{{ route('article_categories.create') }}">Создать категорию</a></small>
    <h1>Список категорий статей</h1>
    @foreach($articleCategories as $category)
        <h2>
            <a href="{{ route('article_categories.show', $category) }}">{{$category->name}}</a>
            (<a href="{{ route('article_categories.edit', $category) }}">Edit</a>)
        </h2>
        <div>{{$category->description}}</div>
    @endforeach
@endsection
