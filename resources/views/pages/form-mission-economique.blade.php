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
                            <p>Formulaire pour participation à une mission économique</p>
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
                        <h3>Formulaire de participation</h3>
                        <form name="contactForm" id="contact_form" class="form-border"

                        action="#"
                        data-action="{{route('contact')}}">
                           @csrf
                            <div class="field-set">
                                <input type="text" name="lastname" id="lastname" class="form-control border-gray" placeholder="Votre Nom" required/>
                                <input type="text" name="firstname" id="firstname" class="form-control border-gray" placeholder="Votre Prénoms" required/>
                            </div>
                           

                            <div class="spacer-half"></div>

                            <div class="field-set">
                                <input type="text" name="fonctionPoste" id="fonctionPoste" class="form-control border-gray text-dark" placeholder="Fonction/Poste" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="nomEntreprise" id="nomEntreprise" class="form-control border-gray text-dark" placeholder="Nom de l'entreprise?" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="siteInternet" id="siteInternet" class="form-control border-gray text-dark" placeholder="Site Internet" required/>
                            </div>
                            <div class="field-set">
                                <input type="email" name="email" id="email" class="form-control border-gray text-dark" placeholder="Adresse email?" required/>
                            </div>
                            <div class="field-set">
                                <input type="number" name="phone" id="phone" class="form-control border-gray" placeholder="Numéro de téléphone" required />
                            </div>
                            <div class="field-set">
                                <input type="text" name="secteurActivite" id="secteurActivite" class="form-control border-gray text-dark" placeholder="secteur d'activité?" required/>
                            </div>
                            <div class="spacer-half"></div>


                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <textarea name="descriptionActivite" id="moreInfos" class="form-control border-gray" placeholder="Description des activités  de l'entreprise"></textarea>
                            </div>
                            <div class="field-set">
                                <textarea name="produitsServices" id="produitsServices" class="form-control border-gray" placeholder="Produits/Services offerts"></textarea>
                            </div>

                            <div class="field-set">
                                <input type="text" name="chiffreDaffaire" id="chiffreDaffaire" class="form-control border-gray text-dark" placeholder="Chiffre d'affaire annuel" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="effectifTotal" id="effectifTotal" class="form-control border-gray text-dark" placeholder="Effectif total" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="marcheCible" id="marcheCible" class="form-control border-gray text-dark" placeholder="Marché cible" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="principauxClients" id="principauxClients" class="form-control border-gray text-dark" placeholder="Principaux client" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="principauxFournisseur" id="principauxFournisseur" class="form-control border-gray text-dark" placeholder="Principaux fournisseurs" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="partenariatsExistants" id="partenariatsExistants" class="form-control border-gray text-dark" placeholder="Partenariats existants" required/>
                            </div>
                            <div class="field-set">
                                <textarea name="objectifParticipation" id="objectifParticipation" class="form-control border-gray" placeholder="Objectifs de la participation au voyage d’affaires au Canada"></textarea>
                            </div>
                            <div class="field-set">
                                <textarea name="besoinsEntreprise" id="besoinsEntreprise" class="form-control border-gray" placeholder="Quels sont les principaux besoins de l’entreprise ?"></textarea>
                            </div>
                            <div class="field-set">
                                <textarea name="typeEntrepriseArencontre" id="typeEntrepriseArencontre" class="form-control border-gray" placeholder="Quels types d’entreprises désirez-vous rencontrez ?"></textarea>
                            </div>
                            <div class="field-set">
                                <textarea name="autresCommentaires" id="autresCommentaires" class="form-control border-gray" placeholder="Autres commentaires"></textarea>
                            </div>
                            <input type="hidden" name="id" id="form-mission-economique" value="form-mission-economique">

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

    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
