<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eyenix Eye Care - Stock Market Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

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


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset(path: 'css/style.css')}}" rel="stylesheet">
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

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        {{-- <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-dark"><i
                                class="fa fa-user text-primary me-2"></i>Register</small></a>
                    <a href="#"><small class="me-3 text-dark"><i
                                class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand d-flex align-items-center gap-2 p-0">
                <img src="{{ asset('img/logo.png')}}" alt="Logo" class="brand-logo">

                <a href="#" class="navbar-brand fancy-brand d-flex align-items-center gap-3 p-3">

                    <!-- Logo Icon -->
                    <div class="logo-icon d-flex align-items-center justify-content-center">
                        <i class="fas fa-glasses"></i>
                    </div>

                    <!-- Brand Text -->
                    <div class="brand-text">
                        <h1 class="brand-title m-0">Eyenix <span>Eye Care</span></h1>
                        <p class="brand-tagline m-0">Vision • Style • Comfort</p>
                    </div>

                    <!-- Decorative Lines for Animation -->
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
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('eyecamp') }}" class="nav-item nav-link">EyeCampaign</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Pages</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Our Features</a>
                            <a href="#" class="dropdown-item">Our team</a>
                            <a href="#" class="dropdown-item">Testimonial</a>
                            <a href="#" class="dropdown-item">Our offer</a>
                            <a href="#" class="dropdown-item">FAQs</a>
                            <a href="#" class="dropdown-item">404 Page</a>
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

                                    <h1 class="display-4 text-uppercase text-white mb-4">
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
                    <h1 class="display-5 mb-4">Better Sight, Happier You. That's Our Promise.
                    </h1>
                    <p>Welcome to Eyenix Eye Care - a place built with care, honesty, and a genuine desire to help
                        people see better.</p>
                    <p class="mb-4">Located at San, Jos River View Complex, near Bank of Baroda, Tanthode, Iritty, we
                        proudly serve our local community with complete and reliable vision care. We believe that good
                        eyesight can change the way you experience the world, and we’re here to make that experience
                        clearer, brighter, and more comfortable.</p>
                    <p class="mb-4">At Eyenix Eye Care, we don’t just check your eyes - we listen, we understand, and we
                        guide you. Whether you’re coming in for a routine eye test, choosing your first pair of glasses,
                        or exploring stylish frames and sunglasses, our team is here to help you feel confident and
                        cared for.</p>
                    <p class="mb-4">With modern computerized testing, quality eyewear options, and a warm, friendly
                        environment, we aim to make every visit smooth and stress-free. Our customers often tell us they
                        feel at home here - and that is exactly what we want.</p>

                </div>

                <!-- IMAGE COLUMN -->
                <div class="col-xl-6 col-lg-6 col-md-12 about-left-wrapper position-relative" data-wow-delay="200ms">
                    <div class="about-spec-frame">
                        <div class="spin-wrapper">
                            <img src="{{ asset('img/blu-redSpec.png') }}" alt="Spectacle Image">
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


    <!-- About End -->
    <!-- Features Start -->
    <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow " data-wow-delay="0.2s" style="max-width: 800px;">
                <br>
                <h4 class="text-abcd section-title-small">Our Services</h4>
                <h1 class="display-5 mb-4 section-title-main">See the Difference: Comprehensive Services for Your Best
                    Vision.</h1>
                <p class="mb-0 section-title-text">
                    At Eyenix Eye Care, we offer a complete range of modern vision solutions, from precise digital eye
                    exams to the latest in eyewear fashion. We connect you with the right technology and products to
                    ensure clarity, comfort, and style.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="right-border"></div>
                        <div class="left-border"></div>
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-eye-dropper fa-4x text-abcd"></i>
                        </div>
                        <h4>Complete Eye Care Solutions</h4>
                        <p class="mb-4">
                            Experience precise vision assessment and personalized eye care with Eyenix Eye Care.
                            From computerized eye testing to stylish eyewear, prescription glasses, power sunglasses,
                            and contact lenses, we provide everything you need for clear, comfortable, and confident
                            vision.
                        </p>

                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                            <a class="fancy1" href="#">
                                <span class="top-key"></span>
                                <span class="text"> Learn More</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="right-border"></div>
                        <div class="left-border"></div>

                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-eye fa-4x text-abcd"></i>
                        </div>

                        <h4>Computerized Eye Testing</h4>

                        <p class="mb-4">
                            Get accurate and reliable vision results with our advanced computerized eye testing.
                            Eyenix Eye Care ensures precise diagnosis to help you achieve the clearest vision possible.
                        </p>

                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                            <a class="fancy1" href="#">
                                <span class="top-key"></span>
                                <span class="text"> Learn More</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="right-border"></div>
                        <div class="left-border"></div>

                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-glasses fa-4x text-abcd"></i>
                        </div>

                        <h4>Branded Frames & Sunglasses</h4>

                        <p class="mb-4">
                            Explore a wide range of premium branded frames and stylish sunglasses.
                            Eyenix Eye Care brings you the latest trends with superior comfort, durability,
                            and visual clarity to match your personality and lifestyle.
                        </p>

                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                            <a class="fancy1" href="#">
                                <span class="top-key"></span>
                                <span class="text"> Learn More</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="right-border"></div>
                        <div class="left-border"></div>

                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-eye-dropper fa-4x text-abcd"></i>
                        </div>

                        <h4>Prescription Glasses</h4>

                        <p class="mb-4">
                            Discover perfectly crafted prescription glasses designed for clarity, comfort,
                            and everyday wear. Eyenix Eye Care ensures accurate power lenses and stylish frames
                            to suit every personality and vision need.
                        </p>

                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                            <a class="fancy1" href="#">
                                <span class="top-key"></span>
                                <span class="text"> Learn More</span>
                                <span class="bottom-key-1"></span>
                                <span class="bottom-key-2"></span>
                            </a>
                        </div>
                    </div>

                </div>
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

    <!-- Collection Start -->
    <div class="container-fluid collection-section py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-dcba">Our Collection</h4>
                <h1 class="display-5 mb-4">Explore Our Products</h1>
                <p class="mb-0 text-dcba">Discover the latest products from our collection. Each item is carefully curated to meet
                    your style and quality needs.</p>
            </div>

            <!-- Filters -->
            <div class="col-12 text-center mb-4">
                <div class="collection-filters">
                    <button class="btn active" data-filter="*">All</button>
                    <button class="btn" data-filter=".glasses">Glasses</button>
                    <button class="btn" data-filter=".sunglasses">Sunglasses</button>
                    <button class="btn" data-filter=".contact-lenses">Contact Lenses</button>
                </div>
            </div>

            <div class="swiper collection-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card-product">
                            <img src="{{ asset('img/product-1.jpg') }}" alt="Product 1">
                            <h5 class="product-title">Product Name 1</h5>
                            <p class="product-price">$49.99</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">View Product</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-product">
                            <img src="{{ asset('img/product-2.jpg') }}" alt="Product 2">
                            <h5 class="product-title">Product Name 2</h5>
                            <p class="product-price">$59.99</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">View Product</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-product">
                            <img src="{{ asset('img/product-3.jpg') }}" alt="Product 3">
                            <h5 class="product-title">Product Name 3</h5>
                            <p class="product-price">$39.99</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">View Product</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-product">
                            <img src="{{ asset('img/product-4.jpg') }}" alt="Product 4">
                            <h5 class="product-title">Product Name 4</h5>
                            <p class="product-price">$29.99</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">View Product</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <br><br>
                <div class="swiper-pagination"></div>
            </div>


        </div>
    </div>
    <!-- Collection End -->

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

    <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog & News</h4>
                <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
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
    <!-- Blog End -->


    <!-- FAQs Start -->
    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQs</h4>
                <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What Does This Tool Do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What Are The Disadvantages Of Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Is Online Trading Safe?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    What Is Online Trading, And How Dose It Work?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Which App Is Best For Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    How To Create A Trading Account?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="{{ asset('img/about-2.png')}}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-5 mb-4">Meet Our Advisers</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/team-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-4">Our Clients Riviews</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
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

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Eyenix Eye Care</h4>
                            <!-- <img src="{{ asset('img/logo.png')}}" alt="Logo"> -->
                        </a>
                        <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit
                            amet, consectetur adipiscing...</p>
                        <div class="d-flex">
                            <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on the</small>
                                    <h6 class="text-white">App Store</h6>
                                </div>
                            </a>
                            <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                <i class="fas fa-play text-primary"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get it on</small>
                                    <h6 class="text-white">Google Play</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">123 Street New York.USA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">(+012) 3456 7890</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser text-primary me-3"></i>
                            <p class="text-white mb-0">Yoursite@ex.com</p>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i
                                    class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i
                                    class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>