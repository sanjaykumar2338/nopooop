@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@extends('frontend.layout.homepagenew')
@section('content')

    <!-- ========== Start Customers section ========== -->
    @php
        use App\Models\Pages;
        $page = Pages::where('slug', 'homepage')->first();
    @endphp

    @if ($page)
        {!! $page->description !!}
    @else
        <p>No homepage content found.</p>
    @endif

@endsection
