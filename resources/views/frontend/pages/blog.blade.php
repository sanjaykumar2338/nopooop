@extends('frontend.layout.otherpage')

@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4">{{ $page->title }}</h2>
        <p>{!! $page->description !!}</p>

        @foreach($blogs as $blog)
            <div class="mb-5 p-4 border rounded shadow-sm bg-white">
                <h4 class="mb-3">{{ $blog->title }}</h4>
                <div class="blog-snippet text-muted">
                    {{ \Illuminate\Support\Str::words(strip_tags($blog->description), 30, '...') }}
                </div>
                <a href="{{ url('blog/' . $blog->slug) }}" class="btn btn-outline-dark mt-3">Read More</a>
            </div>
        @endforeach

        <div class="mt-4 d-flex justify-content-center">
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div>

    </div>
</section>
@endsection
