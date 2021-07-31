@extends('layouts.app')

@section('content')

    <div class="center jumbotron">
        <div class="text-center">
            <h1>タスクリスト　トップページ
            </h1>
            @if(Auth::check())
            {!! link_to_route('signup.get', 'タスク一覧', [], ['class' => 'btn btn-lg btn-primary']) !!}
            @else
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            
            @endif
        </div>
    </div>

@endsection