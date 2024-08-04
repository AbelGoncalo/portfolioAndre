<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EletroFisio</title>
    <!-- Bootstrap CSS -->
    @livewireStyles
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('home/img/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('home/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('home/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('home/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

    <!-- main css -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Optional: Font Awesome for icons -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                        <a href="tel:+9530123654896">
                            <span class="lnr lnr-phone"></span>
                            <span class="text">
                                <span class="text">+953012 3654 896</span>
                            </span>
                        </a>
                        <a href="mailto:support@colorlib.com">
                            <span class="lnr lnr-envelope"></span>
                            <span class="text">
                                <span class="text">eletrofisio@five.com</span>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="main_menu">


            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand fw-bold logo" href="#">Eletrofisio<span
                            class=" text-info fw-bold">Meridional.</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item {{ Route::Current()->getName() == 'site.index' ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('site.index') }}">Início</a></li>
                            <li class="nav-item {{ Route::Current()->getName() == 'site.about' ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('site.about') }}">Sobre nós</a></li>
                            <li class="nav-item {{ Route::Current()->getName() == 'site.contact' ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('site.contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    {{ $slot }}

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Nossos serviços</h4>
                    <ul>
                        <li><a href="#">Estudo Bíblicos</a></li>
                        <li><a href="#">Sermões</a></li>
                        <li><a href="#">Palestras</a></li>


                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Links frequentes</h4>
                    <ul>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Contactos</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Contanto</h4>
                    <ul>
                        <li> <strong>Email:</strong> exemplo@geral.com</li>
                        <li><a href="#">Brasil</a></li>
                    </ul>
                </div>

            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2024 Todos direitos reservedos |
                    Desenvolvido por
                    <a href="#">AgCode</a>
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>

                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @livewireScripts
    <script src="{{ asset('home/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/stellar.js') }}"></script>
    <script src="{{ asset('home/js/countdown.js') }}"></script>
    <script src="{{ asset('home/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('home/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/owl-carousel-thumb.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('home/vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('home/js/mail-script.js') }}"></script>
    <script src="{{ asset('home/js/app.js') }}"></script>
    <!--gmaps Js-->
    <script src="{{ asset('home/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('home/js/theme.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script defer src="https://plugins/OwlCarousel2.3/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>  -->
    <script defer src="plugins/OwlCarousel2.3/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.js (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>

</html>
