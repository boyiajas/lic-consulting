@extends('layouts.default')

@section('content')

{{-- Hero Section --}}
<section class="page-hero py-5 text-white position-relative" style="background: url('{{ asset('assets/images/hero/slider2.jpg') }}') no-repeat center center / cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="fw-bold mb-3">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</section>

{{-- Company History --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" alt="Company History" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Company History</h3>
                <p>LIC Consulting is a black-owned consulting engineering and construction firm founded in 2005 by historically disadvantaged professionals in South Africa. It was established to address the lack of representation in the built environment and is driven by a client-centric and community-conscious approach to infrastructure development.</p>
            </div>
        </div>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6">
                <h4 class="fw-bold">Our Mission</h4>
                <p>To develop and implement solutions that are innovative, environmentally considerate and economically viable, while addressing the social needs of the communities we serve.</p>
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold">Our Vision</h4>
                <p>To be a leading firm in the built environment, integrating infrastructure with social development for sustainable community empowerment.</p>
            </div>
        </div>
    </div>
</section>

{{-- Company Values --}}
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Our Values</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="bg-white p-4 shadow-sm h-100 rounded text-center">
                    <i class="bi bi-check-circle-fill fs-2 text-danger mb-3"></i>
                    <h6 class="fw-semibold">Integrity</h6>
                    <p class="text-muted small">We uphold integrity and professionalism in everything we do.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 shadow-sm h-100 rounded text-center">
                    <i class="bi bi-people-fill fs-2 text-danger mb-3"></i>
                    <h6 class="fw-semibold">Transparency</h6>
                    <p class="text-muted small">We provide open and honest solutions for our clients and partners.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 shadow-sm h-100 rounded text-center">
                    <i class="bi bi-lightbulb-fill fs-2 text-danger mb-3"></i>
                    <h6 class="fw-semibold">Knowledge Sharing</h6>
                    <p class="text-muted small">We believe in skills and technology transfer to our staff and communities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Ownership & Structure --}}
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6 order-md-2">
                <img src="https://placehold.co/600x400" alt="Ownership" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Ownership & Structure</h3>
                <p>LIC Consulting is a 100% black-owned, multidisciplinary firm operating across the Free State, Gauteng, and Eastern Cape. All company directors are HDIs with deep expertise in the built environment.</p>
                <p>The company complies with the Employment Equity Act and is committed to developing HDIs across the industry.</p>
            </div>
        </div>
    </div>
</section>

{{-- BEE Compliance --}}
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">BEE Commitment</h3>
        <div class="text-center mx-auto" style="max-width: 800px;">
            <p>LIC Consulting is proud to be a Level 1 Black Economic Empowerment (BEE) contributor. The company is 100% HDI-owned and committed to driving transformation across all levels of operation in line with the DTI's Codes of Good Practice.</p>
            <img src="https://placehold.co/150x150" alt="BEE Level" class="img-fluid mt-3 rounded-circle shadow-sm">
        </div>
    </div>
</section>

@endsection
