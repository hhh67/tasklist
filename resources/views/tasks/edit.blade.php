@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }}のタスクの編集</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        <div class="form-group">
            {!! Form::label('content', '内容: ') !!}
            {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'タスクを入力']) !!}
        </div>
        
        {!! Form::submit('タスクを更新', ['class' => 'btn btn-warning']) !!}
        
    {!! Form::close() !!}

@endsection