<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   

   <link rel="stylesheet" href="{{ asset('/public/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('/public/admin/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/public/admin/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/public/admin/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/public/admin/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/public/admin/fonts/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/public/admin/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/public/admin/style.css') }}">




    
</head>
<body >
    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!-- jquery-->
    <script src="{{asset('/public/admin/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{asset('/public/admin/js/plugins.js') }}"></script>
    <!-- Popper js -->
    <script src="{{asset('/public/admin/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('/public/admin/js/bootstrap.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('/public/admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{asset('/public/admin/js/main.js') }}"></script>
    <script src="{{ asset('/public/admin/js/select2.min.js') }}"></script>

</body>
</html>
