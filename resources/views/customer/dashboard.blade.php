<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eyenix Eye Care - Eye Opticals</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css')}}" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset(path: 'css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand d-flex align-items-center gap-2 p-0">
                <a href="#" class="navbar-brand fancy-brand d-flex align-items-center gap-3">
                    <!-- Logo Icon -->
                    <div class="logo-icon">
                        <img src="{{ asset('img/logo1.jpeg') }}" alt="Eyenix Eye Care Logo">
                    </div>

                    <!-- Brand Text -->
                    <div class="brand-text">
                        <h1 class="brand-title">
                            Eyenix <span>Eye Care</span>
                        </h1>
                        <p class="brand-tagline">Vision • Style • Comfort</p>
                    </div>

                    <!-- Decorative Lines -->
                    <span class="top-key"></span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('eyecamp') }}" class="nav-item nav-link">EyeCampaign</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Our Products</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('eyeglass') }}" class="dropdown-item">Eye glasses</a>
                            <a href="{{ route('sunglass') }}" class="dropdown-item">Sun glasses</a>
                            <a href="{{ route('contactlens') }}" class="dropdown-item">Contact Lens</a>
                            <a href="{{ route('contactlens.solutions') }}" class="dropdown-item">Contact Solutions</a>
                        </div>
                    </div>
                    <a href="{{ route('contact.index') }}" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="{{ asset('img/banner3.jpg')}}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <br><br><br><br><br><br><br><br><br>
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">
                                        Welcome to Eyenix Eye Care
                                    </h4>

                                    <h1 class="display-4 text-uppercase mb-4 text-abcd">
                                        Find Frames That Fit Your Style Perfectly
                                    </h1>


                                    <p class="mb-5 fs-5">
                                        Upgrade your look with high-quality lenses and trendsetting frames designed for
                                        everyday durability and exceptional visual comfort. See better, live better.
                                    </p>

                                    <div
                                        class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="fancy" href="#">
                                            <span class="top-key"></span>
                                            <span class="text">DISCOVER NOW</span>
                                            <span class="bottom-key-1"></span>
                                            <span class="bottom-key-2"></span>
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-carousel-item">
                <img src="{{ asset('img/banner2.jpg')}}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-end text-md-end text-lg-end hero-text-right">
                                    <br><br><br><br><br><br><br><br><br>

                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Your Vision, Our Priority</h4>

                                    <h1 class="display-4 text-uppercase text-white mb-4">
                                        Stylish Frames Crafted for Everyday Comfort
                                    </h1>

                                    <p class="mb-5 fs-5">
                                        Explore a wide range of modern, lightweight, and durable spectacles designed to
                                        match
                                        your personality and enhance your visual clarity with precision lenses.
                                    </p>

                                    <div class="d-flex justify-content-end flex-shrink-0 mb-4">
                                        <a class="fancy" href="#">
                                            <span class="top-key"></span>
                                            <span class="text">EXPLORE NOW</span>
                                            <span class="bottom-key-1"></span>
                                            <span class="bottom-key-2"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-carousel-item">
                <img src="{{ asset('img/banner11.jpg')}}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-end text-md-end text-lg-end hero-text-right">
                                    <br><br><br><br><br><br><br><br><br>

                                    <h4 class="text-primary text-uppercase fw-bold mb-4"> Modern Eye Care, Trusted
                                        Expertise</h4>

                                    <h1 class="display-4 text-uppercase text-white mb-4">
                                        Find the Perfect Spectacles for Your Vision
                                    </h1>

                                    <p class="mb-5 fs-5">
                                        Discover a premium collection of stylish frames, high-quality lenses, and
                                        advanced eye care solutions. Comfort, clarity, and elegance—all in one place.
                                    </p>

                                    <div class="d-flex justify-content-end flex-shrink-0 mb-4">
                                        <a class="fancy" href="#">
                                            <span class="top-key"></span>
                                            <span class="text">EXPLORE MORE</span>
                                            <span class="bottom-key-1"></span>
                                            <span class="bottom-key-2"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-fluid about py-5 position-relative">
        <div class="about-top-curve">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
                <path d="M0,50 C360,150 1080,0 1440,100 L1440,0 L0,0 Z" fill="var(--red)"></path>
            </svg>
        </div>

        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- TEXT COLUMN -->
                <div class="col-xl-6 fadeInLeft wow" data-wow-delay="0.2s">
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">{{ $about->title ?? 'Eyenix Eye Care' }}
                    </h1>
                    <p>{!! nl2br(e($about->description)) !!}</p>
                </div>


                <!-- IMAGE COLUMN -->
                <div class="col-xl-6 col-lg-6 col-md-12 about-left-wrapper position-relative" data-wow-delay="200ms">
                    <div class="about-spec-frame">
                        <div class="spin-wrapper">
                            <img src="{{ asset('storage/' . $about->spectacle_image) }}" alt="Spectacle Image">

                        </div>


                    </div>
                </div>

            </div>
        </div>

        <!-- Bent Sigmoid Curve at Bottom -->
        <div class="about-curve">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none" style="display:block; width:100%; height:150px;">
                <path d="M0,100 C360,0 1080,150 1440,50 L1440,150 L0,150 Z" fill="var(--red)"></path>
            </svg>
        </div>
    </div>

    <!-- Floating Icons -->
    <div class="dashboard-floating-icons">

        <!-- Chatbot Toggle (Lottie) -->
        <div id="chatbotToggle" style="cursor:pointer; text-align:center;">
            <iframe src="https://lottie.host/embed/ff037b49-d0e1-44b7-87e3-284e9fc8b20e/VN5anB14ce.lottie"
                style="width:120px;height:120px;border:none;pointer-events:none;">
            </iframe>
        </div>

        <!-- WhatsApp -->
        <a href="https://wa.me/9961667111" target="_blank" class="social-float whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/eyenix_eye_care?igsh=N3NrY3p4ejMxZjdq" target="_blank"
            class="social-float instagram">
            <i class="fab fa-instagram"></i>
        </a>

    </div>

    <!-- Chatbot Box -->
    <div id="chatbotBox" style="display:none;">
        <div class="chatbot-header">
            Chat Support
            <span id="closeChatbot">&times;</span>
        </div>

        <div class="chatbot-body" id="chatMessages"></div>

        <div class="chatbot-footer">
            <input type="text" id="userInput" placeholder="Type a message..." />
            <button id="sendBtn"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <!-- Get In Touch Modal -->
    <div class="modal fade" id="getInTouchModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 rounded-4">

                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Get In Touch</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row g-4 align-items-stretch">

                        <!-- Contact Info -->
                        <div class="col-lg-5 d-flex">
                            <div class="contact-info-box p-3 w-100">

                                <div class="d-flex align-items-start mb-3 contact-item">
                                    <i class="fas fa-map-marker-alt contact-icon"></i>
                                    <div>
                                        <h6>Our Location</h6>
                                        <p class="mb-0">
                                            San, Jos River View Complex,<br>
                                            Near Bank of Baroda, Tanthode,<br>
                                            Iritty, Kerala
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-3 contact-item">
                                    <i class="fas fa-phone-alt contact-icon"></i>
                                    <div>
                                        <h6>Call Us</h6>
                                        <a href="tel:+919961667111">+91 99616 67111</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-3 contact-item">
                                    <i class="fas fa-envelope contact-icon"></i>
                                    <div>
                                        <h6>Email</h6>
                                        <a href="mailto:eyenixeyecare@gmail.com">eyenixeyecare@gmail.com</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start contact-item">
                                    <i class="fas fa-clock contact-icon"></i>
                                    <div>
                                        <h6>Working Hours</h6>
                                        <p class="mb-0">
                                            Mon – Sat : 9:30 AM – 7:30 PM<br>
                                            Sunday : Closed
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-lg-7 d-flex">
                            <div class="contact-form-box p-3 w-100 d-flex flex-column">

                                <!-- Heading and Intro -->
                                <h3 class="mb-2 text-white">Get in Touch</h3>
                                <p class="mb-4 text-white">
                                    Have questions or need assistance? Fill out the form below and our team will get
                                    back to you as soon as possible.
                                </p>

                                <form action="{{ route('contact.submit') }}" method="POST" class="d-flex flex-column h-100">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>

                                <div class="col-12">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                </div>

                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="fancy">
                                        <span class="top-key"></span>
                                        <span class="text">Send Message</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </button>
                                </div>
                            </div>
                        </form>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

@php
    $icons = [
        'fas fa-eye',
        'fas fa-glasses',
        'fas fa-eye-dropper',
        'fas fa-clinic-medical',
    ];
@endphp

<!-- Features Start -->
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow" data-wow-delay="0.2s" style="max-width: 800px;">
            <br>
            <h4 class="text-abcd section-title-small">Our Services</h4>
            <h1 class="display-5 mb-4 section-title-main">
                See the Difference: Comprehensive Services for Your Best Vision.
            </h1>
            <p class="mb-0 section-title-text">
                At Eyenix Eye Care, we offer a complete range of modern vision solutions, from precise digital eye
                exams to the latest in eyewear fashion. We connect you with the right technology and products to
                ensure clarity, comfort, and style.
            </p>
        </div>

        <div class="row g-4">

            @foreach($services as $index => $service)
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                     data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">

                    <div class="feature-item p-4">
                        <div class="right-border"></div>
                        <div class="left-border"></div>

                        <!-- ICON -->
                        <div class="feature-icon p-4 mb-4">
                            @if($service->icon)
                                <i class="{{ $service->icon }} fa-4x text-abcd"></i>
                            @else
                                <i class="{{ $icons[$index % count($icons)] }} fa-4x text-abcd"></i>
                            @endif
                        </div>

                        <!-- TITLE -->
                        <h4>{{ $service->title }}</h4>

                        <!-- DESCRIPTION -->
                        <p class="mb-4">
                            {{ $service->description }}
                        </p>

                        <!-- BUTTON -->
                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                            <a class="fancy1" href="{{ route('service') }}">
                                <span class="top-key"></span>
                                <span class="text"> Learn More</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Features End -->


    <!-- Offer Start -->
    <div class="container-fluid offer-section pb-0">
        <div class="offer-top-curve">
            <svg viewBox="0 0 1440 200" preserveAspectRatio="none">
                <path d="M0,120 C360,200 1080,40 1440,120 L1440,0 L0,0 Z" fill="var(--back)"></path>
            </svg>
        </div>

        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 mb-4"> <i>Wear Your Shape </i></h1>
                <h4 class="text-dcba">Discover frames that perfectly match your face shape, enhancing your natural
                    features.</h4>
                <p class="section-desc"></p>

            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="shape-row">

                        <div class="shape-item">
                            <img src="{{ asset('img/Shape/Aviator.png') }}" class="img-fluid">
                            <h5 class="text-dcba">AVIATOR</h5>
                        </div>

                        <div class="shape-item">
                            <img src="{{ asset('img/Shape/Clubmaster.png') }}" class="img-fluid">
                            <h5 class="text-dcba">BROWLINE</h5>
                        </div>

                        <div class="shape-item">
                            <img src="{{ asset('img/Shape/oval.png') }}" class="img-fluid">
                            <h5 class="text-dcba">OVAL</h5>
                        </div>
                        <div class="shape-item">
                            <img src="{{ asset('img/Shape/rectangle.png') }}" class="img-fluid">
                            <h5 class="text-dcba">RECTANGLE</h5>
                        </div>

                    </div>
                </div>

                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="shape-row">
                        {{-- <div id="collapseOne" class="tab-pane fade show p-0 active"> --}}
                            {{-- <div class="shape-row"> --}}
                                <div class="shape-item">

                                </div>

                                <div class="shape-item">
                                    <img src="{{ asset('img/Shape/Cat-Eye.png') }}" class="img-fluid">
                                    <h5 class="text-dcba">CATEYE</h5>
                                </div>
                                <div class="shape-item">
                                    <img src="{{ asset('img/Shape/Wayfarer.png') }}" class="img-fluid">
                                    <h5 class="text-dcba">WAYFARER</h5>
                                </div>



                                <div class="shape-item">
                                    <img src="{{ asset('img/Shape/round.png') }}" class="img-fluid">
                                    <h5 class="text-dcba">ROUND</h5>
                                </div>
                                <div class="shape-item">
                                    <img src="{{ asset('img/Shape/Geometric.png') }}" class="img-fluid">
                                    <h5 class="text-dcba">GEOMETRIC</h5>
                                </div>

                                {{--
                            </div> --}}
                            {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-curve">
            <svg viewBox="0 0 1440 240" preserveAspectRatio="none" class="offer-bottom-svg">
                <path d="M0,140 C360,40 1080,240 1440,120 L1440,240 L0,240 Z" fill="var(--back)"></path>
            </svg>
        </div>
    </div>

    <!-- Offer End -->

    <!-- Brands Start -->
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="section-label">Our Brands</h4>
                <h1 class="section-title">Premium Eyewear Brands We Offer</h1>
                <p class="section-desc">
                    Eyenix Eye Care brings you a curated selection of top-quality eyewear brands.
                    From stylish frames to advanced lenses, we ensure comfort, durability, and unmatched style.
                </p>
            </div>

            <!-- ==== SLIDER FOR ITEMS 4–6 ==== -->
            <div class="brand-nav">
                <button class="brand-prev"><i class="fa fa-chevron-left"></i></button>
                <button class="brand-next"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="brand-slider owl-carousel mt-4">

                <div class="item">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/brand-2.png') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="brand-hover-name">Vogue Eyewear</div>

                    </div>
                </div>

                <div class="item">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/brand-1.png') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="brand-hover-name">Ray-Ban
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/brand-3.png') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="brand-hover-name">Titan Eye+
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/brand-4.png') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="brand-hover-name">Fastrack
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/brand-5.png') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="brand-hover-name">Oakley
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/brand-6.png') }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="brand-hover-name">Carrera
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Brands End -->

    <!-- Blog Start -->
    <div class="container-fluid blog pt-6 pb-5">
        <div class="container pb-5">
            <div class="blog-glass-wrapper">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-dcba">Our Collection</h4>
                    <h1 class="display-5 mb-4">Explore Our Products</h1>
                    <p class="mb-0 text-dcba">Discover the latest products from our collection. Each item is carefully
                        curated to meet
                        your style and quality needs.</p>
                </div>
                <!-- Collection Filters -->
                <div class="collection-filters text-center mb-4">
                    <button class="btn active" data-filter="*">All</button>
                    <button class="btn" data-filter="dividend">EyeGlasses</button>
                    <button class="btn" data-filter="non-dividend">SunGlasses</button>
                </div>

                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('img/service-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                            suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/testimonial-1.jpg')}}" class="img-fluid rounded-circle"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('img/service-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Non-Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                            suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/testimonial-2.jpg')}}" class="img-fluid rounded-circle"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('img/service-3.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                            suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/testimonial-3.jpg')}}" class="img-fluid rounded-circle"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('img/service-4.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Non-Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam
                            suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/testimonial-1.jpg')}}" class="img-fluid rounded-circle"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Our Story-->
    <div class="our-story-section">
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <h1 class="display-5 mb-4 ourstory-title">Where style meets purpose.</h1>

                        <p class="mb-4 ourstory-text">
                            What began as a simple vision—to make eyewear that feels as good as it looks—
                            has grown into a commitment to quality, comfort, and everyday confidence.
                        </p>

                        <a href="">
                            <h4 class="text-dbca ourstory-link">OUR STORY</h4>
                        </a>
                    </div>

                    <!-- RIGHT COLLAGE -->
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-collage">
                            <div class="collage-item">
                                <img src="{{ asset('img/style1.png') }}" class="img-fluid">
                            </div>
                            <div class="collage-item">
                                <img src="{{ asset('img/style2.png') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <!-- RIGHT COLLAGE -->
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-collage">
                            <div class="collage-item">
                                <img src="{{ asset('img/style3.png') }}" class="img-fluid">
                            </div>
                            <div class="collage-item">
                                <img src="{{ asset('img/style4.png') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- LEFT CONTENT -->
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <h1 class="display-5 mb-4 ourstory-title">Inspired by real people.</h1>

                        <p class="mb-4 text-dbca ourstory-text">
                            Born from the idea that eyewear should support your lifestyle, not complicate it. We create
                            frames that blend craftsmanship with comfort, made to stand by you through every moment.
                        </p>

                        <a href="">
                            <h4 class="text-dbca ourstory-link">OUR STORY</h4>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Our Story -->

    <!-- FAQs Start -->
    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <br>
                <h1 class="display-5 mb-4">Contact Lens - Frequently Asked Questions</h1>
                <p class="mb-0">
                    Find answers to common questions about contact lenses, their usage,
                    care, safety, and suitability for your eyes.
                </p>
            </div>

            <div class="row g-5 align-items-center">
                <!-- FAQ ACCORDION -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">

                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                    What Are Contact Lenses?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Contact lenses are thin, curved lenses placed directly on the surface of the eye
                                    to correct vision or enhance eye appearance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo">
                                    Are Contact Lenses Safe To Use?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Yes, contact lenses are safe when used correctly. Proper hygiene, regular cleaning,
                                    and following your eye care professional’s advice are essential.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree">
                                    How Long Can I Wear Contact Lenses?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Wearing time depends on the type of lens. Daily, monthly, and extended-wear lenses
                                    all have different recommended usage durations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour">
                                    How Do I Clean And Store Contact Lenses?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Always clean lenses with recommended solutions, never water. Store them in a clean
                                    lens case and replace the solution daily.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive">
                                    Can I Sleep With My Contact Lenses?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Only lenses designed for overnight wear should be worn while sleeping.
                                    Sleeping with regular lenses can increase the risk of infection.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix">
                                    How Do I Know Which Contact Lens Is Right For Me?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    An eye care professional can recommend the best contact lens based on your vision,
                                    eye health, lifestyle, and comfort needs.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- IMAGE -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="{{ asset('img/HOWTOWARE.png') }}" class="img-fluid w-100" alt="Contact Lens Care">
                        <img src="{{ asset('img/HOWTOREMOVE.png') }}" class="img-fluid w-100" alt="Contact Lens Care">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-abcd">Reviews</h4>
                <h1 class="display-5 mb-4">What Our Customers Say</h1>
                <p class="mb-0">
                    Real experiences from our valued customers. Discover how our quality eyewear,
                    contact lenses, and expert care have made a difference in their vision and comfort.
                </p>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('img/testimonial-1.jpg')}}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('img/testimonial-2.jpg')}}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('img/testimonial-3.jpg')}}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        <img src="{{ asset('img/testimonial-2.jpg')}}" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Person Name</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Location Start -->
    <div class="container-fluid location py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <!-- CONTENT -->
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="location-glass p-5 rounded">
                        <h4 class="text-dcba">Our Location</h4>
                        <h1 class="display-5 mb-4 text-white">
                            Visit Our Vision Care Center
                        </h1>
                        <p class="mb-4 text-light">
                            Experience professional eye care, premium eyewear, and expert consultation
                            at our conveniently located vision care center.
                        </p>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-map-marker-alt fa-3x text-info"></i></div>
                                    <div class="ms-4">
                                        <h4 class="text-white">Easy Access</h4>
                                        <p class="text-light">
                                            Centrally located with hassle-free parking and accessibility.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-clinic-medical fa-3x text-info"></i></div>
                                    <div class="ms-4">
                                        <h4 class="text-white">Modern Facility</h4>
                                        <p class="text-light">
                                            Equipped with advanced eye testing and care technology.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-info me-4"></i>
                                    <div>
                                        <h4 class="text-white">Call Us</h4>
                                        <p class="mb-0 fs-5 text-light" style="letter-spacing: 1px;">
                                            +91 98765 43210
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IMAGE -->
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="location-image bg-info rounded position-relative overflow-hidden">
                        <img src="{{ asset('img/indian-map.png') }}" class="img-fluid rounded" alt="Location"
                            style="height:500px; width:100%; object-fit:cover;">


                        <!-- Lottie Button -->
                        <a class="map-lottie-btn" data-bs-toggle="modal" data-bs-target="#mapModal">
                            <iframe
                                src="https://lottie.host/embed/4caa8060-f9ea-4155-9164-5f5370f9fbd3/sFSlXwZNf6.lottie"
                                style="width:50px;height:50px;border:none;pointer-events:none;">
                            </iframe>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Location End -->
    <div class="modal fade" id="mapModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4 overflow-hidden">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Eyenix Eye Care – Iritty</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-0">
                    <iframe src="https://www.google.com/maps?q=Eyenix+Eye+Care+Iritty+Kerala&output=embed" width="100%"
                        height="450" style="border:0;" loading="lazy">
                    </iframe>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">

            <!-- MAIN FOOTER CONTENT -->
            <div class="container py-5 border-start-0 border-end-0"
                style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">

                <div class="row g-5">

                    <!-- BRAND -->
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="text-white">Eyenix Eye Care</h4>
                            <p>
                                Providing advanced eye testing, premium eyewear, and trusted vision
                                solutions with a patient-first approach.
                            </p>
                        </div>
                    </div>

                    <!-- QUICK LINKS -->
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="{{ route('about') }}">About Us</a>
                            <a href="{{ route('service') }}">Services</a>
                            <a href="{{ route('eyecamp') }}">Eye Camps</a>
                            <a href="{{ route('eyeglass') }}">Eye Glasses</a>
                            <a href="{{ route('contact.index') }}">Contact</a>
                        </div>
                    </div>

                    <!-- SUPPORT -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="{{ route('contact.index') }}">Make Contact</a>
                            <a href="tel:+919961667111">Call for appointment</a>
                            <a href="mailto:eyenixeyecareopticals@gmail.com">Email Support</a>
                            <a href="{{ route('contact.index') }}#faq">FAQs</a>
                        </div>
                    </div>

                    <!-- ADDRESS ONLY -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <p>
                                <strong>Eyenix Eye Care</strong><br>
                                San, Jos River View Complex,<br>
                                Near Bank of Baroda, Tanthode,<br>
                                Iritty, Kerala - 670703
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- STRAIGHT LINE CONTACT BAR -->
            <div class="container footer-contact-bar">
                <div class="row align-items-center text-center text-md-start">

                    <div class="col-md-3 contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>eyenixeyecareopticals@gmail.com</span>
                    </div>

                    <div class="col-md-3 contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+91 996 166 7111</span>
                    </div>

                    <div class="col-md-3 contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sun: 9:00 AM - 7:00 PM</span>
                    </div>

                    <div class="col-md-3 d-flex justify-content-center justify-content-md-end">
                        <div class="social-icons">
                            <a class="btn btn-primary btn-sm-square rounded-circle" href="#">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle" href="#">
                                <i class="fab fa-whatsapp text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle"
                                href="mailto:eyenixeyecareopticals@gmail.com">
                                <i class="fas fa-envelope text-white"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- Footer End -->

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>


    <!-- Template Javascript -->
    {{--
    <script src="{{ asset('js/chatbot.js')}}"></script> --}}
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const swiper = new Swiper(".collection-slider", {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,

                autoplay: false, // start paused

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    0: { slidesPerView: 1 },
                    576: { slidesPerView: 2 },
                    992: { slidesPerView: 3 },
                    1200: { slidesPerView: 4 }
                }
            });

            // Start autoplay after 2 seconds
            setTimeout(() => {
                swiper.params.autoplay = {
                    delay: 3000,
                    disableOnInteraction: false,
                };
                swiper.autoplay.start();
            }, 2000);
        });
    </script>

</body>

</html>