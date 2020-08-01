@extends('layouts.app')

@section('content')

    <h1>新規タスク</h1>
    
    <div class="row mt-4">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('content', '内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => '新しいタスク']) !!}
                </div>
                
                {!! Form::submit('追加する', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection