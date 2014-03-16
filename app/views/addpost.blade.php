@extends('master')
@section('page_title', 'My Awesome Blog - Create new post')
@include('partials.backend_styles')
@section('content')
    <section class="container">
        <div class="content">
            <h1>Welcome to Admin Area, {{ Auth::user()->name }} - <strong>{{ link_to_route('logout', 'Logout') }}</strong></h1>
            {{ Form::open(array('route' => 'add_new_post')) }}
            <p>
                {{ Form::text('title', null, array('placeholder' => 'Post Title')) }}
            </p>
            <p>
                {{ Form::textarea('content', null, array('placeholder' => 'Post Content')) }}
            </p>
            <p>
                {{ Form::submit('Create Post') }}
            </p>
            {{ Form::close() }}
        </div>
    </section>
@stop