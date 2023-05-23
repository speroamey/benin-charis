

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
                            <h1>Services</h1>
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
                @if ( $slug == 'analyse-interne')
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services Conseils</span><br>
                            <h2>{{$sujet}}</h2>
                            {{-- <p>
                                LAJOY s’assure à améliorer la présence et la performance sur le marché de ses clients. Les services de consultation de LAJOY peuvent aider une entreprise à développer une stratégie de marketing efficace, à établir une marque forte et à atteindre ses objectifs de vente et de croissance.
                            </p> --}}
                            <p>
                                Lajoy examine les forces et les faiblesses de votre entreprise en termes de ressources, de capacités et de compétences internes. Nous sommes là pour comprendre comment l'entreprise fonctionne et pour identifier les domaines où elle peut s'améliorer :                                 <ol>
                                    <li>
                                        Les ressources de l'entreprise : identifier les ressources dont vous disposez, notamment les ressources financières, humaines, matérielles et intellectuelles dans le but de comprendre les capacités de votre entreprise à réaliser ses objectifs.
                                    </li>
                                    <li>
                                        Les compétences et les connaissances des employés : définir les compétences et les connaissances des employés de l'entreprise pour identifier la force de votre entreprise en termes de capital humain et savoir si elle dispose des compétences nécessaires.
                                    <li>
                                        Les processus et les systèmes : examiner les processus et les systèmes de l'entreprise pour déterminer les domaines où l'entreprise peut s'améliorer en termes d'efficacité et d'efficience. Cela peut inclure l'examen des processus de production, de vente, de marketing, de gestion de projet et de gestion des relations avec les clients.
                                    </li>
                                    <li>
                                        Les produits et les services : analyser les produits et les services pour savoir s’ils répondent aux besoins et aux attentes des clients.
                                    </li>
                                    <li>
                                        Les relations avec les partenaires et les fournisseurs : comprendre si l’entreprise dispose des ressources nécessaires pour répondre aux besoins de ses clients.
                                    </li>
                                </ol>
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
                @endif
                @if ( $slug == 'analyse-de-marche')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Services Conseils</span><br>
                                <h2>{{$sujet}}</h2>
                                {{-- <p>
                                    L'expérience client désigne l'ensemble des interactions et des échanges que les clients ont avec une entreprise, à chaque étape de leur parcours avec cette entreprise. Cela peut inclure la découverte de l'entreprise et de ses produits ou services, l'achat, l'utilisation et la maintenance des produits ou services, ainsi que le service à la clientèle et les retours.
                                </p> --}}
                                <p>
                                    LAJOY Consulting fera une étude détaillée et approfondie des tendances, des opportunités, des menaces et des forces du marché dans lequel votre entreprise actuelle ou future opère ou envisage d'entrer. Nous vous permettons d’avoir une compréhension complète du marché,
                                    y compris sur les caractéristiques des consommateurs, les tendances de consommation, les concurrents, les canaux de distribution, les coûts et les tendances économiques, grâce à des données précises et pertinentes, des méthodes de collecte de données efficaces et des outils d'analyse avancés. Cette étude est faite sur mesure pour vous et adaptée à vos besoins. Nous vous fournirons des recommandations stratégiques claires et facilement compréhensible.
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



                    </div>
                @endif
                @if ( $slug == 'business-plan')
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
                                <span class="p-title">Services Conseils</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Un business plan bien préparé est essentiel pour convaincre les investisseurs potentiels, les partenaires commerciaux et les prêteurs de financer le projet d'entreprise. Lajoy vous accompagne sur toutes les étapes de manière détaillée sur le projet de votre entreprise, sa stratégie, sa faisabilité financière et opérationnelle ainsi que les différentes étapes pour sa réalisation. Nous vous présenterons un résumé exécutif concis du projet pour vous présenter les objectifs, la stratégie, les produits ou services proposés, le marché visé, les perspectives financières et les besoins en financement.
                                </p>

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <p class="pt-5">
                                </p>


                            </div>
                        </div>


                    </div>
                @endif
                @if ( $slug == 'strategie-d-affaire-d-aquisition-et-de-fidelisation')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY Consulting peut aider les entreprises à élaborer une stratégie d'affaires efficace qui inclut l'acquisition et la fidélisation de clients. Nous travaillons avec nos clients pour identifier les opportunités de croissance, élaborer des plans d'action et les mettre en place, et créer des programmes de fidélisation qui augmentent la valeur des clients tout au long de leur cycle de vie.
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

                            </div>
                        </div>
                    </div>
                @endif
                @if ( $slug == 'marketing-et-communication')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Services Conseils</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY Consulting aide les entreprises à développer une stratégie de marketing et de communication adaptée à leurs besoins. Nous développons des plans de marketing et des campagnes publicitaires efficaces qui atteignent leur public cible. Nous nous concentrons également sur la création de contenu, les relations publiques et la gestion des médias sociaux pour communiquer efficacement avec vos clients.
                                </p>

                                <h2>Optimisation de l’expérience client / parcours clients</h2>
                                <p>
                                    LAJOY Consulting améliore l'expérience client en cartographiant les parcours clients pour identifier les points de friction et élaborer des solutions optimales qui maximiserons chaque étage du cycle du client.
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

                    </div>
                @endif
                {{-- @if ( $slug == 'optimisation-de-l-experience-client')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY Consulting améliore l'expérience client en cartographiant les parcours clients pour identifier les points de friction et élaborer des solutions optimales qui maximiserons chaque étage du cycle du client.
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

                        </div>
                    </div>
                @endif --}}
            @if ( $slug == 'deploiement-commercial')
                <div class="row align-items-center">
                    <div class="row">
                        <div class="col-md-5">
                            <span class="p-title">Services Conseils</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                LAJOY Consulting développe et met en œuvre des stratégies de déploiement commercial efficaces pour maximiser leur impact sur le marché grâce à un plan de déploiement qui tiennent compte du marché cible, du modèle de l’entreprise, du budget et des contraintes terrain.
                            </p>
                            <h2>Réseau de distribution</h2>
                            <p>
                                LAJOY Consulting développe et gère votre réseau de distribution pour atteindre votre marché cible efficacement. Nous travaillons avec nos clients pour identifier les canaux de distribution les plus efficaces et les partenaires potentiels, et nous les aidons à établir des relations solides avec eux.
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
                    </div>
                </div>
            @endif

            @if ( $slug == 'gestion-du-changement')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Services Conseils</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY Consulting recommande et intervient dans le changement organisationnel de votre entreprise en fournissant des conseils et des outils pour faciliter la transition. Nous travaillons avec nos clients pour comprendre les défis liés au changement, élaborer des plans d'action pour y faire face et aider à la mise en œuvre de ces plans.
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

                            </div>
                        </div>
                    </div>
            @endif

                @if ( $slug == 'formation')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Services Conseils</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Chez LAJOY, nous croyons que la formation est la clé du succès dans les affaires et dans la vie. C'est pourquoi nous nous engageons à fournir des formations de haute qualité qui aident les professionnels à atteindre leurs objectifs et à améliorer leurs compétences. Nos programmes de formation sont dispensés par des formateurs experts qui ont une expérience pratique dans leur domaine d'expertise, et qui sont passionnés par leur métier.
                                    <br>
                                    <ul>
                                        Nous pouvons concevoir des programmes de formation sur mesure. Voici la liste de nos programmes actuels :
                                        <li>
                                            Marketing : nous couvrons toutes les facettes du marketing, de la planification stratégique jusqu’à la mise en œuvre des campagnes de marketing, en passant par l'analyse de marché et la recherche de consommateurs. Nous mettons également l'accent sur les dernières tendances en matière de marketing et de Martech (marketing tetchnologique), le marketing digital, le marketing de contenu et les médias sociaux.
                                        </li>
                                        <li>
                                            Comment définir la proposition de valeur de votre entreprise en deux pages?
                                        </li>
                                        <li>
                                            Comment faire de son plan Marketing un succès en 48 heures?
                                            <ul>
                                                <li>
                                                    Effectuer une analyse FFOM (forces, faiblesses, opportunités et menaces) Examinez les forces, faiblesses, occasions et menaces de votre entreprise
                                                </li>
                                                <li>
                                                    Établir le profil de la clientèle
                                                </li>
                                                <li>Fixer des objectifs clairs</li>
                                                <li>
                                                    Évaluer les «quatre P» du marketing : Produit, Prix, Communication et Distribution
                                                </li>
                                                <li>
                                                    Établir un budget
                                                </li>
                                                <li>
                                                    Faire un plan d’action accompagné d’un rétroplanning
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            Martech <br>

                                            Comment utiliser les outils et technologies modernes pour améliorer vos résultats de ventes. Cette formation couvre les domaines tels que l'automatisation du marketing, la gestion de la relation client (CRM), la publicité en ligne, l'optimisation des moteurs de recherche (SEO) et l'analyse des données.
                                        </li>
                                        <li>
                                            Agency banking : conçus pour aider les banques et les institutions financières à élargir leur portée et leur accessibilité en offrant des services bancaires à des clients qui ne peuvent pas se déplacer facilement en agence. Nous couvrons les aspects de l'installation et de l'utilisation de plateformes numériques pour les transactions bancaires à distance, la formation de personnel, la gestion des risques, et la création de partenariats.
                                        </li>
                                        <li>
                                            Intelligence artificielle : formation pratique sur plusieurs outils d’intelligence artificielle qui permettent de se démarquer. Nous aidons les professionnels à comprendre comment utiliser ces technologies pour améliorer leur entreprise et leur positionnement sur le marché.
                                        </li>
                                        <li>
                                            Stratégie commerciale : comment définir et mettre en œuvre des stratégies efficaces pour développer le portefeuille clients. Nous couvrons tous les aspects de la stratégie commerciale, de l'analyse de marché à la planification stratégique et à la mise en œuvre de plans d'action.
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="col-md-6 offset-md-1">
                                <div class="de-images">
                                    <div class="di-text text-white bg-color">
                                        <h1>100</h1><span>Mandats exécutés</span>
                                    </div>
                                    {{-- <img class="di-small-2" src="{{asset('images/misc/d2.jpg')}}" alt="" /> --}}
                                    <img class="di-big img-fluid" src="{{asset('images/misc/d1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                        </div>
                    </div>
                @endif

                @if ( $slug == 'coaching')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Services Conseils</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Stratégie commerciale : comment définir et mettre en œuvre des stratégies efficaces pour développer le portefeuille clients. Nous couvrons tous les aspects de la stratégie commerciale, de l'analyse de marché à la planification stratégique et à la mise en œuvre de plans d'action.

                                </p>
                                <p>
                                    <ul>
                                        <li>
                                            Comment être percutent lors de ses prises de parole ?
                                        </li>
                                        <li>
                                            Persuader et convaincre son interlocuteur
                                        </li>
                                        <li>
                                            Comment bâtir un projet : de l'idéation à son lancement commercial ?
                                        </li>
                                        <li>
                                            Comment faire une présentation écrite et orale percutante ?
                                        </li>
                                        <li>
                                            Démystifier l'échiquier politique d'une entreprise et en ressortir gagnant
                                        </li>
                                        <li>
                                            L'art de la négociation
                                        </li>
                                        <li>
                                            Le leadership au travail
                                        </li>
                                        <li>
                                            Comment gérer efficacement son équipe?
                                        </li>
                                        <li>
                                            Les clés d'un entretien de recrutement réussi
                                        </li>
                                    </ul>
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

                                </p>
                            </div>
                        </div>
                    </div>
                @endif

            {{-- MENU SECTION 2 ITEMS RESOURCES - Stratégie d'affaire --}}
                @if ( $slug == 'application-site-web-e-commerce')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Stratégie d'affaire</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY accompagne ses clients dans l'ensemble de leurs décisions et de leurs actions pour atteindre leurs objectifs et assurer leur croissance à moyen et long terme. Cet accompagnement peut concerner différents aspects de l'entreprise, comme les produits ou services proposés, les marchés ciblés, la chaîne de valeur, les ressources humaines, etc.
                                    La mise en place de la stratégie d'entreprise par l’équipe de LAJOY permet aux dirigeants d’entreprise, aux chefs de département de répondre à plusieurs questions clés qui concernent l'avenir de l'entreprise et son développement :
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
                                    <ol>
                                        <li>
                                            Quels sont les objectifs de croissance de l'entreprise à moyen et long terme ?
                                            <ul>
                                                <li>
                                                    Comment l'entreprise peut-elle atteindre ces objectifs en termes de chiffre d'affaires, de parts de marché, de rentabilité, etc. ?
                                                </li>
                                                <li>
                                                    Sur quels marchés l'entreprise peut-elle avoir le plus de succès ?
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Quels sont les besoins et les attentes des clients de ces marchés ?
                                            <ul>
                                                <li>
                                                    Comment l'entreprise peut-elle se différencier de ses concurrents et proposer une valeur ajoutée à ses clients ?
                                                </li>
                                                <li>
                                                    Quelles sont les forces et les faiblesses de l'entreprise ?
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Comment l'entreprise peut-elle s'appuyer sur ses forces pour atteindre ses objectifs de croissance ?
                                            <ul>
                                                <li>
                                                    Comment l'entreprise peut-elle surmonter ses faiblesses et éviter les risques ?
                                                </li>
                                                <li>
                                                    Quels sont les opportunités et les menaces présentes dans son environnement ?
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Comment l'entreprise peut-elle saisir les opportunités pour développer ses ventes et son chiffre d'affaires ?
                                            <ul>
                                                <li>
                                                    Comment l'entreprise peut-elle protéger ses activités face aux menaces ?
                                                </li>
                                                <li>
                                                    Quelle organisation et quelles ressources l'entreprise doit-elle mettre en place pour atteindre ses objectifs de croissance ?
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            Quels sont les moyens (humains, financiers, technologiques, etc.) nécessaires pour mettre en œuvre sa stratégie ?
                                            <ul>
                                                <li>
                                                    Comment l'entreprise peut-elle les obtenir et les gérer de manière efficace ?
                                                </li>
                                                <li>
                                                    Comment l'entreprise peut-elle suivre et ajuster sa stratégie en fonction des résultats obtenus et des évolutions de son environnement ?
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                @if ( $slug == 'digitalisation-des-paiements')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Les innovations disruptives sont souvent caractérisées par leur capacité à créer de nouveaux marchés à redéfinir les règles du jeu dans les marchés existants. Par exemple, l'arrivée des compagnies aériennes à bas coûts a créé un nouveau marché en proposant des vols moins chers que les compagnies aériennes traditionnelles. De même, l'arrivée des services de location de voitures en ligne a redéfini les règles du jeu pour les compagnies de location de voitures traditionnelles en proposant des tarifs plus avantageux et une expérience de location de voiture plus pratique.                                </p>


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
                            <div class="col-md-10 mt-1">
                                <p>
                                    Il est important de noter que l'innovation disruptive peut entraîner des conséquences négatives pour les entreprises et les industries existantes qui ne peuvent pas concurrencer les nouvelles solutions proposées. Cependant, elle peut également avoir un impact positif sur les consommateurs en leur offrant de meilleures options et en les incitant à adopter de nouvelles technologies.
                                </p>
                                <p>
                                    Dans les années à venir, le challenge des entreprises ivoiriennes sera de se transformer de manière significative, de redéfinir leur raison d’être, d’amorcer une transformation numérique de bout en bout pour répondre aux besoins de la population qui modifie ses habitudes de consommation.
                                </p>
                                <p>
                                    La pluralité de l’expertise et la vaste expérience de l’équipe de LAJOY, nous permettent d’offrir des conseils stratégiques sur les opportunités de fusions acquisitions, de partenariats stratégiques ou de restructuration pour atteindre des résultats optimaux et durables.
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

            {{-- another section ORGANISATION D'ENTREPRISE --}}
                @if ( $slug == 'smart-city')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Organisation d'entreprise</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    L’excellence n’est plus optionnelle, elle est essentielle. Avec une clientèle de plus en plus exigeante, la monté en puissance de la transformation numérique, de la digitalisation et qui entraînent la création de plusieurs offres accessibles à un maximum de client, les entreprises ont besoin d’avoir en leur sein, des ressources humaines de qualité et qui arrivent à s’adapter en temps réel.
                                    LAJOY accompagne à définir une culture d’entreprise forte pour ses clients afin de partager une vision commune avec les employés et ainsi garantir leur succès. Les équipes de LAJOY ont bien conscience que la solidité d’une chaîne repose sur le maillon le plus faible. Ainsi, tout est mis en œuvre pour créer les conditions essentielles à la performance de chaque employé afin que l’organisation du travail se face d’une manière optimale au sein de l’entreprise.                                </p>
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
                        {{-- <div class="row justify-content-center">
                            <div class="col-md-10 mt-1">
                                <p>
                                    Il est important de noter que l'innovation disruptive peut entraîner des conséquences négatives pour les entreprises et les industries existantes qui ne peuvent pas concurrencer les nouvelles solutions proposées. Cependant, elle peut également avoir un impact positif sur les consommateurs en leur offrant de meilleures options et en les incitant à adopter de nouvelles technologies.
                                </p>
                                <p>
                                    Dans les années à venir, le challenge des entreprises ivoiriennes sera de se transformer de manière significative, de redéfinir leur raison d’être, d’amorcer une transformation numérique de bout en bout pour répondre aux besoins de la population qui modifie ses habitudes de consommation.
                                </p>
                                <p>
                                    La pluralité de l’expertise et la vaste expérience de l’équipe de LAJOY, nous permettent d’offrir des conseils stratégiques sur les opportunités de fusions acquisitions, de partenariats stratégiques ou de restructuration pour atteindre des résultats optimaux et durables.
                                </p>
                            </div>
                        </div> --}}
                    </div>
                @endif

                @if ( $slug == 'plateforme-bancaire')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Organisation d'entreprise</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    La transformation numérique peut représenter un défi pour les entreprises, et une bonne politique RH peut aider à y faire face. Les équipes de LAJOY se basent sur quelques fondamentaux pour la mise en place d'une politique RH pour faire face aux défis de la transformation numérique :
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
                            <div class="col-md-10 mt-1">
                                <p>
                                    <ul>
                                        <li>
                                            Formation et développement des compétences : pour s'adapter aux changements technologiques en cours, il est important de former et de développer les compétences de ses employés. Cela peut être fait par le biais de programmes de formation internes ou externes, ainsi que par la mise en place de programmes de mentorat et de coopération entre collègues.
                                        </li>
                                        <li>
                                            Gestion de la mobilité professionnelle : la transformation numérique peut entraîner des changements de rôles et de responsabilités au sein de l'entreprise. Il est donc important de mettre en place des programmes de mobilité professionnelle pour aider les employés à s'adapter à de nouvelles fonctions et à développer de nouvelles compétences.
                                        </li>
                                        <li>
                                            Gestion de la diversité et de l'inclusion : la transformation numérique peut également entraîner des changements dans la composition de l'effectif de l'entreprise. Il est donc important de veiller à ce que la politique RH favorise la diversité et l'inclusion afin de créer une culture de travail inclusive et respectueuse de tous les employés.
                                        </li>
                                        <li>
                                            Communication et collaboration : la transformation numérique peut entraîner des changements dans les modes de travail et de communication. Il est donc important de veiller à ce que la politique RH favorise la communication et la collaboration entre les différents départements et employés de l'entreprise.
                                        </li>
                                    </ul>
                                </p>

                            </div>
                        </div>
                    </div>
                @endif

                @if ( $slug == 'processus')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Organisation d'entreprise</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    Plusieurs leviers peuvent être utilisés pour accroître la productivité générale d’une entreprise. La ressource humaine est la ressource la plus importante. Une ressource humaine valorisée influence l’image de marque de l’entreprise et donc agit sur sa profitabilité.
                                </p>
                                <p>
                                    Plusieurs programmes visent à valoriser et à récompenser les employés pour leur durabilité, leur productivité et leur contribution au succès de l’organisation.
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
                            <div class="col-md-10 mt-1">
                                <blockquote>
                                    Comment LAJOY peut vous aider
                                </blockquote>
                                <p>
                                    LAJOY aide ses clients à mettre en place et à gérer efficacement leur programme de reconnaissance et de récompenses des employés. Nous définissons les critères de reconnaissance et récompense équitables et justes, et nous mesurons leur efficacité tout le long de l’existence du programme.
                                </p>
                                <blockquote>
                                    La méthode LAJOY :
                                </blockquote>
                                <p>
                                    <ul>
                                        <li>Établir les objectifs du programme</li>
                                        <li>Identifier les comportements et les réalisations que vous souhaitez récompenser</li>
                                        <li>Choisir les récompenses qui conviennent le mieux</li>
                                        <li>Établir les critères de reconnaissance et de récompenses</li>
                                        <li>Communiquer clairement le programme</li>
                                        <li>Surveiller et évaluer l'efficacité du programme</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

            {{-- 4th section Financement d'entreprise --}}

                    @if ( $slug == 'martech')
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="p-title">Organisation d'entreprise</span><br>
                                    <h2>{{$sujet}}</h2>
                                    <p>
                                        Le marché ivoirien est un pays à fort potentiel de croissance économique et offre de nombreuses opportunités pour les entreprises canadiennes. En effet, la Côte d'Ivoire est l'un des pays les plus dynamiques d'Afrique de l'Ouest et est considérée comme une porte d'entrée vers l'ensemble de la région.
                                        Le marché ivoirien est particulièrement attractif pour les entreprises canadiennes en raison de sa diversité économique. Le pays est en effet un acteur important dans les secteurs de l'agriculture, de l'industrie, du tourisme et des services financiers. De plus, la Côte d'Ivoire possède de nombreux atouts, notamment une main-d'œuvre qualifiée et une stabilité politique relativement bonne.
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
                                <div class="col-md-10 mt-1">
                                    <p>
                                        En termes de fusion et acquisition, le marché ivoirien offre de nombreuses opportunités pour les entreprises canadiennes. Le pays est en effet ouvert aux investissements étrangers et les règles de jeu sont relativement claires. Les entreprises canadiennes peuvent donc acquérir des entreprises locales ou encore s'associer à des partenaires ivoiriens pour développer de nouveaux projets.
                                        <br>
                                        En somme, le marché ivoirien est un pays très attractif pour les entreprises canadiennes et offre de nombreuses opportunités en termes de fusion et acquisition. Il est donc important pour les entreprises canadiennes de s'intéresser à ce marché et de saisir les opportunités qu'il offre
                                        <br>
                                        LAJOY accompagne ses clients à avoir des informations stratégiques pour diversifier leur activité, se développer rapidement, réduire leurs coûts et se positionner sur de nouveaux marchés. Avec nos partenaires de choix, nous aidons nos clients à identifier et évaluer les opportunités de Fusion et acquisitions (F&A), à négocier et à mettre en œuvre les transactions. Nous offrons des services de gestion de la transition pour assurer un passage en douceur et une intégration réussie de l'entreprise acquise.

                                        <ul>
                                            <li>
                                                Voici quelques étapes que nos équipes suive pour réaliser une fusion et une acquisition :
                                                <ul>
                                                    <li>Identifier les opportunités : la première étape consiste à identifier les entreprises qui pourraient être des cibles intéressantes pour une acquisition ou une fusion</li>
                                                    <li>
                                                        Évaluer les entreprises cibles : une fois que nous avons identifié les entreprises cibles, nous les évaluons pour déterminer si elles sont de bonnes opportunités de F&A. Cela peut inclure l'évaluation de leur performance financière, de leur portefeuille de produits et de services, de leur potentiel de croissance et de leur valeur de marque.
                                                    </li>
                                                    <li>
                                                        Négocier l'accord : une fois que nous avons identifié et évalué une entreprise cible, vous pouvez entamer des négociations pour mettre en place une transaction de F&A. Cela peut inclure la détermination du prix d'achat, la structure de la transaction et les conditions de l'accord.
                                                    </li>
                                                    <li>
                                                        Mettre en œuvre la transaction : une fois que l'accord de F&A est conclu, nous suivons les étapes nécessaires pour finaliser la transaction. Cela peut inclure la due diligence, la planification fiscale et la gestion de la transition pour assurer une intégration réussie de l'entreprise acquise.
                                                    </li>
                                                    <li>
                                                        Gérer la post-transaction : une fois que la transaction de F&A est finalisée, il est important de gérer efficacement l'intégration de l'entreprise acquise pour assurer la réussite à long terme de la transaction. Cela peut inclure la mise en place de nouvelles structures de gestion, la rationalisation des processus et la gestion du changement au sein de la nouvelle structure.
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ( $slug == 'vous-etes-une-institution-financiere')
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="p-title">Organisation d'entreprise</span><br>
                                    <h2>{{$sujet}}</h2>
                                    <p>
                                        Lajoy consulting accompagne les institutions financières (banques, microfinances, assureurs, …) dans toutes les étapes de la mise en vente de vos produits et services dans notre réseau d’agences :
                                    </p>
                                    <p>

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
                                <div class="col-md-10 mt-1">
                                    <p>
                                        <ul>
                                            <li>
                                                Mise en place d'une stratégie et d'un modèle d'affaires pour l'agency banking : Nous aidons les institutions financières à élaborer une stratégie et un modèle d'affaires solides pour leur réseau d'agences, en prenant en compte les objectifs de rentabilité, les contraintes réglementaires et les besoins des clients cibles. Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs besoins spécifiques et concevoir un plan adapté à leurs objectifs.
                                            </li>
                                            <li>
                                                Implantation interne dans les banques et microfinances : Nous accompagnons nos clients dans toutes les étapes de la mise en place de leur réseau d'agences, y compris l'implantation interne dans les banques et microfinances. Nous aidons nos clients à prioriser les meilleurs emplacements pour leurs agences en fonction de la population locale, de la concurrence et de la réglementation.
                                            </li>
                                            <li>
                                                Proposition d'intégration de notre plateforme digitale d'Agency Banking pour faciliter la mise en place du projet : Nous proposons une plateforme digitale d'Agency Banking complète qui permet à nos clients de gérer leur réseau d'agences de manière efficace et transparente. Nous intégrons cette plateforme aux institutions financières qui n'ont pas de plateforme pour faciliter la mise en place du projet.
                                            </li>
                                            <li>
                                                Formation interne et mise en place dans le réseau d'agence : Nous travaillons en étroite collaboration avec les équipes des institutions financières pour offrir une formation complète aux employés et aux gestionnaires du réseau d'agences. Nous nous assurons que tous les employés sont bien formés sur les produits et services bancaires, la gestion de la trésorerie et les outils de la plateforme digitale.
                                            </li>
                                            <li>
                                                Implantation des produits bancaires et gestion du réseau d'agences : Nous aidons nos clients à mettre en place les produits bancaires les plus appropriés pour leur réseau d'agences, en fonction des besoins de la clientèle locale et des exigences réglementaires. Nous aidons également nos clients à gérer efficacement leur réseau d'agences, en fournissant des outils de reporting en temps réel pour surveiller la performance du réseau et prendre des décisions éclairées en matière de gestion.
                                            </li>
                                        </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ( $slug == 'vous-etes-deja-une-agence')
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="p-title">Organisation d'entreprise</span><br>
                                    <h2>{{$sujet}}</h2>
                                    <p>
                                        Le financement d'une entreprise peut être un défi, surtout pour les entreprises en démarrage ou en croissance. Il existe plusieurs options de financement disponibles pour les entreprises, y compris les prêts bancaires, les investissements de capital de risque, les financements participatifs et les subventions.
                                    </p>
                                    <p>
                                        LAJOY accompagne ses clients dans la valorisation de leur entreprise en apportant de l’ingénierie financière couplé à de la stratégie d’affaire.
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
                                <div class="col-md-10 mt-1">
                                    <p>
                                        <ul>
                                            <li>
                                                Établir un plan d'affaires solide : avant de chercher du financement, il est important d'avoir un plan d'affaires solide qui détaille votre modèle économique, votre stratégie de marketing, votre plan de développement et votre plan financier. Un plan d'affaires bien écrit peut vous aider à convaincre les investisseurs de votre potentiel de croissance.
                                            </li>
                                            <li>
                                                Identifier les sources de financement possibles : il existe de nombreuses sources de financement disponibles pour les entreprises, chacune avec ses propres avantages et inconvénients. Il est important de faire des recherches pour trouver les sources de financement qui conviennent le mieux à votre entreprise.
                                            </li>
                                            <li>
                                                Préparer votre demande de financement : une fois que vous avez identifié les sources de financement possibles, vous devrez préparer votre demande de financement en fournissant les informations et les documents nécessaires. Cela peut inclure votre plan d'affaires, votre état financier, votre historique de crédit et votre pitch d'investissement.
                                            </li>
                                            <li>
                                                Négocier les termes du financement : une fois que vous avez obtenu une offre de financement, il est important de négocier les termes du financement de manière à obtenir les meilleures conditions possibles pour votre entreprise.
                                            </li>
                                            <li>
                                                Garder une bonne gestion financière : une fois que vous avez obtenu le financement dont vous avez besoin, il est important de veiller à une gestion financière saine pour assurer la viabilité à long terme de votre entreprise. Cela inclut la gestion de votre trésorerie, la tenue de comptes précis et la création de budgets et de prévisions financières à jour.
                                            </li>
                                        </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ( $slug == 'financement-en-ppp-et-en-bot')
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="p-title">Organisation d'entreprise</span><br>
                                    <h2>{{$sujet}}</h2>
                                    <p>
                                        Le financement d'une entreprise peut être un défi, surtout pour les entreprises en démarrage ou en croissance. Il existe plusieurs options de financement disponibles pour les entreprises, y compris les prêts bancaires, les investissements de capital de risque, les financements participatifs et les subventions.
                                    </p>
                                    <p>
                                        LAJOY accompagne ses clients dans la valorisation de leur entreprise en apportant de l’ingénierie financière couplé à de la stratégie d’affaire.
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
                                <div class="col-md-10 mt-1">
                                    <p>
                                        <ul>
                                            <li>
                                                Établir un plan d'affaires solide : avant de chercher du financement, il est important d'avoir un plan d'affaires solide qui détaille votre modèle économique, votre stratégie de marketing, votre plan de développement et votre plan financier. Un plan d'affaires bien écrit peut vous aider à convaincre les investisseurs de votre potentiel de croissance.
                                            </li>
                                            <li>
                                                Identifier les sources de financement possibles : il existe de nombreuses sources de financement disponibles pour les entreprises, chacune avec ses propres avantages et inconvénients. Il est important de faire des recherches pour trouver les sources de financement qui conviennent le mieux à votre entreprise.
                                            </li>
                                            <li>
                                                Préparer votre demande de financement : une fois que vous avez identifié les sources de financement possibles, vous devrez préparer votre demande de financement en fournissant les informations et les documents nécessaires. Cela peut inclure votre plan d'affaires, votre état financier, votre historique de crédit et votre pitch d'investissement.
                                            </li>
                                            <li>
                                                Négocier les termes du financement : une fois que vous avez obtenu une offre de financement, il est important de négocier les termes du financement de manière à obtenir les meilleures conditions possibles pour votre entreprise.
                                            </li>
                                            <li>
                                                Garder une bonne gestion financière : une fois que vous avez obtenu le financement dont vous avez besoin, il est important de veiller à une gestion financière saine pour assurer la viabilité à long terme de votre entreprise. Cela inclut la gestion de votre trésorerie, la tenue de comptes précis et la création de budgets et de prévisions financières à jour.
                                            </li>
                                        </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ( $slug == 'sources-de-financement-pour-l-immobiliers-avec-lajoy-consulting')
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="p-title">Organisation d'entreprise</span><br>
                                    <h2>{{$sujet}}</h2>
                                    <p>
                                        Le financement d'une entreprise peut être un défi, surtout pour les entreprises en démarrage ou en croissance. Il existe plusieurs options de financement disponibles pour les entreprises, y compris les prêts bancaires, les investissements de capital de risque, les financements participatifs et les subventions.
                                    </p>
                                    <p>
                                        LAJOY accompagne ses clients dans la valorisation de leur entreprise en apportant de l’ingénierie financière couplé à de la stratégie d’affaire.
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
                                <div class="col-md-10 mt-1">
                                    <p>
                                        <ul>
                                            <li>
                                                Établir un plan d'affaires solide : avant de chercher du financement, il est important d'avoir un plan d'affaires solide qui détaille votre modèle économique, votre stratégie de marketing, votre plan de développement et votre plan financier. Un plan d'affaires bien écrit peut vous aider à convaincre les investisseurs de votre potentiel de croissance.
                                            </li>
                                            <li>
                                                Identifier les sources de financement possibles : il existe de nombreuses sources de financement disponibles pour les entreprises, chacune avec ses propres avantages et inconvénients. Il est important de faire des recherches pour trouver les sources de financement qui conviennent le mieux à votre entreprise.
                                            </li>
                                            <li>
                                                Préparer votre demande de financement : une fois que vous avez identifié les sources de financement possibles, vous devrez préparer votre demande de financement en fournissant les informations et les documents nécessaires. Cela peut inclure votre plan d'affaires, votre état financier, votre historique de crédit et votre pitch d'investissement.
                                            </li>
                                            <li>
                                                Négocier les termes du financement : une fois que vous avez obtenu une offre de financement, il est important de négocier les termes du financement de manière à obtenir les meilleures conditions possibles pour votre entreprise.
                                            </li>
                                            <li>
                                                Garder une bonne gestion financière : une fois que vous avez obtenu le financement dont vous avez besoin, il est important de veiller à une gestion financière saine pour assurer la viabilité à long terme de votre entreprise. Cela inclut la gestion de votre trésorerie, la tenue de comptes précis et la création de budgets et de prévisions financières à jour.
                                            </li>
                                        </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endif

                    @if ( $slug == 'recherche-de-financement-pour-entreprise')
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="p-title">Organisation d'entreprise</span><br>
                                    <h2>{{$sujet}}</h2>
                                    <p>
                                        Le financement d'une entreprise peut être un défi, surtout pour les entreprises en démarrage ou en croissance. Il existe plusieurs options de financement disponibles pour les entreprises, y compris les prêts bancaires, les investissements de capital de risque, les financements participatifs et les subventions.
                                    </p>
                                    <p>
                                        LAJOY accompagne ses clients dans la valorisation de leur entreprise en apportant de l’ingénierie financière couplé à de la stratégie d’affaire.
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
                                <div class="col-md-10 mt-1">
                                    <p>
                                        <ul>
                                            <li>
                                                Établir un plan d'affaires solide : avant de chercher du financement, il est important d'avoir un plan d'affaires solide qui détaille votre modèle économique, votre stratégie de marketing, votre plan de développement et votre plan financier. Un plan d'affaires bien écrit peut vous aider à convaincre les investisseurs de votre potentiel de croissance.
                                            </li>
                                            <li>
                                                Identifier les sources de financement possibles : il existe de nombreuses sources de financement disponibles pour les entreprises, chacune avec ses propres avantages et inconvénients. Il est important de faire des recherches pour trouver les sources de financement qui conviennent le mieux à votre entreprise.
                                            </li>
                                            <li>
                                                Préparer votre demande de financement : une fois que vous avez identifié les sources de financement possibles, vous devrez préparer votre demande de financement en fournissant les informations et les documents nécessaires. Cela peut inclure votre plan d'affaires, votre état financier, votre historique de crédit et votre pitch d'investissement.
                                            </li>
                                            <li>
                                                Négocier les termes du financement : une fois que vous avez obtenu une offre de financement, il est important de négocier les termes du financement de manière à obtenir les meilleures conditions possibles pour votre entreprise.
                                            </li>
                                            <li>
                                                Garder une bonne gestion financière : une fois que vous avez obtenu le financement dont vous avez besoin, il est important de veiller à une gestion financière saine pour assurer la viabilité à long terme de votre entreprise. Cela inclut la gestion de votre trésorerie, la tenue de comptes précis et la création de budgets et de prévisions financières à jour.
                                            </li>
                                        </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- end of 4th section --}}
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
