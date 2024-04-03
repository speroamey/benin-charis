@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84">
            <img src="images/background/subheader4.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1 style="border-bottom-color:white">Nous rejoindre / Nous soutenir</h1>
                            <p>Formulaire préliminaire</p>
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
                        <h3>Formulaire préliminaire</h3>
                        <form name="contactForm" id="contact_form" class="form-border"
                        data-enctype="multipart/form-data"
                        action="#"
                        data-action="{{route('contact')}}">
                           @csrf
                            <div class="field-set">
                                <input type="text" name="fullname" id="fullname" class="form-control border-gray" placeholder="Votre Nom et prénoms" required/>
                            </div>
                            <div class="field-set">
                                <select name="language" id="language" class="form-control border-gray text-dark">
                                    <option value="" disabled selected>Parlez-vous Anglais ou Français?</option>
                                    <option value="Français">Français</option>
                                    <option value="Anglais">Anglais</option>
                                </select>
                                {{-- <input type="text" name="language" id="langue" class="form-control border-gray" placeholder="Parlez-vous Anglais ou Français" required/> --}}
                            </div>
                            <div class="field-set">
                                <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control border-gray" placeholder="Votre date de naissance" required/>
                            </div>
                            <div class="spacer-half"></div>

                            <div class="field-set">
                                <input type="text" name="nationality" id="nationality" class="form-control border-gray" placeholder="Votre pays d'origine" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="livingContry" id="livingCountry" class="form-control border-gray" placeholder="Votre pays de résidence actuel" required/>
                            </div>
                            <div class="field-set">
                                <select name="maritalStatus" id="maritalStatus" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quel est Votre état civil?</option>
                                    <option value="Marié(e)">Marié(e)</option>
                                    <option value="Conjoint de fait">Conjoint de fait</option>
                                    <option value="Veuf (ve)">Veuf (ve)</option>
                                    <option value="Divorcé(e)">Divorcé(e)</option>
                                    <option value="Séparé(e)">Séparé(e)</option>
                                    <option value="Célibataire">Célibataire</option>
                                </select>
                                {{-- <input type="text" name="maritalStatus" id="maritalStatus" class="form-control border-gray" placeholder="Votre état civil" required/> --}}
                            </div>
                            <div class="field-set">
                                <textarea name="family" id="family" class="form-control border-gray" cols="10" rows="2" placeholder="Spécifier si vous avez un époux ou une épouse et le nombre d'enfants ainsi que leur âge"></textarea>
                                {{-- <input type="text" name="family" id="family" class="form-control border-gray" placeholder="Spécifier si vous avez un époux ou une épouse et le nombre d'enfants ainsi que leur âge" required/> --}}
                            </div>
                            <div class="field-set">
                                <input type="text" name="address" id="address" class="form-control border-gray text-dark" placeholder="Quelle est votre adresse?" required/>
                            </div>
                            <div class="field-set">
                                <input type="email" name="email" id="email" class="form-control border-gray text-dark" placeholder="Quelle est votre adresse email?" required/>
                            </div>
                            <div class="field-set">
                                <input type="number" name="phone" id="phone" class="form-control border-gray" placeholder="Votre numéro de téléphone" required />
                            </div>
                            <div class="spacer-half"></div>


                            <div class="field-set">
                                <label for="financial" class="form-control"> Pensez-vous avoir des capacités financières vous permettant d'immigrer au Canada ?
                                    <input type="radio" value="Oui" name="financial" id="financialTrue" class=" border-gray" checked/> Oui
                                    <input type="radio" value="Non" name="financial" id="financialTrue" class="form-controld border-gray"/> Non
                                </label>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <textarea name="moreInfos" id="moreInfos" class="form-control border-gray" placeholder="Autres précisions importantes"></textarea>
                            </div>

                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice" class="text-left">Veuillez charger une copie de votre CV</label>
                                <input type="file" name="file_cv" id="file_cv" class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger les documents d’identité personnels et des membres de la famille</label>
                                <input type="file" name="file_id[]" id="file_id" class="form-control border-gray" placeholder="Choisir le fichier" multiple required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger la liste des actifs et des passifs </label>
                                <input type="file" name="file_actif_passif" id="file_actif_passif" class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger Copie des diplômes, certificats, formations</label>
                                <input type="file" name="file_diploma[]" id="file_diploma" class="form-control border-gray" placeholder="Choisir le fichier" multiple required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger la copie des décisions reçues d’IRCC</label>
                                <input type="file" name="file_ircc" id="file_ircc" class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <input type="hidden" name="id" id="form-preliminaire" value="form-preliminaire">

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
