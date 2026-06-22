@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84">
            {{-- <img src="images/background/subheader4.jpg" class="jarallax-img" alt=""> --}}
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1 style="border-bottom-color:white">Nous Contacter</h1>
                            <p>Expérience, Vision, Détermination, Investissement</p>
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
                            <h3>BÉNIN CHARIS ONG</h3>
                            <span cla><i class="id-color fa fa-map-marker fa-lg"></i>
                                <span class="fb-text">
                                    Littoral, Cotonou, 9eme Arrondissement, Kindonou C/2147
                                </span>

                            </span>
                            <span> <a href="tel:+2290196143213"><i class="id-color fa fa-phone fa-lg"></i>(+229) 01 96 14 32 13</a> </span>
                            <span> <a href="tel:+2290196696060"><i class="id-color fa fa-phone fa-lg"></i>(+229) 01 96 69 60 60</a> </span>

                            <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:info@lajoyconsulting.com">info@benin-charis.org</a></span>
                            <!-- <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                        </address>
                    </div>
                    <div class="col-lg-8  mb-sm-30 text-center">
                        <h3>Nous écrire</h3>
                        <form name="contactForm" id="contact_form" class="form-border"

                        action="#"
                        data-action="{{route('contact')}}">
                           @csrf
                            <div class="field-set">
                                <input type="text" name="fullname" id="fullname" class="form-control border-gray" placeholder="Votre Nom et prénoms" required/>
                            </div>
                            <div class="field-set">
                                <input type="email" name="email" id="email" class="form-control border-gray" placeholder="Votre adresse email" required/>
                            </div>
                            <div class="field-set">
                                <input type="number" name="phone" id="phone" class="form-control border-gray" placeholder="Votre numéro de téléphone" required />
                            </div>
                            <div class="field-set">
                                <input type="text" name="subject" id="subject" class="form-control border-gray" placeholder="Objet du message" required/>
                            </div>
                            <div class="field-set">
                                <textarea name="message" min="30" id="message" class="form-control border-gray" placeholder="Votre Message" required></textarea>
                            </div>
                            <input type="hidden" name="id" id="contact" value="contact">

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
        <section data-bgcolor="#f2f2f2" class="text-dark" id="qui-sommes-nous">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 offset-lg-5">
                        <span class="p-title">BÉNIN CHARIS ONG?</span><br>
                        <h2>
                            Qui sommes-nous?
                        </h2>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p>
                                    BÉNIN CHARIS ONG est une Organisation Non Gouvernementale à but non lucratif et est apolitique. Elle a été créée en 2023 en République du Bénin conformément aux dispositions de la loi du 1er Juillet 1901 et le décret du 16 Août portant création des associations, soutenant les actions du développement durable en général sans distinction de sexe, de race et de religion. Le siège de BÉNIN CHARIS est situé à Cotonou dans le 9ème arrondissement au quartier Kindonou. Est membre de cette organisation toute personne physique qui manifeste un intérêt pour l’organisation. Elle est composée des membres fondateurs, des membres actifs, de sympathisants et de membres d’honneur. L’objectif général est de contribuer durablement à la réduction de la pauvreté au Bénin. De cet objectif général découle quatre objectifs spécifiques que sont :
                                    <ol>
                                        <li>contribuer à la sécurité alimentaire et nutritionnelle;</li>
                                        <li>promouvoir la transition agroécologique et l’économie circulaire;</li>
                                        <li>accompagner l’autonomisation des jeunes et des femmes et</li>
                                        <li>promouvoir l’accès à l’eau potable, l’hygiène et l’assainissement</li>
                                    </ol>
                                    .
                                </p>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="jarallax image-container col-md-4 pull-right xs-hide">
                <img src="{{ asset('images/background/bel.png') }}" class="jarallax-img" alt="">
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
