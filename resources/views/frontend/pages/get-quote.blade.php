@extends('frontend.layout.homepagenew')

@section('content')
<section class="main-section full-container py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <div class="text-center mb-5">
                    <h1 class="page-title">Get a Quote!</h1>
                    <p class="text-muted">Tell us a bit about your needs and we'll get back to you shortly.</p>
                </div>

                @if(session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="{{ route('quote.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label"><b>Name</b></label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Email</b></label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Phone</b> <small class="text-muted">(Optional)</small></label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="mb-4">
                                <label class="form-label"><b>Message</b></label>
                                <textarea name="message" class="form-control" rows="5" placeholder="Tell us what you need..."></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="common-button px-4 py-2">Send Quote</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
