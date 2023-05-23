

@extends('layout.master')

{{-- @section('header-banner')
    @include('layout.landing.header-banner')
@endsection --}}

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" style="background-color: rgb(0 54 74 / 90%);">
            <!-- <img src="images/background/subheader3.jpg" class="jarallax-img" alt=""> -->
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>Secteurs</h1>
                            <p>{{$sujet}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">

                @if ( $slug == 'agency-banking-solution-pour-une-inclusion-financière')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Secteur</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    La problématique de l'inclusion financière en Côte d'Ivoire est un sujet complexe qui concerne l'accès des individus et des entreprises aux services financiers. En Côte d'Ivoire, de nombreuses personnes sont exclues du système financier formel, notamment en raison de la pauvreté, de l'analphabétisme et de l'absence de documents d'identité. Cette exclusion financière a des conséquences néfastes sur le développement économique et social du pays.
                                </p>
                                <p>
                                    Pour remédier à cette situation, il est nécessaire de mettre en place des politiques et des programmes visant à promouvoir l'inclusion financière. Cela peut passer par la création de produits financiers adaptés aux besoins des populations les plus vulnérables, par la facilitation de l'accès aux services financiers pour les personnes défavorisées, ou encore par la sensibilisation à l'importance de l'inclusion financière.
                                </p>
                            </div>


                            <div class="col-md-6 offset-md-1">
                                <div class="de-images">
                                    <div class="di-text text-white bg-color">
                                        <h1>100</h1><span>Mandats exécuté</span>
                                    </div>
                                    <img class="di-small-2" src="{{asset('images/misc/d2.jpg')}}" alt="" />
                                    <img class="di-big img-fluid" src="{{asset('images/misc/d1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row  justify-content-center">
                            <div class="col-md-10 text-justify">
                                <p>
                                    L’équipe de LAJOY a une grande expertise dans les solutions apportées pour lutter contre l’exclusion financière des populations. Au-delà des solutions de paiement, et des solutions de digitalisation pour rejoindre les populations les plus éloignées, LAJOY s’est spécialisé dans la mise en place du modèle Agency Banking. Pour rappel, l'agency banking est une forme de service bancaire dans laquelle une entreprise, appelée "agent", est habilitée par une banque à effectuer des transactions financières au nom de cette banque. L'objectif de l'agency banking est de permettre aux clients de la banque de réaliser des transactions financières de manière plus pratique et plus rapide, en leur offrant un accès aux services bancaires dans des lieux qui ne sont pas forcément des agences bancaires traditionnelles. Ainsi, les clients peuvent effectuer des opérations telles que des retraits ou dépôts d'argent, des paiements de factures ou des transferts d'argent, sans avoir à se déplacer jusqu'à une agence bancaire.
                                </p>
                                <p>
                                    LAJOY est le partenaire idéal dans la mise en place d'une Agency Banking. Nous offrons des offres sur mesure aux 2 acteurs principaux de l'industrie:
                                    <ul>
                                        <li>
                                            Les institutions financières : Les difficultés des institutions financières commencent par leur inaccessibilité sur tout l'étendue du territoire, en raison du nombre limité d’agences bancaires concentrées dans les villes, alors que la majorité de la population vit encore dans les zones rurales. Le modèle d’Agency Banking peut apporter un retour sur investissement de plus de 300 % en l’espace de trois ans. Ce modèle agit sur le parcours client, les revenu généré, l'impact visuel, la communication et le marketing de l'institution financière. Ainsi, une amélioration du volume d'épargne avec la réduction des files d'attente donc l'augmentation de l'expérience client.
                                        </li>
                                        <li>
                                            Nous accompagnons les institutions financières à mettre en place leur stratégie d'affaire, leur stratégie marketing et leur stratégie de déploiement pour répondre à leur vision et leurs priorités. Afin qu’elles puissent répondre aux besoins du marché, nous mettons à leur disposition la plateforme agency banking de LAJOY.
                                        </li>
                                        <li>
                                            Les investisseurs : LAJOY offre à ses investisseurs un service sur mesure pour garantir la rentabilité de leur investissement. Nous les accompagnons (installation, recrutement, formation, gestion, marketing, produits financiers) pour que leurs agences soient au cœur de l'activité économique de leur secteur et ainsi être le centre financier de référence dans leur zone d’activité.
                                        </li>
                                    </ul>
                                </p>

                            </div>
                        </div>

                    </div>
                @endif
                @if ( $slug == 'Telecommunication')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-6 offset-md-1">
                                <div class="de-images">
                                    <div class="di-text text-white bg-color">
                                        <h1>100</h1><span>Mandats exécuté</span>
                                    </div>
                                    {{-- <img class="di-small-2" src="{{asset('images/misc/d2.jpg')}}" alt="" /> --}}
                                    <img class="di-big img-fluid" src="{{asset('images/misc/d1.jpg')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <span class="p-title">Secteur</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Depuis des années, nous accompagnons nos clients dans leur stratégie d’acquisition et de fidélisation. Grâce à nos services sur mesure, nous garantissons le P&L (Profit & Lost) pour nos clients en mettant en place des outils technologiques, des outils d’analyse et en bâtissant des stratégies d’affaire ou de lancement de produit sur mesure.
                                </p>
                                <p>
                                    LAJOY a développé une expertise pour répondre aux défis du secteur de la télécommunication :
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <p>
                                    <ul>
                                        <li>
                                            Nous aidons nos clients à élaborer des plans de développement à long terme pour répondre aux besoins de la clientèle et aux évolutions du marché
                                        </li>
                                        <li>
                                            Nous conseillons nos clients à développer de nouveaux produits et services innovants pour se différencier de leurs concurrents et attirer de nouveaux clients
                                        </li>
                                        <li>
                                            Nous assistons nos clients à optimiser leurs coûts d'investissement et à maximiser leur rentabilité
                                        </li>
                                        <li>
                                            Nous assistons nos clients dans l’élimination des points de friction pour accroître la fidélité des clients
                                        </li>
                                        <li>
                                            Nous intégrons la cybersécurité et la protection des renseignements personnels dès la conception.
                                        </li>
                                    </ul>
                                </p>
                                <p>
                                    Il est important de choisir une approche de l'analyse des données qui convient à l'entreprise et de disposer des outils et des compétences nécessaires pour analyser les données de manière efficace. L'analyse des données peut être un atout précieux pour l'entreprise si elle est utilisée de manière stratégique et si les résultats sont utilisés de manière efficace pour orienter les décisions et les actions de l'entreprise.
                                </p>
                            </div>
                        </div>


                    </div>
                @endif

                @if ( $slug == 'immobilier')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="p-title">Secteur</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Notre entreprise est spécialisée dans l'accompagnement de projets immobiliers, que ce soit pour l'achat, la location ou la construction. Nous proposons des services de conseil, de formation et de financement pour aider nos clients à réaliser leur projet en toute sérénité. Nous réalisons également la construction de logements de standing et de qualité, adaptés aux besoins de nos clients.

                                </p>
                                <p>
                                    Notre équipe est composée de professionnels hautement qualifiés dans le domaine bancaire, de l'architecture et de la construction. Nous mettons notre savoir-faire et notre expertise au service de nos clients pour répondre efficacement à leurs attentes. Nos collaborateurs sont passionnés par leur métier et apportent leur soutien à chaque étape du projet.
                                </p>

                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="de-images">
                                    <div class="di-text text-white bg-color">
                                        <h1>100</h1><span>Mandats exécuté</span>
                                    </div>
                                    {{-- <img class="di-small-2" src="{{asset('images/misc/d2.jpg')}}" alt="" /> --}}
                                    <img class="di-big img-fluid" src="{{asset('images/misc/d1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <p>
                                    Nous avons acquis une solide expérience au fil des années au Canada, où nous avons une firme de financement immobilier. L’accréditation de notre firme de financement auprès de l’autorité des marchés financiers apportent des garantis et démontre le professionnalisme de nos services. Durant ses années d’accompagnement sur mesure destinée à notre clientèle de la diaspora et des clients prestigieux, nous avons développé une connaissance approfondie du marché et des tendances immobilières en Côte d’Ivoire.
                                </p>
                                <p>
                                    Nous sommes en mesure de vous accompagner dans toutes vos démarches de financement, d'achat ou de construction, en vous apportant une assistance professionnelle et multidisciplinaire. Faites confiance à notre expertise pour réussir votre projet immobilier.
                                </p>
                            </div>
                        </div>


                    </div>
                @endif
                @if ( $slug == 'Batiments-et-travaux-publique')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Secteur</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Le secteur du BTP (bâtiment et travaux publics) est de grande importance pour l'économie de la Côte d'Ivoire. Il contribue à la construction et à la rénovation des infrastructures qui permettent le développement économique et social du pays, comme les routes, les ponts, les bâtiments publics et les logements. Pour une entreprise de BTP, être en mode innovation est crucial pour répondre aux besoins de ses clients et rester compétitive sur le marché. L'innovation peut se manifester de différentes manières, comme l'adoption de nouvelles technologies, l'amélioration des processus de production, l'introduction de nouveaux produits ou services, etc.
                                </p>

                            </div>
                            <div class="col-md-6 offset-md-1">
                                <div class="de-images">
                                    <div class="di-text text-white bg-color">
                                        <h1>100</h1><span>Mandats exécuté</span>
                                    </div>
                                    {{-- <img class="di-small-2" src="{{asset('images/misc/d2.jpg')}}" alt="" /> --}}
                                    <img class="di-big img-fluid" src="{{asset('images/misc/d1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <p>
                                    Gérer le changement est également important pour une entreprise de BTP qui souhaite s'adapter aux nouvelles tendances et aux évolutions du marché. Cela implique de former son équipe aux nouvelles technologies et aux méthodes de travail, de communiquer de manière transparente sur les changements à venir, et de mettre en place des mécanismes de gestion de crise pour faire face aux difficultés inévitables qui peuvent survenir lors du processus de changement.

                                </p>
                                <p>
                                    Vu l’importance de ce secteur d’activité sur l’économie ivoirienne, LAJOY offre différent service afin d’accompagner les entreprises du secteur à accroître leur rendement :
                                    <ul>
                                        <li>
                                            Gestion de projet : les entreprises de BTP ont souvent à gérer de grands projets complexes, nécessitant une planification et une coordination minutieuses. Nous aidons à établir des calendriers, à gérer les budgets et à suivre l'avancement des travaux.
                                        </li>
                                        <li>
                                            Stratégie d'entreprise : les entreprises de BTP doivent souvent faire face à de nombreux défis et opportunités, notamment en matière de nouvelles technologies, de réglementation et de concurrence. Nous aidons à définir une vision à long terme et à mettre en place des plans d'action pour atteindre ces objectifs.
                                        </li>
                                        <li>
                                            Gestion de la main-d'œuvre : les entreprises de BTP ont souvent besoin de recruter, former et motiver une main-d'œuvre qualifiée et polyvalente. Nous aidons à mettre en place des programmes de formation et de développement des compétences, ainsi qu'à gérer les relations avec les employés.
                                        </li>
                                        <li>
                                            Marketing : dans ce marché compétitif, les entreprises de BTP doivent orienter leur service d’une manière optimale afin de limiter les coûts et optimiser leur investissement pour accroitre leur profitabilité. LAJOY accompagne ses clients dans la mise en place des stratégies d’acquisition et de fidélisation clients. Nous travaillons sur des leviers comme l’amélioration du parcours clients, l’amélioration de leur image de marque en utilisant des outils digitaux sur mesure.
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                @if ( $slug == 'energie-ressource-produits-industriels')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Secteur</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Le secteur de l'énergie, des ressources et produits industriels est en constante évolution, avec l'apparition de nouvelles technologies qui peuvent changer les règles du jeu. Pour rester à la pointe, les entreprises doivent être en mesure de s'adapter rapidement et de mettre en œuvre de nouvelles technologies de manière efficace. Ce secteur connaît une forte concurrence, tant sur le marché local qu'à l'étranger. Pour rester compétitive, les entreprises doivent donc être en mesure de proposer des produits et services de qualité supérieure à des prix compétitifs.
                                </p>

                                <p>
                                    Nos spécialistes du secteur ont développé les compétences qui leur permettent de répondre aux problématiques de vos secteurs. Au-delà des missions d’audit et de conseil, ils vous accompagnent sur les enjeux propres à vos métiers :
                                </p>
                            </div>
                            <div class="col-md-6 offset-md-1">
                                <div class="de-images">
                                    <div class="di-text text-white bg-color">
                                        <h1>100</h1><span>Mandats exécuté</span>
                                    </div>
                                    {{-- <img class="di-small-2" src="{{asset('images/misc/d2.jpg')}}" alt="" /> --}}
                                    <img class="di-big img-fluid" src="{{asset('images/misc/d1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <p>
                                    <ul>
                                        <li>
                                            La mise en place d'une politique de responsabilité sociale de l'entreprise (RSE) en intégrant les préoccupations sociales, environnementales et économiques dans les activités et décisions de l'entreprise.
                                        </li>
                                        <li>
                                            La mise en place d’une stratégie marketing pour fidéliser les clients existants et accroitre l’image de marque de l’entreprise
                                        </li>
                                        <li>
                                            Amélioration des processus de travail
                                        </li>
                                        <li>
                                            Stratégie de déploiement commercial
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif




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
                        {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Notre Identité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Notre Expertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Nos Partenaires</a>
                            </li>
                        </ul> --}}
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
                <img src="{{asset('images/background/5.jpeg')}}" class="jarallax-img" alt="">
            </div>
        </section>

        <section class=" relative z1000">
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
                            <img src="{{asset('images/services/marketing.jpeg')}}" alt="" class="img-responsive" />
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
                            <img src="{{asset('images/services/marketing-2.jpeg')}}" alt="" class="img-responsive" />
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
                            <img src="{{asset('images/services/marketing-3.jpeg')}}" alt="" class="img-responsive" />
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
                            <h3 class="timer" data-to="15" data-speed="1000">15</h3>
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
