<div id="topbar" class="topbar-noborder">
    <div class="container">
        <div class="topbar-left sm-hide">
            <span class="topbar-widget tb-social">
                <a href="https://www.facebook.com/dgainternaionalltee?mibextid=ZbWKwL"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="https://www.linkedin.com/company/dga-international/"><i class="fa fa-linkedin fa-lg"></i></a>
                <a href="https://instagram.com/dgainternational?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram fa-lg"></i></a>

            </span>
        </div>
        <div class="topbar-right">
            <div class="topbar-right">
                {{-- <span class="topbar-widget"><a href="#">Politique de confidentialité</a></span> --}}
                {{-- <span class="topbar-widget"><a href="#">Consultation gratuite</a></span> --}}
                {{-- <span class="topbar-widget"><a href="{{url('/faq')}}">FAQ</a></span> --}}
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<header class="transparent ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt1">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                                <a href="{{url('/')}}"> <img alt="" class="logo" src="{{asset('images/logo.png')}}" width="100" /></a>
                                <a href="{{url('/')}}"> <img alt="" class="logo-2" src="{{asset('images/logo-light.png')}}" width="150" /></a>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="{{url('/')}}">Accueil</a>
                                <ul>
                                    <li><a href="{{url('/#qui-sommes-nous')}}">Qui sommes-nous?</a></li>
                                    <li><a href="{{url('/#notre-mission')}}">Notre mission</a></li>
                                    <li><a href="{{url('/#nos-valeurs')}}">Nos valeurs</a></li>
                                    <li><a href="{{url('/#nos-forces')}}">Nos forces</a></li>
                                    <li><a href="{{url('/#nos-services')}}">Nos services</a></li>

                                </ul>
                            </li>
                            <li><a href="">Conciergerie</a>
                                <ul>
                                    <li><a href="{{url('/conciergerie-d-entreprise')}}">Conciergerie d'affaires</a></li>
                                    <li><a href="{{url('/conciergerie-de-particulier')}}">Conciergerie de particulier</a></li>
                                </ul>
                            </li>
                            <li><a href="">Destination Canada</a>
                                <ul>
                                    <li><a href="{{route('services','mission-economique')}}">Organisation de missions économiques</a></li>
                                    <li><a href="{{route('services','visa-d-etude')}}">Assistance permis d’étude</a></li>
                                    <li><a href="{{route('services','visa-de-travail')}}">Assistance permis de Travail</a></li>
                                    <li><a href="{{route('services','visa-tourisme')}}">Assistance visa de tourisme</a></li>
                                    <li><a href="{{route('services','immigration-pour-entreprise')}}">Immigration d’affaires</a></li>
                                    <li><a href="{{route('services','service-de-Background-check')}}">Service de vérification des antécédents</a></li>

                                    <li><a href="{{route('services','investissement-immobilier')}}" >Investissement Immobilier</a></li>

                                    {{-- <li><a href="{{route('services','assistance')}}" >Service d’assistance & installation</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="">Destination Côte d'ivoire</a>
                                <ul>
                                    <li><a href="{{route('services','organisation-de-mission-economique')}}" >Organisation de missions économiques</a></li>
                                    <li><a href="{{route('services','assistance-création-d-entreprise')}}" >Assistance pour création d’entreprise</a></li>
                                    <li><a href="{{route('services','service-assistance-installation')}}" >Service assistance & installation</a></li>
                                    <li><a href="{{route('services','service-tourisme-decouverte')}}" >Service de tourisme</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- mainmenu close -->
                    </div>

                    <div class="de-flex-col">
                        <div class="h-phone md-hide"><span>Prendre rendez-vous</span><i
                                class="fa fa-phonee"></i><a href="tel: +225 07 79 60 24 37" class="text-white"> +225 07 79 60 24 37
                                </a> </div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
