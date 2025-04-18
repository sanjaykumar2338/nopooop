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
                                @if ($page!=='homepage')
                                    {!! $page->title !!}
                                @else
                                    <p>No homepage content found.</p>
                                @endif
                            </h2>
                        </div>
                        <p>{!! $page->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
