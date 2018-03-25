<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('browser_title') - CCMART-CRAFTSMAN CORPORATION</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script>
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<!--//tags -->
<link href="{{ asset($theme.'css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />

<link href="{{ asset($theme.'css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset($theme.'css/font-awesome.css')}}" rel="stylesheet">
<!--pop-up-box-->
<link href="{{ asset($theme.'css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--//pop-up-box-->
<!-- price range -->
<link rel="stylesheet" type="text/css" href="{{ asset($theme.'css/jquery-ui1.css')}}">
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset($theme.'css/default.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset($theme.'css/component.css')}}" />
<script src="{{ asset($theme.'js/modernizr.custom.js')}}"></script>

