<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name=description content="A medium sized e-commerce shopping cart made by David Trushkov. Made using Laravel 5.2" />
    <meta name="keywords" content="shopping, ecommerce, store, electronics, electronics store, david, david trushkov, github, laravel, laravel 5, laravel 5.2" />
    <meta name="author" content="David Trushkov" />
    <link rel="shortcut icon" href="{!! asset('/images/slider/fav-icon.png') !!}" />

    <title>E-commerce Store</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
    <!-- Bootstrap core mdb.css -->
   {{-- <link rel="stylesheet" href="{{ asset('css/mdb.css') }}">
    <!-- Include app.less file -->
    <link rel="stylesheet" href="{{ asset('less/app.less') }}">
    <!-- Include app.scss file -->
    <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
    <!-- Include sweet alert file -->
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <!-- Include typeahead file -->
    <link rel="stylesheet" href="{{ asset('css/typeahead.css') }}">
    <!-- Include lity ligh-tbox file -->
    <link rel="stylesheet" href="{{ asset('css/lity.css') }}">

    <!-- Added the main.css file that combines app.scss and app.css togather -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">--}}


    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >

    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>
<body>
<header>
    <div id="shopify-section-header" class="shopify-section header-section">
        <div class="header header-fixed--true header-background--solid">
            @include('partials.topbar')
        </div>
    </div>
</header>
@include('partials.nav')

<div class="main">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">@yield('content')</div>
    </div>

</div>
@include('partials.flash')
<!-- jQuery -->
{{--<script type="text/javascript" src="{{ asset('js/libs/jquery.js') }}"></script>
<!-- Include main app.js file -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>--}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- MDB core JavaScript -->
{{--<script type="text/javascript" src="{{ asset('js/libs/mdb.js') }}"></script>--}}
<!-- Include sweet-alert.js file -->
<script type="text/javascript" src="{{ asset('js/libs/sweetalert.js') }}"></script>
<!-- Include typeahead.js file -->
<script type="application/javascript" src="{{ asset('js/libs/typeahead.js') }}"></script>
<!-- Include lity light-box js file -->
<script type="application/javascript" src="{{ asset('js/libs/lity.js') }}"></script>
<!-- Stripe.js file -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script src="js/cbpHorizontalMenu.min.js"></script>
<script>
    $(function() {
        cbpHorizontalMenu.init();
    });
</script>
</body>
</html>
