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
    
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/review.css')}}">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fas fa-sign-out-alt me-1"></i> LOGOUT
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
                                    <option value="cancelled">OnGoing</option>
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
    <!-- Testimonial Start -->
<!-- TESTIMONIAL SECTION -->
<div class="container-fluid testimonial py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h4 class="text-primary">Reviews</h4>
            <h1 class="text-white">What Our Customers Say</h1>
            <p class="text-light">Real experiences from our valued customers.</p>
        </div>

        <div class="owl-carousel owl-theme testimonial-carousel">

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-1.jpg') }}">
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <h4>Person Name</h4>
                <small>Profession</small>
                <div class="stars">★★★★★</div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-2.jpg') }}">
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <h4>Person Name</h4>
                <small>Profession</small>
                <div class="stars">★★★★★</div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-3.jpg') }}">
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <h4>Person Name</h4>
                <small>Profession</small>
                <div class="stars">★★★★★</div>
            </div>

        </div>
    </div>
</div>


    <!-- Testimonial End -->

    <!-- EDIT EYE CAMP MODAL -->
    <div class="modal fade glassy-modal" id="editEyeCampModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <form id="editEyeCampForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Hidden ID -->
                    <input type="hidden" id="editEyeCampId">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fas fa-hospital me-2"></i> Edit Eye Camp
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <!-- Image Preview -->
                        <div class="mb-3 text-center">
                            <img id="editImagePreview" src="" class="img-fluid rounded shadow-sm"
                                style="max-height:150px; display:none;">
                        </div>

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Camp Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="editTitle" class="form-control" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="editDescription" class="form-control" rows="3"></textarea>
                        </div>

                        <!-- Dates -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" name="start_date" id="editStartDate" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" name="end_date" id="editEndDate" class="form-control">
                            </div>
                        </div>

                        <!-- Time -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Start Time</label>
                                <input type="time" name="start_time" id="editStartTime" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Time</label>
                                <input type="time" name="end_time" id="editEndTime" class="form-control">
                            </div>
                        </div>

                        <!-- Location & Organizer -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" id="editLocation" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Organizer</label>
                                <input type="text" name="organizer" id="editOrganizer" class="form-control">
                            </div>
                        </div>

                        <!-- Image & Status -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Change Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" id="editStatus" class="form-control" required>
                                    <option value="upcoming">Upcoming</option>
                                    <option value="completed">Completed</option>
                                    <option value="ongoing">OnGoing</option>
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
                            <i class="fas fa-save me-1"></i> Update Eye Camp
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
$(document).ready(function () {
    $(".testimonial-carousel").owlCarousel({
        autoPlay: true,
        slideSpeed: 1200,
        paginationSpeed: 1200,
        navigation: true,
        pagination: true,
        items: 3,
        itemsDesktop: [1200,3],
        itemsTablet: [768,2],
        itemsMobile: [0,1]
    });
});
</script>

</body>

</html>