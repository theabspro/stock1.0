<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include($theme.'includes.common.head')
    <link rel="stylesheet" href="{{ asset('theme1/css/style1.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('theme1/css/font-awesome1.css') }}">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    @yield('header_css')
</head>
<body>
    <div class="video-w3l" data-vide-bg="{{asset('theme1/video/1')}}">
        @yield('content')

        <!--footer-->
        <div class="footer">
            <p>&copy; 2018 phoinix Solution| Design by
                <a href="http://www.phoinixsolution.com">Phoinix Solution</a>
            </p>
        </div>
        <!--//footer-->
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- js -->
    <script src="{{ asset('theme1/js/jquery-2.1.4.min1.js')}}"></script>
    <script src="{{ asset('theme1/js/jquery.vide.min.js')}}"></script>
    <!-- //js -->

    <script src="{{ asset('theme1/plugins/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme1/plugins/jquery-validation/dist/additional-methods.min.js') }}" type="text/javascript"></script>

    @yield('footer_scripts')
    <script src="{{ URL::asset('theme1/js/custom.js')}}"></script>

</body>
</html>
