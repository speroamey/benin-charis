

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
                            <h1>A Propos</h1>
                            <p>Réputation. Respect. Resultat.</p>
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
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>Maximiser votre temps</h2>
                        <p>
                            Bienvenue chez DGA International, votre partenaire privilégié pour la réussite de votre projet de déplacement. Nous offrons une gamme complète de services aux entreprises et aux particuliers, allant de l’organisation de missions économiques à l’assistance à la création d’entreprise, en passant par l’installation, la conciergerie et le tourisme personnalisé.
                        </p>
                        <p>
                            Chez DGA International, nous croyons en l’intégrité, le professionnalisme, l’empathie et l’adaptabilité. Nous travaillons avec nos clients pour comprendre leurs besoins et leurs défis afin de leur offrir des solutions sur mesure qui répondent à leurs attentes. Nous sommes fiers de notre réputation pour offrir des services de qualité supérieure et nous sommes engagés à maintenir notre position de leader dans l’industrie.
                        </p>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="de-images">
                            {{-- <div class="di-text text-white bg-color">
                                <img class="di-small-2" src="images/background/52.png" alt="" />
                            </div> --}}
                            {{-- <img class="di-small-2" src="images/background/52.png" alt="" /> --}}
                            <img class="di-big img-fluid" src="images/background/11.jpg" alt="" />
                        </div>
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
