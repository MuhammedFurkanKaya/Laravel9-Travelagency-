<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("title")</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/basic.css')}}" rel="stylesheet" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    @yield("head")
</head>

<body>
@include("admin.header")

@section('sidebar')
    @include("admin.sidebar")
@show



@yield('content')


<script src="{{asset('js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/wizard/jquery.steps.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@include("admin.footer")
@yield('foot')



 <!--asset fonksiyonunu araştır mutlaka. ve bu şekilde kullan her zaman
 çünkü bu projeyi başka bir alt dizinde çalıştırınca bulması için-->
</body>
</html>
