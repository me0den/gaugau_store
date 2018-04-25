<!--A Design by W3layouts
    Author: W3layout
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gáu Gáu Store - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <meta charset utf="8">
        <!--fonts-->
        <link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
        <!--fonts-->
        <!--bootstrap-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!--coustom css-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="{{ asset('js/simpleCart.min.js') }}"></script>
        <!--default-js-->
        <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <!--bootstrap-js-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!--script-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="/">Gáu Store</a>
                    </div>
                    <div class="login-bars">
                        <a class="btn btn-default log-bar" href="register.html" role="button">Sign up</a>
                        <a class="btn btn-default log-bar" href="signup.html" role="button">Login</a>
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3>
                                    <div class="total">
                                        <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)
                                    </div>
                                </h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-font">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('products') }}">Shoes</a></li>
                                <li><a href="{{ route('products') }}">Tees</a></li>
                                <li><a href="{{ route('products') }}">Tops</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('products') }}">Tracks</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('products') }}">Gear</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-4 menu-img-pad">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('products') }}">Joggers</a></li>
                                            <li><a href="{{ route('products') }}">Foot Ball</a></li>
                                            <li><a href="{{ route('products') }}">Cricket</a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{ route('products') }}">Tennis</a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{ route('products') }}">Casual</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 menu-img-pad">
                                        <a href="#"><img src="{{ asset('images/menu1.jpg') }}" alt="/" class="img-rsponsive men-img-wid" /></a>
                                    </div>
                                    <div class="col-sm-4 menu-img-pad">
                                        <a href="#"><img src="{{ asset('images/menu2.jpg') }}" alt="/" class="img-rsponsive men-img-wid" /></a>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('products') }}">Tops</a></li>
                                            <li><a href="{{ route('products') }}">Bottoms</a></li>
                                            <li><a href="{{ route('products') }}">Yoga Pants</a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{ route('products') }}">Sports</a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{ route('products') }}">Gym</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#"><img src="{{ asset('images/menu3.jpg') }}" alt="/" class="img-rsponsive men-img-wid" /></a>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('products') }}">Tees</a></li>
                                <li><a href="{{ route('products') }}">Shorts</a></li>
                                <li><a href="{{ route('products') }}">Gear</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('products') }}">Watches</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('products') }}">Shoes</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Catch</a></li>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!--/.navbar-collapse-->
                <div class="clearfix"></div>
                </nav>
                <!--/.navbar-->   
                <div class="clearfix"></div>
            </div>
        </div>
        @yield('content')
        <div class="footer-grid">
            <div class="container">
                <div class="col-md-2 re-ft-grd">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Formal</a></li>
                        <li><a href="#">Casuals</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <h3>Short links</h3>
                    <ul class="shot-links">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="contact.html">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="#" class="fb">facebook</a></li>
                        <li><a href="#" class="twt">twitter</a></li>
                        <li><a href="#" class="gpls">g+ plus</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="/" class="ft-log">Gáu</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
                    <p>&copy;   2018 Gáu Gáu Store</a></p>
                </div>
            </div>
        </div>
    </body>
</html>