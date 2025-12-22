<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | Eyenix Eye Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/about.css') }}">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top eyenix-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <i class="fas fa-eye"></i> Eyenix Eye Care
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#eyenixNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="eyenixNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#createServiceModal">
                            <i class="fas fa-plus-circle me-1"></i> Create About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#editAboutModal">
                            <i class="fas fa-edit me-1"></i> Edit About Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade glassy-modal" id="createServiceModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fas fa-plus-circle me-2"></i>Create About Us
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row g-3">

                            <!-- Headline -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Headline</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter headline"
                                    required>
                            </div>

                            <!-- Short Description -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea name="description" class="form-control" rows="3"
                                    placeholder="Brief description about your shop" required></textarea>
                            </div>

                            <!-- Images -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Shop Image</label>
                                <input type="file" name="shop_image" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">
                                    Spectacle Image <span class="text-warning">*</span><span
                                        class="text-danger">*</span>(Background Removed) <span
                                        class="text-danger">*</span><span class="text-warning">*</span>
                                </label>
                                <input type="file" name="spectacle_image" class="form-control" required>
                            </div>


                            <!-- Location -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Location (Address)</label>
                                <input type="text" name="location" class="form-control" placeholder="Enter shop address"
                                    required>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter phone number"
                                    required>
                            </div>

                            <!-- What We Do -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">What We Do</label>
                                <textarea name="what_we_do" class="form-control" rows="3"
                                    placeholder="Describe your services" required></textarea>
                            </div>

                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save About Us
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- Edit About Us Modal -->
    <div class="modal fade" id="editAboutModal" tabindex="-1" aria-labelledby="editAboutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content glass-card">

                <!-- Header -->
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="editAboutModalLabel">
                        <i class="fas fa-edit me-2"></i>Edit About Us
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.about.update', $about->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <!-- Title -->
                        <div class="mb-2">
                            <label class="form-label text-white small mb-1">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm"
                                value="{{ old('title', $about->title) }}" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label class="form-label text-white small mb-1">Description</label>
                            <textarea name="description" class="form-control form-control-sm"
                                style="min-height: 160px; resize: vertical;"
                                required>{{ old('description', $about->description) }}</textarea>
                        </div>


                        <!-- What We Do -->
                        <div class="mb-2">
                            <label class="form-label text-white small mb-1">What We Do</label>
                            <textarea name="what_we_do" rows="2" class="form-control form-control-sm"
                                required>{{ old('what_we_do', $about->what_we_do) }}</textarea>
                        </div>

                        <hr class="border-light my-2">

                        <!-- Images Row -->
                        <div class="row g-2">

                            <!-- Spectacle Image -->
                            <div class="col-md-6">
                                <label class="form-label text-white small mb-1">Spectacle Image</label>

                                @if($about->spectacle_image)
                                    <div class="mb-1">
                                        <img src="{{ asset('storage/' . $about->spectacle_image) }}"
                                            class="img-fluid rounded shadow" style="max-height:80px">
                                    </div>
                                @endif

                                <input type="file" name="spectacle_image" class="form-control form-control-sm">
                            </div>

                            <!-- Shop Image -->
                            <div class="col-md-6">
                                <label class="form-label text-white small mb-1">Shop Image</label>

                                @if($about->shop_image)
                                    <div class="mb-1">
                                        <img src="{{ asset('storage/' . $about->shop_image) }}"
                                            class="img-fluid rounded shadow" style="max-height:80px">
                                    </div>
                                @endif

                                <input type="file" name="shop_image" class="form-control form-control-sm">
                            </div>

                        </div>

                        <hr class="border-light my-2">

                        <!-- Location & Phone -->
                        <div class="row g-2">

                            <div class="col-md-6">
                                <label class="form-label text-white small mb-1">Location</label>
                                <input type="text" name="location" class="form-control form-control-sm"
                                    value="{{ old('location', $about->location) }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-white small mb-1">Phone</label>
                                <input type="text" name="phone" class="form-control form-control-sm"
                                    value="{{ old('phone', $about->phone) }}" required>
                            </div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer py-2 border-0">
                        <button type="button" class="btn btn-sm btn-outline-light" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fas fa-save me-1"></i> Update
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid about pt-0 pb-5 position-relative">
        <div class="about-top-curve">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
                <path d="M0,50 C360,150 1080,0 1440,100 L1440,0 L0,0 Z" fill="var(--red)"></path>
            </svg>
        </div>

        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- TEXT COLUMN -->
                <div class="col-xl-6 fadeInLeft wow glassy-about" data-wow-delay="0.2s">

                    <h4 style="color: #000">About Us</h4>
                    <h1 style="color: #fff">{{ $about->title ?? 'Eyenix Eye Care' }}
                    </h1>
                    <p class="text-white">
                        {!! nl2br(e($about->description)) !!}
                    </p>
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

    </div>
    <div class="about-curve">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" style="display:block; width:100%; height:150px;">
            <path d="M0,100 C360,0 1080,150 1440,50 L1440,150 L0,150 Z" fill="var(--red)"></path>
        </svg>
    </div>

    <!-- About Start -->
    <div class="container-fluid about-about py-5">
        <div class="container py-5">
            <div class="glass-card">
                <div class="row g-5 align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Eyenix Eye Care</h4>
                            <h1 class="display-5 mb-4 text-white">
                                Where Advanced Eye Care Meets Trusted Vision Solutions
                            </h1>

                            <p class="mb-4 text-light">
                                <strong>Eyenix Eye Care</strong> is a modern optical and eye care center located at
                                <strong>San, Jos River View Complex, Near Bank of Baroda, Tanthode, Iritty, Kerala –
                                    670703</strong>.
                                We are dedicated to providing accurate eye testing, quality eyewear, and professional
                                vision care
                                for all age groups.
                            </p>

                            <div class="row g-4">

                                <!-- Location -->
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div>
                                            <i class="fas fa-map-marker-alt fa-3x text-primary"></i>
                                        </div>
                                        <div class="ms-4 text-light">
                                            <h4 class="text-white">Where We Are Located</h4>
                                            <p class="text-white">
                                                {!! nl2br(e($about->location)) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Services -->
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div>
                                            <i class="fas fa-eye fa-3x text-primary"></i>
                                        </div>
                                        <div class="ms-4 text-light">
                                            <h4 class="text-white">What We Do</h4>
                                            <p class="text-white">
                                                {!! nl2br(e($about->what_we_do)) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5">
                                        Explore Our Services
                                    </a>
                                </div>

                                <!-- Call -->
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div class="text-light">
                                            <h4 class="text-white">Call Us</h4>
                                            <p class="mb-0 fs-5">+91 {{ $about->phone }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="image-glass">
                            <img src="{{ asset('storage/' . $about->shop_image) }}" class="img-fluid rounded w-100"
                                alt="Eyenix Eye Care">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        const navbar = document.querySelector('.eyenix-navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

</body>

</html>