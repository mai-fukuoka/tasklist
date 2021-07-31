@extends('layouts.app')

@section('content')

<div class="form-wrapper">
  <h1>Log In</h1>
  {!! Form::open(['route'=>'login.post']) !!}
    <div class="form-item">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-item">
      {!! Form::label('password', 'Password') !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="button-panel">
      {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
      {!! Form::close() !!}
    </div>
  
  <p class="mt-2 text-center">New user? {!! link_to_route('signup.get', ' Sign up now!') !!}</p>
</div>

@endsection