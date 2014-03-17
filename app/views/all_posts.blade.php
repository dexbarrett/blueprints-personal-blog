@extends('index')

@section('post_content')
@foreach($posts as $post)
@include('partials.single_post')
@endforeach
{{ $posts->links() }}
@stop