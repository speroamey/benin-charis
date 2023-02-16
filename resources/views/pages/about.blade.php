

@extends('layout.master')

{{-- @section('header-banner')
    @include('layout.landing.header-banner')
@endsection --}}

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" style="background-color: rgb(17, 17, 17);">
            <!-- <img src="images/background/subheader3.jpg" class="jarallax-img" alt=""> -->
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>A Propos</h1>
                            <p>Reputation. Respect. Resultat.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>Votre meilleur partenaire</h2>
                        <p>
                            LAJOY offre des services conseils pour les entreprises qui bénéficient de l'expertise et des connaissances d'une équipe de professionnels expérimentés dans leur domaine d’activité.  Les services de conseil de LAJOY peuvent couvrir une large gamme de sujets, tels que la stratégie d'entreprise, le développement de nouveaux produits ou services, l'optimisation des processus opérationnels, la gestion de la croissance de l'entreprise, la gestion des talents et bien d'autres encore.                            </p>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="de-images">
                            <div class="di-text text-white bg-color">
                                <h1>100</h1><span>Mandats exécuté</span>
                            </div>
                            <img class="di-small-2" src="images/misc/d2.jpg" alt="" />
                            <img class="di-big img-fluid" src="images/misc/d1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-bgcolor="#111111" class="text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-lg-7">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>
                            Laissez Notre Expérience<br>être votre guide
                        </h2>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Notre Identité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Notre Expertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Nos Partenaires</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>
                                    LAJOY offre des services conseils pour les entreprises qui bénéficient de l'expertise et des connaissances d'une équipe de professionnels expérimentés dans leur domaine d’activité.  Les services de conseil de LAJOY peuvent couvrir une large gamme de sujets, tels que la stratégie d'entreprise, le développement de nouveaux produits ou services, l'optimisation des processus opérationnels, la gestion de la croissance de l'entreprise, la gestion des talents et bien d'autres encore.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <p>
                                    Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <p>
                                    Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jarallax image-container col-md-6 pull-right">
                <img src="images/background/5.jpeg" class="jarallax-img" alt="">
            </div>
        </section>
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Notre Équipe Lead</h2>
                        <div class="small-border"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="images/team/gnolou.jpg" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Gnolou Guero</h4>
                            Président Fondateur
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".4s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="images/team/magali.jpg" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Magali Iovino</h4>
                            Associée Co-Fondatrice
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".6s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                    <div class="fpwo-wrap">
                                        <div class="fpwow-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="images/team/gbeuli.jpg" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Gbeuli Guero</h4>
                            Associé Co-Fondateur
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-text" data-bgcolor="#111111" class="text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                        <div class="de_count ultra-big s2 text-center">
                            <h3 class="timer" data-to="05" data-speed="1000">05</h3>
                            <span class="id-color">Années d'Expérience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <span class="p-title">Effectivement</span><br>
                        <h2>LaJoy est votre Meilleur Partenaire  Conseil</h2>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box f-boxed style-3 text-center">
                            <i class="id-color icofont-letter"></i>
                            <div class="text">
                                <h4>Request Quote</h4>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </div>
                            <i class="wm icofont-letter"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box f-boxed style-3 text-center">
                            <i class="id-color icofont-investigation"></i>
                            <div class="text">
                                <h4>Investigation</h4>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </div>
                            <i class="wm icofont-investigation"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box f-boxed style-3 text-center">
                            <i class="id-color icofont-hand-power"></i>
                            <div class="text">
                                <h4>Case Fight</h4>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                            </div>
                            <i class="wm icofont-hand-power"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')

    {{-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9QACWaLVsNlAgz4vJJmdSh5XB0Aap2xM&callback=initMap&v=weekly"
      defer
    ></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
        function initMap() {
            const default_cordinate = { lat: 5.364256, lng: -3.975483 };
            const map = new google.maps.Map(document.getElementById("default_map"), {
                zoom: 13,
                center: default_cordinate,
            });
            const marker = new google.maps.Marker({
                            position: default_cordinate,
                            map: map, });
            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();
            document.getElementById("select-agency").addEventListener("change", () => {
                geocodeLatLng(geocoder, map, infowindow);
            });
        }

        function geocodeLatLng(geocoder, map, infowindow) {
            const input = document.getElementById("latlng").value;
            const latitude =  parseFloat($("select option:selected").data('lat').replace(",","."));
            const longitude   =  parseFloat( $("select option:selected").data('lng').replace(",","."));
            const latlngStr =[latitude, longitude];

            const latlng = {
                lat:latitude,
                lng: longitude,
            };
            geocoder
                .geocode({ location: latlng })
                .then((response) => {
                    if (response.results[0]) {
                        map.setZoom(13);
                        const marker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                        });

                        infowindow.setContent(response.results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                            window.alert("No results found");
                    }
                })
                .catch((e) => window.alert("Geocoder failed due to: " + e));
        }
        window.initMap = initMap;
        // $(document).ready(function(e) { alert("cool"); });
    </script> --}}
@endpush
