<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ '/backend/vendor/fontawesome-free/css/all.min.css' }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ '/backend/vendor/datatables/dataTables.bootstrap4.min.css' }}" rel="stylesheet">
    {{-- bootstarp 5 icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @stack('css')
    <style>
        .close {
            color: white;
            opacity: .9;
        }

        span.iconbox {
            background: #656565;
            padding: 12px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .sidebar.toggled .nav-item .nav-link {
            padding: 0px 20px !important;
            margin-bottom: 10px;
        }

        .sidebar.toggled .nav-item .nav-link span {
            font-size: 14px !important;
            display: block;
            font-weight: bold;
            color: white;
        }

        .sidebar-dark .nav-item .nav-link i {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .sidebar .nav-item .nav-link span {
            font-size: 15px;
            display: inline;
            color: white !important;
            font-weight: bold;
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item {
            font-weight: bold;
        }

        /*
        .sidebar .toggled .nav-item {
            position: relative;
            margin-bottom: -44px;
        }

        .sidebar .toggled .sidebar-dark hr.sidebar-divider {
            border-top: none;
        } */
    </style>
</head>

<body id="page-top">
    {{-- error message --}}
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif --}}
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ '/backend/vendor/jquery/jquery.min.js' }}"></script>
    <script src="{{ '/backend/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ '/backend/vendor/jquery-easing/jquery.easing.min.js' }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ '/backend/js/sb-admin-2.min.js' }}"></script>

    <!-- Page level plugins -->
    <script src="{{ '/backend/vendor/chart.js/Chart.min.js' }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ '/backend/js/demo/chart-area-demo.js' }}"></script>
    <script src="{{ '/backend/js/demo/chart-pie-demo.js' }}"></script>

    <!-- Page level plugins -->
    <script src="{{ '/backend/vendor/datatables/jquery.dataTables.min.js' }}"></script>
    <script src="{{ '/backend/vendor/datatables/dataTables.bootstrap4.min.js' }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ '/backend/js/demo/datatables-demo.js' }}"></script>
    {{-- text editor js --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    @include('sweetalert::alert')

    @stack('js')
</body>

</html>
