

@extends('layout.master')



@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84">
            <!-- <img src="images/background/subheader3.jpg" class="jarallax-img" alt=""> -->
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <div class="col-md-5 mb-sm-30 text-lg-center text-sm-center mx-auto my-aut"  data-bgcolor="#073B84">
                                <h2 style="border-bottom-color:white">Dernières nouvelles</h2>
                            </div>
                            {{-- <p>Réputation. Respect. Resultat.</p> --}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Nos Articles</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">01</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/1.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">------</span>
                                    <h4><a href="{{ route('blog', ['la-transformation-digitale-gestion-du-changement']) }}">Titre
                                            de la vidéo
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="{{ route('blog', ['la-transformation-digitale-gestion-du-changement']) }}">Lire
                                            la vidéo</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">02</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/2.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">----</span>
                                    <h4><a href="{{ route('blog', ['femmes-leaders-dans-l-economie-ivoirienne']) }}">Titre
                                            de la vidéo
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="{{ route('blog', ['femmes-leaders-dans-l-economie-ivoirienne']) }}">Lire
                                            la vidéo</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">03</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/3.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">-----</span>
                                    <h4><a href="{{ route('blog', ['l-innovation-disruptive']) }}">Titre dela vidéo
                                            <span></span></a></h4>

                                    <span class="p-author"><a href="{{ route('blog', ['l-innovation-disruptive']) }}">Lire
                                            la vidéo </span></span>
                                </div>
                            </div>
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

    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
