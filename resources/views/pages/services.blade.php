

@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#000000">
            <!-- <img src="images/background/subheader3.jpg" class="jarallax-img" alt=""> -->
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>

                            <div class="col-md-5 mb-sm-30 text-lg-center text-sm-center mx-auto my-aut"  data-bgcolor="#ffb000">
                                <h2 class="no-bottom">{{$sujet}}</h2>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                @if ($slug=="visa-d-etude")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                DGA International propose un service d'assistance à l'obtention du permis d'étude pour les étudiants étrangers qui souhaitent étudier au Canada. En partenariat des avocats accrédités en immigration au Canada, DGA International vous accompagne dans le montage de la demande et vous donne accès à des conseils juridiques par l’entremise de son équipe d’avocats.
                            </p>
                            <p class="text-justify">
                                Avec une expérience de 15 ans dans le domaine, nos partenaires sont là pour vous guider à travers les formalités administratives liées à l'obtention du permis d'étude, afin que vous puissiez vous concentrer sur votre parcours d'études et profiter de votre expérience canadienne.
                            </p>
                            <ul class="ul-style-2">
                                <li>Demande d’équivalence
                                </li>
                                <li>
                                    Demande d’admission et inscription universitaire
                                </li>
                                <li>
                                    Service conseil
                                </li>
                                <li>
                                    Orientation académique
                                </li>
                                <li>
                                    Visite d’universités
                                </li>
                                <li>
                                    Et plus encore
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                               <img class="di-big img-fluid" src="{{asset('images/services/DGA9.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <blockquote>
                            <h5>
                                Selon le palmarès universitaire mondial, le Canada compte aussi 4 des 100 meilleures villes universitaires au monde.
                            </h5>
                        </blockquote>
                        <blockquote>
                            <h5>
                                Les étudiants canadiens comme les étudiants internationaux jouissent d’un niveau de vie élevé  et ont les mêmes droits et libertés que tous les canadiens.
                            </h5>
                        </blockquote>
                    </div>
                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                        onclick="window.location.href='https://dgainternational.ca/formulaire-preliminaire';">

                    <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h4 class="no-bottom">Inscription en ligne, veuillez remplir le formulaire !</h4>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('formulaire-preliminaire')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="visa-de-travail")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                L’équipe de DGA International offre un service d’assistance professionnel et personnalisé aux travailleurs étrangers qui souhaitent obtenir permis de travail et un emploi au Canada.  En partenariat avec une équipe d’avocats accrédités en immigration au Canada, DGA offre un accompagnement complet pour toutes démarches administratives et juridiques permettant l'obtention du permis de travail auprès des autorités canadiennes compétentes.
                            </p>
                            <p class="text-justify">
                                Avec une expérience de 20 ans dans le domaine, notre offre de service est complète, de qualité et adaptée à votre situation personnelle et professionnelle. Non seulement nous vous assistons pour l’obtention du permis de travail, mais grâce à notre équipe spécialisée en ressources humaines et en recrutement, nous vous guidons et vous conseillons sur toutes les conditions et opportunités d’emploi au Canada.
                            </p>
                            <p>
                                <ul class="ul-style-2">
                                    <li>
                                        Service conseil
                                    </li>
                                    <li>
                                        Assistance juridique et administrative
                                    </li>
                                    <li>
                                        Assistance pour la recherche d’emploi
                                    </li>
                                    <li>
                                        Et plus encore
                                    </li>
                                </ul>

                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/DGA2.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <blockquote>
                            <h4>
                                Les résidents temporaires et permanents sont en mesure de répondre aux besoins particuliers du marché du travail au Canada et représentent des proportions relativement élevées de la main-d’œuvre dans certains secteurs industriels.
                                À l’avenir, il faudra plus de résidents temporaires et permanents pour combler les pénuries de main-d’œuvre et contribuer à la prospérité économique du Canada.
                            </h4>
                        </blockquote>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne, veuillez remplir le formulaire!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('formulaire-preliminaire')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="visa-tourisme")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                Chez DGA International, nous comprenons que le processus pour déposer une demande de visa de visiteur peut être complexe et fastidieux. C'est pourquoi, grâce à nos nombreuses années d’expérience dans le domaine, nous vous procurons un service d'assistance complet pour faciliter vos démarches d'obtention du visa. En collaboration avec notre équipe d’avocats accrédités en immigration au Canada, nous vous offrons un accompagnement personnalisé pour vous aider à obtenir votre visa de manière efficace et dans les meilleurs délais.
                            </p>
                            <p class="text-justify">
                                Nous sommes là pour vous guider tout au long du processus et pour répondre à toutes vos questions.
                            </p>

                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/flag.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 text-justify">
                            Que vous ayez besoin d'un visa pour un voyage d'affaires ou de loisir, notre service d'aide pour l'obtention du visa de visiteur est un indispensable pour vous aider à obtenir votre visa dans les délais impartis.
                            <ul class="ul-style-2">
                                <li>
                                    Séance de consultation
                                </li>
                                <li>
                                    Service conseil
                                </li>
                                <li>
                                    Service d’assistance pour compléter la demande
                                </li>
                                <li>
                                    Assistance juridique et administrative
                                </li>
                                <li>
                                    Et plus encore
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">

                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne, veuillez remplir le formulaire!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('formulaire-sejour')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="immigration-pour-entreprise")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                DGA International propose un service dédié à assister les entrepreneurs étrangers dans leurs démarches d'immigration en offrant un accompagnement complet et ciblé. Notre approche se concentre sur la facilitation du processus en guidant nos clients dans le remplissage des formulaires, la sélection d'un cabinet d'immigration qualifié et en assurant un suivi attentif auprès d’eux pour un traitement personnalisé.
                            </p>
                            <p class="text-justify">
                                En collaboration avec une équipe expérimentée d'avocats spécialisés en immigration et de conseillers d'affaires au Canada, nous mettons à votre disposition une assistance complète pour toutes les étapes administratives, légales et juridiques nécessaires pour déposer une demande au programme d'immigration d'affaires.
                            </p>

                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/DGA5.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                        onclick="window.location.href='https://dgainternational.ca/nous-contacter';">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom"> Contactez-nous dès aujourd'hui | nous sommes disponible pour vous aider.</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('nous-contacter')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="service-de-Background-check")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                Chez DGA International, la transparence, l’exactitude et la vérification des données et des antécédents de nos clients est notre priorité absolue. C’est pourquoi nous offrons un service de vérification des antécédents pour tous nos clients qui souhaitent entreprendre un voyage vers le Canada. Ce service est une valeur ajoutée permettant aux différentes autorités traitant les demandes d’immigration de valider l’exactitude des renseignements des candidats en matière de sécurité et d’application de la loi pour mener des vérifications rigoureuses.
                            </p>
                            <p class="text-justify">
                                Ce service s’adresse aussi aux entreprises canadiennes comme des cabinets de recrutement, des cabinets d’immigration qui cherchent à confirmer les informations de leurs clients ou partenaires. DGA International propose une solution de vérification de documents et d’informations en mettant en œuvre un processus de validation auprès d’organismes administratifs, institutionnels et privés. Notre objectif est de garantir la fiabilité des données transmises et de vous fournir des informations fiables pour une prise de décision.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/DGA3.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                        onclick="window.location.href='https://dgainternational.ca/nous-contacter';">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom"> Contactez-nous dès aujourd'hui | nous sommes disponible pour vous aider.</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('formulaire-background-check')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="mission-economique")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                En tant qu’entreprise de conciergerie d’affaires de renommée mondiale, DGA International s’engage à offrir des services professionnels de haut calibre pour les entreprises africaines cherchant à développer leur réseau commercial au Canada. Nous mettons en place des missions économiques sur mesure pour nos clients, comprenant des conférences, des ateliers de discussion, des rencontres de réseautage et des séances privatives avec des partenaires potentiels de notre vaste réseau d’entreprises canadiennes de haut niveau. Nous sommes fiers de travailler avec des entreprises africaines pour favoriser le développement de relations commerciales mutuellement bénéfiques avec le Canada. Notre engagement envers l’excellence et la satisfaction de nos clients fait de nous le choix idéal pour toutes les entreprises africaines cherchant à étendre leur portée commerciale à l’échelle internationale.
                            </p>

                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/mission-eco.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <a href="{{url('formulaire-mission-economique')}}">
                                <div class="row align-items-center">
                                    <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                        <h3 class="no-bottom">Inscription en ligne | remplissez le formulaire pour une prochaine mission</h3>
                                    </div>
                                    <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                        <a href="{{url('formulaire-mission-economique')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </section>


                @elseif($slug=="investissement-immobilier")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Notre équipe d’experts immobilier accrédités est dédié à l’accompagnement d’investisseurs étrangers désirant faire l’acquisition de biens immobiliers au Canada.
                            </p>
                            <p>
                                Établi comme le partenaire de confiance par excellence des entrepreneurs et des investisseurs étrangers désirant diversifier leur portefeuille et acquérir un profil international; nos services permettent à nos clients de faire fructifier leurs avoirs de manière sûre et en toute tranquillité d’esprit.
                            </p>
                            <p>
                                DGA International vous offre des services entièrement intégrés incluant l’acquisition d’un bien immobilier, le financement, la gestion locative, la gestion des risques, la planification fiscale et financière dans le cadre des lois canadiennes d’investissement immobilier.

                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/RX3.jpg')}}" alt="" />

                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            Ainsi, nous offrons une prise en charge complète avec plusieurs approches novatrices et centrées sur les besoins spécifiques de notre clientèle.
                            <br>
                            Au cours des 10 dernières années, notre équipe à permis à une multitude d’investisseurs de bénéficier du programme de financement et d’investissement pour les investisseurs étrangers offrant une multitude d’avantage au même titre qu’un investisseur canadien.
                            <ul class="ul-style-2">
                                <li>
                                    Représentation locale
                                </li>
                                <li>
                                    Présentation d’opportunités d’investissements
                                </li>
                                <li>
                                    Accompagnement au niveau transactionnel
                                </li>
                                <li>
                                    Gestion administrative et financière de biens immobiliers
                                </li>
                                <li>
                                    Fiscalité immobilière et internationale
                                </li>
                                <li>
                                    Programme immigrant-investisseur (en partenariat)
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <ul class="ul-style-2 mt-3">

                                <li>
                                    Solution de protection d’actifs Optimisation du crédit
                                </li>
                                <li>
                                    Analyse de rentabilités d’immeubles et potentiel d’investissement Conseils en matière de structures corporatives de détention
                                </li>
                                <li>
                                    Consultation en gestion de risques
                                </li>
                                <li>
                                    Financement immobilier
                                </li>
                                <li>
                                    Structure financière de partenariats entre investisseurs
                                </li>

                                <li>
                                    Gestion immobilière courante
                                </li>
                                <li>
                                    Gestion de projets dans le cadre d’optimisations et de travaux sur l’immeuble
                                </li>
                                <li>
                                    Programme d’entretien et de gestion opérationnelle d’immeubles
                                </li>

                            </ul>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                        onclick="window.location.href='https://dgainternational.ca/nous-contacter';">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom"> Contactez-nous dès aujourd'hui | nous sommes disponible pour vous aider.</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('nous-contacter')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="organisation-de-mission-economique")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Depuis plusieurs années, l’équipe de DGA International organise des missions économiques pour les entreprises désireuses d’explorer de nouvelles opportunités d’affaires en Côte d’Ivoire.
                            </p>
                            <p>
                                Nous travaillons en étroite collaboration avec les entrepreneurs et chef d’entreprise pour comprendre leurs besoins et leurs d’affaires, pour ensuite planifier la mission en conséquence et sur mesure.
                            </p>
                            <p>
                                Notre équipe d’experts locaux est là pour vous accompagner tout au long de votre mission économique en Côte d’Ivoire et vous donnera de précieux conseils sur les différentes dynamiques du marché local.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/mission-eco.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            Nous nous occupons de tous les détails logistiques de votre pour que vous puissiez vous concentrer sur l’essentiel, à savoir concrétiser de nouvelles opportunités d’affaires.
                            <br>
                            Nos services de conciergerie d’affaires couvrent tous les aspects de l’organisation de votre voyage d’affaires :
                            <ul class="ul-style-2">
                                <li>
                                    Demande de visa
                                </li>
                                <li>
                                    Réservation de vol
                                </li>
                                <li>
                                    Transfert et transport privé
                                </li>
                                <li>
                                    Réservation d’hôtel
                                </li>
                                <li>
                                    Gestion de votre agenda
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="ul-style-2 mt-4">
                                <li>
                                    Planification des rencontres d’affaires avec des partenaires locaux
                                </li>
                                <li>
                                    Présentation d’opportunités d’affaires
                                </li>
                                <li>
                                    Visite d’entreprises
                                </li>
                                <li>
                                    Et plus encore
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    En optant pour notre service d’organisation de missions économiques, vous bénéficierez d’une approche personnalisée et adaptée à vos besoins, ainsi que d’un réseau de contacts locaux bien établi pour vous aider à réussir sur le marché ivoirien.
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscrivez-vous pour la prochaine mission économique vers la Côte d’Ivoire</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('formulaire-mission-economique')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="assistance-création-d-entreprise")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Vous désirez créer une entreprise en Côte d’Ivoire? Si c’est le cas, vous pourrez être confronté à de nombreuses formalités administratives et juridiques. En effet établir une société dans un nouveau pays peut s’avérer complexe et fastidieux pour tout entrepreneur étranger qui n’est pas familier aux normes et législations locales.
                            </p>
                            <p>
                                C’est pourquoi DGA International vous offre un service d’assistance pour la création d’une entreprise en Côte d’Ivoire, y compris les formalités administratives et juridiques. Grâce à notre équipe d’experts, nous pouvons vous guider tout au long du processus en veillant à ce que toutes les exigences légales soient respectées.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/DGA15.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            Pendant que vous vous concentrez sur le développement de votre entreprise et nous nous occupons de toutes les autres formalités.
                            <br>
                            Avec notre aide, votre entreprise aura du succès sur le marché ivoirien.
                        </div>
                        <div class="col-lg-6">
                            <ul class="ul-style-2">
                                <li>
                                    Service conseil
                                </li>
                                <li>
                                    Assistance juridique et administrative
                                </li>
                                <li>
                                    Assistance pour l’enregistrement d’une entreprise
                                </li>
                                <li>
                                    Mise en relation avec des partenaires locaux
                                </li>
                                <li>
                                    Et plus encore
                                </li>
                            </ul>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                    onclick="window.location.href='https://dgainternational.ca/nous-contacter';">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                <h3 class="no-bottom"> Contactez-nous dès aujourd'hui | nous sommes disponible pour vous aider.</h3>
                            </div>
                            <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                <a href="{{url('nous-contacter')}}" class="btn-custom btn-black light">Suivre le lien</a>
                            </div>
                        </div>
                    </div>
                </section>
                @elseif($slug=="service-assistance-installation")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                DGA International vous permet d’avoir l’esprit tranquille dans votre processus d’installation en Côte d’Ivoire en vous offrant un service d’accompagnement complet et sur mesure.
                            </p>
                            <p>
                                Nous facilitons votre installation et votre transition vers un nouveau pays en vous donnant tout le support nécessaire pour cette nouvelle étape importante de votre vie.
                            </p>
                            <p>
                                Notre équipe d'experts vous accompagne de A à Z, en passant par la recherche d’un logement, les visites, la négociation des différents contrats, ainsi que la mise en place des services de base tels que l’électricité, l’eau, l’internet et le service de téléphonie.
                            </p>
                            <p>
                                Notre objectif ultime est de faciliter au maximum votre transition en Côte d’Ivoire en vous permettant d’avoir accès rapidement aux services essentiels à votre vie quotidienne. Que ce soit la recherche d’une école pour vos enfants, le recrutement de personnel de maison, nous sommes là pour vous!
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/DGA1.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                        onclick="window.location.href='https://dgainternational.ca/nous-contacter';">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom"> Contactez-nous dès aujourd'hui | nous sommes disponible pour vous aider.</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('nous-contacter')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="service-tourisme-decouverte")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p class="text-justify">
                                Ce service offre des opportunités de tourisme et de découverte dans le pays, y compris l’organisation de circuits de visites personnalisées et l’aide aux réservations de voyages et d’hébergements. Il permet aux individus de découvrir le riche patrimoine culturel et la beauté naturelle de la Côte d’Ivoire, tout en assurant leur sécurité et leur confort pendant leur séjour. Notre équipe peut fournir des recommandations d’activités et d’attractions en fonction des préférences individuelles, assurant une expérience unique et mémorable.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/services/plage-transformed.jpeg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light sectionCliquable"
                    onclick="window.location.href='https://dgainternational.ca/nous-contacter';">
                    <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Contactez-nous dès aujourd'hui | nous sommes disponible pour vous aider.</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="{{url('nous-contacter')}}" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

            </div>
        </section>


        <section data-bgcolor="#111111" class="text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-lg-7">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>
                            Notre Expérience<br>Notre Expertise
                        </h2>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>
                                    Notre clientèle cible comprend des entreprises et des particuliers qui cherchent à s’installer au Canada et en Côte d’Ivoire. Nous comprenons que la navigation dans de nouveaux environnements peut être difficile et nous nous engageons à offrir un soutien émotionnel et pratique à nos clients. Nous offrons une approche personnalisée à chaque client, en nous adaptant à leurs besoins spécifiques et en leur offrant des solutions innovantes.
                                </p>
                                <p>
                                    Notre méthode de travail est fondée sur une communication ouverte et transparente
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="jarallax image-container col-md-6 pull-right">
                <img src="{{asset("images/background/bel.JPEG")}}" class="jarallax-img" alt="">
            </div>
        </section>

        <section id="section-text" data-bgcolor="#111111" class="text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                        <div class="de_count ultra-big s2 text-center">
                            <h3 class="timer id-color" data-to="15" data-speed="1000">15</h3>
                            <span class="id-color">Années d'Expérience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <h2>DGA International est votre Meilleur Partenaire</h2>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                        <p>
                            DGA International est votre partenaire de confiance pour tous vos besoins en matière de conciergerie.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
