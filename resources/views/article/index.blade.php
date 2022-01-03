@extends('layouts.app')

@section('content')
    {{-- BEGIN --}}
    {{Form::open(['url' => route('articles.index'), 'method' => 'get'])}}
        {{Form::text('q', $q)}}
        {{Form::submit('Search')}}
    {{Form::close()}}
    {{-- END --}}
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <h2><a href="{{ route('articles.show', $article) }}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
