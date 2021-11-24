@extends("layout.app")

@section("title", "Post - " .  $title)

@section('content')
    <div class="content">
        @include('components.button')
        <div style="text-align: center">
            <h1>{{ $title }}</h1>
        </div>
    </div>
@endsection