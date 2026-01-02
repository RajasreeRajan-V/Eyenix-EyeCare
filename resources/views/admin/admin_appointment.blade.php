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
                            <a href="{{ route('admin.appointment.index') }}" class="nav-link active">
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
                                <i class="fas fa-sign-out-alt me-1"></i> LOGOUT
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
                    <i class="fas fa-calendar-check"></i> Appointments List
                </h5>

                <div>
                    <span class="badge bg-info px-3 py-2 me-2">
                        Total Appointments: {{ $appointments->count() }}
                    </span>

                    <button onclick="printAppointments()" class="btn btn-light btn-sm">
                        <i class="fas fa-print"></i> Print
                    </button>
                    <a href="{{ route('admin.appointments.download') }}" class="btn btn-success btn-sm">
                        <i class="fas fa-download"></i> Download
                    </a>

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

                        <div class="card-body table-responsive p-0" id="printArea">
                            <table class="table table-hover table-bordered text-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Patient Name</th>
                                        <th>Phone</th>
                                        <th>Eye Camp</th>
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Booked At</th>
                                        <th class="no-print">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($appointments as $index => $appointment)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>

                                            <td class="fw-bold">
                                                {{ $appointment->name }}
                                            </td>

                                            <td>
                                                {{ $appointment->phone }}
                                            </td>

                                            <td>
                                                <span class="badge bg-primary">
                                                    {{ $appointment->eyeCamp->title ?? 'N/A' }}
                                                </span>
                                            </td>

                                            <td>
                                                {{ \Carbon\Carbon::parse($appointment->eyeCamp->start_date)->format('d M Y') }}
                                            </td>

                                            <td>
                                                {{ $appointment->eyeCamp->location }}
                                            </td>

                                            <td>
                                                <span class="badge bg-secondary">
                                                    {{ $appointment->created_at->format('d M Y') }}
                                                </span>
                                            </td>
                                            <td>
                                                <!-- PRINT BUTTON -->
                                                <button class="btn btn-sm btn-outline-primary no-print" onclick="printSingleAppointment(
                                                    '{{ $appointment->name }}',
                                                    '{{ $appointment->phone }}',
                                                    '{{ $appointment->eyeCamp->title }}',
                                                    '{{ $appointment->eyeCamp->start_date }}',
                                                    '{{ $appointment->eyeCamp->location }}'
                                                )">
                                                    <i class="fas fa-print"></i>
                                                </button>

                                                <!-- DELETE BUTTON -->
                                                <form action="{{ route('admin.appointment.destroy', $appointment->id) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-outline-danger no-print">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-muted py-4">
                                                No appointments found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
        function printAppointments() {
            let printContents = document.getElementById('printArea').innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = `
        <html>
        <head>
            <title>Appointments List</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
            <style>
                table { width: 100%; border-collapse: collapse; }
                th, td { border: 1px solid #000; padding: 8px; }
                th { background: #f1f1f1; }
                body { padding: 20px; }
            </style>
        </head>
        <body>
            <h3 class="text-center mb-4">Eye Camp Appointments</h3>
            ${printContents}
        </body>
        </html>
    `;

            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>
    <script>
        function printSingleAppointment(name, phone, camp, date, location) {

            let printWindow = window.open('', '', 'width=800,height=600');

            printWindow.document.write(`
        <html>
        <head>
            <title>Appointment</title>
            <style>
                body { font-family: Arial; padding: 20px; }
                h2 { text-align: center; margin-bottom: 20px; }
                table { width: 100%; border-collapse: collapse; }
                td { border: 1px solid #000; padding: 10px; }
            </style>
        </head>
        <body>
            <h2>Eye Camp Appointment</h2>
            <table>
                <tr><td><b>Patient Name</b></td><td>${name}</td></tr>
                <tr><td><b>Phone</b></td><td>${phone}</td></tr>
                <tr><td><b>Eye Camp</b></td><td>${camp}</td></tr>
                <tr><td><b>Date</b></td><td>${date}</td></tr>
                <tr><td><b>Location</b></td><td>${location}</td></tr>
            </table>
        </body>
        </html>
    `);

            printWindow.document.close();
            printWindow.print();
        }
    </script>

</body>

</html>