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
    {{ Form::model($category, ['url' => route('article_categories.store')]) }}
        {{ Form::label('name', 'Название') }}
        {{ Form::text('name') }}<br>
        {{ Form::label('description', 'Описание') }}
        {{ Form::textarea('description') }}<br>
        {{ Form::select('state', ['draft' => 'Черновик', 'published' => 'Опубликован']) }}<br>
        {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
