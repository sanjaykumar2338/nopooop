@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@extends('frontend.layout.otherpage')
@section('content')
    <section class="root-customer aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="right-text-bx">
                        <div class="section-title">
                            <h2>
                                @if ($page)
                                    {!! $page->title !!}
                                @else
                                    <p>No homepage content found.</p>
                                @endif
                            </h2>
                        </div>
                        <p>{!! $page->description !!}</p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        @foreach($faq as $key => $q)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne{{ $key }}">
                                    <button class="accordion-button {{ $key != 0 ? 'collapsed' : '' }}" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapseOne{{ $key }}" 
                                            aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" 
                                            aria-controls="collapseOne{{ $key }}">
                                        {!! $q->title !!}
                                    </button>
                                </h2>
                                <div id="collapseOne{{ $key }}" 
                                    class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" 
                                    aria-labelledby="headingOne{{ $key }}" 
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $q->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
