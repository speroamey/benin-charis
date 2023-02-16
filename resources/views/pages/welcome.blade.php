

@extends('layout.master')

{{-- @section('header-banner')
    @include('layout.landing.header-banner')
@endsection --}}

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section aria-label="section" class="jarallax">
            <img src="images/background/4.png" class="jarallax-img" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-md-7 wow fadeInRight" data-wow-delay=".5s">
                        <div class="spacer-double"></div>
                        <div class="spacer-double"></div>
                        <h3 class="id-color wow fadeInUp" data-wow-delay=".4s">À Notre Découverte</h3>
                        <h1 class="wow fadeInUp" data-wow-delay=".6s">Conseils & Restructuration d'entreprises en toute finesse
                        </h1>
                        <p class="lead wow fadeInUp" data-wow-delay=".8s">Notre expertise dans divers secteurs, font
                            de nous les meilleurs pour restructurer, accompagner et apporter du financement à votre
                            entreprise.</p>
                        <div class="spacer-20"></div>
                        <a class="btn-custom wow fadeInUp" data-wow-delay="1s" href="features.html">Nous
                            Découvrir</a>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt40 pb40 bg-color text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                        <h3 class="no-bottom">Maintenant! Obtenez une consultation sur mesure..</h3>
                    </div>
                    <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                        <a href="#" class="btn-custom btn-black light">Prendre rendez-vous</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-highlight" class="relative" data-bgcolor="#f2f2f2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span class="p-title">Bienvenu</span><br>
                        <h2>
                            Réputation.<br>Respect. Résultat.
                        </h2>
                        <div class="small-border sm-left"></div>
                    </div>
                    <div class="col-md-8">
                        <p>
                            LAJOY génère de la valeur à long terme pour toutes les entreprises. Fondés dans
                            l’objectif de répondre aux différents challenges de transformation et de profitabilité
                            des
                            entreprises, nos services et nos solutions donnent confiance et ainsi aident les clients
                            à
                            atteindre des sommets. <br>
                            Lajoy optimise les modèles d'affaire et agit sur les leviers stratégiques et
                            opérationnels : audit, business plan, acquisition et fidélisation, réseaux de
                            distribution, campagnes promotionnelles
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
                                    <h3><i class="icofont-data"></i><span>Marketing par les données</span></h3>
                                    <p>Le marketing par les données consiste à utiliser des données pour prendre des
                                        décisions
                                        marketing et pour cibler les clients de manière plus précise...</p>
                                    <div class="spacer20"></div>
                                    <a href="{{route('blog',['marketing-par-les-donnees'])}}" class="btn-custom capsule">Lire plus</a>
                                </div>
                            </div>
                            <img src="images/services/1.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-database-add"></i><span>Marketing de données</span></h3>
                                    <p>Le marketing de données, un outil de prise de décision puissant pour les
                                        entreprises
                                        Le marketing des données peut être un outil...</p>
                                    <div class="spacer20"></div>
                                    <a href="{{route('blog',['le-marketing-de-donnees'])}}" class="btn-custom capsule">Lire plus</a>
                                </div>
                            </div>
                            <img src="images/services/2.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-speech-comments"></i><span>Marketing &
                                            Communication</span></h3>
                                    <p>Le marketing et la communication, une belle complicité pour les entreprises
                                        Le marketing et la communication sont deux domaines qui sont souvent
                                        utilisés de...</p>
                                    <div class="spacer20"></div>
                                    <a href="{{route('blog',['le-marketing-et-la-communication'])}}" class="btn-custom capsule">Lire plus</a>
                                </div>
                            </div>
                            <img src="images/services/3.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-bgcolor="#f2f2f2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-lg-7">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>
                            Laissez Notre Expérience <br> être votre guide
                        </h2>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Nos Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Notre
                                    Expertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Notre
                                    Entreprise</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p>
                                    LAJOY, fondée en Côte d’Ivoire en 2018, accompagne ses clients depuis <span
                                        style="font-weight: bold;">
                                        PLUS DE 15 ANS AU
                                        CANADA ET EN AFRIQUE
                                    </span>
                                    sur le déploiement de leurs projets. Le bureau en Côte d&#39;Ivoire dispose
                                    d’un vaste champ <span style="font-weight: bold;">d&#39;expertise et d&#39;un
                                        réseau de partenaires solide</span> pour accompagner
                                    les entreprises à atteindre leurs objectifs et assurer leur profitabilité. <br>
                                    L’équipe est composée d’experts en <span style="font-weight: bold;">
                                        Financement, Gestion de projets, Marketing,
                                        Digitalisation, Management, Audit, Service à la clientèle et Entreprenariat.
                                    </span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit
                                    ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do.
                                    Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui
                                    minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt.
                                    Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor
                                    duis.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip
                                    dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt
                                    reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure
                                    ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
                                    aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit
                                    cupidatat esse irure officia elit do ipsum ullamco Lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jarallax image-container col-md-6 pull-right">
                <img src="images/background/5.jpeg" class="jarallax-img" alt="">
            </div>
        </section>
        <section id="section-practice-areas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Tout ce que nous faisons</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 text-center">
                        <p>LAJOY aide ses clients à mettre en place et à gérer efficacement leur programme de
                            reconnaissance et de récompenses des employés.Nous définissons les critères de
                            reconnaissance et récompense équitables et justes, et nous mesurons leur efficacité tout le long
                            de l’existence du programme.
                        </p>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                            <li>
                                Entreprises et fusions et acquisitions</li>
                            <li>Financement Immobilier</li>
                            <li>Restructuration d'entreprise</li>
                            <li>Conseils d'entreprise</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".4s">
                            <li>Finance Agency Banking</li>
                            <li>Financement Participatif</li>
                            <li>Environmental</li>
                            <li>Intellectual Property Right</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".6s">
                            <li>Gouvernance & Management d'entreprise</li>
                            <li>Intégration Technologie</li>
                            <li>Intelligence d'entreprise</li>
                            <li>Marketing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="jarallax text-white">
            <img src="images/background/2-bw.jp" class="jarallax-img" alt="" style="background-color: #00364A;">
            <div class="container-fluid">
                <div class="row">

                        <!-- <div class="col-lg-4">
                            <form method="post" novalidate="novalidate" action="#" id="submit-agency">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12"> <label>
                                            Choisissez une
                                            agence<br />
                                            <span class="wpcf7-form-control-wrap select-menu">
                                                <select id="select-agency" name="select-menu"
                                                    class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                                    {{-- @foreach --}}
                                                    ([{'id':'1','name':'Pa','latitude':'','longitude'},
                                                    {'id':'1','name':'Pa','latitude':'','longitude'},
                                                    {'id':'1','name':'Pa','latitude':'','longitude'},
                                                    ] as
                                                    $agency)
                                                    {{-- <option id="latlng" value="{{$agency->id}}"
                                                        data-lat="{{$agency->latitude}}"
                                                        data-lng="{{$agency->longitude}}">
                                                        {{$agency->name}}
                                                    </option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                            </span> </label></div>
                                </div>
                            </form>
                        </div> -->
                        <div class="col-lg-4 pl-1">
                            <div class="col-lg-8  mb-sm-30 text-center mx-auto">
                                <h3 class="text-white">Localisation</h3>
                                <form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
                                    <div class="field-set">
                                        <span class="text-white" >
                                            Retrouver et rejoigner-nous plus facilement via
                                            la liste de nos diverses agences qui vous est fourni
                                        </span>
                                    </div>
                                    <div class="spacer-half"></div>
                                    <div class="field-set">
                                        <!-- <input type="text" name="name" id="name" class="form-control" placeholder="Votre Nom" /> -->
                                        <select name="" class="form-control " id="" aria-placeholder="selectionner l'agence">
                                            <option value="" class="text-dark">Selectionner une agence</option>
                                            <option value="" class="text-dark">Cocody</option>
                                            <option value="" class="text-dark">Cocody</option>
                                            <option value="" class="text-dark">Cocody</option>
                                        </select>
                                    </div>


                                    <div class="spacer-half"></div>
                                    <div id="submit">
                                        <input type="submit" id="send_message" value="Valider" class="btn btn-custom" />
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div id="default_map" class="col-lg-8"  style="text-align:center; padding: 0px; margin:0px; height:50vh;">
                        </div>


                </div>
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
        <section aria-label="section" class="jarallax text-light" id="temoignage">
            <img src="images/background/3-bw.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-light">
                            <h2>Témoignages</h2>
                            <div class="small-border"></div>
                        </div>
                        <div class="owl-carousel owl-theme" id="testimonial-carousel">
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Digne de Confiance</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Qualité de service</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>Sarah, Midokpodistribution</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Excellent Soutien</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>Michael, Mindeba</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Great services</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                        <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                    </blockquote>
                                </div>
                            </div> -->
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>L'excellence du travail</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>John, Mow</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Facile à Apprécier</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>Sarah, Midokpo</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Fiable</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>Michael, Anyxtech</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Des services cinq étoiles</h3>
                                        <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                            excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                            nostrud.</p>
                                        <div class="de_testi_by"><span>Thomas, AWAKS</span></div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Thématiques</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">04</div>
                                    {{-- <div class="d">ART</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/1.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">------</span>
                                    <h4><a href="{{route('blog',['la-transformation-digitale-gestion-du-changement'])}}">Transformation digitale, gestion du
                                            changement<span></span></a></h4>
                                    <p>
                                        La transformation digitale est un processus qui implique un changement
                                        profond dans
                                        les processus de travail, les technologies utilisées... </p>
                                    <span class="p-author">Lire la suite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">05</div>
                                    {{-- <div class="d">FEV</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/2.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">----</span>
                                    <h4><a href="{{route('blog',['femmes-leaders-dans-l-economie-ivoirienne'])}}">Femmes leaders dans l’économie
                                            ivoirienne<span></span></a></h4>
                                    <p>
                                        Il y a de nombreuses femmes leaders dans l&#39;économie ivoirienne qui ont
                                        joué un rôle important dans le développement du pays. </p>
                                    <span class="p-author">Lire la suite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">20</div>
                                    <div class="d">FEV</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/3.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">-----</span>
                                    <h4><a href="{{route('blog',['l-innovation-disruptive'])}}">L&#39;importance du développement
                                            durable<span></span></a></h4>
                                    <p>
                                        L&#39;importance du développement durable dans l&#39;économie ivoirienne
                                        Le développement durable est un concept qui vise à assurer la croissance
                                        économique </p>
                                    <span class="p-author">Fynley Wilkinson</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')

<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9QACWaLVsNlAgz4vJJmdSh5XB0Aap2xM&callback=initMap&v=weekly"
defer></script>
<script>
function initMap() {
    const default_cordinate = { lat: 5.364256, lng: -3.975483 };
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
</script>
@endpush
