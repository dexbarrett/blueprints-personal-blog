@extends('master')
@section('page_title', 'My Awesome Blog - Create new post')
@include('partials.backend_styles')
@section('content')
    <section class="container">
        <div class="login">
            <h1>Please Login</h1>
            @if(Session::has('login_errors'))
            <p>{{ Session::get('login_errors') }}</p>
            @endif
            <p>
                {{ Form::open(array('route' => 'login')) }}
            </p>
            <p>
                {{ Form::email('email', null, array('placeholder' => 'Email')) }}
            </p>
            <p>
               {{ Form::password('password', array('placeholder' => 'Password')) }}
            </p>
            <p class="submit">
                {{ Form::submit('Login') }}
            </p>
            {{ Form::close() }}
        </div>
    </section>    
@stop