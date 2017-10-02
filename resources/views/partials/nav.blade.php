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
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
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
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdown_cat_{{ $pr_category->id }}" data-toggle="dropdown" aria-haspopup="true" >
                        {{ $pr_category->cat_name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_cat_{{ $pr_category->id }}">
                         $secondaries=App\Category::childcategories( $pr_category)
                        @foreach($secondaries as $secondary)
                                --}}{{--<li id="a_cat_{{ $secondary->id }}" class="dropdown-item" href="#">--}}{{--
                                    <li class="dropdown-submenu" id="a_cat_{{ $secondary->id }}" >
                                        <a class="dropdown-item dropdown-toggle" href="#" id="seccat_lalalo" data-toggle="dropdown" aria-haspopup="true" >
                                            {{ $secondary->cat_name }}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="seccat_lalalo">
                                            <li><a id="a_seccat_{{ $secondary->id }}" class="dropdown-item" href="#">lalallo</a></li>
                                            <li><a id="a_seccat_{{ $secondary->id }}" class="dropdown-item" href="#">lalallo</a></li>
                                            <li><a id="a_seccat_{{ $secondary->id }}" class="dropdown-item" href="#">lalallo</a></li>
                                        </ul>
                                    </li>
                                --}}{{--</li>--}}{{--
                        @endforeach
                    </div>
                </div>
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>--}}
<nav id="cbp-hrmenu" class="cbp-hrmenu">
    <span class="h1" class="navbar-brand mb-0">Navbar</span>
    <ul>
        <li><a href="#">Αρχική</a></li>
        @foreach($pr_categories as $pr_category)<?php  $secondaries=App\Category::childcategories( $pr_category); ?>
        <li>
            <a href="#">{{ $pr_category->cat_name }}</a>
            <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                    @foreach($secondaries as $secondary)
                    <div>
                        <h4>{{ $secondary->cat_name }}</h4>
                        <ul>
                            <li><a href="#">Catch the Bullet</a></li>
                            <li><a href="#">Snoopydoo</a></li>
                            <li><a href="#">Fallen Angel</a></li>
                            <li><a href="#">Sui Maker</a></li>
                            <li><a href="#">Wave Master</a></li>
                            <li><a href="#">Golf Pro</a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>{{--cbp-hrsub-inner--}}
            </div>{{--cbp-hrsub --}}
        </li>
        @endforeach
        <li>
            <a href="#">Downloads</a>
            <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                    <div>
                        <h4>Education &amp; Learning</h4>
                        <ul>
                            <li><a href="#">Learn Thai</a></li>
                            <li><a href="#">Math Genius</a></li>
                            <li><a href="#">Chemokid</a></li>
                        </ul>
                        <h4>Professionals</h4>
                        <ul>
                            <li><a href="#">Success 1.0</a></li>
                            <li><a href="#">Moneymaker</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Entertainment</h4>
                        <ul>
                            <li><a href="#">Gadget Finder</a></li>
                            <li><a href="#">Green Tree Express</a></li>
                            <li><a href="#">Green Tree Pro</a></li>
                            <li><a href="#">Holy Cannoli</a></li>
                            <li><a href="#">Wobbler 3.0</a></li>
                            <li><a href="#">Coolkid</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Games</h4>
                        <ul>
                            <li><a href="#">Catch the Bullet</a></li>
                            <li><a href="#">Snoopydoo</a></li>
                            <li><a href="#">Fallen Angel</a></li>
                            <li><a href="#">Sui Maker</a></li>
                            <li><a href="#">Wave Master</a></li>
                            <li><a href="#">Golf Pro</a></li>
                        </ul>
                    </div>
                </div>{{--cbp-hrsub-inner--}}
            </div> {{--/cbp-hrsub --}}
        </li>
        <li>
            <a href="#">Applications</a>
            <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                    <div>
                        <h4>Learning &amp; Games</h4>
                        <ul>
                            <li><a href="#">Catch the Bullet</a></li>
                            <li><a href="#">Snoopydoo</a></li>
                        </ul>
                        <h4>Utilities</h4>
                        <ul>
                            <li><a href="#">Gadget Finder</a></li>
                            <li><a href="#">Green Tree Express</a></li>
                            <li><a href="#">Green Tree Pro</a></li>
                            <li><a href="#">Wobbler 3.0</a></li>
                            <li><a href="#">Coolkid</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Education</h4>
                        <ul>
                            <li><a href="#">Learn Thai</a></li>
                            <li><a href="#">Math Genius</a></li>
                            <li><a href="#">Chemokid</a></li>
                        </ul>
                        <h4>Professionals</h4>
                        <ul>
                            <li><a href="#">Success 1.0</a></li>
                            <li><a href="#">Moneymaker</a></li>
                        </ul>
                    </div>
                </div> {{--/cbp-hrsub-inner--}}
            </div>{{--cbp-hrsub--}}
        </li>
        <li>
            <a href="#">Projects</a>
            <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                    <div>
                        <h4>Learning &amp; Games</h4>
                        <ul>
                            <li><a href="#">Catch the Bullet</a></li>
                            <li><a href="#">Snoopydoo</a></li>
                            <li><a href="#">Fallen Angel</a></li>
                            <li><a href="#">Sui Maker</a></li>
                            <li><a href="#">Wave Master</a></li>
                            <li><a href="#">Golf Pro</a></li>
                        </ul>
                        <h4>Utilities</h4>
                        <ul>
                            <li><a href="#">Gadget Finder</a></li>
                            <li><a href="#">Green Tree Express</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Entertainment</h4>
                        <ul>
                            <li><a href="#">Gadget Finder</a></li>
                            <li><a href="#">Green Tree Express</a></li>
                            <li><a href="#">Green Tree Pro</a></li>
                            <li><a href="#">Holy Cannoli</a></li>
                            <li><a href="#">Wobbler 3.0</a></li>
                            <li><a href="#">Coolkid</a></li>
                        </ul>
                    </div>
                </div>{{-- /cbp-hrsub-inner --}}
            </div>{{-- /cbp-hrsub --}}
        </li>
        <li>
            <a href="#">Freeware</a>
            <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                    <div>
                        <h4>Utilities</h4>
                        <ul>
                            <li><a href="#">Green Tree Pro</a></li>
                            <li><a href="#">Wobbler 3.0</a></li>
                            <li><a href="#">Coolkid</a></li>
                        </ul>
                        <h4>Education</h4>
                        <ul>
                            <li><a href="#">Learn Thai</a></li>
                            <li><a href="#">Math Genius</a></li>
                            <li><a href="#">Chemokid</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Professionals</h4>
                        <ul>
                            <li><a href="#">Success 1.0</a></li>
                            <li><a href="#">Moneymaker</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Learning &amp; Games</h4>
                        <ul>
                            <li><a href="#">Catch the Bullet</a></li>
                            <li><a href="#">Snoopydoo</a></li>
                            <li><a href="#">Fallen Angel</a></li>
                            <li><a href="#">Sui Maker</a></li>
                            <li><a href="#">Wave Master</a></li>
                            <li><a href="#">Golf Pro</a></li>
                        </ul>
                    </div>
                </div>{{-- /cbp-hrsub-inner --}}
            </div>{{-- /cbp-hrsub --}}
        </li>
    </ul>
</nav>