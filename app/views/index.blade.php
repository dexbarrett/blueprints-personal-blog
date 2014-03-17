@extends('master')
@section('page_title', 'My Awesome Blog - Post List')
@section('styles')
    {{ HTML::style('assets/blog/css/styles.css') }}
    {{ HTML::style('assets/blog/css/print.css', array('media' => 'print')) }}
@stop
@section('content')
    <div id="wrapper">
        <header>
            <h1><a href="/">My Awesome Blog</a></h1>
            <p>Welcome to my awesome blog</p>
        </header>
        <section id="main">
            <section id="content">
                @foreach($posts as $post)
                    <article>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                        <p>
                            <small>
                                Posted by <strong>{{ $post->author->name }}</strong> at
                                <strong>{{ $post->created_at }}</strong>
                            </small>
                        </p>
                    </article>
                @endforeach
                {{ $posts->links() }}
            </section>
        </section>
        <footer>
            <section id="footer-area">
                <section id="footer-outer-block">
                    <aside class="footer-segment">
                        <h4>My Awesome Blog</h4>
                    </aside>
                </section>
            </section>
        </footer>
    </div>   
@stop