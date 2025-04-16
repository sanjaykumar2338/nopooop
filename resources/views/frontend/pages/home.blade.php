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
