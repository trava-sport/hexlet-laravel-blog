@extends('layouts.app')

@section('content')
    {{Form::open(['url' => route('articles.index'), 'method' => 'get'])}}
        {{Form::text('q', $q)}}
        {{Form::submit('Search')}}
    {{Form::close()}}
    <a href="{{ route('articles.create') }}">Добавить статью</a>
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <h2><a href="{{ route('articles.show', $article) }}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <a href="{{ route('articles.edit', $article) }}">Изменить статью</a>
        <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
    @endforeach
@endsection
