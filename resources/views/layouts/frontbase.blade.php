<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta name="description" content="">
    <!--
    Travel Template
    http://www.templatemo.com/tm-409-travel
    -->
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo_misc.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo_style.css">

    <script src="{{asset('assets')}}/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

    @yield("head")
</head>
<body>
@include("home.header")

@section('slider')
    @include("home.slider")
@show



@yield('content')



<@include("home.footer")
@yield('foot')
</body>
</html>
