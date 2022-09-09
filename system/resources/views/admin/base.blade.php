<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Treasure Area</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @Include ('admin.section.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @Include ('admin.section.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin.utils.notif')
                    </div>
                </div>
                @yield('content')
            </div>


            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
        </div>
        @Include ('admin.section.footer')

        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('public') }}s/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('public') }}s/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ url('public') }}s/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ url('public') }}s/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

        <script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>

        <script>
            $(".table-datatable").dataTables();
        </script>
</body>
</html>
