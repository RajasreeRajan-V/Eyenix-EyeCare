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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/eyeCamp.css') }}" rel="stylesheet">
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
                    <a href="{{ route('eyecamp') }}" class="nav-item nav-link active">EyeCampaign</a>
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

    </div>
    <!-- Navbar & Hero End -->

    <div class="container-fluid py-5 about-glass-section">

        <!-- TOP CURVE -->
        <div class="section-top-curve">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
                <path d="M0,100 C360,0 1080,150 1440,50 L1440,0 L0,0 Z" fill="var(--back)"></path>
            </svg>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br>

        <!-- FLOATING CENTER HEADING -->
        <div class="section-floating-heading wow" data-wow-delay="0.2s">
            <div class="gallery-heading text-center">
                <span class="section-title-small">Community Care</span>

                <h2 class="section-title-main text-primary">
                    Eye Care Eye Camps
                </h2>

                <p class="section-title-text text-white">
                    Free eye check-ups and vision care services conducted for the community.
                </p>
            </div>
        </div>
        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        </div>
        <!-- CONTENT -->
        <div class="container position-relative">
            <div class="row mt-5 g-4 pt-5">

                @forelse ($eyeCamps as $camp)
                    @php
                        $canBook = in_array($camp->status, ['upcoming', 'ongoing']);
                    @endphp

                    <div class="col-lg-4 col-md-6">
                        <div class="eye-camp-card position-relative wow fadeInUp
                            {{ $canBook ? 'open-booking-modal' : 'disabled' }}" @if($canBook) data-bs-toggle="modal"
                                data-bs-target="#bookingModal" data-camp-id="{{ $camp->id }}" data-title="{{ $camp->title }}"
                                data-date="{{ \Carbon\Carbon::parse($camp->start_date)->format('d F Y') }}"
                            data-location="{{ $camp->location }}" @endif>

                            <img src="{{ asset('storage/' . $camp->image) }}" alt="Eye Camp">

                            <div class="eye-camp-content">
                                <h5>{{ $camp->title }}</h5>

                                <p class="date">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($camp->start_date)->format('d F Y') }}
                                </p>

                                <p class="location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{ $camp->location }}
                                </p>

                                <span class="status {{ $camp->status }}">
                                    {{ ucfirst($camp->status) }}
                                </span>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No eye camps available.</p>
                    </div>
                @endforelse

            </div>
        </div>

        <br><br><br><br><br>

        <!-- BOTTOM CURVE -->
        <div class="section-bottom-curve">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
                <path d="M0,50 C360,150 1080,0 1440,100 L1440,150 L0,150 Z" fill="var(--back)"></path>
            </svg>
        </div>

    </div>

    <div class="modal fade" id="bookingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Book Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('appointment.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <input type="hidden" name="eye_camp_id" id="camp_id">

                        <div class="mb-2">
                            <label class="form-label">Eye Camp</label>
                            <input type="text" class="form-control" id="camp_title" readonly>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Date</label>
                            <input type="text" class="form-control" id="camp_date" readonly>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" id="camp_location" readonly>
                        </div>

                        <hr>

                        <div class="mb-2">
                            <label class="form-label">Patient Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100">
                            Confirm Booking
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Features Start -->
    <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Features</h4>
                <h1 class="display-5 mb-4">Connecting businesses, ideas, and people for greater impact.</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-chart-line fa-4x text-primary"></i>
                        </div>
                        <h4>Global Management</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-university fa-4x text-primary"></i>
                        </div>
                        <h4>Corporate Banking</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-file-alt fa-4x text-primary"></i>
                        </div>
                        <h4>Asset Management</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                        </div>
                        <h4>Investment Bank</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit
                            pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.open-booking-modal').forEach(card => {
                card.addEventListener('click', function () {
                    document.getElementById('camp_id').value = this.dataset.campId;
                    document.getElementById('camp_title').value = this.dataset.title;
                    document.getElementById('camp_date').value = this.dataset.date;
                    document.getElementById('camp_location').value = this.dataset.location;
                });
            });
        });
    </script>

</body>

</html>