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
                            <p>Formulaire d'évaluation préliminaire</p>
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
                                <input type="number" name="phone" id="phone" class="form-control border-gray" placeholder="Votre numéro de téléphone" required />
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <select name="travelType" id="travelType" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quel type de voyage désirez-vous faire?</option>
                                    <option value="Voyage d’affaires">Voyage d’affaires</option>
                                    <option value="Vacances">Vacances</option>
                                    <option value="Vacances familiales">Vacances familiales</option>
                                    <option value="Voyage de couple">Voyage de couple</option>
                                </select>
                                {{-- <input type="text" name="trave" id="travel" class="form-control border-gray" placeholder="Quel type de voyage désirez-vous faire" required/> --}}
                            </div>
                            {{-- <div class="field-set">
                                <input type="text" name="allinOne" id="allInOne" class="form-control border-gray" placeholder="Voyage tout inclus" required/>
                            </div> --}}
                            <div class="field-set">
                                <select name="criteria" id="criteria" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quels sont les critères que vous recherchez?</option>
                                    @foreach ($criteria as $key => $value )
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="criteria" id="critéria" class="form-control border-gray" placeholder="Cochez les critères que vous recherchez" required/> --}}
                            </div>
                            <div class="field-set">
                                <select name="addons" id="addons" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quelles sont les inclusions que vous désirez?</option>
                                    @foreach ($inclusions as $key => $value )
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="addons" id="addons" class="form-control border-gray" placeholder="Quelles sont les inclusions que vous désirez" required/> --}}
                            </div>
                            <div class="field-set">
                                <input type="text" name="destination" id="destination" class="form-control border-gray" placeholder="Vers quelle destination désirez-vous voyager?" required/>
                            </div>
                            <div class="field-set">
                                <select name="climate" id="climate" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quel type de climat recherchez-vous?</option>
                                    @foreach ($climate as $key => $value )
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="climate" id="climate" class="form-control border-gray" placeholder="Type de climat recherché" required/> --}}
                            </div>
                            <div class="field-set">
                                <input type="text" name="localLanguage" id="localLanguage" class="form-control border-gray" placeholder="Langue locale privilégiée" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="flightTime" id="flightTime" class="form-control border-gray" placeholder="Quelle est la durée de vol maximal attendue?" required/>
                            </div>
                            <div class="field-set">
                                <select name="accomodation" id="accomodation" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quel type d'hébergement recherchez-vous?</option>
                                    @foreach ($accomodation as $key => $value )
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="accomodation" id="accomodation" class="form-control border-gray" placeholder="Quel type d'hébergement recherchez-vous?" required/> --}}
                            </div>
                            <div class="field-set">
                                <select name="stayDuration" id="stayDuration" class="form-control border-gray text-dark">
                                    <option value=""selected disabled>Quelle sera la durée de votre séjour?</option>
                                    @foreach ($stayDuration as $key => $value )
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="stayDuration" id="stayDuration" class="form-control border-gray" placeholder="Quelle sera la durée de votre séjour" required/> --}}
                            </div>
                            <div class="field-set">
                                <input type="text" name="travelDates" id="travelDates" class="form-control border-gray" placeholder="Quelles sont les dates précises de votre voyage" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="travelerNumber" id="travelerNumber" class="form-control border-gray" placeholder="Combien de personnes voyageront avec vous?" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="travelerAges" id="travelerAges" class="form-control border-gray" placeholder="Quel est l'âge de chacun des voyageurs?" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="budget" id="budget" class="form-control border-gray" placeholder="Quel est le budget pour le voyage?" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="lastDestination" id="lastDestination" class="form-control border-gray" placeholder="Quelles ont été vos dernières destinations de voyage ?" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="favorite" id="favorite" class="form-control border-gray" placeholder="Parmi vos dernières destinations de voyage, lesquelles étaient votre coup de cœur ?" required/>
                            </div>
                            <div class="field-set">
                                <input type="text" name="specialDemand" id="specialDemand" class="form-control border-gray" placeholder="Avez-vous des commentaires ou des demandes spéciales?" required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice" class="text-left">Veuillez charger une copie de votre Passport</label>
                                <input type="file" name="file_cv" id="file_cv" class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger les documents d’identité personnels et des membres de la famille</label>
                                <input type="file" name="file_id[]" id="file_id" multiple class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <input type="hidden" name="id" id="form-sejour" value="form-sejour">

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
