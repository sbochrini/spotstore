{{--
<!-- Navigation -->
<nav class="navbar z-depth-2" id="nav-bar-id">
    <div class="container-fluid" style="width: 90%;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="{{ url('/') }}" id="nav-bar-logo"><i class="material-icons md-48">whatshot</i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (!$signedIn)
                    <li><a href="{{ url('/login') }}" class="btn-flat" id="nav-bar-Login">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="btn btn-primary waves-effect waves-light">Register</a></li>
                @else
                    <li><a href="{{ route('cart') }}"><i class="material-icons" style="color: black;">shopping_basket</i><span class="badge green">{{ $cart_count }}</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-primary waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ $user->username }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropdwon">
                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right" id="navbar-right">
                <li id="search-li">
                    @include('pages.partials.search_box')
                </li>
            </ul>
        </div>

    </div>
</nav>--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <i class="material-icons"></i>Brands4all
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>