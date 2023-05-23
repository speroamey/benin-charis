<!DOCTYPE html>
<!--
Template Name:Customise by
Author: Spero AMEY / WAKPARE-AMEY M'pouamon
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8" />
        <title>DGA International - Conciergerie et Accompagnement pour immigration</title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta
            content="DGA International - Nous offrons, proposons aux Ivoiriens ou Africains l’achat de biens immobiliers au Canada avec un financement à hauteur de 65 % du prix de la propriété. "
            name="description" />
        <meta content="DGA International, conciergerie, Imigration au canada, Financement Immobilier, accompagnement et organisation des réunion d'ffaires / Business, planification de voyage " name="keywords" />
        <meta content="Spero AMEY WAKPARE-AMEY M'POUAMON" name="author" />
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

        <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
        <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
        <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">

        <style type="text/css">
            .navbar {
                position: absolute;
            }

            .nav-link{
                color: #fff !important;
            }
            .dropdown-menu{
                background-color: rgb(0 54 74 / 80%);
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



    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <!-- end base js -->
    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hermes",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 20,
                        v_offset: 30,
                        space: 5,
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                responsiveLevels: [1920, 1380, 1240],
                gridwidth: [1200, 1200, 940],
                spinner: "off",
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
        </script>
    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->


    @stack('custom-scripts')
</body>
</html>
