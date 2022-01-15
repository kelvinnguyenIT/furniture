<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('title') - {{config('app.name')}}">
    <meta name="author" content="duongvalo">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/admin/favicon.png">
    <title>@yield('title') - {{config('app.name')}}</title>
	<link rel="canonical" href="{{request()->url()}}" />
    <!-- Custom CSS -->
    <link href="/css/admin/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="/js/admin/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/js/admin/popper.min.js"></script>
    <script src="/js/admin/bootstrap.min.js"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
</body>
</html>
