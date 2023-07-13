

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
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            {{-- <h1>Conciergerie de particulier</h1> --}}
                            <div class="col-md-5 mb-sm-30 text-lg-center text-sm-center mx-auto my-aut"  data-bgcolor="#ffb000">
                                <h2 class="no-bottom">Conciergerie de particulier</h2>
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
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <span class="p-title">Conciergerie</span><br>
                        <h2>Conciergerie de particulier</h2>
                        <p>
                            DGA International est votre prestataire de service de conciergerie personnalisé à privilégier pour tous vos besoins d’assistance professionnels et personnels.
                        </p>
                        <p>
                            Que ce soit pour vos voyages d’affaires, vos vacances familiales, vos déplacements, ou vos besoins journaliers, nous sommes à votre service.  Nous mettons à votre disposition une gamme complète de solutions pour répondre à tous vos besoins :
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="ul-style-2">
                                    <li>Réservation de vol</li>
                                    <li>Réservation d’hôtel</li>
                                    <li>Locations de voiture</li>
                                    <li>
                                        Transport privé
                                    </li>
                                    <li>
                                        Service de sécurité
                                    </li>
                                    <li>
                                        Réservation de restaurant
                                    </li>
                                    <li>
                                        Tourisme
                                    </li>

                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="ul-style-2">
                                    <li>
                                        Assistance à l’obtention de visa de tourisme, permis de travail, permis d’études
                                    </li>
                                    <li>
                                        Recherche de logement
                                    </li>
                                    <li>
                                        Achat d’une propriété
                                    </li>
                                    <li>
                                        Et plus encore
                                    </li>
                                </ul>
                            </div>
                        </div>





                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="de-images">
                            {{-- <div class="di-text text-white bg-color">
                                <img class="di-small-2" src="images/background/52.png" alt="" />
                            </div> --}}
                            {{-- <img class="di-small-2" src="images/background/52.png" alt="" /> --}}
                            <img class="di-big img-fluid" src="images/services/DGA1.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>
                            Nous facilitons également votre installation et votre transition vers un nouveau pays en vous donnant tout le support nécessaire pour cette nouvelle étape importante de votre vie.
                        </p>
                        <p>
                            Notre équipe d'experts immobilier vous accompagne de A à Z, en passant par la recherche de propriétés, les visites, la négociation des différents contrats, le financement et toutes les étapes nécessaires pour l’achat ou la location d’un bien qui répondra à vos besoins et à votre budget.
                        </p>
                        <p>
                        </p>
                        <p>
                            Nous vous offrons un service de soutien administratif pour vous aider à rester organisé et productif. Notre équipe de concierges peut s'occuper de la gestion de votre courrier, de la facturation, de la planification de vos rendez-vous et de toute autre tâche connexe.
                        </p>


                    </div>
                    <div class="col-lg-6">
                        <p>
                            Nous vous proposons également des services de planification d'événements pour vous aider à organiser votre événement spécial et en faire un moment mémorable et réussi, tel qu'un mariage, un anniversaire, un gala, un événement corporatif, etc.
                        </p>
                        <p>
                            Chez DGA International, nous sommes fiers d’être votre partenaire de confiance et de vous offrir des services de conciergerie sur mesure pour répondre à tous vos besoins.
                        </p>
                        <p>
                            Contactez-nous dès aujourd'hui pour discuter de vos besoins de conciergerie personnels.
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
