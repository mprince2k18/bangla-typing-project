<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Softland</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themes" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- icon -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- STRAT NAVBAR -->
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-white fixed-top navbar-custom sticky sticky-dark" id="main-menu">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo text-uppercase" href="index.html">
                    <img src="images/logo-dark.png" alt="" height="22" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-center mx-auto" id="navbar-navlist">
                       
                    </ul>
                    <div class="nav-button">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                @auth
                                <a href="{{ route('home') }}" class="btn btn-primary navbar-btn btn-rounded" style="padding: 0 20px 0 20px;">
                                    {{ Auth::user()->name }}
                                </a>
                                @endauth
                                @guest
                                <a href="{{ route('login') }}" class="btn btn-primary navbar-btn btn-rounded" style="padding: 0 20px 0 20px;">
                                    Login
                                </a>
                                @endguest
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="bg-home section bg-lightan" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center pt-5 mt-5">
                <div class="col-lg-8 text-center">
                    <h1 class="home-title">Innovate Solution For Your Business <br> By Digital Marketing</h1>
                    <p class="pt-4 f-15 text-muted">A digital web design studio creating modern & engaging online.
                        Separated they live in Bookmarksgrove right the Semantics, a large language ocean.</p>
                    <div class="mt-5 pt-5">
                        <img src="{{ asset('images/features/img-1.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->

    <!-- START CLIENT LOGO -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-box text-center">
                        <h3>More than <span class="text-primary">46,000+</span> companies trust socialup</h3>
                        <p class="text-muted mt-3">In an ideal world this website wouldn’t exist, a client would
                            acknowledge the importance having web copy before
                            finibus semper design starts.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="client-images mt-4">
                        <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END CLIENT LOGO -->

    <div class="section p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <!-- START SERVICES -->
    <section class="section bg-services" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-box text-center">
                        <h5 class="sub-title text-primary f-13 text-uppercase">Best Services</h5>
                        <h3 class="mt-2">Want you to boost your business growth? solution is here.</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="service-box service-active mt-4">
                        <div class="service-icon icon-xxl uim-icon-primary">
                            <i class="uim uim-cube"></i>
                        </div>

                        <h5 class="f-20 mt-4 pt-2">Digital Design</h5>

                        <p class="text-muted mt-3 mb-0">Some quick example text to build on the card title and bulk of
                            the card's content Moltin gives you the platform.</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box mt-4">
                        <div class="service-icon icon-xxl uim-icon-primary">
                            <i class="uim uim-layer-group"></i>
                        </div>

                        <h5 class="f-20 mt-4 pt-2">Strategy Solutions</h5>

                        <p class="text-muted mt-3 mb-0">Separated they live in Bookmark sgrove right at the coast of the
                            Semtics langu ocean necessary regelialia.</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box mt-4">
                        <div class="service-icon icon-xxl uim-icon-primary">
                            <i class="uim uim-briefcase"></i>
                        </div>

                        <h5 class="f-20 mt-4 pt-2">Awesome Support</h5>

                        <p class="text-muted mt-3 mb-0">It is a paradisematic country, in which roasted parts of
                            sentences fly into your mouth leave for the far World.</p>

                    </div>
                </div>
            </div>


            <div class="row mt-5 pt-4 align-items-center">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3>We are trusted by <span class="text-primary">580+</span> big & small business Softland</h3>

                        <p class="text-muted mt-4">Separated they live in Bookmarksgrove right at the coast of the
                            Semantics large language ocean.
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h3>1535+</h3>
                                    <h5 class="text-primary mb-0 f-16">Project Complete</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h3>530+</h3>
                                    <h5 class="text-primary mb-0 f-16">Project Running</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="mt-4">
                        <img src="images/features/img-2.png" class="img-fluid ps-4" alt="">
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- END HOW IT WORK -->

    <!-- START FOOTER -->
    <section class="bg-footer bg-lightan">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">


                    <div class="mt-4">

                        <img src="images/logo-dark.png" alt="" height="22">

                        <p class="text-muted mt-3 pt-1">In an ideal world this text wouldn’t exist, a client would
                            acknowledge
                            the importance of having web copy before the design starts.</p>

                        <div class="text-center footer-email mt-3">
                            <form action="#">
                                <input type="text" placeholder="Email Please">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>

                        <div class="team-social mt-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="f-18">Support</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Facebook Integration</a></li>
                                    <li><a href="#">Application</a></li>
                                    <li><a href="#">wordpress Program</a></li>
                                    <li><a href="#">Business Marketing</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mt-4 ps-0 ps-lg-5">
                                <h5 class="f-18">More Info</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">For Marketing</a></li>
                                    <li><a href="#">For CEOs</a></li>
                                    <li><a href="#">For Agencies</a></li>
                                    <li><a href="#">Our Apps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-4 ps-0 ps-lg-5">
                                <h5 class="f-18">Resources</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Form validation</a></li>
                                    <li><a href="#">Pricacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Design Defined</a></li>
                                    <li><a href="#">Marketplace</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <hr class="my-5">

            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center text-muted mb-0 f-15">
                        2022 © <b>Bangla Typing Test</b>. Developed by <b>Tasnia Anjum Mumu</b>
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('js/gumshoe.polyfills.min.js') }}"></script>
    <!-- unicons icon -->
    <script src="{{ asset('js/unicons.js') }}"></script>
    <!-- Contact Form  -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>