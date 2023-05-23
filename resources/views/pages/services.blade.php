

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
                @if ($slug=="visa-d-etude")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                DGA International propose un service d'assistance à l'obtention du permis d'étude pour les étudiants étrangers qui souhaitent étudier au Canada. En partenariat des avocats accrédités en immigration au Canada, DGA International vous accompagne dans le montage de la demande et vous donne accès à des conseils juridiques par l’entremise de son équipe d’avocats.
                            </p>
                            <p>
                                Avec une expérience de 20 ans dans le domaine, notre équipe de professionnels est là pour vous guider à travers les formalités administratives liées à l'obtention du permis d'étude, afin que vous puissiez vous concentrer sur votre parcours d'études et profiter de votre expérience canadienne.
                            </p>
                            <ul>
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
                               <img class="di-big img-fluid" src="{{asset('images/background/visa.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <blockquote>
                            Selon le palmarès universitaire mondial, le Canada compte aussi 4 des 100 meilleures villes universitaires au monde.
                        </blockquote>
                        <blockquote>
                            Les étudiants canadiens comme les étudiants internationaux jouissent d’un niveau de vie élevé  et ont les mêmes droits et libertés que tous les canadiens.
                        </blockquote>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | Remplissez le formulaire!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="visa-de-travail")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Le service de DGA pour l'aide à l'obtention du permis de travail consiste à fournir une assistance professionnelle aux travailleurs étrangers qui souhaitent travailler légalement au Canada. Cette assistance comprend l'accompagnement dans les démarches administratives et juridiques pour l'obtention du permis de travail auprès des autorités canadiennes compétentes.
                            </p>
                            <p>
                                DGA travaille avec des avocats accrédités en immigration au Canada pour offrir un service complet et de qualité à ses clients. Les avocats de DGA peuvent aider les travailleurs étrangers à déterminer le type de permis de travail approprié pour eux en fonction de leur situation personnelle et professionnelle.
                            </p>
                            <p>
                                Ensuite, DGA assiste les travailleurs étrangers dans la préparation de leur demande de permis de travail, en s'assurant que toutes les informations et documents requis sont complets et en ordre. DGA peut également fournir des conseils sur les options d'emploi disponibles au Canada et sur les conditions de travail dans ce pays.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/visa.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="visa-tourisme")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Chez DGA International, nous comprenons que le processus de demande de visa peut être complexe et fastidieux, c'est pourquoi nous offrons un service d'aide pour l'obtention du visa touristique. En collaboration avec des avocats accrédités, nous sommes en mesure de fournir une assistance personnalisée à nos clients pour les aider à obtenir leur visa de manière efficace et rapide.                            </p>
                            <p>
                                Notre équipe de professionnels expérimentés est à votre disposition pour vous aider à rassembler la documentation nécessaire, à remplir les formulaires de demande de visa et à suivre l'avancement de votre dossier. Nous sommes là pour répondre à toutes vos questions et vous guider tout au long du processus.
                            </p>
                            <p>
                                Que vous ayez besoin d'un visa pour un voyage d'affaires ou de loisirs, notre service d'aide pour l'obtention du visa touristique peut vous aider à obtenir votre visa dans les délais impartis. Contactez-nous dès aujourd'hui pour discuter de vos besoins et de la manière dont nous pouvons vous aider à obtenir votre visa touristique.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/visa.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="immigration-pour-entreprise")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                DGA accompagne les entreprises africaines dans ces programmes de développement et d’implantation au Canada en offrant des services d’accompagnement personnalisés. Notre équipe, composée d’avocats accrédités en immigration et de conseillers d’affaires, travaille en étroite collaboration avec les entreprises pour les aider à naviguer dans les procédures administratives complexes associées aux programmes de démarrage d’entreprise et d’entrepreneurs au Québec et en Colombie-Britannique. Nous offrons un soutien complet dans toutes les étapes du processus d’immigration, y compris la préparation de la documentation, les entretiens avec les représentants gouvernementaux et les conseils sur les stratégies de financement et d’investissement. Avec notre expertise et notre connaissance approfondie du marché canadien, nous sommes en mesure de fournir un service d’accompagnement professionnel et efficace pour aider les entreprises africaines à réussir leur implantation au Canada.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/immigration.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="service-de-Background-check")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Chez DGA International, la sécurité de nos clients est notre priorité absolue. C'est pourquoi nous offrons un service de Back Ground Check pour tous nos clients particuliers ou d'affaires qui souhaitent entreprendre un voyage vers le Canada. Ce service de vérification approfondie des antécédents peut être également offert aux entreprises canadiennes de recrutement et aux cabinets en immigration canadiens qui nous mandatent, afin de valider les informations fournies par leurs clients et assurer la sécurité de tous les intervenants.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/background-check.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="mission-economique")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                En tant qu’entreprise de conciergerie d’affaires de renommée mondiale, DGA International s’engage à offrir des services professionnels de haut calibre pour les entreprises africaines cherchant à développer leur réseau commercial au Canada. Nous mettons en place des missions économiques sur mesure pour nos clients, comprenant des conférences, des ateliers de discussion, des rencontres de réseautage et des séances privatives avec des partenaires potentiels de notre vaste réseau d’entreprises canadiennes de haut niveau. Nous sommes fiers de travailler avec des entreprises africaines pour favoriser le développement de relations commerciales mutuellement bénéfiques avec le Canada. Notre engagement envers l’excellence et la satisfaction de nos clients fait de nous le choix idéal pour toutes les entreprises africaines cherchant à étendre leur portée commerciale à l’échelle internationale.
                            </p>

                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/mission-eco.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>

                @elseif($slug=="assistance")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                En tant qu’entreprise de conciergerie d’affaires de renommée mondiale, DGA International s’engage à offrir des services professionnels de haut calibre pour les entreprises africaines cherchant à développer leur réseau commercial au Canada. Nous mettons en place des missions économiques sur mesure pour nos clients, comprenant des conférences, des ateliers de discussion, des rencontres de réseautage et des séances privatives avec des partenaires potentiels de notre vaste réseau d’entreprises canadiennes de haut niveau. Nous sommes fiers de travailler avec des entreprises africaines pour favoriser le développement de relations commerciales mutuellement bénéfiques avec le Canada. Notre engagement envers l’excellence et la satisfaction de nos clients fait de nous le choix idéal pour toutes les entreprises africaines cherchant à étendre leur portée commerciale à l’échelle internationale.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/assistance-et-gestion.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="investissement-immobilier")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                La filiale de DGA Internationale, DGA Financement Commercial, est spécialisée dans l’accompagnement des entreprises et particuliers dans le processus de financement pour l’investissement immobilier au Canada. Nous avons une équipe d’experts en immobilier qui analyseront vos besoins pour vous proposer une offre personnalisée et adaptée. En signant un mandat de recherche encadré par les lois canadiennes, nos experts vous mettront en contact avec les banques canadiennes qui sont les seules au monde à financer les investisseurs étrangers pour l’achat d’un bien immobilier au Canada.
                            </p>
                            <p>
                                Une fois le financement obtenu, vous pourrez enfin réaliser votre projet en signant l’acte notarié. Nous continuerons à vous accompagner sur les aspects fiscaux et patrimoniaux. Faites confiance à DGA Financement Commercial pour vous guider à travers tout le processus de financement et d’investissement immobilier au Canada.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/immobilier.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
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
                                Le service d’organisation de missions économiques offert par DGA International est destiné aux entreprises qui souhaitent explorer les opportunités commerciales en Côte d’Ivoire. Notre équipe se charge de toute l’organisation de votre voyage d’affaires, y compris la réservation de vos billets d’avion, l’hébergement et la planification de vos rendez-vous d’affaires avec des partenaires locaux.
                            </p>
                            <p>
                                Nous travaillons en étroite collaboration avec les entreprises pour comprendre leurs besoins et leurs objectifs commerciaux, et nous planifions ensuite la mission en conséquence. Nous nous occupons de tous les détails logistiques pour que vous puissiez vous concentrer sur l’essentiel, à savoir développer votre entreprise.
                            </p>
                            <p>
                                Nos experts locaux sont là pour vous accompagner tout au long de votre mission économique en Côte d’Ivoire et vous donneront des conseils précieux sur le marché local. Nous pouvons également organiser des visites de sites industriels et commerciaux pour vous permettre de découvrir les différentes opportunités d’affaires offertes par le pays.
                            </p>
                            <p>
                                En optant pour notre service d’organisation de missions économiques, vous bénéficierez d’une approche personnalisée et adaptée à vos besoins, ainsi que d’un réseau de contacts locaux bien établi pour vous aider à réussir sur le marché ivoirien.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/mission-eco.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
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
                                Lorsque vous décidez de créer une entreprise en Côte d’Ivoire, vous êtes confronté à de nombreuses formalités administratives et juridiques. Cela peut s’avérer difficile et fastidieux pour les nouveaux entrepreneurs, surtout s’ils sont étrangers. C’est pourquoi DGA International offre une assistance pour la création d’entreprise en Côte d’Ivoire, y compris les formalités administratives et juridiques. Nous pouvons vous guider tout au long du processus, en veillant à ce que toutes les exigences légales soient respectées, afin que vous puissiez vous concentrer sur le développement de votre entreprise. Nous pouvons également vous aider à trouver des partenaires locaux et à établir des contacts utiles pour votre entreprise. Avec notre aide, votre entreprise sera prête à réussir sur le marché ivoirien.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/assistance-creation-entreprise.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
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
                                Le service d’assistance à l’installation proposé par DGA International permet d’accompagner les particuliers dans leur processus d’installation en Côte d’Ivoire. Cette prestation inclut une aide à la recherche d’un logement correspondant aux besoins et aux attentes de chaque individu, ainsi que la mise en place des services de base tels que l’électricité, l’eau, internet et la téléphonie. L’objectif est de faciliter au maximum la transition des personnes qui s’installent en Côte d’Ivoire en leur permettant d’avoir accès rapidement aux services essentiels à leur vie quotidienne. Les experts de DGA International sont à l’écoute des besoins et des contraintes de chacun pour proposer une solution adaptée et sur mesure.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/service-assistance.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @elseif($slug=="service-tourisme-decouverte")
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title">Services</span><br>
                            <h2>{{$sujet}}</h2>
                            <p>
                                Ce service offre des opportunités de tourisme et de découverte dans le pays, y compris l’organisation de circuits de visites personnalisées et l’aide aux réservations de voyages et d’hébergements. Il permet aux individus de découvrir le riche patrimoine culturel et la beauté naturelle de la Côte d’Ivoire, tout en assurant leur sécurité et leur confort pendant leur séjour. Notre équipe peut fournir des recommandations d’activités et d’attractions en fonction des préférences individuelles, assurant une expérience unique et mémorable.
                            </p>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                            <img class="di-big img-fluid" src="{{asset('images/background/tourisme-decouverte.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <section class="pt40 pb40 bg-color text-light">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                                    <h3 class="no-bottom">Inscription en ligne | SOS Hub Canada!</h3>
                                </div>
                                <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                                    <a href="#" class="btn-custom btn-black light">Suivre le lien</a>
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
                            <h3 class="timer" data-to="15" data-speed="1000">15</h3>
                            <span class="id-color">Années d'Expérience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <span class="p-title">Effectivement</span><br>
                        <h2>DGA International est votre Meilleur Partenaire</h2>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section>
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
        </section> --}}
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
