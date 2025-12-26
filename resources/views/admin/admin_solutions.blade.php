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

        .table td,
        .table th {
            vertical-align: middle;
        }

        .badge {
            font-size: 12px;
            padding: 6px 8px;
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
                            <a href="{{ route('admin.frame.index') }}" class="nav-link">
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
                            <a href="{{ route('admin.solution.index') }}" class="nav-link active">
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
            <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                <h5 class="mb-0 text-white">
                    <i class="fas fa-calendar-check"></i> Lens Solutions
                </h5>

                <div>
                    <div class="card-header bg-dark d-flex justify-content-between align-items-center">

                        <div>
                            {{-- <span class="badge bg-info px-3 py-2 me-2">
                                Total Appointments: {{ $appointments->count() }}
                            </span> --}}

                            <!-- CREATE LENS SOLUTION BUTTON -->
                            <button type="button" class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#createSolutionModal">
                                <i class="fas fa-plus"></i> Create Lens Solution
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- CREATE LENS SOLUTION MODAL -->
            <div class="modal fade" id="createSolutionModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">

                        <form action="{{ route('admin.solution.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Modal Header -->
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title">Create Lens Solution</h5>
                                <button type="button" class="btn-close btn-close-white"
                                    data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                <!-- Contact Lens -->
                                <div class="mb-3">
                                    <label class="form-label">Contact Lens</label>
                                    <select name="contact_lens_id" class="form-select" required>
                                        <option value="">Select Contact Lens</option>
                                        @foreach($contactLenses as $lens)
                                            <option value="{{ $lens->id }}">{{ $lens->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Solution Name -->
                                <div class="mb-3">
                                    <label class="form-label">Solution Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <!-- Image -->
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="img" class="form-control" required>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4" required></textarea>
                                </div>

                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Solution</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <section class="content mt-4">
                <div class="container-fluid">

                    <div class="card shadow-sm">
                        <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-white">
                                <i class="fas fa-calendar-check"></i> Appointments List
                            </h5>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered text-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Solution Name</th>
                                        <th>Contact Lens</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th class="no-print">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($solutions as $index => $solution)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>

                                            <td class="fw-bold">
                                                {{ $solution->name }}
                                            </td>

                                            <td>
                                                <span class="badge bg-primary">
                                                    {{ $solution->contactLens->name ?? 'N/A' }}
                                                </span>
                                            </td>

                                            <td>
                                                <img src="{{ asset('storage/' . $solution->img) }}" width="60"
                                                    class="rounded border">
                                            </td>

                                            <td>
                                                {{ Str::limit($solution->description, 50) }}
                                            </td>

                                            <td>
                                                {{ $solution->created_at->format('d M Y') }}
                                            </td>

                                            <td class="no-print">
                                                <!-- EDIT -->
                                                <button class="btn btn-sm btn-outline-warning me-1" data-bs-toggle="modal"
                                                    data-bs-target="#editSolutionModal{{ $solution->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>


                                                <!-- DELETE -->
                                                <form action="{{ route('admin.solution.destroy', $solution->id) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Delete this solution?');">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-muted py-4">
                                                No lens solutions found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </section>
            @foreach($solutions as $solution)
                <div class="modal fade" id="editSolutionModal{{ $solution->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">

                            <form action="{{ route('admin.solution.update', $solution->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="modal-header bg-warning">
                                    <h5 class="modal-title">Edit Lens Solution</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">

                                    <!-- Contact Lens -->
                                    <div class="mb-3">
                                        <label class="form-label">Contact Lens</label>
                                        <select name="contact_lens_id" class="form-select" required>
                                            @foreach($contactLenses as $lens)
                                                <option value="{{ $lens->id }}" {{ $solution->contact_lens_id == $lens->id ? 'selected' : '' }}>
                                                    {{ $lens->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label class="form-label">Solution Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $solution->name }}"
                                            required>
                                    </div>

                                    <!-- Image -->
                                    <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="img" class="form-control">
                                        <img src="{{ asset('storage/' . $solution->img) }}" width="80" class="mt-2 rounded">
                                    </div>

                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control" rows="3"
                                            required>{{ $solution->description }}</textarea>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button class="btn btn-warning">Update</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            @endforeach

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


</body>

</html>