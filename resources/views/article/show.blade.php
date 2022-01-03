@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    {{-- BEGIN --}}
{{--    <small>--}}
{{--        <a href="{{route('article_categories.show', $article->category)}}">--}}
{{--            {{ $article->category }}--}}
{{--        </a>--}}
{{--    </small>--}}
    {{-- END --}}
    <div>{{$article->body}}</div>
@endsection
