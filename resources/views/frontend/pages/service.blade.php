@extends('frontend.layout.otherpage')

@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <h2 class="mb-4 text-center">{{ $page->title }}</h2>
        <p class="mb-5 text-center">{!! $page->description !!}</p>

        <!-- Services Grid -->
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm service-box text-center p-4">
                        {{-- Optional Icon or Image --}}
                        {{-- <img src="{{ fileToUrl($service->icon ?? '') }}" alt="Service Icon" class="mb-3" style="width: 60px;"> --}}
                        
                        <h5 class="mb-3">{{ $service->title }}</h5>
                        <p class="text-muted">
                            {{ \Illuminate\Support\Str::words(strip_tags($service->description), 20, '...') }}
                        </p>
                        <a href="{{ url('service/' . $service->slug) }}" class="btn btn-sm btn-primary mt-auto">Learn More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
