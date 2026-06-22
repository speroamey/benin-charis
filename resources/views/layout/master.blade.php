<!DOCTYPE html>
<!--
Template Name:Customise by
Author: Spero AMEY / WAKPARE-AMEY M'pouamon
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>BENIN CHARIS ONG - Une ONG basé au Bénin</title>
    <link rel="icon" href="{{ asset('images/logo.ico') }}" type="image/ico" sizes="16x16">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta content="BENIN CHARIS ONG " name="description" />
    <meta content="BENIN CHARIS ONG" name="keywords" />
    <meta content="Spero AMEY WAKPARE-AMEY M'POUAMON" name="author" />
    <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
            <![endif]-->
    <!-- CSS Files
        ================================================== -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
    @if (App::environment('production'))
        {{ dd('ok') }}
        <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css" />
    @else
        {{-- <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css" /> --}}

        <link id="bootstrap" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link id="bootstrap-grid" href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
        <link id="bootstrap-reboot" href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        <!-- color scheme -->
        <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
        <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
        <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">
        <style type="text/css">
            /* Desktop screens: keep left alignment */
            /* Empêche le caption RS de dépasser la largeur de l'écran */
@media (max-width: 1024px) {
    #slider-revolution .tp-caption.very-big-white {
        max-width: calc(100vw - 30px) !important;
        box-sizing: border-box !important;
        padding: 20px 22px !important;
    }
}

@media (max-width: 576px) {
    #slider-revolution .tp-caption.very-big-white {
        max-width: calc(100vw - 20px) !important;
        padding: 14px 16px !important;
    }
    #slider-revolution .tp-caption.very-big-white h1 {
        font-size: clamp(1.1rem, 5vw, 1.4rem) !important;
    }
    #slider-revolution .tp-caption.very-big-white p.lead {
        font-size: 0.82rem !important;
        line-height: 1.5 !important;
    }
}
        </style>
    @endif
    <style type="text/css">
        .navbar {
            position: absolute;
        }

        .nav-link {
            color: #fff !important;
        }

        .dropdown-menu {
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

            /* .navbar.fixed-top .navbar-collapse,
        .navbar.sticky-top .navbar-collapse {
            overflow-y: auto;
            max-height: 90vh;
            margin-top: 10px;
        } */
            h1,
            .h1 {
                font-size: 28px;
                margin-bottom: 20px;
                line-height: 39px;
                letter-spacing: -1px;
            }
        }

        /* ============ mobile view .end// ============ */
        .border-gray {
            border: 1px solid rgb(207, 203, 203) !important;
        }
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
    @if (App::environment('production'))
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script> --}}
        <script src="{{ asset('js/vendor.min.js') }}"></script>
    @else
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('js/easing.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/validation.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/enquire.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/jquery.plugin.js') }}"></script>
        <script src="{{ asset('js/typed.js') }}"></script>
        <script src="{{ asset('js/jarallax.js') }}"></script>
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.js') }}"></script>
        <script src="{{ asset('js/typed.js') }}"></script>
        <script src="{{ asset('js/jarallax.js') }}"></script>
        <script src="{{ asset('js/designesia.js') }}"></script>
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
    @endif
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
                responsiveLevels: [1920, 1380, 1240, 768],
                gridwidth:        [1200, 1200,  940, 480],
                gridheight:         [700,  700,  600, 500],

                spinner: "off",
                disableProgressBar: "on"
            });
        });
    </script>
    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->


    @stack('custom-scripts')
    <script>
        $('.ajax-loader').hide();
        // formData.append()
        var url;
        var form;
        var contact_url = $('#contact_form').attr('data-action');
        var newsletter_url = $('#form_subscribe').attr('data-action');
        $('#contact_form,#form_subscribe').on('submit', function(ev) {
            ev.preventDefault();
            var formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            var hidden_input = null

            if ($('#form-sejour').val()) {
                hidden_input = $('#form-sejour').val();
            } else if ($('#form-preliminaire').val()) {
                hidden_input = $('#form-preliminaire').val();
            } else if ($('#form-background-check').val()) {
                hidden_input = $('#form-background-check').val();
            }

            if (hidden_input == "form-preliminaire") {
                jQuery.each($('#file_id')[0].files, function(i, file) {
                    formData.append('file_id' + i, file);
                });
                var file_cv = $('#file_cv')[0].files[0];
                formData.append('file_cv', file_cv);
                jQuery.each($('#file_diploma')[0].files, function(i, file) {
                    formData.append('file_diploma' + i, file);
                });
                var file_ircc = $('#file_ircc')[0].files[0];
                formData.append('file_ircc', file_ircc);
                var file_actif_passif = $('#file_actif_passif')[0].files[0];
                formData.append('file_actif_passif', file_actif_passif);
            } else
            if (hidden_input == "form-sejour") {
                jQuery.each($('#file_id')[0].files, function(i, file) {
                    formData.append('file_id' + i, file);
                });
                var file_cv = $('#file_cv')[0].files[0];
                formData.append('file_cv', file_cv);
            } else
            if (hidden_input == "form-background-check") {
                var file = $('#file')[0].files[0];
                formData.append('file', file);
            }


            console.log(file_cv);

            $('.ajax-loader').show();
            var form1 = $('#form_subscribe')
            var form2 = $('#contact_form')
            if ($(this).is(form1)) {
                url = newsletter_url;
                form = form1
            } else {
                url = contact_url;
                form = form2
            }
            formData.append('form', form.serialize()),

                // formData.append("_token","{{ csrf_token() }}",)
                // alert("{{ csrf_token() }}");
                $.ajax({
                    processData: false,
                    contentType: false,
                    headers: '{{ csrf_token() }}',
                    url: url,
                    type: 'POST',
                    data: formData,
                    dataType: 'JSON',
                    cache: false,
                    success: function(data, status, xhr) { // success callback function
                        $('.ajax-loader').hide();
                        $('#ajax-response').empty();
                        $('#ajax-response').append(data.msg);
                        if (data.code == "success") {
                            $('#ajax-response').addClass("alert-success")
                        } else {
                            $('#ajax-response').addClass("alert-danger")
                        }
                        $('#ajax-response').show();
                    },
                    error: function(data, status, xhr) {
                        $('.ajax-loader').hide();
                        $('#ajax-response').addClass("alert-danger")
                        $('#ajax-response').empty();
                        $('#ajax-response').append(data.msg);
                        $('#ajax-response').show();
                    }
                });
        });
    </script>
</body>

</html>
