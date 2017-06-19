<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- vendors -->
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">

        <!-- fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/admin/roboto/font-face.css') }}">

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">

    </head>

    <body>

        @yield('main')

        <!-- vendors -->
        <script src="{{ asset('vendors/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/Waves/dist/waves.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

        <!-- js -->
        <script src="{{ asset('js/admin/actions.js') }}"></script>
        <script src="{{ asset('js/admin/app.js') }}"></script>

    </body>
</html>