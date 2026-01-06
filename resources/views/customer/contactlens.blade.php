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

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/userabout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactlens.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('eyecamp') }}" class="nav-item nav-link">EyeCampaign</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Our Products</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('eyeglass') }}" class="dropdown-item">Eye glasses</a>
                            <a href="{{ route('sunglass') }}" class="dropdown-item">Sun glasses</a>
                            <a href="{{ route('contactlens') }}" class="dropdown-item active">Contact Lens</a>
                            <a href="{{ route('contactlens.solutions') }}" class="dropdown-item">Contact Solutions</a>
                        </div>
                    </div>
                    <a href="{{ route('contact.index') }}" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>

    </div>
    <!-- Navbar & Hero End -->

    <!-- GALLERY TOP CURVE -->
    <div class="gallery-top-curve">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
            <path d="M0,50 C360,150 1080,0 1440,100 L1440,0 L0,0 Z" fill="var(--back)">
            </path>
        </svg>
    </div>
    <br><br><br>
    <section class="contactlens-section py-5">
        <div class="container text-center">

            <!-- SECTION HEADING -->
            <div class="contactlens-heading wow fadeInUp">
                <span class="section-title-small">Our Collection</span>

                <h2 class="contactlens-title">
                    Contact Lens Collections
                </h2>

                <p class="contactlens-text">
                    Explore our wide range of premium contact lenses designed for comfort, clarity, and eye health.
                </p>
            </div>

            <div class="row mt-5 g-4">

                @forelse ($contactlens as $lens)
                    <div class="col-lg-4 col-md-6 wow zoomIn">
                        <div class="contactlens h-100">

                            <!-- IMAGE -->
                            <div class="gallery-image-wrapper">
                                <img src="{{ asset('storage/' . $lens->img) }}" class="img-fluid" alt="{{ $lens->name }}">
                            </div>

                            <!-- DETAILS (ALWAYS VISIBLE) -->
                            <div class="contactlens-details">
                                <h5 class="mb-1">{{ $lens->name }}</h5>

                                <p class="small mb-2">
                                    {{ $lens->description }}
                                </p>

                                <ul class="list-unstyled small mb-2 text-start">
                                    <li><strong>Brand:</strong> {{ $lens->brand ?? '—' }}</li>
                                    <li><strong>Power:</strong> {{ $lens->power }}</li>
                                    <li><strong>Water Content:</strong> {{ $lens->water_content }}%</li>
                                    <li><strong>Base Curve:</strong> {{ $lens->base }}</li>
                                    <li><strong>Usage:</strong> {{ ucfirst($lens->usage) }}</li>
                                    <li><strong>Protection:</strong> {{ $lens->protection }}</li>
                                </ul>

                                @if($lens->price)
                                    <div class="contactlens-price">
                                        ₹ {{ $lens->price }}
                                    </div>
                                @endif
                            </div>

                        </div>

                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-light">No contact lenses available at the moment.</p>
                    </div>
                @endforelse

            </div>
        </div>


    </section>

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
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>