@extends('layouts.app')

@section('content')

    <h1>新規タスク</h1>
    
    <div class="row mt-4">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス（10文字以内）：') !!}
                    {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => '未完了']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', '内容（255文字以内）：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => '牛乳を買いに行く']) !!}
                </div>
                
                {!! Form::submit('追加する', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
    
    {{-- いらない --}}
    @section('bgwhite')
    @endsection

@endsection