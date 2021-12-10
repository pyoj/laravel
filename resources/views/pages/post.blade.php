@extends("layout.app")

@section("title", "Post - " .  $post->title)

@section('content')
    <div class="content">
        @include('components.button')
        <div style="text-align: center">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->description }}</p>
        </div>
        <hr />
        <p>Keywords: {{ $post->keywords }}</p>
    </div>
@endsection