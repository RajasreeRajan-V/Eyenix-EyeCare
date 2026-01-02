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

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1>
                <!-- <img src="{{ asset('img/logo.png') }}" alt="Logo"> -->
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
                            <a href="{{ route('contactlens') }}" class="dropdown-item">Contact Lens</a>
                            <a href="{{ route('contactlens.solutions') }}" class="dropdown-item active">Contact Solutions</a>
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
<br><br>
    <section class="contactlens-section py-5">
        <div class="container">

            <!-- HEADING -->
            <div class="text-center mb-5 wow fadeInUp">
                <span class="section-title-small">Our Collection</span>

                <h2 class="contactlens-title">
                    Contact Lens Solutions
                </h2>

                <p class="contactlens-text">
                    High-quality lens solutions designed to protect, clean, and hydrate your lenses.
                </p>
            </div>
            
            <div class="row">

           <!-- ================= FILTER COLUMN ================= -->
<div class="col-lg-3 mb-4">

    <div class="filter-panel wow fadeInLeft">
        <h5 class="mb-3">Filter by Contact Lens</h5>

        <form method="GET" action="{{ route('lens.solutions') }}" id="lensFilterForm">

            <!-- All -->
            <label class="lens-filter-item {{ request('contact_lens_id') ? '' : 'active' }}">
                <input type="radio"
                       name="contact_lens_id"
                       value=""
                       {{ request('contact_lens_id') ? '' : 'checked' }}
                       onchange="this.form.submit()">

                <div class="lens-filter-content">
                    <div class="lens-filter-img">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <span>All Lenses</span>
                </div>
            </label>

            @foreach($contactLenses as $lens)
                <label class="lens-filter-item {{ request('contact_lens_id') == $lens->id ? 'active' : '' }}">
                    <input type="radio"
                           name="contact_lens_id"
                           value="{{ $lens->id }}"
                           {{ request('contact_lens_id') == $lens->id ? 'checked' : '' }}
                           onchange="this.form.submit()">

                    <div class="lens-filter-content">
                        <div class="lens-filter-img">
                            <img src="{{ asset('storage/'.$lens->img) }}"
                                 alt="{{ $lens->name }}">
                        </div>
                        <span>{{ $lens->name }}</span>
                    </div>
                </label>
            @endforeach

        </form>
    </div>

</div>


                <!-- ================= PRODUCTS COLUMN ================= -->
                <div class="col-lg-9">

                    <div class="row g-4">

                        @forelse ($contactSolutions as $solution)
                            <div class="col-lg-4 col-md-6 wow zoomIn">
                                <div class="contactlens h-100">

                                    <!-- IMAGE -->
                                    <div class="gallery-image-wrapper">
                                        <img src="{{ asset('storage/' . $solution->img) }}" class="img-fluid"
                                            alt="{{ $solution->name }}">
                                    </div>

                                    <!-- DETAILS -->
                                    <div class="contactlens-details">

                                        <h5>{{ $solution->name }}</h5>

                                        <p class="small">
                                            {{ $solution->description }}
                                        </p>

                                        <ul class="list-unstyled small mb-0">
                                            <li>
                                                <strong>For Lens:</strong>
                                                {{ $solution->contactLens->name ?? '—' }}
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-muted">No lens solutions found.</p>
                            </div>
                        @endforelse

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">

                <!-- BRAND -->
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="/" class="p-0">
                            <h4 class="text-white">
                                <i class="fas fa-eye me-3"></i>Eyenix Eye Care
                            </h4>
                        </a>
                        <p class="mb-4">
                            Eyenix Eye Care provides advanced eye testing, premium eyewear,
                            and trusted vision solutions with a patient-first approach.
                        </p>

                        <div class="d-flex">
                            <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on</small>
                                    <h6 class="text-white mb-0">App Store</h6>
                                </div>
                            </a>
                            <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                <i class="fas fa-play text-primary"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get it on</small>
                                    <h6 class="text-white mb-0">Google Play</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- QUICK LINKS -->
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Our Services</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Eye Camps</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Book Appointment</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a>
                    </div>
                </div>

                <!-- SUPPORT -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Refund Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Customer Support</a>
                    </div>
                </div>

                <!-- CONTACT -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>

                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">
                                Main Road, City Center,<br>Kerala, India
                            </p>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">support@eyenixeyecare.com</p>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">+91 98765 43210</p>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <i class="fas fa-globe text-primary me-3"></i>
                            <p class="text-white mb-0">www.eyenixeyecare.com</p>
                        </div>

                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#">
                                <i class="fab fa-whatsapp text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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