

@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->

        <!-- section close -->

        <section aria-label="section" class="text-light" data-bgcolor="#111111">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- <img src="images/misc/p3.jpg" alt="" class="img-fluid mb30"> -->
                        <h3>Nos Cordonnées</h3>
                        <address class="s1">
                            <h3>LaJoy SARL UNIPERSONNEL</h3>
                            <span><i class="id-color fa fa-map-marker fa-lg"></i>Riviéra 4, Abidjan, Côte d'Ivoire</span>
                            <span> <a href="tel:+225 07 89 71 64 24"><i class="id-color fa fa-phone fa-lg"></i>+225 07 89 71 64 24</a> </span>
                            <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:info@lajoyconsulting.com">info@lajoyconsulting.com</a></span>
                            <!-- <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                        </address>
                    </div>
                    <div class="col-lg-8  mb-sm-30 text-center">
                        <h3>Avez vous des Questions?</h3>
                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
                            <div class="field-set">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Votre Nom" />
                            </div>
                            <div class="field-set">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Votre adresse email" />
                            </div>
                            <div class="field-set">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Votre numéro de téléphone" />
                            </div>
                            <div class="field-set">
                                <textarea name="message" id="message" class="form-control" placeholder="Votre Message"></textarea>
                            </div>
                            <div class="spacer-half"></div>
                            <div id="submit">
                                <input type="submit" id="send_message" value="Submit Form" class="btn btn-custom" />
                            </div>
                            <div id="mail_success" class="success">Votre message a été envoyé avec succès.</div>
                            <div id="mail_fail" class="error">Désolé, une erreur s'est produite lors de l'envoie du message.</div>
                        </form>
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
                        <span class="p-title">Bienvenu</span><br>
                        <h2>LaJoy est votre Meilleur Partenaire  Solutions</h2>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        </p>
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
