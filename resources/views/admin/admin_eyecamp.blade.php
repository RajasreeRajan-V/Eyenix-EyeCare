<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eye camp | Eyenix Eye Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/gallery.css') }}">
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
                        <a class="nav-link active" href="#"> EYE CAMP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#createGalleryModal">
                            <i class="fas fa-plus-circle me-1"></i> Create Eye Camp
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CREATE GALLERY MODAL -->
    <div class="modal fade glassy-modal" id="createGalleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('admin.EyeCamp.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fas fa-hospital me-2"></i> Create Eye Camp
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Camp Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required
                                placeholder="Free Eye Checkup Camp">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3"
                                placeholder="Brief details about the eye camp"></textarea>
                        </div>

                        <!-- Dates -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                        </div>

                        <!-- Time -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Time</label>
                                <input type="time" name="start_time" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Time</label>
                                <input type="time" name="end_time" class="form-control">
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control"
                                    placeholder="Village / Area / Venue">
                            </div>

                            <!-- Organizer -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Organizer</label>
                                <input type="text" name="organizer" class="form-control"
                                    placeholder="Hospital / NGO / Sponsor">
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Camp Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <!-- Status -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="upcoming">Upcoming</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Save Eye Camp
                        </button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    <section class="gallery-section py-5">
        <div class="container text-center">

            <div class="gallery-heading wow fadeInUp">
                <span class="section-title-small">Our Clinic</span>

                <h2 class="section-title-main">
                    Eyenix Eye Care Eye Camp
                </h2>

                <p class="section-title-text">
                    A glimpse into our advanced facilities, expert care, and patient-friendly environment.
                </p>
            </div>

            <div class="row mt-5 g-4">



            </div>
        </div>
    </section>
    <!-- EDIT GALLERY MODAL -->
    <div class="modal fade glassy-modal" id="editGalleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <form id="editGalleryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" id="editGalleryId">

                    <!-- Modal Header -->
                    <div class="modal-header py-2">
                        <h6 class="modal-title">
                            <i class="fas fa-edit me-1"></i> Edit Gallery
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body py-2">

                        <!-- IMAGE PREVIEWS -->
                        <div class="row mb-2 text-center">
                            <div class="col-6">
                                <small class="fw-semibold">Primary Image</small>
                                <img id="editPreviewImage" src="" class="img-fluid rounded shadow-sm"
                                    style="max-height:120px;">
                            </div>

                            <div class="col-6">
                                <small class="fw-semibold">Secondary Image</small>
                                <img id="editPreviewImage2" src="" class="img-fluid rounded shadow-sm d-none"
                                    style="max-height:120px;">
                                <small id="noSecondImage" class="text-muted d-none">
                                    No image
                                </small>
                            </div>
                        </div>

                        <!-- IMAGE INPUTS -->
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label small">Change Primary Image</label>
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small">Change Secondary Image</label>
                                <input type="file" name="image2" class="form-control form-control-sm">
                            </div>
                        </div>

                        <!-- TITLE -->
                        <div class="mt-2">
                            <label class="form-label small">Image Title</label>
                            <input type="text" name="title" id="editTitle" class="form-control form-control-sm"
                                placeholder="Optional title">
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mt-2">
                            <label class="form-label small">Description</label>
                            <textarea name="description" id="editDescription" class="form-control form-control-sm"
                                rows="2" placeholder="Short description"></textarea>
                        </div>

                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer py-2">
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