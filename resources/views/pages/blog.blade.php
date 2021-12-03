@extends("layout.app")

@section("title", "Blog Page")

@section("style")
    <style>
        h1{
            text-align: center;
        }

        .item {
            border: 1px solid black;
            width: 80%;
            display: block;
            margin: 0 auto;
            padding: 20px 40px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
            @foreach ($posts as $post)
            <div class="item">
                <h1> {{ $post->title }}</h1>
                <a href="{{ route('viewPosts', ['slug'=>$post -> slug]) }}">Read</a>
            </div>
            @endforeach
    </div>
@endsection