<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sipaten Sistem Informasi Kepangkatan Dosen LLDIKTI1 (Kopertis) Wilayah I Sumatera Utara">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- End Layout styles -->
    <link rel="icon" ref="{{ asset('images/logo-sipaten.ico') }}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
