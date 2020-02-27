<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ mix('/css/all.css') }}">
        
        <!-- fonts-icon -->
        {{-- <link rel="stylesheet" href="style.css"> --}}

        <!-- favicon -->
        <link rel="icon" ref="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="container-scroller">
            @include('layouts.header')

            <div class="container-fluid page-body-wrapper">
                @include('layouts.sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>

                    @include('layouts.footer')
                </div>
            </div>
        </div>      
        
        <!-- plugins:js -->
        <script src="{{ mix('/js/all.js') }}"></script>
            
    </body>
</html>
