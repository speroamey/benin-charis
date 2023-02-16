<div id="topbar" class="topbar-noborder">
    <div class="container">
        <div class="topbar-left sm-hide">
            <span class="topbar-widget tb-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </span>
        </div>
        <div class="topbar-right">
            <div class="topbar-right">
                <span class="topbar-widget"><a href="#">Politique de confidentialité</a></span>
                <span class="topbar-widget"><a href="#">Une Demande?</a></span>
                <span class="topbar-widget"><a href="#">FAQ</a></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- header begin -->
<header class="header-light navbar navbar-expand-lg">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col ">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{url('/')}}" class="navbar-brand">
                                <img alt="" class="logo" src="{{asset('images/logo-light.png')}}" />
                                <img alt="" class="logo-2" src="{{asset('images/logo.png')}}" width="100" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav" id="mainmenu">
                            <li class="nav-item active"> <a class="nav-link" href="{{url('/')}}">Accueil </a> </li>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Services
                                </a>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">Consultations</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{route('services','Conseil-sur-l-analyse-marketing')}}">Conseil sur l’analyse marketing</a></li>
                                                    <li><a href="{{route('services','Conseil-pour-optimiser-l-experience')}}">Conseil pour optimiser l’expérience
                                                            client</a></li>
                                                    <li><a href="{{route('services','Conseil-en-analyses-des-donnees')}}">Conseil en analyses des données</a></li>
                                                    <li><a href="{{route('services','Conseil-pour-la-transformation-numérique-d-une-entreprise')}}">Conseil pour la transformation numérique
                                                            d’une entreprise</a></li>
                                                    <li><a href="{{route('services','Conseil-pour-la-mise-en-place-de-la-stratégie-de-déploiement-commercial')}}">Conseil pour la mise en place de la
                                                            stratégie de déploiement commercial</a></li>
                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div><!-- end col-3 -->
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">Stratégie d’affaire</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{route('services','Conseil-en-stratégie-d-entreprise-et-de-croissance')}}">Conseil en stratégie d’entreprise et de
                                                            croissance</a></li>
                                                    <li><a href="{{route('services','Conseil-en-stratégie-de-restructuration')}}">Conseil en stratégie de restructuration </a>
                                                    </li>

                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div><!-- end col-3 -->
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">Organisation d’entreprise</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{route('services','conseil-en-gestion-et-expérience-du-changement')}}">Conseil en gestion et expérience du
                                                            changement</a></li>
                                                    <li><a href="{{route('services','Conseil-sur-la-gestion-de-l-impact-des-transformations-organisationnelles-sur-les-rh')}}">Conseil sur la gestion de l’impact des
                                                            transformations organisationnelles sur les RH</a>
                                                    </li>
                                                    <li><a href="{{route('services','Conseil-pour-la-mise-en-place-de-programmes-de-reconnaissance-et-de-récompenses')}}">Conseil pour la mise en place de programmes
                                                            de reconnaissance et de récompenses</a></li>

                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div><!-- end col-3 -->
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">Financement d’entreprise</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{route('services','Conseil-en-fusion-et-acquisitions')}}">Conseil en fusion et acquisitions</a></li>
                                                    <li><a href="{{route('services','Conseil-en-financement')}}">Conseil en financement</a></li>
                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div>

                                    </div><!-- end row -->
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Secteurs
                                </a>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">Secteur Financier</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Agency Banking solution pour une inclusion
                                                            financière</a></li>

                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div><!-- end col-3 -->
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">Secteur Télécommunication</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Télécoms</a></li>

                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                            <div class="col-megamenu">
                                                <h6 class="title"> Énergie, ressource & produits industriels
                                                </h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#"> Énergie, ressource & produits
                                                            industriels</a></li>

                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-lg-3 col-6">
                                            <div class="col-megamenu">
                                                <h6 class="title">l’investissement Immobilier</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Immobilier</a></li>
                                                    <li><a href="#"> Bâtiments et Travaux Publique</a></li>
                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div>

                                    </div><!-- end row -->
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}#temoignage"> Témoignages </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('a-propos-de-nous')}}"> À Propos </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('nous-contacter')}}"> Nous Contacter </a></li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="h-phone md-hide"><span>Besoin&nbsp;d'appeler?</span><i
                                class="fa fa-phone"></i><a href="tel: +225 07 89 71 64 24"> +225 07 89 71 64
                                24</a> </div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
