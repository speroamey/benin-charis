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
                                <a href="{{url('/')}}"> <img alt="" class="logo" src="{{asset('images/logo.png')}}" width="165" /></a>
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
                                </ul>
                            </li>
                            <li><a href="{{route('ce-que-nous-faisons')}}">Ce que nous faisons</a></li>
                            <li><a href="/nous-contacter">Nous Contacter</a></li>
                            <li><a href="/formulaire-preliminaire">Nous Rejoindre</a>
                                
                            </li>
                            <li><a href="{{route('articles')}}">News</a></li>
                        </ul>
                        <!-- mainmenu close -->
                    </div>

                    <div class="de-flex-col">
                        <div class="h-phone md-hide"><span>Prendre rendez-vous</span><i
                                class="fa fa-phonee"></i><a href="tel: +229 96 14 32 13" class="text-white"> +229 96 14 32 13
                                </a> </div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
