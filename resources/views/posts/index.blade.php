@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

                @foreach($posts as $post)
                    @include('posts.post')
                @endforeach
                @endsection
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>


@section('footer')

@endsection