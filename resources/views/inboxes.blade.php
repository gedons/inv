<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Johnny ❤💖 Jena Olsen</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dash/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('dash/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

        <!-- Page Wrapper -->
 <div id="wrapper">

                    <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Johnny❤Jena Olsen</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-cog"></i>
                <span>Invest</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-flag"></i>
                <span>Activities</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Message</span>
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-user"></i>
                <span>Logout</span>
            </a>
        </li>


        </ul>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">

        </div>

</div>


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('dash/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dash/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('dash/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('dash/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('dash/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('dash/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('dash/js/demo/chart-pie-demo.js')}}"></script>

</body>


</html>

