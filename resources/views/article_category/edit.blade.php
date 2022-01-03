@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($category, ['method' => 'PATCH', 'url' => route('article_categories.update', $category)]) }}
    @include('article_category.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection
