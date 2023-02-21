<!DOCTYPE html>
<!--
Template Name:Customise by
Author: Spero AMEY / WAKPARE-AMEY M'pouamon
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8" />
        <title>LaJoy - Consultation et restructuration d'entreprises</title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta
            content="LaJoy -
        Nos services sont complémentaires et permettent de répondre aux besoins de plusieurs types d'industrie selon une stratégie d'affaire adaptée, un réseau d'affaire établi et des outils digitaux à la fine pointe de la technologie."
            name="description" />
        <meta content="" name="keywords" />
        <meta content="" name="author" />
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
            <![endif]-->
        <!-- CSS Files
        ================================================== -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->

        <link id="bootstrap" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link id="bootstrap-grid" href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" />
        <link id="bootstrap-reboot" href="{{asset('css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
        <!-- color scheme -->
        <link id="colors" href="{{asset('css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/coloring.css')}}" rel="stylesheet" type="text/css" />

        <style type="text/css">
            .navbar {
                position: absolute;
            }

            .nav-link{
                color: #fff !important;
            }
            .dropdown-menu{
                background-color: #212529;
                color: #fff;
            }
            .navbar .megamenu {
                padding: 1rem;
            }
            .navbar-collapse {
                flex-grow: 0 !important;
            }
            /* ============ desktop view ============ */
            @media all and (min-width: 992px) {

                .navbar .has-megamenu {
                    position: static !important;
                }

                .navbar .megamenu {
                    left: 0;
                    right: 0;
                    width: 100%;
                    margin-top: 0;
                }

            }

            /* ============ desktop view .end// ============ */

            .navbar .container,
            .navbar .container-fluid,
            .navbar .container-lg,
            .navbar .container-md,
            .navbar .container-sm,
            .navbar .container-xl {
                display: initial !important;
            }

            /* ============ mobile view ============ */
            @media(max-width: 991px) {

                .navbar.fixed-top .navbar-collapse,
                .navbar.sticky-top .navbar-collapse {
                    overflow-y: auto;
                    max-height: 90vh;
                    margin-top: 10px;
                }
            }

            /* ============ mobile view .end// ============ */
        </style>
    </head>

<body>

  <div id="wrapper">
      @include('layout.header')

        @yield('page-content')

      @include('layout.footer')
  </div>

    <!-- base js -->
            <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/enquire.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.js')}}"></script>
    <script src="{{asset('js/typed.js')}}"></script>
    <script src="{{asset('js/jarallax.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.js')}}"></script>
    <script src="{{asset('js/typed.js')}}"></script>
    <script src="{{asset('js/jarallax.js')}}"></script>
    <script src="{{asset('js/designesia.js')}}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->


    @stack('custom-scripts')
</body>
</html>
