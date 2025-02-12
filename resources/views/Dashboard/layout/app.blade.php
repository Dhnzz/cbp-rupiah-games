<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - CBP Rupiah FunGames Gorontalo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assetDashboard/') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assetDashboard/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetDashboard/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assetDashboard/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assetDashboard/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assetDashboard/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('assetDashboard/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('assetDashboard/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assetDashboard/') }}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetDashboard/') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('Dashboard.layout.header')
    @include('Dashboard.layout.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{end($breadcrumb)['name']}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    @foreach ($breadcrumb as $item)
                        @if (!$loop->last)
                            <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
                        @else
                            <li class="breadcrumb-item"><a class="active"
                                    href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            @yield('content')
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetDashboard/') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/quill/quill.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assetDashboard/') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetDashboard/') }}/js/main.js"></script>

</body>

</html>
