@extends('layout.master')


@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="section-slider" class="fullwidthbanner-container text-white" aria-label="section-slider">
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" src="images/background/Banner-web.jpg">
                        {{-- <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h3 class="id-color"></h3>
                        </div> --}}
                        <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none"
                            data-height="none" data-whitespace="nowrap"
                            data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h1>Redonnons le sourire</h1>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none"
                            data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                            <p class="lead xs-hide">
                                Notre axe Eau, Assainissement et Hygiène s'engage à plaider en faveur des villages enclavés et à contribuer à la mise en place d'infrastructures sociocommunautaires dans ces communautés.
                            </p>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                            <a class="btn-custom" href="{{ url('nous-contacter') }}">Nous Soutenir</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" src="images/background/Banner-web-2.jpg">
                        {{-- <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h3 class="id-color"></h3>
                        </div> --}}
                        <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none"
                            data-height="none" data-whitespace="nowrap"
                            data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h1>
                                Vers un avenir dynamique
                            </h1>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none"
                            data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                            <p class="lead xs-hide">
                                Notre axe Autonomisation des Femmes et des Jeunes vise à établir des centres de formation, promouvoir les AGR dans les groupements de femmes, et encourager la scolarisation des jeunes.
                            </p>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                            <a class="btn-custom" href="{{ url('nous-contacter') }}">Nous Soutenir</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" src="images/background/Banner-web-3.jpg">
                        {{-- <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h3 class="id-color"></h3>
                        </div> --}}
                        <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none"
                            data-height="none" data-whitespace="nowrap"
                            data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h1>Nutrition & Santé</h1>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none"
                            data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                            <p class="lead xs-hide">
                                Notre axe Nutrition et Santé s'engage à prévenir la malnutrition chez les enfants et les femmes vulnérables, et à soutenir des centres de prise en charge et des Groupes d'Assistance en Nutrition au Bénin!
                            </p>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                            <a class="btn-custom" href="{{ url('nous-contacter') }}">Nous Soutenir</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="pt40 pb40 bg-color text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                        <h3 class="no-bottom">
                            {{-- Nous répondons à tous vos besoins en maximisant votre temps! --}}
                            Contribuons durablement à la réduction de la pauvreté au Bénin!
                        </h3>
                    </div>
                    <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                        <a href="{{ url('nous-contacter') }}" class="btn-custom btn-black light">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </section>
        <div id="nos-forces"></div>
        <section id="section-highlight" class="relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span class="p-title">Nos Forces</span><br>
                        <h2>
                            Expérience, Vision, Détermination, Investissement
                        </h2>
                        <div class="small-border sm-left"></div>
                    </div>
                    <div class="col-md-8 text-justify">
                        <p>
                            Avec une expérience cumulée diversifiée et une vision claire de notre mission, les co-fondateurs de notre ONG incarnent une détermination profonde à créer un impact positif durable. Chaque décision est guidée par notre engagement personnel, avec des capitaux investis de manière stratégique pour concrétiser notre vision. Dans notre quête pour transformer des vies, nous naviguons avec résolution, prêts à surmonter tous les défis sur notre chemin.
                            <br>
                           
                        </p>
                    </div>
                </div>
                <div class="spacer-double"></div>
            </div>
        </section>

        <section class="no-top relative z1000">
            <div class="container">
                <div class="row mt-100">
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-data"></i><span>Axes Stratégiques</span></h3>
                                    <p class="xs-hide md-hide">Spécialement conçus pour répondre aux différents besoins des
                                     populations.</p>
                                    <div class="spacer20"></div>
                                    <a href="{{ route('ce-que-nous-faisons') }}" class="btn-custom capsule">Voir
                                     plus</a>
                                </div>
                            </div>
                            <img src="images/services/1.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-user-alt-1"></i><span>Les dernières nouvelles</span></h3>
                                    <p class="xs-hide md-hide">L'actuailité concernant nos domaines d'activités et actions
                                        .</p>
                                    <div class="spacer20"></div>
                                    <a href="{{ route('conciergerie-de-particulier') }}" class="btn-custom capsule">Lire
                                        plus</a>
                                </div>
                            </div>
                            <img src="images/services/2.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-location-arrow"></i><span>FAQ
                                        </span></h3>
                                    <p class="xs-hide md-hide"> Retrouvez ici, une liste exhaustive des questions que vous pourrez vous poser et qui revient le plus souvent</p>
                                    <div class="spacer20"></div>
                                    <a href="{{ route('faq') }}" class="btn-custom capsule">Lire
                                        plus</a>
                                </div>
                            </div>
                            <img src="images/services/3.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section data-bgcolor="#f2f2f2" class="text-dark" id="qui-sommes-nous">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 offset-lg-5">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>
                            Notre Expérience<br>Notre Dévouement
                        </h2>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p class="text-justify">
                                    Bénin CHARIS ONG est une Organisation Non Gouvernementale à but non lucratif et est apolitique. Elle a été créée en 2023 en République du Bénin conformément aux dispositions de la loi du 1er Juillet 1901 et le décret du 16 Août portant création des associations, soutenant les actions du développement durable en général sans distinction de sexe, de race et de religion. Le siège de Bénin CHARIS est situé à Cotonou dans le 9ème arrondissement au quartier Kindonou. Est membre de cette organisation toute personne physique qui manifeste un intérêt pour l’organisation. Elle est composée des membres fondateurs, des membres actifs, de sympathisants et de membres d’honneur. L’objectif général est de contribuer durablement à la réduction de la pauvreté au Bénin. De cet objectif général découle quatre objectifs spécifiques que sont :
                                    <ol>
                                        <li>contribuer à la sécurité alimentaire et nutritionnelle;</li>
                                        <li>promouvoir la transition agroécologique et l’économie circulaire;</li>
                                        <li>accompagner l’autonomisation des jeunes et des femmes et</li>
                                        <li>promouvoir l’accès à l’eau potable, l’hygiène et l’assainissement</li>
                                    </ol>
                                    
                                </p>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="jarallax image-container col-md-4 pull-right xs-hide">
                <img src="{{ asset('images/background/bel.png') }}" class="jarallax-img" alt="">
            </div>
        </section>

        <section class="pt40 pb40 bg-color text-light" data-bgcolor="#111111" id="notre-mission">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center my-auto">
                        <h2 class="no-bottom wow fadeInLeft" data-wow-delay=".4s" style="font-weight: 500">Notre Mission
                        </h2>
                    </div>

                    <div class="col-lg-7  py-auto text-center text-lg-left text-sm-center">
                        {{-- <div class="big-border" style="font-weight: bold;font-size:20px">Notre Mission</div> --}}
                        <p style="font-size: 18px" class="wow fadeInRight" data-wow-delay=".2s">
                            La mission de Bénin CHARIS est de contribuer à la réduction de la pauvreté à travers des interventions à impact durable sur la sécurité alimentaire et nutritionnelle, la transition agroécologique et l’insertion socioéconomique des populations vulnérables.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div id="nos-services"></div>
        <section id="section-practice-areas ">
            <div class="container" id="nos-services">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Groupes cibles</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 text-center">
                        <p>
                            Bénin CHARIS ONG travaille à impacter positivement les sept (07) groupes cibles suivants:
                        </p>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                            <li>Femmes vulnérables </li>
                            <li> Enfants</li>
                            <li>Petits agriculteurs: hommes; femmes et jeunes</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                            <li>Malades chronique</li>
                            <li>Personnes âgées</li>
                            <li>Ménages en milieux ruraux et urbains</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".4s">
                            <li>Jeunes entrepreneurs</li>
                            <li>Rechercher d’opportunités d’affaires et d’investissement</li>
                        </ul>
                    </div>
                    

                </div>
            </div>
        </section>


        <section aria-label="section" class="jarallax text-light" id="nos-valeurs">
            <img src="images/background/3-bw.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-light">
                            <h2>Nos valeurs</h2>
                            <div class="small-border"></div>
                        </div>
                        <div class="owl-carousel owl-theme" id="testimonial-carousel">
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color text-white">Intégrité</h3>
                                        <p>
                                            Nous croyons que l’intégrité est essentielle pour établir une relation de
                                            confiance sur du long terme avec les populations. Nous nous engageons à servir les
                                            populations dans le respect et avec honnêteté, en faisant preuve de tanpérance
                                            dans toutes nos démarches.
                                        </p>

                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color text-white">Impact durable </h3>
                                        <p>
                                            Nous valorisons également le professionnalisme en restant à l’affût des
                                            dernières tendances et des meilleures pratiques de notre secteur pour offrir des
                                            solutions de qualité aux populations. En fournissant une expertise de pointe, nous
                                            aidons les populations à atteindre leurs épanouissement social.
                                        </p>
                                        {{-- <div class="de_testi_by"><span>Sarah, Midokpodistribution</span></div> --}}
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color text-white">Charité</h3>
                                        <p>Nous sommes conscients que naviguer dans certains environnements
                                            peut être difficile pour les populatiosns que nous accompagnons. Nous sommes donc là pour les soutenir
                                            émotionnellement et pratiquement, en faisant preuve d’empathie et de
                                            compréhension de leurs défis.</p>
                                        {{-- <div class="de_testi_by"><span>Michael, Mindeba</span></div> --}}
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color text-white">Équité sociale</h3>
                                        <p>
                                            Nous sommes conscients que naviguer dans un nouvel environnement peut être
                                            difficile. Nous sommes donc là pour soutenir nos clients émotionnellement et
                                            concrètement, en faisant preuve d’empathie et de compréhension.
                                        </p>
                                        {{-- <div class="de_testi_by"><span>Michael, Mindeba</span></div> --}}
                                    </blockquote>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Témoignages</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-rounded">
                            <i class="icofont-group bg-color text-light"></i>
                            <div class="fb-text">
                                <h4>Paul S</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum velit dignissimos alias possimus repudiandae laborum nemo sint repellendus eaque obcaecati tempora odio mollitia ad, suscipit laudantium quibusdam. Maxime, fugit laborum?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-rounded">
                            <i class="icofont-group bg-color text-light"></i>
                            <div class="fb-text">
                                <h4>John Doe</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus incidunt quod odit placeat, vero molestiae minima ipsum esse, cumque impedit nulla provident ducimus nam iste tenetur labore, perferendis culpa.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-rounded">
                            <i class="icofont-group bg-color text-light"></i>
                            <div class="fb-text">
                                <h4>Sylvie T</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eum animi illum delectus architecto suscipit, molestiae quis, quae quaerat nesciunt non.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Nos Articles</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">01</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/1.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">------</span>
                                    <h4><a href="{{ route('blog', ['la-transformation-digitale-gestion-du-changement']) }}">Titre
                                            de la vidéo
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="{{ route('blog', ['la-transformation-digitale-gestion-du-changement']) }}">Lire
                                            la vidéo</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">02</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/2.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">----</span>
                                    <h4><a href="{{ route('blog', ['femmes-leaders-dans-l-economie-ivoirienne']) }}">Titre
                                            de la vidéo
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="{{ route('blog', ['femmes-leaders-dans-l-economie-ivoirienne']) }}">Lire
                                            la vidéo</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">03</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/3.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">-----</span>
                                    <h4><a href="{{ route('blog', ['l-innovation-disruptive']) }}">Titre dela vidéo
                                            <span></span></a></h4>

                                    <span class="p-author"><a href="{{ route('blog', ['l-innovation-disruptive']) }}">Lire
                                            la vidéo </span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('custom-scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9QACWaLVsNlAgz4vJJmdSh5XB0Aap2xM&callback=initMap&v=weekly"
        defer></script>
    <script>
        function initMap() {
            const default_cordinate = {
                lat: 5.364256,
                lng: -3.975483
            };
            const map = new google.maps.Map(document.getElementById("default_map"), {
                zoom: 13,
                center: default_cordinate,
            });
            const marker = new google.maps.Marker({
                position: default_cordinate,
                map: map,
            });
            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();
            document.getElementById("select-agency").addEventListener("change", () => {
                geocodeLatLng(geocoder, map, infowindow);
            });
        }

        function geocodeLatLng(geocoder, map, infowindow) {
            const input = document.getElementById("latlng").value;
            const latitude = parseFloat($("select option:selected").data('lat').replace(",", "."));
            const longitude = parseFloat($("select option:selected").data('lng').replace(",", "."));
            const latlngStr = [latitude, longitude];
            const latlng = {
                lat: latitude,
                lng: longitude,
            };
            geocoder
                .geocode({
                    location: latlng
                })
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
    </script>
@endpush
