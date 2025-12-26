<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery | Eyenix Eye Care</title>
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
                        <a class="nav-link active" href="#"> Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#createGalleryModal">
                            <i class="fas fa-plus-circle me-1"></i> Create Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
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

                <form action="{{ route('admin.AdminGallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fas fa-images me-2"></i> Create Gallery
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <!-- Image (Required) -->
                        <div class="mb-3">
                            <label class="form-label">Primary Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                        <!-- Image 2 (Optional) -->
                        <div class="mb-3">
                            <label class="form-label">Secondary Image (Optional)</label>
                            <input type="file" name="image2" class="form-control">
                        </div>

                        <!-- Title (Nullable) -->
                        <div class="mb-3">
                            <label class="form-label">Image Title (Optional)</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter image title">
                        </div>

                        <!-- Description (Nullable) -->
                        <div class="mb-3">
                            <label class="form-label">Description (Optional)</label>
                            <textarea name="description" class="form-control" rows="3"
                                placeholder="Short description about this image"></textarea>
                        </div>

                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Save Gallery
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
                    Eyenix Eye Care Gallery
                </h2>

                <p class="section-title-text">
                    A glimpse into our advanced facilities, expert care, and patient-friendly environment.
                </p>
            </div>

            <div class="row mt-5 g-4">

                @foreach ($gallerys as $item)
                    <div class="col-lg-4 col-md-6 wow zoomIn">

                        {{-- If second image exists --}}
                        @if ($item->image2)
                            <div class="gallery-item has-two-images">

                                <!-- ACTION BUTTONS -->
                                <div class="gallery-actions">
                                    <a href="#" class="btn btn-sm btn-edit" data-bs-toggle="modal"
                                        data-bs-target="#editGalleryModal" data-id="{{ $item->id }}"
                                        data-title="{{ $item->title }}" data-description="{{ $item->description }}"
                                        data-image="{{ asset('storage/' . $item->image) }}"
                                        data-image2="{{ asset('storage/' . $item->image2) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.AdminGallery.destroy', $item->id) }}" method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this gallery item?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                </div>

                                <!-- IMAGE WRAPPER -->
                                <div class="gallery-image-wrapper">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid img-main"
                                        alt="{{ $item->title }}">

                                    <img src="{{ asset('storage/' . $item->image2) }}" class="img-fluid img-secondary"
                                        alt="{{ $item->title }}">
                                </div>

                                <!-- OVERLAY -->
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <i class="fas fa-search-plus mb-3"></i>
                                        <h5>{{ $item->title }}</h5>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>

                            </div>
                        @else
                            {{-- Single image item --}}
                            <div class="gallery-item">

                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $item->title }}">

                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <i class="fas fa-search-plus mb-3"></i>
                                        <h5>{{ $item->title }}</h5>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>

                            </div>
                        @endif

                    </div>
                @endforeach

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.btn-edit');
            const editForm = document.getElementById('editGalleryForm');

            editButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    const title = this.getAttribute('data-title');
                    const description = this.getAttribute('data-description');
                    const image = this.getAttribute('data-image');
                    const image2 = this.getAttribute('data-image2');

                    // Fill modal inputs
                    document.getElementById('editGalleryId').value = id;
                    document.getElementById('editTitle').value = title;
                    document.getElementById('editDescription').value = description;

                    // Primary image
                    const img1 = document.getElementById('editPreviewImage');
                    img1.src = image;

                    // Secondary image
                    const img2 = document.getElementById('editPreviewImage2');
                    const noImg2 = document.getElementById('noSecondImage');
                    if (image2) {
                        img2.src = image2;
                        img2.classList.remove('d-none');
                        noImg2.classList.add('d-none');
                    } else {
                        img2.classList.add('d-none');
                        noImg2.classList.remove('d-none');
                    }

                    // Set form action dynamically using Laravel route
                    editForm.action = "{{ route('admin.AdminGallery.update', ':id') }}".replace(':id', id);
                });
            });
        });
    </script>


</body>

</html>