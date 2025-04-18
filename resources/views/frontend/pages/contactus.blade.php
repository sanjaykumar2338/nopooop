@extends('frontend.layout.otherpage')

@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('content')
<section class="py-5 contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Page Title -->
                <div class="section-title mb-4 text-center">
                    <h2>{{ $page->title ?? 'Contact Us' }}</h2>
                </div>

                <!-- Page Description -->
                <div class="mb-4">
                    {!! $page->description !!}
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div class="p-4 bg-white rounded shadow-sm">
                    <form action="{{ route('contact.save') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Service Address (optional)</label>
                            <input type="text" name="address" class="form-control" id="address">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="5" id="message" placeholder="How can we help? Schedule service, request a quote, or ask about HOA compliance." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="mt-4 text-center">
                    <p class="mb-1 fw-bold">Need Help Now?</p>
                    <p>
                        Call <a href="tel:+{{getSetting('phone')}}">{{ getSetting('phone') }}</a> or 
                        <a href="{{ url('/book-now') }}">book online</a> for immediate support.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
