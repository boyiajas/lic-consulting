@extends('layouts.default')

@section('content')

{{-- Hero Section --}}
<section class="page-hero py-5 text-white position-relative" style="background: url('{{ asset('assets/images/hero/slider2.jpg') }}') no-repeat center center / cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="fw-bold">Flagship Projects</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mt-2">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Project</li>
                <li class="breadcrumb-item active text-white" aria-current="page">Flagship Projects</li>
            </ol>
        </nav>
    </div>
</section>

{{-- Projects Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Our Flagship Projects</h3>
            <p class="text-muted">Highlighted infrastructure projects that demonstrate our capability, impact, and commitment to community development.</p>
        </div>

        <div class="row g-4">

            {{-- Project 1 --}}
            <div class="col-md-6">
                <div class="bg-white shadow-sm rounded p-4 h-100">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/projects/flagship/flagship1.png') }}" class="img-fluid rounded" alt="Kgotson Paved Roads">
                    </div>
                    <h5 class="fw-bold mb-1">Kgotson Paved Roads Phase 4, 4A, 4B & 4C</h5>
                    <p class="mb-1 text-muted"><i class="bi bi-building me-1 text-danger"></i> Nala Local Municipality</p>
                    <p class="mb-1 text-muted"><i class="bi bi-cash-coin me-1 text-danger"></i> R60 Million</p>
                    <p class="mb-2 text-muted"><i class="bi bi-tools me-1 text-danger"></i> Roads & Stormwater</p>
                    <p><strong>Funder:</strong> Municipal Infrastructure Grant (MIG)</p>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="col-md-6">
                <div class="bg-white shadow-sm rounded p-4 h-100">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/projects/flagship/flagship2.png') }}" class="img-fluid rounded" alt="Sewer Upgrade">
                    </div>
                    <h5 class="fw-bold mb-1">Kgotson Outfall Sewer Upgrade</h5>
                    <p class="mb-1 text-muted"><i class="bi bi-building me-1 text-danger"></i> Nala Local Municipality</p>
                    <p class="mb-1 text-muted"><i class="bi bi-cash-coin me-1 text-danger"></i> R8.6 Million</p>
                    <p class="mb-2 text-muted"><i class="bi bi-tools me-1 text-danger"></i> Sewer Systems Engineering</p>
                    <p><strong>Funder:</strong> MIG</p>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="col-md-6">
                <div class="bg-white shadow-sm rounded p-4 h-100">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/projects/flagship/flagship3.png') }}" class="img-fluid rounded" alt="Multipurpose Centre">
                    </div>
                    <h5 class="fw-bold mb-1">Monyakeng Multipurpose Centre</h5>
                    <p class="mb-1 text-muted"><i class="bi bi-building me-1 text-danger"></i> Nala Local Municipality</p>
                    <p class="mb-1 text-muted"><i class="bi bi-cash-coin me-1 text-danger"></i> R8 Million</p>
                    <p class="mb-2 text-muted"><i class="bi bi-tools me-1 text-danger"></i> Multi Discipline / Building Works</p>
                    <p><strong>Funder:</strong> Human Settlement Free State</p>
                </div>
            </div>

            {{-- Project 4 --}}
            <div class="col-md-6">
                <div class="bg-white shadow-sm rounded p-4 h-100">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/projects/flagship/flagship4.png') }}" class="img-fluid rounded" alt="Bulk Water Scheme">
                    </div>
                    <h5 class="fw-bold mb-1">Tokologo Regional Bulk Water Scheme (Phase 1 & 2)</h5>
                    <p class="mb-1 text-muted"><i class="bi bi-building me-1 text-danger"></i> Tokologo Local Municipality</p>
                    <p class="mb-1 text-muted"><i class="bi bi-cash-coin me-1 text-danger"></i> R130M + R350M</p>
                    <p class="mb-2 text-muted"><i class="bi bi-tools me-1 text-danger"></i> Water Engineering</p>
                    <p><strong>Funder:</strong> DWA & MIG</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
