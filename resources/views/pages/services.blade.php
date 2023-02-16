

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
                @if ( $slug == 'Conseil-sur-l-analyse-marketing')
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Conseil</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                LAJOY s’assure à améliorer la présence et la performance sur le marché de ses clients. Les services de consultation de LAJOY peuvent aider une entreprise à développer une stratégie de marketing efficace, à établir une marque forte et à atteindre ses objectifs de vente et de croissance.
                            </p>
                            <p>
                                Grâce au service conseil en marketing de LAJOY, nous aidons nos clients à :
                                <ol>
                                    <li>
                                        Développer la stratégie marketing : les services de consultation en marketing peuvent aider une entreprise à définir ses objectifs de marketing, à cibler ses clients potentiels et à mettre en place une stratégie pour atteindre ces objectifs.
                                    </li>
                                    <li>
                                        Créer du contenu : les services de consultation en marketing peuvent aider une entreprise à développer du contenu de qualité pour ses campagnes de marketing, qu'il s'agisse de contenu écrit, vidéo ou audio.
                                    </li>
                                    <li>
                                        Gérer les réseaux sociaux : les services de consultation en marketing peuvent aider une entreprise à développer une présence sur les réseaux sociaux, à publier du contenu et à interagir avec les followers.
                                    </li>
                                    <li>
                                        Faire de la publicité en ligne : les services de consultation en marketing peuvent aider une entreprise à mettre en place une campagne publicitaire en ligne, à choisir les bons mots-clés et à cibler les bonnes audiences.
                                    </li>
                                    <li>
                                        Analyser des données : les services de consultation en marketing peuvent aider une entreprise à suivre et à analyser les données de ses campagnes de marketing pour en extraire des insights utiles et optimiser ses efforts
                                    </li>
                                </ol>
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
                @endif
                @if ( $slug == 'Conseil-pour-optimiser-l-experience')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    L'expérience client désigne l'ensemble des interactions et des échanges que les clients ont avec une entreprise, à chaque étape de leur parcours avec cette entreprise. Cela peut inclure la découverte de l'entreprise et de ses produits ou services, l'achat, l'utilisation et la maintenance des produits ou services, ainsi que le service à la clientèle et les retours.
                                </p>
                                <p>
                                    L'expérience client est importante car elle peut avoir un impact sur la satisfaction des clients, leur fidélité à l'entreprise et leur intention de recommander l'entreprise à d'autres personnes. Une expérience client positive peut aider à fidéliser les clients et à générer de la croissance pour l'entreprise.
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
                                    Il y a plusieurs éléments qui peuvent influencer l'expérience client, tels que la qualité des produits ou services offerts, la facilité d'utilisation, la qualité du service à la clientèle, la rapidité de traitement des demandes, la qualité de l'expérience en ligne et la facilité d'accès aux informations.
                                </p>
                                <p>
                                    Il est important pour une entreprise de comprendre les attentes et les besoins de ses clients et de mettre en place des stratégies pour améliorer l'expérience client à chaque étape de leur parcours. Cela peut inclure la collecte de données sur les clients, l'analyse de ces données et la mise en place de solutions pour améliorer l'expérience client.
                                </p>
                                <p>
                                    Une transformation digitale réussite, est une transformation qui met au cœur l’expérience client dans son parcours digital. Au-delà des spécifications techniques établies dans un cahier de charge technique, LAJOY vous accompagne dans la mise en place des cahiers de charge fonctionnels qui feront de votre plateforme digitale, un outil performant où les clients
                                    pourront avoir une expérience unique en fonction de votre domaine d’activité.
                                </p>
                                <p>
                                    Grâce à notre approche axée sur l’expérience, nous aidons nos clients à :
                                    <ol>
                                        <li>
                                            Améliorer la Satisfaction et la fidélisation des clients : lorsque les clients vivent une expérience positive avec votre entreprise, ils sont plus enclins à être satisfaits et à rester fidèles.
                                        </li>
                                        <li>
                                            Accroître l’image de marque positive : une expérience client de qualité peut contribuer à renforcer l'image de votre marque et à vous démarquer de vos concurrents.
                                        </li>
                                        <li>
                                            Augmenter les ventes et le chiffre d'affaires : une expérience client positive peut inciter les clients à acheter davantage et à recommander votre entreprise à leur entourage.
                                        </li>
                                        <li>
                                            Réduire les coûts de service client : un parcours client bien conçu et efficace peut réduire le temps et les coûts liés à la gestion des demandes et des réclamations des clients.
                                        </li>
                                        <li>
                                            Améliorer la rentabilité : en combinant une augmentation des ventes et une réduction des coûts de service client, un parcours client bien maîtrisé peut contribuer à améliorer la rentabilité de votre entreprise.
                                        </li>
                                        <li>
                                            Améliorer la qualité de service : un parcours client bien maîtrisé peut permettre de délivrer un service de qualité, en répondant rapidement et efficacement aux demandes et aux besoins des clients.
                                        </li>
                                    </ol>
                                </p>
                            </div>
                        </div>

                    </div>
                @endif
                @if ( $slug == 'Conseil-en-analyses-des-donnees')
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
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    L’objectif de LAJOY est d’aider ses clients à transformer leurs entreprises en des organisations intelligentes tournées vers le réel où la prise de décisions fondée sur des faits est assimilée dans les activités quotidiennes du personnel terrain jusqu’au membre du conseil d’administration, ce qui permet une meilleure valorisation de l’entreprise.
                                </p>
                                <p>
                                    La mise en place des dernières avancées technologies qui permettent une analyse en temps réel des données du marché au sein des organisations donne un avantage concurrentiel en accompagnant les prises de décisions faites quotidiennement.
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <p>
                                    LAJOY accompagne les entreprises à prendre des décisions sur des faits. En adaptant la collecte de l’information en fonction de l’environnement réel et des objectifs précis des entreprises, nous vous aidons à identifier les critères de performance dans le parcours client, dans la politique RH de l’entreprise, dans le marketing ou dans d’autres fonctions prioritaires de l’entreprise.
                                </p>
                                <p>
                                    Grâce au service de conseil en analyse des données de LAJOY, vous pouvez :
                                    <ul>
                                        <li>
                                            Améliorer de la prise de décision : l'analyse des données permet d'obtenir une meilleure compréhension de la situation de l'entreprise et de ses clients, ce qui peut aider à prendre des décisions plus éclairées.
                                        </li>
                                        <li>
                                            Optimiser des opérations : l'analyse des données peut aider à identifier les processus de travail inefficaces et à mettre en place des solutions pour les optimiser.
                                        </li>
                                        <li>
                                            Améliorer de la rentabilité : l'analyse des données peut aider à identifier les opportunités de croissance et à cibler les investissements les plus rentables.
                                        </li>
                                        <li>
                                            Gestion des risques : l'analyse des données peut aider à identifier les risques potentiels et à mettre en place des stratégies pour les gérer.
                                        </li>
                                        <li>
                                            Créer de nouvelles opportunités : l'analyse des données peut révéler de nouvelles opportunités de développement pour l'entreprise, comme de nouveaux marchés ou de nouveaux produits ou services.
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
                @if ( $slug == 'Conseil-pour-la-transformation-numérique-d-une-entreprise')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY accompagne ses clients dans leur transformation numérique.  Cette transformation peut concerner de nombreux aspects de l'entreprise, comme la communication, les processus internes, la chaîne de production, les ventes, le service client, etc. Voici quelques exemples de domaines où la transformation numérique peut avoir un impact :
                                    <ul>
                                        <li>
                                            Communication et marketing : utilisation de réseaux sociaux, de sites web et de logiciels de marketing automation pour communiquer et promouvoir l'entreprise.
                                        </li>
                                        <li>
                                            Processus internes : utilisation de logiciels de gestion de projet, de gestion de la relation client et de gestion de la chaîne logistique pour optimiser les opérations de l'entreprise.
                                        </li>
                                        <li>
                                            Chaîne de production : utilisation de technologies de l'Internet des objets (IoT) et de l'analyse de données pour améliorer la productivité et la qualité de la production.
                                        </li>
                                        <li>
                                            Ventes : utilisation de sites de e-commerce et de logiciels de gestion des ventes pour accélérer et simplifier les processus de vente.
                                        </li>
                                        <li>
                                            Service client : utilisation de chatbots et de logiciels de gestion des demandes pour améliorer la réactivité et la qualité du service client.
                                        </li>

                                    </ul>
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
                                    Pour optimiser cette transformation, LAJOY relie toujours efficacité et coût en fonction de l’environnement de ses clients. Nous aidons nos clients à évoluer rapidement de manière à saisir les opportunités de la transformation numérique et à atténuer les risques qui s’y réfère.
                                </p>
                                <p>
                                    Grâce au service de conseil en transformation numérique de LAJOY, vous pouvez :
                                    <ul>
                                        <li>
                                            Améliorer la productivité : en automatisant certaines tâches et en utilisant des outils de gestion et d'analyse de données, une entreprise peut augmenter sa productivité et réduire ses coûts de main-d'œuvre.
                                        </li>
                                        <li>
                                            Accroître la qualité et fiabilité : l'utilisation de technologies numériques peut permettre d'améliorer la qualité et la fiabilité de la production et de la prestation de services.
                                        </li>
                                        <li>
                                            Accroître la flexibilité et l’agilité : la transformation numérique peut rendre une entreprise plus flexible et agile, en lui permettant de s'adapter rapidement aux changements de marché et aux besoins de ses clients.
                                        </li>
                                        <li>
                                            Apporter une meilleure collaboration et communication : les outils numériques peuvent faciliter la communication et la collaboration au sein de l'entreprise et avec ses partenaires.
                                        </li>
                                        <li>
                                            Améliorer l'expérience client : la transformation numérique peut permettre d'offrir une expérience client plus fluide et personnalisée, grâce à l'utilisation de chatbots, de sites de e-commerce et de logiciels de gestion de la relation client.
                                        </li>
                                        <li>
                                            Gagner en compétitivité : en utilisant les technologies numériques de manière stratégique, une entreprise peut se différencier de ses concurrents et gagner en compétitivité sur le marché.
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>


                    </div>
                @endif
                @if ( $slug == 'Conseil-pour-la-mise-en-place-de-la-stratégie-de-déploiement-commercial')
                    <div class="row align-items-center">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="p-title">Conseil</span><br>
                                <h2>{{$sujet}}</h2>
                                <p>
                                    LAJOY accompagne ses clients dans la mise en place de stratégies de ventes pour conquérir de nouveaux marchés. La touche de LAJOY peut concerner différents aspects de la vente, comme la sélection de produits ou de services à commercialiser, la définition des canaux de distribution, la détermination des prix, la mise en place de campagnes de marketing, etc.
                                </p>
                                <p>
                                    Voici quelques éléments pris en compte par les experts de LAJOY pour élaborer une stratégie de déploiement commercial efficace :
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
                                    <ul>
                                        <li>
                                            Connaître ses clients et ses concurrents : avant de définir sa stratégie de déploiement commercial, il est essentiel de connaître ses clients cibles, leurs besoins et leurs attentes, ainsi que les produits ou services proposés par ses concurrents.
                                        </li>
                                        <li>
                                            Sélectionner les produits ou services à commercialiser : il est important de sélectionner les produits ou services qui répondent le mieux aux besoins de ses clients et qui sont différenciants par rapport à ceux de ses concurrents.
                                        </li>
                                        <li>
                                            Définir les canaux de distribution : il faut choisir les canaux de distribution les plus appropriés pour atteindre ses clients cibles. Ces canaux peuvent être des points de vente physiques, des sites de e-commerce, des revendeurs, etc.
                                        </li>
                                        <li>
                                            Déterminer les prix : il est important de définir des prix qui soient attractifs pour les clients, mais qui permettent également à l'entreprise de dégager une marge suffisante pour couvrir ses coûts et réaliser un profit.
                                        </li>
                                        <li>
                                            Mettre en place une stratégie de marketing : pour promouvoir ses produits ou services et attirer de nouveaux clients, il est important de mettre en place une stratégie de marketing adaptée. Cela peut inclure la publicité, le content marketing, la participation à des salons professionnels, etc.
                                        </li>
                                        <li>
                                            Suivre et mesurer ses résultats : il est important de suivre et de mesurer les résultats de sa stratégie de déploiement commercial pour savoir ce qui fonctionne et ce qui peut être amélioré. Des indicateurs de performance comme le taux de conversion, le taux de satisfaction des clients ou encore le chiffre d'affaires peuvent être utilisés à cet effet.
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif


            {{-- MENU SECTION 2 ITEMS RESOURCES - Stratégie d'affaire --}}
                @if ( $slug == 'Conseil-en-stratégie-d-entreprise-et-de-croissance')
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

                @if ( $slug == 'Conseil-en-stratégie-de-restructuration')
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
                @if ( $slug == 'conseil-en-gestion-et-expérience-du-changement')
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
                
                @if ( $slug == 'Conseil-sur-la-gestion-de-l-impact-des-transformations-organisationnelles-sur-les-rh')
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
              
                @if ( $slug == 'Conseil-pour-la-mise-en-place-de-programmes-de-reconnaissance-et-de-récompenses')
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

                    @if ( $slug == 'Conseil-en-fusion-et-acquisitions')
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

                    @if ( $slug == 'Conseil-en-financement')
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
                            <img src="{{asset('images/services/1.jpg')}}" alt="" class="img-responsive" />
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
                            <img src="{{asset('images/services/2.jpg')}}" alt="" class="img-responsive" />
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
                            <img src="{{asset('images/services/3.jpg')}}" alt="" class="img-responsive" />
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
