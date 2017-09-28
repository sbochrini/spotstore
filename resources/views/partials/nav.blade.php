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
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
    <span class="h1" class="navbar-brand mb-0">Navbar</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Αρχική <span class="sr-only">(current)</span></a>
            </li>
            @foreach($pr_categories as $pr_category)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdown_cat_{{ $pr_category->cat_id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $pr_category->cat_name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_cat_{{ $pr_category->cat_id }}">
                        <a class="dropdown-item" href="#">lllllll</a>
                        <a class="dropdown-item" href="#">lllllll</a>
                        @foreach($pr_category->parent() as $sec_categories)
                            <a class="dropdown-item" href="#">{{ $sec_categories->cat_name }} lllllll</a>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
