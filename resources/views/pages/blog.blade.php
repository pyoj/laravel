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
    <div class="content">
        <h1>Blog</h1>
        <div class="item">
            <p>Name: Post 1</p>
            <p>Descrption: Post 1 description</p>
            <a href="/post/post-1">Read</a>
        </div>
        <div class="item">
            <p>Name: Post 2</p>
            <p>Descrption: Post 2 description</p>
            <a href="/post/post-2">Read</a>
        </div>
        <div class="item">
            <p>Name: Post 3</p>
            <p>Descrption: Post 3 description</p>
            <a href="/post/post-3">Read</a>
        </div>
    </div>
@endsection