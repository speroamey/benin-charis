@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#000000">
            <img src="images/background/subheader4.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>Formulaire d'évaluation</h1>
                            <p>Formulaire pour vérification d'antécédants</p>
                        </div>
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        {{-- style="background-color: rgb(0 54 74 / 90%);" --}}
        <section aria-label="section" class="text-dark" data-bgcolor="#FFFFFF">
            <div class="container" style="margin-top: 80px;">
                <div class="row">
                    <div class="col-lg-3 justify-content-between">
                        <!-- <img src="images/misc/p3.jpg" alt="" class="img-fluid mb30"> -->
                        {{-- <h3>Nos Cordonnées</h3> --}}
                        <address class="s1 my-auto text-center">
                            <h3>DGA International</h3>
                            <span cla><i class="id-color fa fa-map-marker fa-lg"></i>
                                <span class="fb-text">
                                    Riviéra 4,  Boulevard François Mitterrand, Abidjan, Côte d'Ivoire
                                </span>

                            </span>
                            <span> <a href="tel:+225 07 79 60 24 37"><i class="id-color fa fa-phone fa-lg"></i>+225 07 79 60 24 37</a> </span>
                            <span> <a href="tel:+225 07 89 71 64 24"><i class="id-color fa fa-phone fa-lg"></i>+225 07 89 71 64 24</a> </span>
                            <span> <a href="tel:+1 514 348 8985 "><i class="id-color fa fa-phone fa-lg"></i>+1 514 348 8985 </a> </span>

                            <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:info@lajoyconsulting.com">info@lajoyconsulting.com</a></span>
                            <!-- <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                        </address>
                    </div>
                    <div class="col-lg-8  mb-sm-30 text-center">
                        <h3>Formulaire de vérification d'antécédants</h3>
                        <form name="contactForm" id="contact_form" class="form-border"
                        action="#"
                        data-action="{{route('contact')}}" data-enctype="multipart/form-data">
                           @csrf
                            <div class="field-set">
                                <div class="col-lg-10 col-md-10 mb30">
                                    <div class="f-box f-icon-left f-icon-rounded">
                                        <a href="{{asset('docs/AUTHORISATION_VERIFICATION_DES_ANTECEDENTS.docx')}}">
                                            <i class="icofont-download bg-color text-light"></i>
                                        </a>
                                        <div class="fb-text">
                                            <p>
                                                Veuillez cliquer pour télécharger le fichier, le remplir et le soumettre via le champ en dessous.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-set">
                                <input type="email" name="email" id="email" class="form-control border-gray" placeholder="Votre adresse mail" required/>
                            </div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger le fichier dûment rempli</label>
                                <input type="file" name="file" id="file" class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <input type="hidden" name="id" id="form-background-check" value="form-background-check">

                            <div class="spacer-half"></div>
                            <div id="submit">
                                <input type="submit" value="Soumettre le message" class="btn btn-primary" />

                                <div  class="ajax-loader spinner-border text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>

                            </div>
                            <div id="ajax-response" class="alert " role="alert">
                            </div>
                            {{-- <div id="mail_success" class="success"></div>
                            <div id="mail_fail" class="error"></div> --}}
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <section id="section-text" data-bgcolor="#111111" class="text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                        <div class="de_count ultra-big s2 text-center">
                            <h3 class="timer" data-to="22" data-speed="1000">22</h3>
                            <span class="id-color">Années d'Expérience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <span class="p-title">Bienvenu</span><br>
                        <h2>LaJoy votre Meilleur Partenaire  Conseil</h2>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                        <p>
                            Notre portefeuille de clients est composé d'entreprises de différents secteurs : immobilier, fintech, institutions financières, microfinances,  assurances, télécommunications, restauration, éducation, énergie, secteur public, commerce de détails, luxe, spiritueux et santé.
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
