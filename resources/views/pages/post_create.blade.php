@extends("layout.app")

@section("title", "Create new post")

@section("style")
<style>
    form {
        text-align: center;
        width: 40%;
        margin: 0 auto;
    }

    .form-group {
        margin: 3px 0;
    }

    
    label {
        display: block;
    }


    input{
        padding: 3px;
    }

    button {
        margin: 15px 0;
    }
</style>
@endsection

@section('content')
    <div class="content">
        @include('components.button')
        <h2>Create Post</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" />
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection