@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスクの詳細</h1>
    
    <table class="table table-bordered table-hover mt-4">
        <tbody>
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
            <tr>
                <th>内容</th>
                <td>{{ $task->content }}</td>
            </tr>
        </tbody>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-secondary mb-2']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    {{-- いらない --}}
    @section('bgwhite')
    @endsection
    
@endsection