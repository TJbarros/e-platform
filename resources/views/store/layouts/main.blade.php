<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{$title or 'E. Platform'}}</title>
   
    <!-- Favicon -->
    <link rel="icon" href="{{ secure_asset('assets/img/icon.jpg')}}">
    <!-- Core Stylesheet -->
    <link href="{{ secure_asset('assets/style.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ secure_asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>
<body>
    @include('store.layouts.header') 
    @yield('home')
    @include('store.layouts.footer')
    <!-- Jquery-2.2.4 JS -->
    <script src="{{url('assets/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins JS -->
    <script src="{{url('assets/js/plugins.js')}}"></script>
    <!-- Slick Slider Js-->
    <script src="{{url('assets/js/slick.min.js')}}"></script>
    <!-- Footer Reveal JS -->
    <script src="{{url('assets/js/footer-reveal.min.js')}}"></script>
    <!-- Active JS -->
    <script src="{{url('assets/js/active.js')}}"></script>
</body>
</html>