

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
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" src="images/background/Banner-web.jpg">
                        {{-- <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h3 class="id-color"></h3>
                        </div> --}}
                        <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h1>Investir en Immobilier</h1>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none" data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                            <p class="lead xs-hide">Investir dans l’immobilier en bénéficiant d’un financement. Explorez nos solutions de financement dès maintenant.</p>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                            <a class="btn-custom" href="{{url('nous-contacter')}}">Contactez-nous</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" src="images/background/Banner-web-2.jpg">
                        {{-- <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h3 class="id-color"></h3>
                        </div> --}}
                        <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h1>Assistance Intégration</h1>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none" data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                            <p class="lead xs-hide">Laissez-nous vous accompagner dans votre intégration au Canada.</p>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                            <a class="btn-custom" href="{{url('nous-contacter')}}">Contactez-nous</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <!--  BACKGROUND IMAGE -->
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" src="images/background/Banner-web-3.jpg">
                        {{-- <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h3 class="id-color"></h3>
                        </div> --}}
                        <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <h1>Service de Conciergerie</h1>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none" data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                            <p class="lead xs-hide">Voyagez l’esprit tranquille : confiez-nous l’organisation de votre prochain voyage d’affaires ou de vos
                                vacances!</p>
                        </div>
                        <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                            <a class="btn-custom" href="{{url('nous-contacter')}}">Contactez-nous</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="pt40 pb40 bg-color text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                        <h3 class="no-bottom">Nous répondons à tous vos besoins en maximisant votre temps!</h3>
                    </div>
                    <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                        <a href="{{url('nous-contacter')}}" class="btn-custom btn-black light">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </section>
        <div id="nos-forces"></div>
        <section id="section-highlight" class="relative" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span class="p-title">Nos Forces</span><br>
                        <h2>
                            Discipline, Rigueur, Efficacité
                        </h2>
                        <div class="small-border sm-left"></div>
                    </div>
                    <div class="col-md-8">
                        <p>
                            Chaque personne est unique et c’est la raison pour laquelle nous nous efforçons d’offrir un vaste éventail de services de conciergerie adaptés et sur mesure pour répondre aux besoins de notre clientèle.
                            <br>
                            Que ce soit pour de la conciergerie d'affaires ou de particulier, l’équipe mène toute les démarches de la demande dans les règles de l’art.
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
                                    <h3><i class="icofont-data"></i><span>Conciergerie d'affaires</span></h3>
                                    <p class="xs-hide md-hide">Spécialement conçus pour répondre aux différents besoins de votre
                                        entreprise.</p>
                                    <div class="spacer20"></div>
                                    <a href="{{route('conciergerie-d-entreprise')}}" class="btn-custom capsule">Voir plus</a>
                                </div>
                            </div>
                            <img src="images/services/1.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-user-alt-1"></i><span>Conciergerie de particulier</span></h3>
                                    <p class="xs-hide md-hide">Service de conciergerie personnalisé pour tous vos besoins d’assistance.</p>
                                    <div class="spacer20"></div>
                                    <a href="{{route('conciergerie-de-particulier')}}" class="btn-custom capsule">Lire plus</a>
                                </div>
                            </div>
                            <img src="images/services/2.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-location-arrow"></i><span>Quelle destination?
                                            </span></h3>
                                    <p class="xs-hide md-hide">DGA International offre ses services de conciergerie au Canada et en Côte d’Ivoire</p>
                                    <div class="spacer20"></div>
                                    <a href="{{route('services','mission-economique')}}" class="btn-custom capsule">Lire plus</a>
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
                <div class="row align-items-center" >
                    <div class="col-lg-7 offset-lg-5">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>
                            Notre Expérience<br>Notre Dévouement
                        </h2>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>
                                    DGA International, votre partenaire privilégié pour tous vos projets et vos besoins en matière de conciergerie au Canada et en Côte d’Ivoire. Nous offrons une gamme complète de services personnalisés, de qualité supérieure, aux entreprises et aux particuliers.
                                </p>
                                <p>
                                    Nos valeurs reposent sur l’intégrité, le professionnalisme, l’empathie et l’adaptabilité. En effet, nous travaillons main dans la main avec vous pour comprendre vos besoins et vos défis, afin de vous offrir des solutions sur mesure qui répondent à vos attentes.
                                </p>
                                <p>
                                    Notre méthode de travail est fondée sur une communication ouverte et transparente.
                                </p>
                                <p>
                                    Nos équipes sont présentes sur place tant au Canada qu’en Côte d’Ivoire, garantissant une bonne connaissance des différents marchés et un accès à un réseau hors pair.
                                </p>
                                <p>
                                    Nous sommes fiers de notre réputation et nous sommes engagés à maintenir notre position de leader dans l’industrie.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="jarallax image-container col-md-4 pull-right xs-hide">
                <img src="{{asset("images/background/bel.png")}}" class="jarallax-img" alt="">
            </div>
        </section>

        <section class="pt40 pb40 bg-color text-light" data-bgcolor="#111111" id="notre-mission">
            <div class="container">
                <div class="row">
                        <div class="col-md-4 text-center my-auto">
                            <h2 class="no-bottom wow fadeInLeft" data-wow-delay=".4s" style="font-weight: 500">Notre Mission</h2>
                        </div>
                        {{-- <div class="col-lg-6 py-auto  text-lg-left text-sm-center">
                            <div class="bg-border" style="font-weight: bolder; font-size:20px">Nos Valeurs</div>
                            <p style="font-size: 18px" class="wow fadeInRight" data-wow-delay=".2s">
                                DGA s'engage à traiter ses clients avec respect et honnêteté. DGA valorise le professionnalisme pour apporter son expertise à ses clients. DGA aide ses clients à se sentir à l'aise et en confiance lorsqu'ils font face à des défis. DGA peut fournir des solutions innovantes et efficaces à ses clients. En somme, dans cet ordre nos laeurd sont: <span style="font-weight:bold"> Intégrité - Professionnalisme - Empathie - Adaptabilité</span>
                            </p>
                        </div> --}}
                        <div class="col-lg-7  py-auto text-center text-lg-left text-sm-center">
                            {{-- <div class="big-border" style="font-weight: bold;font-size:20px">Notre Mission</div> --}}
                            <p style="font-size: 18px" class="wow fadeInRight" data-wow-delay=".2s">
                                Notre mission est d’être  votre partenaire de confiance, en vous offrant un service personnalisé, des solutions innovantes et adaptées à vos besoins spécifiques, tout en vous aidant à vous intégrer efficacement dans  un nouvel environnement. Nous comprenons que s’adapter à de nouveaux changements peut être un défi et nous nous engageons à vous donner un soutien à tous les niveaux.
                                <br>
                                Nous sommes déterminés à vous offrir un service de choix qui vous permettra de vous concentrer sur vos principales activités, sachant que votre projet est entre de bonnes mains.
                                <br>
                                DGA International est votre allié dans la réalisation vos projets. Nous vous offrons l’expertise, le soutien et la confiance dont vous aurez besoin pour réussir votre projet, la création de votre nouvelle entreprise ou votre nouvelle vie.
                                <br>
                                Nous sommes fiers d’être votre partenaire de confiance et nous nous engageons à continuer à vous offrir des services exceptionnels pour vous assurer une transition en toute tranquillité.
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
                            <h2>Nos Services</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 text-center">
                        <p>
                            DGA International, votre partenaire privilégié pour tous vos projets et vos besoins en matière de
                            conciergerie au Canada et en Côte d’Ivoire. Nous offrons une gamme complète de services
                            personnalisés, de qualité supérieure, aux entreprises et aux particuliers.
                        </p>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-md-6">
                        <div class="col-12">
                            <h5 class="p-title text-bold ">Conciergerie d’affaires</h5>  </div>
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                            <li>Organisation de missions économiques </li>
                            <li>Organisation d’événements (conférences, lancement de produit, cocktail)</li>
                            <li>Organisation de voyage d’affaires (transport, hébergement, etc)</li>
                            <li>Création d’entreprise, y compris les formalités administratives et juridiques</li>
                            <li>Recherches de partenaires commerciaux</li>
                            <li>Rechercher d’opportunités d’affaires et d’investissement</li>
                            <li>Service d’assistance administrative et juridique</li>
                            <li>Service de formation</li>
                            <li>Service de vérification des antécédents</li>
                        </ul>
                    </div>
                    <div class=" offset-md-1 col-md-5">
                        <h5 class="p-title text-bold ">Conciergerie de particulier</h5>
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".4s">
                            <li>Assistance à obtention du visa d’études</li>
                            <li>Assistance à l’obtention du visa de travail</li>
                            <li>Assistance à l’obtention du visa de touriste</li>
                            <li>Assistance pour l’immigration d’affaires</li>
                            <li>Organisation de circuits de voyage personnalisés</li>
                            <li>Service de tourisme et de découverte</li>
                            <li>Assistance à l’installation y compris la recherche d’un logement et la mise en place des services de bas</li>
                            <li>Accompagnement pour l’investissement immobilier</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>


        <section aria-label="section" class="jarallax text-light"  id="nos-valeurs">
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
                                        <h3 class="id-color">Intégrité</h3>
                                        <p>
                                            Nous croyons que l’intégrité est essentielle pour établir une relation de confiance sur du long terme avec nos clients. Nous nous engageons à servir nos clients dans le respect et  avec honnêteté, en faisant preuve de transparence dans toutes nos démarches.
                                        </p>

                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color">Professionalisme</h3>
                                        <p>
                                            Nous valorisons également le professionnalisme en restant à l’affût des dernières tendances et des meilleures pratiques de notre secteur pour offrir des services de qualité à nos clients. En fournissant une expertise de pointe, nous aidons nos clients à atteindre leurs objectifs commerciaux.
                                        </p>
                                        {{-- <div class="de_testi_by"><span>Sarah, Midokpodistribution</span></div> --}}
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color">Adaptabilité</h3>
                                        <p>Chez DGA, nous sommes conscients que naviguer dans de nouveaux environnements peut être difficile pour nos clients. Nous sommes donc là pour les soutenir émotionnellement et pratiquement, en faisant preuve d’empathie et de compréhension de leurs défis.</p>
                                        {{-- <div class="de_testi_by"><span>Michael, Mindeba</span></div> --}}
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3 class="id-color">Empathie</h3>
                                    <p>
                                        Nous sommes conscients que naviguer dans un nouvel environnement peut être difficile. Nous sommes donc là pour soutenir nos clients émotionnellement et concrètement, en faisant preuve d’empathie et de compréhension.
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
                                    <h4><a href="{{route('blog',['la-transformation-digitale-gestion-du-changement'])}}">Titre de la vidéo
                                            <span></span></a></h4>
                                    <span class="p-author"><a href="{{route('blog',['la-transformation-digitale-gestion-du-changement'])}}">Lire la vidéo</a></span>
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
                                    <h4><a href="{{route('blog',['femmes-leaders-dans-l-economie-ivoirienne'])}}">Titre de la vidéo
                                            <span></span></a></h4>
                                    <span class="p-author"><a href="{{route('blog',['femmes-leaders-dans-l-economie-ivoirienne'])}}">Lire la vidéo</a></span>
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
                                    <h4><a href="{{route('blog',['l-innovation-disruptive'])}}">Titre dela vidéo
                                            <span></span></a></h4>

                                    <span class="p-author"><a href="{{route('blog',['l-innovation-disruptive'])}}">Lire la vidéo </span></span>
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
