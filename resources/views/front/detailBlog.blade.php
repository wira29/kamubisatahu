@extends("template.layout")

@section("content")
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 blog">
                <h1>{{ $blog->title }}</h1>
                <p>16 juli 2021</p>

                <img style="width: 100%" class="detail-image" src="{{ $blog->image }}" alt="">

                <p class="mt-5">{{ $blog->description }}</p>
            </div>
        </div>
    </div>
@endsection
