{{ Form::label('name', 'Название') }}
{{ Form::text('name') }}<br>
{{ Form::label('description', 'Описание') }}
{{ Form::textarea('description') }}<br>
{{ Form::select('state', ['draft' => 'Черновик', 'published' => 'Опубликован']) }}<br>
