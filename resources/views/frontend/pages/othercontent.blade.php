@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@extends('frontend.layout.otherpage')
@section('content')
    @if ($page)
        {!! $page->description !!}
    @else
        <p>No homepage content found.</p>
    @endif

@endsection
