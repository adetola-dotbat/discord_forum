<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 2 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->

    @vite(['resources/css/admin/style.css', 'resources/js/admin/script.js'])

    @stack('style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('administrator.inc.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('administrator.inc.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @include('administrator.inc.footer')
    </div>
    <!-- ./wrapper -->



    @stack('script')
</body>

</html>
