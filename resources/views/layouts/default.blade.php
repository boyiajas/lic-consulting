<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ewetse Consulting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

        {{-- Swiper CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">




    {{-- Custom Styles --}}
    <style>
    .hero-slide {
        height: 650px;
        background-size: cover;
        background-position: center;
        position: relative;
        color: white;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .hero-slide::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .hero-slide > * {
        position: relative;
        z-index: 2;
    }

    .hero-slide h1 {
        font-size: 4rem;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        animation: fadeInDown 1s ease-in-out;
    }

    .hero-slide p {
        font-size: 1.25rem;
        margin-top: 0.5rem;
        animation: fadeInUp 1.5s ease-in-out;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-container {
        background-color: rgba(0, 51, 102, 0.8);
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 2rem;
        z-index: 3;
    }

    .consultation-form {
        padding: 1rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .consultation-form input, .consultation-form button {
        margin: 0.5rem;
    }

    .service-card {
        background: white;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 4px;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }
    .service-card:hover .service-content {
        background-color: #133b64;
        color: white !important;
    }

    .service-card:hover .service-content h5,
    .service-card:hover .service-content p,
    .service-card:hover .service-content a {
        color: white !important;
    }

    .service-image {
        height: 200px;
        background-size: cover;
        background-position: center;
        transition: transform 0.3s ease;
    }

    .service-card:hover .service-image {
        transform: scale(1.05);
    }

    .grayscale-hover {
        filter: grayscale(100%);
        transition: filter 0.3s ease;
    }
    .grayscale-hover:hover {
        filter: grayscale(0%);
    }

    .hover-shadow {
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .hover-shadow:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    .icon-hover {
        transition: transform 0.3s ease;
    }
    .hover-shadow:hover .icon-hover {
        transform: scale(1.2);
    }
    .footer-dark {
        background-color: #133b64;
        color: #FFF;
        font-size: 0.95rem;
    }

    .footer-dark a:hover {
        text-decoration: underline;
        color: #fff !important;
    }

    .footer-dark .form-control:focus {
        box-shadow: none;
        border-color: #dc3545;
    }

    .why-choose-us img {
        filter: grayscale(100%);
        transition: all 0.3s ease;
    }

    .why-choose-us img:hover {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    .navbar-logo img{
        height: 65px;
    }
    

    @media (max-width: 768px) {
        .hero-slide h1 {
            font-size: 2.2rem;
        }

        .hero-slide p {
            font-size: 1rem;
        }

        .consultation-form {
            flex-direction: column;
            align-items: center;
        }

        .consultation-form input, .consultation-form button {
            width: 90%;
        }
    }
</style>

</head>
<body>
    <section class="top-bar py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap small">

                {{-- Left: Contact Info --}}
                <div class="d-flex gap-4 align-items-center">
                    <div>
                        <i class="bi bi-envelope-fill text-warning me-1"></i> info@ewetse.co.za
                    </div>
                    <div>
                        <i class="bi bi-geo-alt-fill text-warning me-1"></i> 10 Van Blerk Avenue, Groenvlei Bloemfontein, 9321
                    </div>
                </div>

                {{-- Right: Social Icons --}}
                <div class="d-flex gap-3">
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-telephone-fill text-warning me-1 "></i>+27 (0)81 573 9251</a> | 
                    <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>
    </section>

    <section>
        
        {{-- Bootstrap Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
            <div class="container">
            <a class="navbar-logo fw-bold text-primary" href="/"><img src="{{ asset('assets/images/logos/logo-dark.png') }}" class="img-fluid" alt="Finance Consultancy"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-bold" href="/">HOME</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/about-us">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/#services">SERVICES</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PROJECTS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/flagship-project">Flagship Projects</a></li>
                            <li><a class="dropdown-item" href="/project-experience">Project Experience</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/contact-us">CONTACTS</a></li>
                </ul>
            </div>
            </div>
        </nav>
        
    </section>

    {{-- Yield main content --}}
    <main>
        @include('partials.flash-message')
        
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer-dark text-white pt-5">
        <div class="container">
            <div class="row">

                {{-- Brand / About --}}
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold text-uppercase">
                    <a class="navbar-logo fw-bold text-primary" href="#"><img src="{{ asset('assets/images/logos/logo-light.png') }}" class="img-fluid" alt="Finance Consultancy"></a>
                    </h5>
                   
                    <p class="mt-3 small "><i class="bi bi-geo-alt-fill text-warning me-1"></i>
                    10 Van Blerk Avenue,
                        Groenvlei
                        Bloemfontein,
                        9321
                    </p>
                    <p>
                        <i class="bi bi-envelope-fill text-warning me-1"></i> info@ewetse.co.za
                    </p>
                    <p>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-telephone-fill text-warning me-1 "></i>+27 (0)81 573 9251</a>
                    </p>
                   
                </div>

                {{-- Quick Links --}}
                <div class="col-md-2 mb-4">
                    <h6 class="fw-bold text-uppercase">Quick Links</h6>
                    <hr class="bg-danger mb-2 mt-1" style="width: 50px; height: 2px;">
                    <ul class="list-unstyled small">
                        <li class="my-2"><a href="/" class="text-white text-decoration-none">Home</a></li>
                        <li class="my-2"><a href="/about-us" class="text-white text-decoration-none">About us</a></li>
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">Company History</a></li>
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">Request call back</a></li>
                        <li class="my-2"><a href="/contact-us" class="text-white text-decoration-none">Contact us</a></li>
                    </ul>
                </div>

                {{-- Services --}}
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold text-uppercase">Services</h6>
                    <hr class="bg-danger mb-2 mt-1" style="width: 50px; height: 2px;">
                    <ul class="list-unstyled small">
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">Online Consultancy</a></li>
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">Investment Planning</a></li>
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">Financial Analysis</a></li>
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">General Consultancy</a></li>
                        <li class="my-2"><a href="#" class="text-white text-decoration-none">Business Development</a></li>
                    </ul>
                </div>

                {{-- Newsletter --}}
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold text-uppercase">Subscribe Newsletter</h6>
                    <hr class="bg-danger mb-2 mt-1" style="width: 50px; height: 2px;">
                    <p class="small">Get latest updates and offers.</p>
                    <form class="d-flex mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="Enter your email">
                        <button class="btn btn-danger btn-sm" type="submit">
                            <i class="bi bi-envelope-fill"></i>
                        </button>
                    </form>
                    <div class="d-flex gap-2">
                        <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
         {{-- Bottom bar --}}
         <div class="text-center mt-4 border-top border-secondary py-3 small ">
            <div class="container d-flex justify-content-between align-items-center">
                <div>Copyright © Consultex {{ date('Y') }}. All rights reserved.</div>
                <div>Created by: <span class="text-danger">Izwetech</span></div>
            </div>
        </div>
    </footer>


</body>
</html>
