<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Social Joe</title>


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.js') }}"></script>
    @yield('page_css')

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {{--<link href="/css/font-awesome.css" rel="stylesheet" type="text/css">--}}
    <style>
        body {
            font-family: 'Raleway';
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="/">Social Joe</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
                @yield('navbuttons')
            </ul>
        </div>

    </div>
</nav>

    @yield('content')
</body>

<!-- Footer -->
<footer style="padding: 50px 0; background-color: #f8f8f8;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-muted small" style="margin: 15px 0 0">Copyright &copy; Social Joe 2016. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
</html>
