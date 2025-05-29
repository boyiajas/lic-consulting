@extends('layouts.default')

@section('content')

{{-- Hero Section --}}
<section class="page-hero py-5 text-white position-relative" style="background: url('{{ asset('assets/images/hero/slider2.jpg') }}') no-repeat center center / cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="fw-bold mb-3">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>

{{-- Company Details --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Company Details</h3>
            <hr class="mx-auto bg-dark" style="width: 80px; height: 3px;">
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <h5 class="fw-bold mb-4"><i class="bi bi-building me-2 text-danger"></i> HEAD OFFICE</h5>

                <p class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-danger"></i> 10 Van Blerk Avenue, Groenvlei, Bloemfontein, 9321</p>
                <p class="mb-2"><i class="bi bi-telephone-fill me-2 text-danger"></i> +27 (0)81 573 9251</p>
                <p class="mb-2"><i class="bi bi-envelope-fill me-2 text-danger"></i> 
                    <a href="mailto:info@licconsulting.co.za" class="text-decoration-none text-dark">info@licconsulting.co.za</a>
                </p>
                <p class="mb-4"><i class="bi bi-globe2 me-2 text-danger"></i> 
                    <a href="http://www.licconsulting.co.za" target="_blank" class="text-decoration-none text-dark">www.licconsulting.co.za</a>
                </p>

                <div class="d-flex justify-content-center gap-3 fs-5 mt-3">
                    <a href="#" class="text-danger"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-danger"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-danger"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-danger"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Google Map --}}
<section class="map-section">
    <div class="container-fluid px-0">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.6129815115195!2d26.16084997559432!3d-29.100155981989333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8fdf4ad47e5b45%3A0x3d34cf0fd3e64d62!2s10%20Van%20Blerk%20Ave%2C%20Groenvlei%2C%20Bloemfontein%2C%209321!5e0!3m2!1sen!2sza!4v1716740328510" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

{{-- Contact Form --}}
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Send Us a Message</h3>
            <p class="text-muted">We’d love to hear from you. Fill out the form and we’ll get back to you shortly.</p>
        </div>

        @include('partials.flash-message')

        <form action="{{ route('contact.submit') }}" method="POST" class="row g-4">
            @csrf
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
                <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-danger px-5">Send Message</button>
            </div>
        </form>
    </div>
</section>

@endsection
