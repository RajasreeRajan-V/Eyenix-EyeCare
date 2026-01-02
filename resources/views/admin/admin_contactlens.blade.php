<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Lens | Eyenix Eye Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/contactlens.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css')}}" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top eyenix-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-eye"></i> Eyenix Eye Care
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#eyenixNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="eyenixNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact Lens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#createProductModal">
                            <i class="fas fa-plus-circle me-1"></i> Add Product
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

    <!-- CREATE CONTACT LENS MODAL -->
    <div class="modal fade glassy-modal" id="createProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('admin.ContactLens.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fas fa-plus-circle me-2"></i> Add Contact Lens
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label">Product Image <span class="text-danger">*</span></label>
                            <input type="file" name="img" class="form-control" required>
                        </div>

                        <!-- Name & Brand -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Brand</label>
                                <input type="text" name="brand" class="form-control">
                            </div>
                        </div>

                        <!-- Power & Price -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Power <span class="text-danger">*</span></label>
                                <input type="text" name="power" class="form-control" placeholder="-2.00" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>

                        <!-- Water Content & Base Curve -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Water Content <span class="text-danger">*</span></label>
                                <input type="text" name="water_content" class="form-control" placeholder="55%" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Base Curve <span class="text-danger">*</span></label>
                                <input type="text" name="base" class="form-control" placeholder="8.6 mm" required>
                            </div>
                        </div>

                        <!-- Protection & Usage -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Protection <span class="text-danger">*</span></label>
                                <input type="text" name="protection" class="form-control" placeholder="UV / Blue light"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Usage <span class="text-danger">*</span></label>
                                <input type="text" name="usage" class="form-control" placeholder="Daily / Monthly"
                                    required>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea name="description" class="form-control" rows="2" required></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Save
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <!-- Offer Start -->
    <div class="container-fluid offer-section pb-0">
        <div class="container pb-5">
            <div class="container text-center">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <br>
                    <h1 class="display-5 mb-4 hero-title">
                        <i>See the World Clearly</i>
                    </h1>

                    <h4 class="text-dcba hero-subtitle">
                        Explore our premium contact lenses designed for comfort, clarity, and healthy vision.
                    </h4>

                    <p class="section-desc hero-desc">
                        Choose from a wide range of daily, monthly, and specialty lenses that suit your lifestyle and
                        eye care needs.
                    </p>
                </div>

            </div>

            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="shape-row">
                        <div class="shape-item glassy-card">
                            <h2 class="text-white">HOW TO WEAR CONTACT LENSES</h2>
                            <img src="{{ asset('img/HOWTOWARE.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="shape-row">
                        {{-- <div id="collapseOne" class="tab-pane fade show p-0 active"> --}}
                            {{-- <div class="shape-row"> --}}
                                <div class="shape-item glassy-card">
                                    <h2 class="text-white">HOW TO REMOVE CONTACT LENSES</h2>
                                    <img src="{{ asset('img/HOWTOREMOVE.png') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contactlens-section py-5">
        <div class="container text-center">

            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp">
                <span class="section-title-small">Our Products</span>
                <h2 class="section-title-main">Contact Lens Collection</h2>
                <p class="section-title-text">
                    Explore our range of premium contact lenses designed for comfort and clarity.
                </p>
            </div>

            <div class="row mt-5 g-4">

                @forelse($contactLenses as $lens)
                    <div class="col-lg-4 col-md-6 wow zoomIn">
                        <div class="product-card">

                            <!-- Product Image -->
                            <div class="product-img-wrapper">
                                <img src="{{ asset('storage/' . $lens->img) }}" class="img-fluid" alt="{{ $lens->name }}">
                            </div>

                            <!-- Product Info -->
                            <div class="product-info text-start p-3">
                                <h5 class="product-name">{{ $lens->name }}</h5>

                                @if($lens->brand)
                                    <p class="product-brand mb-1">
                                        Brand: {{ $lens->brand }}
                                    </p>
                                @endif

                                <p class="product-power mb-1">
                                    Power: {{ $lens->power }}
                                </p>

                                @if($lens->price)
                                    <p class="product-price mb-2">
                                        Price: ₹{{ number_format($lens->price, 2) }}
                                    </p>
                                @endif

                                <!-- Action Buttons -->
                                <div class="d-flex gap-2">

                                    <!-- Edit -->
                                    <a href="#" class="btn btn-sm btn-edit flex-fill" data-bs-toggle="modal"
                                        data-bs-target="#editProductModal" data-id="{{ $lens->id }}"
                                        data-name="{{ $lens->name }}" data-brand="{{ $lens->brand }}"
                                        data-power="{{ $lens->power }}" data-price="{{ $lens->price }}"
                                        data-water_content="{{ $lens->water_content }}"
                                        data-protection="{{ $lens->protection }}" data-usage="{{ $lens->usage }}"
                                        data-base="{{ $lens->base }}" data-description="{{ $lens->description }}"
                                        data-image="{{ asset('storage/' . $lens->img) }}">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('admin.ContactLens.destroy', $lens->id) }}" method="POST"
                                        class="flex-fill">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-delete w-100"
                                            onclick="return confirm('Are you sure you want to delete this contact lens?')">
                                            <i class="fas fa-trash me-1"></i> Delete
                                        </button>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-muted text-center">No contact lenses available.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>


    <!-- EDIT PRODUCT MODAL -->
    <div class="modal fade glassy-modal" id="editProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <form id="editProductForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" id="editProductId">

                    <div class="modal-header py-2">
                        <h6 class="modal-title"><i class="fas fa-edit me-1"></i> Edit Product</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body py-2">
                        <div class="text-center mb-2">
                            <img id="editPreviewImage" src="" class="img-fluid rounded shadow-sm"
                                style="max-height:120px;">
                        </div>

                        <div class="mb-2">
                            <label class="form-label small">Change Product Image</label>
                            <input type="file" name="img" class="form-control form-control-sm">
                        </div>

                        <div class="mb-2">
                            <label class="form-label small">Product Name</label>
                            <input type="text" name="name" id="editName" class="form-control form-control-sm">
                        </div>

                        <div class="mb-2">
                            <label class="form-label small">Brand</label>
                            <input type="text" name="brand" id="editBrand" class="form-control form-control-sm">
                        </div>

                        <div class="mb-2">
                            <label class="form-label small">Power / Prescription</label>
                            <input type="text" name="power" id="editPower" class="form-control form-control-sm">
                        </div>

                        <div class="mb-2">
                            <label class="form-label small">Price</label>
                            <input type="number" name="price" id="editPrice" class="form-control form-control-sm">
                        </div>

                        <div class="mb-2">
                            <label class="form-label small">Description</label>
                            <textarea name="description" id="editDescription" class="form-control form-control-sm"
                                rows="2"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer py-2">
                        <button type="button" class="btn btn-sm btn-outline-light"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fas fa-save me-1"></i> Update Product
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
            if (window.scrollY > 80) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.btn-edit');
            const editForm = document.getElementById('editProductForm');

            editButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                    const id = this.dataset.id;
                    const name = this.dataset.name;
                    const brand = this.dataset.brand;
                    const power = this.dataset.power;
                    const price = this.dataset.price;
                    const description = this.dataset.description;
                    const image = this.dataset.image;

                    document.getElementById('editProductId').value = id;
                    document.getElementById('editName').value = name;
                    document.getElementById('editBrand').value = brand;
                    document.getElementById('editPower').value = power;
                    document.getElementById('editPrice').value = price;
                    document.getElementById('editDescription').value = description;
                    document.getElementById('editPreviewImage').src = image;

                    editForm.action = "{{ route('admin.ContactLens.update', ':id') }}".replace(':id', id);
                });
            });
        });
    </script>
</body>

</html>