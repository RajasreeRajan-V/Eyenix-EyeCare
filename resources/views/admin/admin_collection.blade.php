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
                            <a href="{{ route('admin.Collection.index') }}" class="nav-link active">
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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Product-Collection</h3>

                <button class="btn btn-primary" data-toggle="modal" data-target="#addCollectionModal">
                    <i class="fas fa-plus"></i> Add Product-Collection
                </button>
            </div>

            <div class="modal fade" id="addCollectionModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <form action="{{ route('admin.Collection.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title">Add Product-Collection</h5>
                                <button type="button" class="close text-white" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Front Image</label>
                                        <input type="file" name="front_image" class="form-control-file">
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Back Image</label>
                                        <input type="file" name="back_image" class="form-control-file">
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label>Type</label>
                                        <select name="type" class="form-control">
                                            <option value="" disabled selected>Select Type</option>
                                            <option>EyeGlass</option>
                                            <option>SunGlass</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="" disabled selected>Select Gender</option>
                                            <option>Men</option>
                                            <option>Women</option>
                                            <option>UniSex</option>
                                            <option>KIDS</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label>Brand</label>
                                        <select name="brand_id" class="form-control" required>
                                            <option value="" disabled selected>Select Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label>Shape</label>
                                        <select name="shape_id" class="form-control">
                                            <option value="" disabled selected>Select Shape</option>
                                            @foreach($shapes as $shape)
                                                <option value="{{ $shape->id }}">{{ $shape->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label>Frame</label>
                                        <select name="frame_id" class="form-control">
                                            <option value="" disabled selected>Select Frame</option>
                                            @foreach($frames as $frame)
                                                <option value="{{ $frame->id }}">{{ $frame->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <label>Colors</label>
                                        <div class="row">
                                            @foreach($colors as $color)
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="colors[]" value="{{ $color->id }}"
                                                            class="form-check-input" id="color{{ $color->id }}">
                                                        <label class="form-check-label" for="color{{ $color->id }}">
                                                            {{ $color->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label>Description</label>
                                        <textarea name="description" rows="3" class="form-control"></textarea>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save Collection
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content mt-4">
                <div class="container-fluid">

                    <div class="card shadow-sm">
                        <div class="card-header bg-dark d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-white">
                                <i class="fas fa-layer-group"></i> Product-Collection List
                            </h5>
                            <span class="badge badge-info px-3 py-2">
                                Total Product-Collection: {{ $collections->count() }}
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered text-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;">#</th>
                                        <th style="width: 90px;">Image</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th style="width: 180px;">Colors</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($collections as $index => $collection)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>

                                            <td>
                                                <img src="{{ asset('storage/' . $collection->front_image) }}"
                                                    class="img-thumbnail"
                                                    style="width: 70px; height: 50px; object-fit: cover;">
                                            </td>

                                            <td class="font-weight-bold">
                                                {{ $collection->name }}
                                            </td>

                                            <td>
                                                <span class="badge badge-secondary">
                                                    {{ $collection->brand->name }}
                                                </span>
                                            </td>

                                            <td>
                                                <span class="badge badge-success">
                                                    ₹ {{ $collection->price }}
                                                </span>
                                            </td>

                                            <td>
                                                @foreach($collection->colors as $color)
                                                    <span class="badge badge-info mr-1 mb-1">
                                                        {{ $color->name }}
                                                    </span>
                                                @endforeach
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#editCollectionModal"
                                                    data-url="{{ route('admin.Collection.update', $collection->id) }}"
                                                    data-name="{{ $collection->name }}"
                                                    data-price="{{ $collection->price }}"
                                                    data-type="{{ $collection->type }}"
                                                    data-gender="{{ $collection->gender }}"
                                                    data-description="{{ $collection->description }}"
                                                    data-brand="{{ $collection->brand_id }}"
                                                    data-shape="{{ $collection->shape_id }}"
                                                    data-frame="{{ $collection->frame_id }}"
                                                    data-colors="{{ $collection->colors->pluck('id') }}"
                                                    data-front_image="{{ $collection->front_image }}"
                                                    data-back_image="{{ $collection->back_image }}">
                                                    Edit
                                                </button>


                                                <form action="{{ route('admin.Collection.destroy', $collection->id) }}"
                                                    method="POST" style="display:inline;"
                                                    onsubmit="return confirm('Delete this collection?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-muted py-4">
                                                No collections found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>

            <div class="modal fade" id="editCollectionModal" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">

                        <form id="editCollectionForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="modal-header bg-warning text-white">
                                <h5 class="modal-title">Edit Product-Collection</h5>
                                <button type="button" class="close text-white" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" name="name" id="edit_name" class="form-control" required>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price" id="edit_price" class="form-control">
                                    </div>

                                    <!-- Front Image -->
                                    <div class="col-md-6 mt-3">
                                        <label>Front Image</label>
                                        <input type="file" name="front_image" class="form-control-file">
                                        <small class="text-muted">Leave empty to keep existing image</small>
                                        <div class="mt-2">
                                            <img id="edit_front_preview" src=""
                                                style="width:100px; height:70px; object-fit:cover;"
                                                class="img-thumbnail">
                                        </div>
                                    </div>

                                    <!-- Back Image -->
                                    <div class="col-md-6 mt-3">
                                        <label>Back Image</label>
                                        <input type="file" name="back_image" class="form-control-file">
                                        <small class="text-muted">Leave empty to keep existing image</small>
                                        <div class="mt-2">
                                            <img id="edit_back_preview" src=""
                                                style="width:100px; height:70px; object-fit:cover;"
                                                class="img-thumbnail">
                                        </div>
                                    </div>


                                    <!-- Type -->
                                    <div class="col-md-4 mt-3">
                                        <label>Type</label>
                                        <select name="type" id="edit_type" class="form-control">
                                            <option value="EyeGlass">Eye Glass</option>
                                            <option value="SunGlass">Sun Glass</option>
                                        </select>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-4 mt-3">
                                        <label>Gender</label>
                                        <select name="gender" id="edit_gender" class="form-control">
                                            <option value="Men">Men</option>
                                            <option value="Women">Women</option>
                                            <option value="UniSex">UniSex</option>
                                            <option value="KIDS">KIDS</option>
                                        </select>
                                    </div>

                                    <!-- Brand -->
                                    <div class="col-md-4 mt-3">
                                        <label>Brand</label>
                                        <select name="brand_id" id="edit_brand" class="form-control">
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Shape -->
                                    <div class="col-md-4 mt-3">
                                        <label>Shape</label>
                                        <select name="shape_id" id="edit_shape" class="form-control">
                                            @foreach($shapes as $shape)
                                                <option value="{{ $shape->id }}">{{ $shape->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Frame -->
                                    <div class="col-md-4 mt-3">
                                        <label>Frame</label>
                                        <select name="frame_id" id="edit_frame" class="form-control">
                                            @foreach($frames as $frame)
                                                <option value="{{ $frame->id }}">{{ $frame->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Colors -->
                                    <div class="col-md-4 mt-3">
                                        <label>Colors</label>
                                        <div class="row">
                                            @foreach($colors as $color)
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="colors[]" value="{{ $color->id }}"
                                                            class="form-check-input edit-color"
                                                            id="edit_color{{ $color->id }}">
                                                        <label class="form-check-label" for="edit_color{{ $color->id }}">
                                                            {{ $color->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="col-md-12 mt-3">
                                        <label>Description</label>
                                        <textarea name="description" id="edit_description" rows="3"
                                            class="form-control"></textarea>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-warning" type="submit">Update Collection</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
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
        $('#editCollectionModal').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget);
            var modal = $(this);

            // Basic fields
            modal.find('#edit_name').val(button.data('name'));
            modal.find('#edit_price').val(button.data('price'));
            modal.find('#edit_type').val(button.data('type'));
            modal.find('#edit_gender').val(button.data('gender'));
            modal.find('#edit_description').val(button.data('description'));

            // Select fields
            modal.find('#edit_brand').val(button.data('brand'));
            modal.find('#edit_shape').val(button.data('shape'));
            modal.find('#edit_frame').val(button.data('frame'));

            // Colors (checkboxes)
            $('.edit-color').prop('checked', false);
            var colors = button.data('colors');

            if (colors) {
                if (typeof colors === 'string') {
                    colors = JSON.parse(colors);
                }

                colors.forEach(function (id) {
                    $('#edit_color' + id).prop('checked', true);
                });
            }


            // Image previews
            var frontImage = button.data('front_image');
            var backImage = button.data('back_image');

            if (frontImage) {
                modal.find('#edit_front_preview').attr('src', '/storage/' + frontImage);
            } else {
                modal.find('#edit_front_preview').attr('src', '');
            }

            if (backImage) {
                modal.find('#edit_back_preview').attr('src', '/storage/' + backImage);
            } else {
                modal.find('#edit_back_preview').attr('src', '');
            }

            // Set form action
            $('#editCollectionForm').attr('action', button.data('url'));
        });
    </script>


</body>

</html>