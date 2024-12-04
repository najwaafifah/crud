<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | KELOMPOK TST</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <style>
        /* Main Sidebar */
        .main-sidebar {
            background: linear-gradient(150deg, #1a237e 0%, #0d47a1 100%);
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
            border-right: none;
        }

        /* Brand Logo */
        .brand-link {
            background: rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
            padding: 1rem;
        }

        .brand-link .brand-image {
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            transition: all 0.5s ease;
        }

        .brand-link:hover .brand-image {
            transform: rotate(360deg);
        }

        /* User Panel */
        .user-panel {
            background: rgba(255, 255, 255, 0.05);
            margin: 1rem;
            border-radius: 10px;
            padding: 1rem;
        }

        .user-panel .image img {
            border: 3px solid #1565c0;
            padding: 2px;
            background: white;
        }

        /* Navigation */
        .nav-sidebar .nav-item {
            margin: 5px 15px;
        }

        .nav-sidebar .nav-link {
            border-radius: 10px;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .nav-sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        .nav-sidebar .nav-link.active {
            background: #1565c0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-sidebar .nav-icon {
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .nav-sidebar .nav-link:hover .nav-icon {
            color: #fff;
            transform: scale(1.2);
        }

        /* Logout Button */
        .nav-sidebar .log-out {
            background: rgba(244, 67, 54, 0.1);
            margin-top: 2rem;
        }

        .nav-sidebar .log-out:hover {
            background: rgba(244, 67, 54, 0.2);
        }

        /* Custom Scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Animations */
        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .nav-sidebar .nav-link {
            animation: slideIn 0.3s ease-out forwards;
        }

        /* Navbar Styling */
        .main-header {
            border: none !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .navbar {
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        /* Navbar Brand */
        .navbar-brand {
            font-weight: 600;
            color: #1a237e !important;
            font-size: 1.25rem;
            letter-spacing: 0.5px;
        }

        /* Navbar Toggle Button */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            background: rgba(26, 35, 126, 0.1);
        }

        .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 35, 126, 0.2);
        }

        /* Navbar Links */
        .navbar .nav-link {
            color: #424242 !important;
            font-weight: 500;
            padding: 0.75rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar .nav-link:hover {
            color: #1a237e !important;
            background: rgba(26, 35, 126, 0.05);
        }

        .navbar .nav-link.active {
            color: #1a237e !important;
            background: rgba(26, 35, 126, 0.1);
        }

        /* Navbar Icons */
        .navbar .nav-link i {
            font-size: 1.1rem;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .navbar .nav-link:hover i {
            transform: scale(1.1);
        }

        /* Navbar Search */
        .navbar .form-control-navbar {
            border: none;
            background: #f5f6fa;
            border-radius: 20px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .navbar .form-control-navbar:focus {
            background: white;
            box-shadow: 0 0 0 3px rgba(26, 35, 126, 0.1);
        }

        .navbar .btn-navbar {
            background: transparent;
            border: none;
            color: #1a237e;
            padding: 0.75rem;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .navbar .btn-navbar:hover {
            background: rgba(26, 35, 126, 0.1);
            color: #1a237e;
        }

        /* Navbar Notifications */
        .navbar .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 0.5rem;
            animation: dropdownFade 0.2s ease-out;
        }

        @keyframes dropdownFade {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .navbar .dropdown-item {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar .dropdown-item:hover {
            background: rgba(26, 35, 126, 0.05);
            color: #1a237e;
        }

        /* Navbar User Menu */
        .navbar .user-menu .nav-link {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
        }

        .navbar .user-menu img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 2px solid #1a237e;
            transition: all 0.3s ease;
        }

        .navbar .user-menu .nav-link:hover img {
            transform: scale(1.1);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar {
                padding: 0.5rem;
            }

            .navbar .nav-link {
                padding: 0.5rem !important;
            }

            .navbar .form-control-navbar {
                font-size: 0.9rem;
            }

            .navbar .user-menu img {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    @include('sweetalert::alert')

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/barang" class="nav-link">Barang</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/mahasiswa" class="nav-link">Mahasiswa</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/assets/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/assets/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/assets/dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li> --}}
                <!-- Notifications Dropdown Menu -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">KELOMPOK TST</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fa-solid fa-gauge-high"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/barang" class="nav-link {{ Request::is('barang') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Data Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/mahasiswa" class="nav-link {{ Request::is('mahasiswa') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Daftar Mahasiswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="log-out ml-3" href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-power-off" style="color: red;"></i>
                                Logout
                                <form action="/logout" method="POST" id="logging-out">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <!-- Content Wrapper. Contains page content -->
        {{-- content here --}}
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

      
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function() {
            var url = window.location;
            // for single sidebar menu
            $('ul.nav-sidebar a').filter(function() {
                return this.href == url;
            }).addClass('active');

            // for sidebar menu and treeview
            $('ul.nav-treeview a').filter(function() {
                    return this.href == url;
                }).parentsUntil(".nav-sidebar > .nav-treeview")
                .css({
                    'display': 'block'
                })
                .addClass('menu-open').prev('a')
                .addClass('active');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                responsive: true
            });

        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '#btn-delete', function(e) {
            e.preventDefault();
            var form = $(this).closest("form");
            Swal.fire({
                title: 'Are you sure?',
                text: "You will not be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#7367f0',
                cancelButtonColor: '#82868b',
                confirmButtonText: 'Yes, delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script>
        $(".log-out").on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#7367f0',
                cancelButtonColor: '#82868b',
                confirmButtonText: 'Yes, Log Out !'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#logging-out').submit()
                }
            })
        });
    </script>

</body>

</html>
