@extends('layouts.master')

@section('content')

<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all tasks</a>
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>

<div class="pull-right">
    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['tasks.destroy', $task->id]
    ]) !!}
        {!! Form::submit('Delete this task', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>

@stop
