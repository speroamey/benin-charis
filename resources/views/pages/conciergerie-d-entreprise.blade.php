

@extends('layout.master')

{{-- @section('header-banner')
    @include('layout.landing.header-banner')
@endsection --}}

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
                                <h2 class="no-bottom">Conciergerie d'affaires</h2>
                            </div>
                            {{-- <p>Réputation. Respect. Resultat.</p> --}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 text-justify">
                        <span class="p-title">Conciergerie</span><br>
                        <h2>Conciergerie d'affaires</h2>
                        <p>
                            La conciergerie d'affaires offerte par DGA International met de l’avant un ensemble de prestations de services conçus pour répondre aux différents besoins de votre entreprise.
                        </p>
                        <p>
                            Vous n’avez pas le temps d’organiser votre prochain voyage d’affaires? Vous êtes à la recherche de partenariat et d’opportunités d’affaires? Vous désirez installer votre entreprise dans un de nos pays de destination? DGA International est votre partenaire de confiance.
                        </p>
                        <p>
                            Depuis plusieurs années nous aidons nos clients dans toutes leurs démarches pour
                            <br>

                            l’implantation de leur entreprise, notamment en les accompagnant dans les différentes démarches légales et administratives pour l'obtention de permis, d’enregistrement, d’ouverture de comptes bancaires, etc. Notre équipe facilite et supporte également tout l’aspect logistique de la recherche de vos locaux professionnels, de l’aménagement de vos bureaux, etc.
                        </p>

                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="de-images">
                            {{-- <div class="di-text text-white bg-color">
                                <img class="di-small-2" src="images/background/52.png" alt="" />
                            </div> --}}
                            {{-- <img class="di-small-2" src="images/background/52.png" alt="" /> --}}
                            <img class="di-big img-fluid" src="images/background/RX3.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row  text-justify">
                    <div class="col-lg-6">
                        <p>
                            En collaboration avec des partenaires de confiance et spécialisés, nous sommes également en mesure d’offrir des conseils juridiques et fiscaux à votre entreprise, bien spécifiques à votre secteur d’activités.
                        </p>
                        <p>
                            Notre équipe est également dédiée à aider les employés de votre entreprise à s'installer et à s'adapter à la vie locale en leur offrant des services personnalisés tels que la recherche d’un logement, la recherche d'une école pour leurs enfants, l'ouverture d'un compte bancaire, et bien plus encore. Nous aidons vos employés dans leur intégration en les aidant à comprendre les différences culturelles et à s'adapter à leur nouvelle vie.
                        </p>
                        <p>
                            Dans le cadre de vos voyages d’affaires, nous coordonnons et organisons tous vos déplacements professionnels en mettant à votre disposition un service d’assistance personnalisé.
                        </p>
                        <p>
                            L’objectif ultime de l’équipe de DGA est d’offrir à votre entreprise un soutien complet pour vous aider à prospérer, tout en vous permettant de vous concentrer sur votre cœur de métier.
                        </p>


                    </div>
                    <div class="col-lg-6">
                        <p>
                            En effet, nous prenons soin de toutes vos réservations et de votre agenda :
                            <ul class="ul-style-2">
                                <li>
                                    Réservation d’hôtel
                                </li>
                                <li>
                                    Réservation de transport privé
                                </li>
                                <li>Réservation et restauration</li>
                                <li>
                                    Création et Organisation d'évènements
                                </li>
                                <li>
                                    Organisation de Mission économique
                                </li>
                                <li>
                                    Assistance à la création d'entreprise
                                </li>

                            </ul>


                        </p>
                    </div>
                </div>
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
                <img src="images/background/bel.JPEG" class="jarallax-img" alt="">
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
