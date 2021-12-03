@extends("layout.app")

@section("title", "Post - " .  $post->title)

@section('content')
    <div class="content">
        @include('components.button')
        <div style="text-align: center">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
        <hr />
        <p>Author: {{ $post->author }}</p>
        <p>Tags: {{ $post->tags }}</p>
    </div>
@endsection