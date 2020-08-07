@extends('layouts.app')

@section('content')

    <div class="text-center mb-4">
        <h1 class="font-weight-light">Log in</h1>
    </div>
    

    @section('bgwhite')
        @parent
        @section('bgwhitecontent')
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-lg btn-block mt-4']) !!}
                
                <small class="mt-2">アカウントをお持ちではありませんか？ {!! link_to_route('signup.get', '今すぐサインアップ', [], ['class' => 'text-decoration-none']) !!}</small>
            {!! Form::close() !!}
        @endsection
    @endsection


@endsection