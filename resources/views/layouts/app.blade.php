<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container mt-4">
    <a href="{{ route('articles.index') }}">Статьи</a>
    <a href="{{ route('article_categories.index') }}">Категории статей</a>
</div>
<br>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
