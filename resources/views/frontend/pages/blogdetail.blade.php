@extends('frontend.layout.otherpage')

@section('title', $page->meta_title ?? $page->title)
@section('meta_description', $page->meta_description ?? Str::limit(strip_tags($page->description), 150))
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')
<style>
    .blog-content {
        font-size: 1.1rem;
        line-height: 1.75;
        color: #333;
    }

    .breadcrumb-container .breadcrumb a {
        text-decoration: none;
    }
</style>
<section class="py-5">
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light px-3 py-2 rounded">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/p/blogs') }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                </ol>
            </nav>
        </div>

        <!-- Blog Title -->
        <div class="mb-3">
            <h1 class="display-5 fw-bold text-dark">{{ $page->title }}</h1>
        </div>

        <!-- Optional Publish Date -->
        {{-- <p class="text-muted mb-4"><i class="bi bi-calendar-event"></i> {{ $page->created_at->format('F d, Y') }}</p> --}}

        <!-- Blog Content -->
        <div class="blog-content p-4 bg-white rounded shadow-sm">
            {!! $page->description !!}
        </div>
    </div>
</section>
@endsection
