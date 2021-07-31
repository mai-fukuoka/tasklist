@extends('layouts.app')

@section('content')

<div class="form-wrapper">
  <h1>Sign up</h1>
  
     {!! Form::open(['route'=>'signup.post']) !!}
    <div class="form-item">
         {!! Form::label('name', 'Name') !!}
         {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-item">
         {!! Form::label('email', 'Email') !!}
         {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-item">
     {!! Form::label('password', 'Password') !!}
     {!! Form::password('password', ['class' => 'form-control']) !!}
     </div>
     <div class="form-item">
     {!! Form::label('password_confirmation', 'Confirmation') !!}
     {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
     </div>
    <div class="button-panel">
      {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
      {!! Form::close() !!}
    </div>
</div>
@endsection


