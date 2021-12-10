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
        <div style="background-color: #555;display: inline-block;cursor: pointer;">
            <a href="{{ route('posts.create') }}" style="color:white;text-decoration:none;padding: 0px 32px;">Create Post</a>
        </div>

            @if ($message = Session::get("success"))
                <h1 style="color:red">{{ $message }}</h1>
            @endif

            @foreach ($posts as $post)
            <div class="item">
                <h1> {{ $post->title }}</h1>
                <a href="{{ route('posts.show', ['slug'=>$post -> slug]) }}">Read</a>
                <a href="{{ route('posts.edit', ['slug'=>$post -> slug]) }}">Edit</a>

                <form action="{{ route("posts.destroy", $post->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
            @endforeach
    </div>
@endsection