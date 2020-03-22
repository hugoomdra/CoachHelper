<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FUN BR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta name="author" content="Shreethemes" />
    <meta name="Version" content="2.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/landrick/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/landrick/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/landrick/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="css/landrick/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/landrick/owl.theme.default.min.css"/>
    <!-- Main Css -->
    <link href="css/landrick/style.css" rel="stylesheet" type="text/css" />
    <link href="css/landrick/colors/default.css" rel="stylesheet">

    @yield('css')

</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">CoachHelper<span class="text-primary">.</span></a>
        </div>
        <!-- Authentication Links -->
        <div class="buy-button">
            @guest

                <a href="{{route('login')}}" class="btn btn-primary">Se Connecter</a>


                @if (Route::has('register'))
                    <a href="{{route('register')}}" class="btn btn-primary">S'Inscrire</a>
                @endif
            @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Se Déconnecter</button>
                </form>


            @endguest
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="index.html">Les Coachs</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Ressources</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="page-aboutus.html"> Exercices</a></li>
                        <li><a href="page-services.html"> Séances</a></li>
                        <li><a href="page-pricing.html"> Causeries</a></li>
                    </ul>
                </li>

            </ul><!--end navigation menu-->

            <div class="buy-menu-btn d-none">
                @guest

                    <a href="{{route('login')}}" class="btn btn-primary">Se Connecter</a>


                    @if (Route::has('register'))
                        <a href="{{route('register')}}" class="btn btn-primary">S'Inscrire</a>
                    @endif
                @else
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Se Déconnecter</button>
                    </form>


                @endguest
            </div>

        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->



@yield('content')




<div class="position-relative">
    <div class="shape overflow-hidden text-footer">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div>


<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a class="logo-footer" href="#">Landrick<span class="text-primary">.</span></a>
                <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Company</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                    <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                    <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                    <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                    <li><a href="page-work.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                    <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                    <li><a href="page-blog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                    <li><a href="page-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Usefull Links</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                    <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                    <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                    <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                    <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Newsletter</h4>
                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe form-group position-relative">
                                <label>Write your email <span class="text-danger">*</span></label>
                                <i class="mdi mdi-email ml-3 icons"></i>
                                <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary w-100" value="Subscribe">
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0">© 2019-2020 Tous droits réservé - Fait avec <i class="mdi mdi-heart text-danger"></i> par   <a href="https://www.linkedin.com/in/hugo-madureira/" target="_blank" class="text-success">Hugo Madureira</a>.</p>
                </div>
            </div><!--end col-->

            {{--            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">--}}
            {{--                <ul class="list-unstyled text-sm-right mb-0">--}}
            {{--                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/landrick/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>--}}
            {{--                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/landrick/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>--}}
            {{--                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/landrick/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>--}}
            {{--                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/landrick/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>--}}
            {{--                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/landrick/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>--}}
            {{--                </ul>--}}
            {{--            </div><!--end col-->--}}
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"></i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="js/landrick/jquery.min.js"></script>
<script src="js/landrick/bootstrap.bundle.min.js"></script>
<script src="js/landrick/jquery.easing.min.js"></script>
<script src="js/landrick/scrollspy.min.js"></script>
<!-- SLIDER -->
<script src="js/landrick/owl.carousel.min.js "></script>
<script src="js/landrick/owl.init.js "></script>

<!-- Main Js -->
<script src="js/landrick/app.js"></script>

@yield('js')


</body>
</html>
