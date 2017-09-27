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
    <link rel="stylesheet" href="{{ asset('css/mdb.css') }}">
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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-76800406-1', 'auto');
        ga('send', 'pageview');
    </script>

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
<script type="text/javascript" src="{{ asset('js/libs/mdb.js') }}"></script>
<!-- Include sweet-alert.js file -->
<script type="text/javascript" src="{{ asset('js/libs/sweetalert.js') }}"></script>
<!-- Include typeahead.js file -->
<script type="application/javascript" src="{{ asset('js/libs/typeahead.js') }}"></script>
<!-- Include lity light-box js file -->
<script type="application/javascript" src="{{ asset('js/libs/lity.js') }}"></script>
<!-- Stripe.js file -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script>
    (function(w,d,s,g,js,fs){
        g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
        js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
        js.src='https://apis.google.com/js/platform.js';
        fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
    }(window,document,'script'));
</script>
<script>
    gapi.analytics.ready(function() {
        /**
         * Authorize the user immediately if the user has already granted access.
         * If no access has been created, render an authorize button inside the
         * element with the ID "embed-api-auth-container".
         */
        gapi.analytics.auth.authorize({
            container: 'embed-api-auth-container',
            clientid: 'YOUR CLIENT ID'
        });
        /**
         * Create a new ViewSelector instance to be rendered inside of an
         * element with the id "view-selector-container".
         */
        var viewSelector = new gapi.analytics.ViewSelector({
            container: 'view-selector-container'
        });
        // Render the view selector to the page.
        viewSelector.execute();
        /**
         * Create a new DataChart instance with the given query parameters
         * and Google chart options. It will be rendered inside an element
         * with the id "chart-container".
         */
        var dataChart = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:sessions',
                dimensions: 'ga:date',
                'start-date': '30daysAgo',
                'end-date': 'yesterday'
            },
            chart: {
                container: 'chart-container',
                type: 'LINE',
                options: {
                    width: '100%'
                }
            }
        });
        /**
         * Render the dataChart on the page whenever a new view is selected.
         */
        viewSelector.on('change', function(ids) {
            dataChart.set({query: {ids: ids}}).execute();
        });
    });
</script>
<script>
    // your publish key
    Stripe.setPublishableKey('YOUR STRIPE PUBLISHABLE KEY');
    //
    jQuery(function($) {
        $('#payment-form').submit(function(event) {
            var $form = $(this);
            // Disable the submit button to prevent repeated clicks
            $form.find($('.btn')).prop('disabled', true);
            Stripe.card.createToken($form, stripeResponseHandler);
            // Prevent the form from submitting with the default action
            return false;
        });
    });
    function stripeResponseHandler(status, response) {
        var $form = $('#payment-form');
        if (response.error) {
            // Show the errors on the form
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').removeClass("hidden");
            $form.find($('.btn')).prop('disabled', false);
        } else {
            // response contains id and card, which contains additional card details
            var token = response.id;
            // Insert the token into the form so it gets submitted to the server
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            // and submit
            $form.get(0).submit();
        }
    }
</script>
{{--<script>
    $('#flyer-query').typeahead({
        minLength: 2,
        source: {
            data: [
                @foreach($search as $query)
                    "{{ $query->product_name }}",
                @endforeach
            ]
        }
    });
</script>--}}
<script>
    new WOW().init();
</script>

@include('partials.flash')

</body>
</html>
