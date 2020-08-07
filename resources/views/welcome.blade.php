@extends('layouts.bg_white')
@extends('layouts.app')

@section('content')

    @section('bgwhite')
        <div class="center mt-3 mb-3">
            <div class="text-center">
                <h1 class="mb-4">Tasklistへようこそ！</h1>
                {!! link_to_route('signup.get', '今すぐサインアップ！', [], ['class' => 'btn btn-lg btn-outline-success']) !!}
            </div>
        </div>
    @endsection

@endsection