<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <title>Eyenix Eye Care - Eye Opticals</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet"> --}}

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
                    <a href="{{ route('contact.index') }}" class="nav-item nav-link active">Contact Us</a>
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
                <span>Mon - Sat: 9:00 AM - 7:00 PM</span>
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