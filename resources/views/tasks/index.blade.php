@extends('layouts.app')
@section('content')
    @if (Auth::check())
        @if (count($tasks) > 0)
            @include('tasks.tasks')
            {{-- いらない --}}
            @section('bgwhite')
            @endsection
        @else
            <div class="text-center">
                <hgroup>
                    <h1>タスクはありません</h1>
                    <h2 class="mt-4 mb-4 text-muted">今日のタスクを計画しましょう</h2>
                </hgroup>
                <a class="add btn btn-primary" href="{!! route('tasks.create') !!}">
                    <i class="fas fa-plus"></i> タスクを追加
                </a>
            </div>
            {{-- いらない --}}
            @section('bgwhite')
            @endsection
        @endif

    @else
        
        @section('bgwhite')
            @parent
            @section('bgwhitecontent')
                <div class="center mt-3 mb-3">
                    <div class="text-center">
                        <h1 class="mb-4">Tasklistへようこそ！</h1>
                        {!! link_to_route('signup.get', '今すぐサインアップ！', [], ['class' => 'btn btn-lg btn-outline-success']) !!}
                    </div>
                </div>
            @endsection
        @endsection
        
    @endif
    
@endsection