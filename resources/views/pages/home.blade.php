@extends('layouts.default')

@section('content')
<section class="swiper hero-slider">
    <div class="swiper-wrapper">
        {{-- Slide 1 --}}
        <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('assets/images/hero/slider3.png') }}')">
            <div class="slide-content text-center">
                <h1 class="animate__animated">CONSULTING SERVICES</h1>
                <p class="animate__animated">Innovative and sustainable development solutions.</p>
            </div>
            @include('partials.consultation-form')
        </div>

        {{-- Slide 2 --}}
        <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('assets/images/hero/slider1.jpg') }}')">
            <div class="slide-content text-center">
                <h1 class="animate__animated">ENGINEERING EXPERTISE</h1>
                <p class="animate__animated">High-quality, tailored infrastructure and project delivery.</p>
            </div>
            @include('partials.consultation-form')
        </div>

        {{-- Slide 3 --}}
        <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('assets/images/hero/slider2.jpg') }}')">
            <div class="slide-content text-center">
                <h1 class="animate__animated">INFRASTRUCTURE SOLUTIONS</h1>
                <p class="animate__animated">Empowering communities through infrastructure excellence.</p>
            </div>
            @include('partials.consultation-form')
        </div>
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</section>

<!-- <section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center fw-bold">Services</h3>
        <hr class="mx-auto bg-danger mb-5" style="width: 60px; height: 3px;">

        <div class="row g-4">
            {{-- Service Card 1 --}}
            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="service-image" style="background-image: url('{{ asset('assets/images/services/service3-1-740x440.jpg') }}');"></div>
                    <div class="service-content p-4">
                        <h5 class="fw-bold">Financial Services</h5>
                        <p class="text-muted">Companies dislike the term ‘turnaround consulting’ because it represents failure. The truth is that turnaround consulting represents success.</p>
                        <a href="#" class="text-decoration-none fw-bold">read more <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Service Card 2 --}}
            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="service-image" style="background-image: url('{{ asset('assets/images/services/service3-1-740x440.jpg') }}');"></div>
                    <div class="service-content p-4">
                        <h5 class="fw-bold">Strategic planning</h5>
                        <p class="text-muted">Bonds and commodities are much more stable than stocks and trades. We allow our clients to invest in the right bonds & commodities.</p>
                        <a href="#" class="text-decoration-none fw-bold">read more <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="col-md-4">
                <div class="service-card h-100">
                    <div class="service-image" style="background-image: url('{{ asset('assets/images/services/service3-1-740x440.jpg') }}');"></div>
                    <div class="service-content p-4">
                        <h5 class="fw-bold">Audit & Assurance</h5>
                        <p class="text-muted">Audit and assurance is all about meticulous data analysis. Everything needs to be checked, double checked, and triple checked.</p>
                        <a href="#" class="text-decoration-none fw-bold">read more <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="discover-services py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">OUR SERVICES</h3>
            <p class="text-muted">At LIC when dealing with problems or projects we always strive for solutions that are environmentally
economically and socially friendly, in all our areas of expertise this principle forms basisof sustainable
development.</p>
            <hr class="mx-auto bg-danger mb-5" style="width: 60px; height: 3px;">
        </div>

        <div class="row g-4">

            {{-- Service 1: Urban & Rural Roads --}}
            <div class="col-md-4">
                <div class="service-box p-4 bg-white shadow-sm text-center h-100 rounded hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="bi bi-signpost-2 fs-1 text-danger"></i>
                    </div>
                    <h5 class="fw-semibold">URBAN & RURAL ROADS</h5>
                    <p class="text-muted small">We deliver integrated road infrastructure solutions for both urban and rural developments, ensuring accessibility and connectivity.</p>
                </div>
            </div>

            {{-- Service 2: Water & Sanitation --}}
            <div class="col-md-4">
                <div class="service-box p-4 bg-white shadow-sm text-center h-100 rounded hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="bi bi-droplet-half fs-1 text-danger"></i>
                    </div>
                    <h5 class="fw-semibold">WATER & SANITATION</h5>
                    <p class="text-muted small">Designing and implementing sustainable water supply and sanitation systems to promote health and environmental safety.</p>
                </div>
            </div>

            {{-- Service 3: Environs & Support Service --}}
            <div class="col-md-4">
                <div class="service-box p-4 bg-white shadow-sm text-center h-100 rounded hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="bi bi-recycle fs-1 text-danger"></i>
                    </div>
                    <h5 class="fw-semibold">ENVIRONS & SUPPORT SERVICE</h5>
                    <p class="text-muted small">Environmental planning, compliance, and support services tailored to ensure sustainable project development.</p>
                </div>
            </div>

            {{-- Service 4: Structural & Building --}}
            <div class="col-md-4">
                <div class="service-box p-4 bg-white shadow-sm text-center h-100 rounded hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="bi bi-building fs-1 text-danger"></i>
                    </div>
                    <h5 class="fw-semibold">STRUCTURAL & BUILDING</h5>
                    <p class="text-muted small">Engineering and architectural solutions for commercial, residential, and institutional structures.</p>
                </div>
            </div>

            {{-- Service 5: Performance Monitoring --}}
            <div class="col-md-4">
                <div class="service-box p-4 bg-white shadow-sm text-center h-100 rounded hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="bi bi-speedometer2 fs-1 text-danger"></i>
                    </div>
                    <h5 class="fw-semibold">PERFORMANCE MONITORING</h5>
                    <p class="text-muted small">Real-time monitoring and evaluation systems to ensure project efficiency, effectiveness, and transparency.</p>
                </div>
            </div>

            {{-- Service 6: Organization and Tutor --}}
            <div class="col-md-4">
                <div class="service-box p-4 bg-white shadow-sm text-center h-100 rounded hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="bi bi-person-video3 fs-1 text-danger"></i>
                    </div>
                    <h5 class="fw-semibold">ORGANIZATION & TUTOR</h5>
                    <p class="text-muted small">Capacity-building programs, workshops, and technical training for individuals and institutions.</p>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="latest-projects py-5 text-white position-relative" style="background: url('{{ asset('assets/images/hero/slider12.jpg') }}') no-repeat center center / cover;">
    {{-- Dark overlay --}}
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 46, 87, 0.8); z-index: 1;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <h3 class="text-center fw-bold">Latest Projects</h3>
        <hr class="mx-auto bg-danger mb-5" style="width: 60px; height: 3px;">

        <div class="swiper latest-projects-slider">
            <div class="swiper-wrapper">

                {{-- Project 1 --}}
                <div class="swiper-slide text-center px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/projects/service3-1-740x440.jpg') }}" class="img-fluid mb-3 shadow-sm" alt="Kgotso Paved Roads">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-semibold">Kgotso Paved Roads Phase 4, 4A, 4B & 4C</h4>
                            <small class="fst-italic text-warning">R60 Million • Roads & Stormwater</small>
                            <p class="mt-2 small">Client: Nala Local Municipality<br>Funder: Municipal Infrastructure Grant</p>
                        </div>
                    </div>                   
                </div>

                {{-- Project 2 --}}
                <div class="swiper-slide text-center px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/projects/service3-1-740x440.jpg') }}" class="img-fluid mb-3 shadow-sm" alt="Outfall Sewer Upgrade">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-semibold">Kgotso Outfall Sewer Upgrade</h4>
                            <small class="fst-italic text-warning">R8.6 Million • Sewer Systems Engineering</small>
                            <p class="mt-2 small">Client: Nala Local Municipality<br>Funder: MIG</p>
                        </div>
                    </div>                   
                </div>

                {{-- Project 3 --}}
                <div class="swiper-slide text-center px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/projects/service3-1-740x440.jpg') }}" class="img-fluid mb-3 shadow-sm" alt="Multipurpose Centre">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-semibold">Monyakeng Multipurpose Centre</h4>
                            <small class="fst-italic text-warning">R8 Million • Building Works</small>
                            <p class="mt-2 small">Client: Nala Local Municipality<br>Funder: Human Settlement Free State</p>
                        </div>
                    </div>                   
                </div>

                {{-- Project 4 --}}
                <div class="swiper-slide text-center px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/projects/service3-1-740x440.jpg') }}" class="img-fluid mb-3 shadow-sm" alt="Bulk Water Scheme">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-semibold">Tokologo Regional Bulk Water Scheme</h4>
                            <small class="fst-italic text-warning">R130M + R350M • Water Engineering</small>
                            <p class="mt-2 small">Client: Tokologo Local Municipality<br>Funder: DWA & MIG</p>
                        </div>
                    </div>                   
                </div>

            </div>

            {{-- Swiper pagination and navigation --}}
            <div class="swiper-pagination mt-4"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>



<section class="why-choose-us py-5 bg-light text-dark">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">WHY CHOOSE US</h3>
            <hr class="mx-auto bg-danger" style="width: 60px; height: 3px;">
        </div>

        <div class="row g-4">

            {{-- Box 1 --}}
            <div class="col-md-4">
                <div class="choose-box p-4 bg-white text-center shadow-sm rounded h-100 hover-shadow">
                    <i class="bi bi-laptop fs-1 text-danger mb-3 icon-hover"></i>
                    <h6 class="fw-bold">Travel and Aviation Consulting</h6>
                    <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            {{-- Box 2 --}}
            <div class="col-md-4">
                <div class="choose-box p-4 bg-white text-center shadow-sm rounded h-100 hover-shadow">
                    <i class="bi bi-graph-up-arrow fs-1 text-danger mb-3 icon-hover"></i>
                    <h6 class="fw-bold">Business Services Consulting</h6>
                    <p class="text-muted small">Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                </div>
            </div>

            {{-- Box 3 --}}
            <div class="col-md-4">
                <div class="choose-box p-4 bg-white text-center shadow-sm rounded h-100 hover-shadow">
                    <i class="bi bi-easel-fill fs-1 text-danger mb-3 icon-hover"></i>
                    <h6 class="fw-bold">Consumer Products Consulting</h6>
                    <p class="text-muted small">The end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards.</p>
                </div>
            </div>

            {{-- Box 4 --}}
            <div class="col-md-4">
                <div class="choose-box p-4 bg-white text-center shadow-sm rounded h-100 hover-shadow">
                    <i class="bi bi-shield-lock-fill fs-1 text-danger mb-3 icon-hover"></i>
                    <h6 class="fw-bold">Financial Services Consulting</h6>
                    <p class="text-muted small">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate.</p>
                </div>
            </div>

            {{-- Box 5 --}}
            <div class="col-md-4">
                <div class="choose-box p-4 bg-white text-center shadow-sm rounded h-100 hover-shadow">
                    <i class="bi bi-people-fill fs-1 text-danger mb-3 icon-hover"></i>
                    <h6 class="fw-bold">Energy and Environment Consulting</h6>
                    <p class="text-muted small">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with solutions.</p>
                </div>
            </div>

            {{-- Box 6 --}}
            <div class="col-md-4">
                <div class="choose-box p-4 bg-white text-center shadow-sm rounded h-100 hover-shadow">
                    <i class="bi bi-truck-front-fill fs-1 text-danger mb-3 icon-hover"></i>
                    <h6 class="fw-bold">Surface Transport & Logistics Consulting</h6>
                    <p class="text-muted small">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="our-partners py-5 bg-white">
    <div class="container">
        <h3 class="text-center fw-bold mb-4">Our Partners</h3>

        <div class="swiper partners-slider">
            <div class="swiper-wrapper">

                {{-- Partner 1 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/tradequip.png') }}" alt="Tradequip" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 2 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/atlantis.png') }}" alt="Atlantis" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 3 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/virtus.png') }}" alt="Virtus" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 4 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/bluebird.png') }}" alt="BlueBird" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 5 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/pursho.png') }}" alt="Pursho" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 6 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/virtus2.png') }}" alt="Virtus 2" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 4 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/bluebird.png') }}" alt="BlueBird" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 5 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/pursho.png') }}" alt="Pursho" class="img-fluid grayscale-hover px-2">
                </div>

                {{-- Partner 6 --}}
                <div class="swiper-slide text-center">
                    <img src="{{ asset('assets/images/partners/virtus2.png') }}" alt="Virtus 2" class="img-fluid grayscale-hover px-2">
                </div>

            </div>

            {{-- Optional pagination or navigation --}}
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>


<script>
    new Swiper(".partners-slider", {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        slidesPerView: 2,
        spaceBetween: 30,
        breakpoints: {
            576: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 6,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        }
    });
</script>

<script>
    new Swiper(".latest-projects-slider", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1, // fallback for smallest screens
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 1,
            },
            1200: {
                slidesPerView: 1, // ✅ 4 per slide on desktops
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>




{{-- Swiper + Animate trigger --}}
<script>
    const swiper = new Swiper('.hero-slider', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            slideChangeTransitionStart: function () {
                document.querySelectorAll('.swiper-slide .animate__animated').forEach(el => {
                    el.classList.remove('animate__fadeInDown', 'animate__fadeInUp');
                });
            },
            slideChangeTransitionEnd: function () {
                const currentSlide = document.querySelector('.swiper-slide-active');
                const h1 = currentSlide.querySelector('h1');
                const p = currentSlide.querySelector('p');

                if (h1) h1.classList.add('animate__fadeInDown');
                if (p) p.classList.add('animate__fadeInUp');
            }
        }
    });
</script>
@endsection
