<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Early Detection</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    {{---Styling---------------------------------------------------------------}}
    {{--Mixed SASS--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--Animate.css--}}
    <link rel="stylesheet" href="{{asset("css/animate.min.css") }}">
    {{-------------------------------------------------------------------------}}

    {{---Required Scripts------------------------------------------------------}}
    {{--jQuery--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    {{--Bootstrap--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {{-------------------------------------------------------------------------}}

    {{---Fonts-----------------------------------------------------------------}}
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:600,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    {{-------------------------------------------------------------------------}}

    @yield('head')

</head>
<body>

<h1 class="title">Early Detection</h1>
@include('partials.nav')

<div class="container animated fadeIn">
    @yield('content')
</div>

@yield('footer')
</body>
</html>
