<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eyenix Eye Care - Stock Market Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <a href="#" class="nav-item nav-link">Blogs</a>
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

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active text-abcd">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">

                        <!-- CONTACT INFO ROW -->
                        <div class="bg-dark rounded p-5 mb-5">
                            <h4 class="text-abcd mb-4">Get in Touch</h4>
                            <div class="contact-info-row">
                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-3">
                                        <i class="fas fa-map-marker-alt fa-2x text-abcd"></i>

                                    </div>
                                    <div>
                                        <h4>Address</h4>
                                        <p class="mb-0">Eyenix Eye Care
                                            San, Jos River View Complex
                                            Near Bank of Baroda, Tanthode, Iritty, Kerala 670703</p>
                                    </div>
                                </div>

                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-3">
                                        <i class="fas fa-envelope fa-2x text-abcd"></i>
                                    </div>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0">info@example.com</p>
                                    </div>
                                </div>

                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-3">
                                        <i class="fa fa-phone-alt fa-2x text-abcd"></i>
                                    </div>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0">+91 996 166 7111</p>
                                    </div>
                                </div>

                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fab fa-firefox-browser fa-2x text-abcd"></i>
                                    </div>
                                    <div>
                                        <h4>eyenixeyecareopticals@gmail.com</h4>
                                        <p class="mb-0">+91 996 166 7111</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <!-- FORM + MAP ROW -->
                        <div class="row g-5">

                            <!-- FORM -->
                            <div class="col-xl-6">
                                <div class="bg-light  rounded h-100 wow fadeInUp">
                                    <h4 class="text-dcba">Send Your Message</h4>
                                    <form action="{{ route('contact.store') }}" method="POST">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control border-0" placeholder="Name"
                                                        name="name">
                                                    <label>Your Name</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control border-0"
                                                        placeholder="Phone Number" name="phone">
                                                    <label>Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control border-0"
                                                        placeholder="Email" name="email">
                                                    <label>Your Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control border-0"
                                                        placeholder="Enter Subject" name="subject">
                                                    <label>Subject</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control border-0" style="height:160px"
                                                        name="message"></textarea>
                                                    <label>Message</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-flex justify-content-end flex-shrink-0 mb-4">
                                                    <button type="submit" class="fancy2 ">
                                                        <span class="top-key"></span>
                                                        <span class="text">Send Message</span>
                                                        <span class="bottom-key-1"></span>
                                                        <span class="bottom-key-2"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- MAP -->
                            <div class="col-xl-6">
                                <div class="rounded h-100">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.714557003159!2d75.66741317782278!3d11.99424235791214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4353eeff7b15b%3A0xcdc49a0525ccdd38!2sEYENIX%20EYE%20CARE!5e0!3m2!1sen!2sin!4v1765790540107!5m2!1sen!2sin"
                                        width="600" height="610" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Stocker</h4>
                            <!-- <img src="{{ asset('img/logo.png') }}" alt="Logo"> -->
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