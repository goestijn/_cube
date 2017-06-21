<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- vendors -->
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/sweetalert2/dist/sweetalert2.min.css') }}">

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
        <script src="{{ asset('vendors/admin/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>

        <!-- js -->
        <!--<script src="{{ asset('js/admin/actions.js') }}"></script>
        <script src="{{ asset('js/admin/app.js') }}"></script>-->
        <script>
            
            var body = $('body');


            /*------------------------------------------------
                Form group blue line
            -------------------------------------------------*/
            if($('.form-group--float')[0]) {

                $('.form-group--float').each(function () {
                    var p = $(this).find('.form-control').val()

                    if(!p.length == 0) {
                        $(this).find('.form-control').addClass('form-control--active');
                    }
                });

                $(body).on('blur', '.form-group--float .form-control', function(){
                    var i = $(this).val();

                    if (i.length == 0) {
                        $(this).removeClass('form-control--active');
                    }
                    else {
                        $(this).addClass('form-control--active');
                    }
                });
            }       

        </script>

        @yield('script')

    </body>

</html>