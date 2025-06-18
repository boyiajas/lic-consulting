@extends('layouts.default')

@section('content')

<style>
.transition-hover {
    transition: background-color 0.3s ease, color 0.3s ease;
}
.transition-hover:hover {
    background-color: rgb(19, 59, 100) !important;
    color: #fff;
    cursor: pointer;
}
.icon-color {
    color: #dc3545;
}
table th {
    background-color: #f8f9fa;
}
</style>

{{-- Hero --}}
<section class="page-hero py-5 text-white position-relative" style="background: url('{{ asset('assets/images/hero/slider2.jpg') }}') no-repeat center center / cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="fw-bold">Project Experience</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mt-2">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Project Experience</li>
            </ol>
        </nav>
    </div>
</section>

{{-- Intro --}}
<section class="py-5 bg-light text-center">
    <div class="container">
        <h3 class="fw-bold">Our Project Footprint</h3>
        <p class="text-muted">We’ve successfully delivered infrastructure projects across multiple sectors.</p>
    </div>
</section>

{{-- Category Section --}}
@php
$categories = [
    [
        'title' => 'ROADS & STORM WATER PROJECTS',
        'icon' => 'bi-signpost-2',
        'rows' => [
            ['NALA LOCAL MUNICIPALITY', 'ROADS & STORM WATER KGOTSONG PEDESTRIAN BRIDGES OVER STORM WATER CHANNELS PROJECTS', 'R2M', 'Design, tender process, contract administration and site monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG PAVED ROADS PHASE 4', 'R10M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG PAVED ROADS PHASE 4C', 'R13M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG PAVED ROADS PHASE 4A', 'R17M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG PAVED ROADS PHASE 4B', 'R19M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['GREAT KEI MUNICIPALITY', 'SOTO VILLAGE ROADS', 'R2M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['AMAHLATHI MUNICIPALITY', 'GOSHEN INTERNAL ROADS', 'R8M', 'Detail Design, tender process, contract administration and site monitoring'],
        ]
    ],
    [
        'title' => 'ENVIRONMENTAL ENGINEERING & MANAGEMENT SERVICES',
        'icon' => 'bi-droplet-fill',
        'rows' => [
            ['PHUMELELA LOCAL MUNICIPALITY', 'SCOPING EIA FOR WARDEN DAM', 'R540 000.00', 'EIA Scoping Process'],
            ['TOKOLOGO LOCAL MUNICIPALITY', 'INTEGRATED WASTE MANAGEMENT PLAN', 'R300 000.00', 'Reticulation for settlements'],
            ['PHUMELELA LOCAL MUNICIPALITY', 'BASIC EIA, WARDEN BULK SEWER', 'R198 000.00', 'compilation of The EIA report for the Warden Dam'],
            ['XHARIEP DISTRICT MUNICIPALITY', 'ENVIRONMENTAL MANAGEMENT FRAMEWORK', 'R350 000.00', 'Compilation of the Waste Management Plan for the Municipality'],
            ['TOKOLOGO LOCAL MUNICIPALITY', 'OFFICER', 'R3.5M', 'Conducting environmental monitoring and reporting as required by the ROD to the DEAT.'],
            ['INTSIKA YETHU MUNICIPALITY', 'ENVIRONMENTAL CONTROL COFIMVABA LANDFILL SITE UPGRADE', 'R9.5M', ''],
        ]
    ],
    [
        'title' => 'WATER & SANITATION PROJECT',
        'icon' => 'bi-water',
        'rows' => [
            ['TOKOLOGO LOCAL MUNICIPALITY', 'REGIONAL BULK WATER SCHEME (PHASE 2)', 'R300M', 'Feasibility Study, Design, tender process, contract administration and site monitoring'],
            ['TOKOLOGO LOCAL MUNICIPALITY', 'REGIONAL BULK WATER SCHEME (PHASE 1)', 'R130M', 'Feasibility Study, Design, tender process, contract administration and site monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG OUTFALL SEWER', 'R8M', 'Feasibility Study, Design, tender process, contract administration and site monitoring'],
            ['MATJHABENG LOCAL MUNICIPALITY', 'ODENDAALSRUS OUTFALL SEWER', 'R9M', 'Feasibility Study, Design, tender process, contract administration and site monitoring'],
        ]
    ],
    [
        'title' => 'BUILDING SERVICES & PROJECT MANAGEMENT',
        'icon' => 'bi-house-check-fill',
        'rows' => [
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG AND MONYAKENG MULTI PURPOSE CENTRES', 'R8M', 'Detail design and contract monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG NEW TENNIS COURTS & ASSOCIATED STRUCTURES', 'R3M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['NALA LOCAL MUNICIPALITY', 'KGOTSONG & MONYEKENG ASSOCIATED STRUCTURES', 'R4M', 'Detail Design, tender process, contract administration and site monitoring'],
            ['PHUMELELA LOCAL MUNICIPALITY', 'CEMETERY FENCING & PMU SERVICES', 'R3,5M', 'Supervision of all MIG and other funded projects, certificate verification, site monitoring, projects budget & financial reports.'],
            ['MATJHABENG LOCAL MUNICIPALITY', 'PMU SERVICES', 'R900,000.00', 'Supervision of all MIG and other funded projects, certificate verification, site monitoring, projects budget & financial reports.'],
        ]
    ],
];
@endphp

@foreach ($categories as $category)
<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="mb-4">
            <h4 class="fw-bold mb-3">
                <i class="bi {{ $category['icon'] }} me-2 icon-color"></i> {{ $category['title'] }}
            </h4>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Project Title</th>
                        <th>Capital Value</th>
                        <th>Service Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category['rows'] as $row)
                        <tr>
                            <td>{{ $row[0] }}</td>
                            <td>{{ $row[1] }}</td>
                            <td>{{ $row[2] }}</td>
                            <td>{{ $row[3] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endforeach

{{-- CTA --}}
<section class="py-5 bg-danger text-white text-center">
    <div class="container">
        <h4 class="fw-bold mb-2">Looking for reliable infrastructure expertise?</h4>
        <p class="mb-4">Ewetse Consulting has the experience and capacity to deliver quality solutions.</p>
        <a href="{{ url('/contact-us') }}" class="btn btn-outline-light px-4">Contact Us</a>
    </div>
</section>

{{-- AOS --}}
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

@endsection
