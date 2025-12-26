<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Eyenix eye</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-papmA+oXAi7jhv1skZrQf5jZ+cT5x2r+13b7JxX8+uNQnW9YwWJt3UKpJzKQhPqVx2k9wK+XxQv0zZc6H8V5Hw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .owl-carousel .item {
            position: relative;
            height: 600px;
            overflow: hidden;
            border-radius: 10px;
        }

        /* Image */
        .carousel-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(2px);
        }

        /* Black overlay */
        .owl-carousel .item::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.60);
            z-index: 1;
        }

        /* Text content */

        .carousel-caption {
            position: absolute;
            top: 50%;
            /* left: 40%; */
            transform: translateY(-50%);
            max-width: 900px;
            padding: 30px 35px;

            /* Glassmorphism */
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.25);

            z-index: 2;
        }

        /* Improve text visibility */
        .carousel-caption h1,
        .carousel-caption h4,
        .carousel-caption p {
            color: #99c2ff !important;
        }


        /* Responsive */
        @media (max-width: 768px) {
            .carousel-caption {
                left: 5%;
                right: 5%;
                text-align: center;
            }

            .carousel-caption h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.contactus.index') }}" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3" method="GET" action="{{ route('admin.contactus.index') }}">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" name="search"
                        placeholder="Search contacts..." value="{{ request('search') }}" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">


                </li>
                <!-- Notifications Dropdown Menu -->

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin | Eyenix</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin Panel</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    HOME
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contactus.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-address-book"></i>
                                <p>
                                    CONTACT US
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>
                                    ABOUT US
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.brand.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    MANAGE BRANDS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.shape.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-shapes"></i>
                                <p>
                                    MANAGE SHAPES
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.frame.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-border-all"></i>
                                <p>
                                    MANAGE FRAMES
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.ProductColor.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-palette"></i>
                                <p>
                                    MANAGE PRODUCT COLOURS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-eye"></i>
                                <p>
                                    MANAGE SERVICES
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.AdminGallery.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-photo-video"></i>
                                <p>
                                    MANAGE GALLERY
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.ContactLens.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle-notch"></i>
                                <p>
                                    MANAGE CONTACTLENS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.Collection.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-glasses"></i>
                                <p>
                                    EYE GLASS/SUN GLASS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.EyeCamp.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-hospital"></i>
                                <p>
                                    MANAGE EYE CAMP
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.appointment.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    MANAGE APPOINTMENTS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.solution.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-flask"></i>
                                <p>
                                    MANAGE SOLUTIONS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #000 !important">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-light">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item text-light"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active text-light">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <!-- Main content -->
            <section class="content mt-4">
                <div class="container-fluid">
                    <div class="row">

                        <!-- LEFT COLUMN : FRAME FORM -->
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Add Frame</h5>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('admin.frame.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!-- Frame Name -->
                                        <div class="mb-3">
                                            <label class="form-label">Frame Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter frame name" required>
                                        </div>

                                        <!-- Frame Image -->
                                        <div class="mb-3">
                                            <label class="form-label">Frame Image</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>

                                        <!-- Frame Type -->
                                        <div class="mb-3">
                                            <label class="form-label">Frame Type</label>

                                            <div class="d-flex gap-2">
                                                <select name="frame_type_id" id="frameTypeSelect" class="form-control"
                                                    required>
                                                    <option value="">Select Frame Type</option>
                                                    @foreach($frameTypes as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>

                                                <button type="button" class="btn btn-outline-primary"
                                                    onclick="showNewInput('newFrameTypeInput')">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>

                                            <input type="text" name="new_frame_type" id="newFrameTypeInput"
                                                class="form-control d-none mt-2" placeholder="Enter new frame type">
                                        </div>

                                        <!-- Frame Material -->
                                        <div class="mb-3">
                                            <label class="form-label">Material</label>

                                            <div class="d-flex gap-2">
                                                <select name="material_id" id="materialSelect" class="form-control"
                                                    required>
                                                    <option value="">Select Material</option>
                                                    @foreach($materials as $material)
                                                        <option value="{{ $material->id }}">{{ $material->name }}</option>
                                                    @endforeach
                                                </select>

                                                <button type="button" class="btn btn-outline-primary"
                                                    onclick="showNewInput('newMaterialInput')">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>

                                            <input type="text" name="new_material" id="newMaterialInput"
                                                class="form-control d-none mt-2" placeholder="Enter new material">
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">
                                            Save Frame
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN : FRAME TABLE -->
                        <div class="col-md-8">
                            <div class="card shadow-sm">
                                <div class="card-header bg-dark text-white">
                                    <h5 class="mb-0">Frame List</h5>
                                </div>

                                <div class="card-body table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>No:</th>
                                                <th>Image</th>
                                                <th>Frame Name</th>
                                                <th>Material</th>
                                                <th>Material Action</th>
                                                <th>Frame Type</th>
                                                <th>Frame Type Action</th>
                                                <th>Frame Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($frames as $frame)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>
                                                        <img src="{{ asset('storage/' . $frame->image) }}" width="150"
                                                            class="img-thumbnail">
                                                    </td>

                                                    <td>{{ $frame->name }}</td>

                                                    <!-- Material -->
                                                    <td>{{ $frame->material->name ?? '-' }}</td>
                                                    <td>
                                                        @if($frame->material)
                                                            <!-- Edit Material Button -->
                                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                                data-bs-target="#editMaterialModal{{ $frame->material->id }}">
                                                                <i class="fas fa-edit"></i>
                                                            </button>

                                                            <!-- Material Edit Modal -->
                                                            <div class="modal fade"
                                                                id="editMaterialModal{{ $frame->material->id }}" tabindex="-1"
                                                                aria-labelledby="editMaterialModalLabel{{ $frame->material->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="editMaterialModalLabel{{ $frame->material->id }}">
                                                                                Edit Material
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('admin.material.update', $frame->material->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="modal-body">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="materialName{{ $frame->material->id }}"
                                                                                        class="form-label">
                                                                                        Material Name
                                                                                    </label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="materialName{{ $frame->material->id }}"
                                                                                        name="name"
                                                                                        value="{{ $frame->material->name }}"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary btn-sm"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary btn-sm">Save
                                                                                    Changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Delete Material -->
                                                            {{-- <form
                                                                action="{{ route('admin.material.destroy', $frame->material->id) }}"
                                                                method="POST" class="d-inline"
                                                                onsubmit="return confirm('Delete this material?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form> --}}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>

                                                    <!-- Frame Type -->
                                                    <td>{{ $frame->frameType->name ?? '-' }}</td>
                                                    <td>
                                                        @if($frame->frameType)
                                                            <!-- Edit Frame Type Button -->
                                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                                data-bs-target="#editFrameTypeModal{{ $frame->frameType->id }}">
                                                                <i class="fas fa-edit"></i>
                                                            </button>

                                                            <!-- Frame Type Edit Modal -->
                                                            <div class="modal fade"
                                                                id="editFrameTypeModal{{ $frame->frameType->id }}" tabindex="-1"
                                                                aria-labelledby="editFrameTypeModalLabel{{ $frame->frameType->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="editFrameTypeModalLabel{{ $frame->frameType->id }}">
                                                                                Edit Frame Type
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('admin.frame-type.update', $frame->frameType->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="modal-body">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="frameTypeName{{ $frame->frameType->id }}"
                                                                                        class="form-label">
                                                                                        Frame Type Name
                                                                                    </label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="frameTypeName{{ $frame->frameType->id }}"
                                                                                        name="name"
                                                                                        value="{{ $frame->frameType->name }}"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary btn-sm"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary btn-sm">Save
                                                                                    Changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Delete Frame Type -->
                                                            {{-- <form
                                                                action="{{ route('admin.frame-type.destroy', $frame->frameType->id) }}"
                                                                method="POST" class="d-inline"
                                                                onsubmit="return confirm('Delete this frame type?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form> --}}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <!-- Edit Frame Button -->
                                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#editFrameModal{{ $frame->id }}">
                                                            <i class="fas fa-edit"></i>
                                                        </button>

                                                        <!-- Frame Edit Modal -->
                                                        <div class="modal fade" id="editFrameModal{{ $frame->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="editFrameModalLabel{{ $frame->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editFrameModalLabel{{ $frame->id }}">
                                                                            Edit Frame
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('admin.frame.update', $frame->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <div class="mb-3">
                                                                                <label for="frameName{{ $frame->id }}"
                                                                                    class="form-label">Frame Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="frameName{{ $frame->id }}"
                                                                                    name="name" value="{{ $frame->name }}"
                                                                                    required>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="frameMaterial{{ $frame->id }}"
                                                                                    class="form-label">Material</label>
                                                                                <select class="form-control"
                                                                                    id="frameMaterial{{ $frame->id }}"
                                                                                    name="material_id">
                                                                                    <option value="">Select Material
                                                                                    </option>
                                                                                    @foreach($materials as $material)
                                                                                        <option value="{{ $material->id }}" {{ $frame->material_id == $material->id ? 'selected' : '' }}>
                                                                                            {{ $material->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="frameType{{ $frame->id }}"
                                                                                    class="form-label">Frame Type</label>
                                                                                <select class="form-control"
                                                                                    id="frameType{{ $frame->id }}"
                                                                                    name="frame_type_id">
                                                                                    <option value="">Select Frame Type
                                                                                    </option>
                                                                                    @foreach($frameTypes as $type)
                                                                                        <option value="{{ $type->id }}" {{ $frame->frame_type_id == $type->id ? 'selected' : '' }}>
                                                                                            {{ $type->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="frameImage{{ $frame->id }}"
                                                                                    class="form-label">Frame Image</label>
                                                                                <input type="file" class="form-control"
                                                                                    id="frameImage{{ $frame->id }}"
                                                                                    name="image">
                                                                                @if($frame->image)
                                                                                    <img src="{{ asset('storage/' . $frame->image) }}"
                                                                                        width="100" class="mt-2 img-thumbnail">
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary btn-sm"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-sm">Save
                                                                                Changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Frame -->
                                                        <form action="{{ route('admin.frame.destroy', $frame->id) }}"
                                                            method="POST" class="d-inline"
                                                            onsubmit="return confirm('Delete this frame?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer" style="background-color: #000;">
            <p class="footer-text text-muted" style="font-size: 14px; ">
                Crafted & Designed by <a href="http://astrasoftwaresolutions.com/" target="_blank"
                    style="color: #99c2ff; text-decoration: none;">
                    ASTRA SOFTWARE SOLUTIONS
                </a>
            </p>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE core -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- dashboard.js -->
    <!-- demo.js -->

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        function showNewInput(id) {
            document.getElementById(id).classList.remove('d-none');
        }
    </script>


    <script>
        function toggleNew(selectId, inputId) {
            const select = document.getElementById(selectId);
            const input = document.getElementById(inputId);

            select.addEventListener('change', function () {
                if (this.value === 'new') {
                    input.classList.remove('d-none');
                } else {
                    input.classList.add('d-none');
                    input.value = '';
                }
            });
        }

        toggleNew('frameTypeSelect', 'newFrameTypeInput');
        toggleNew('materialSelect', 'newMaterialInput');
    </script>

</body>

</html>