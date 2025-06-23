<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Azea - Laravel Admin Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template, ">

        <!-- TITLE -->
		<title> Azea - Laravel Bootstrap5 Premium Dashboard Template</title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand/favicon.png')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- ANIMATE CSS -->
        <link href="{{asset('build/assets/iconfonts/animated.css')}}" rel="stylesheet">

        <!-- APP CSS -->
        @vite(['resources/css/app.css'])

        @yield('styles')
        
	</head>

	<body class="app ltr landing-page horizontal">

        <!-- PAGE -->
		<div class="page">
            <div class="page-main">

                <!-- MAIN-HEADER -->
                @include('layouts.landing.main-header')
                
                <!-- END MAIN-HEADER -->

                <!-- MAIN-SIDEBAR -->
                @include('layouts.landing.main-sidebar')

                <!-- END MAIN-SIDEBAR -->

                <!-- MAIN-CONTENT -->
                <div class="main-content mt-0">
                    <div class="side-app ">
                        <!-- CONTAINER -->
                        <div class="main-container">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- END MAIN-CONTENT -->

                <!-- MAIN-FOOTER -->
                @include('layouts.landing.footer')

                <!-- END MAIN-FOOTER -->

            </div>
            <!-- END PAGE-->
        </div>

        <!-- SCRIPTS -->
        
        @include('layouts.landing.scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- LANDING THEME COLOR JS -->
        <script src="{{asset('build/assets/landing/js/themeColors.js')}}"></script>

        <!-- LANDING JS -->
        <script src="{{asset('build/assets/landing/js/landing.js')}}"></script>

        <!-- END SCRIPTS -->

	</body>
</html>
