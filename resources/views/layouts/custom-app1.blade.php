<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Azea - Laravel Admin Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template,">

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

<body class="login-page">

<!--- GLOBAL LOADER -->
<div id="global-loader" >
    <img src="{{asset('build/assets/images/svgs/loader.svg')}}" alt="loader">
</div>
<!--- END GLOBAL LOADER -->

<!-- PAGE -->
@yield('custom-con')
@yield('custom-com')
@yield('custom-page1')
@yield('custom-page2')
@yield('custom-page3')
@yield('content')

<!-- END PAGE-->

<!-- SCRIPTS -->

@include('layouts.components.custom-scripts')

<!-- THEMECOLOR JS -->
{{--@vite('resources/assets/js/themeColors.js')--}}


<!-- APP JS -->
@vite('resources/js/app.js')


<!-- END SCRIPTS -->

</body>
</html>
