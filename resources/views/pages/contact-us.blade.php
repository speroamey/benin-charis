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
                            <h3>CHARIS ONG</h3>
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
                <section data-bgcolor="#f8fafb" class="text-dark pt80 pb80" id="qui-sommes-nous">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <span class="p-title d-block mb-2" style="letter-spacing:0.18em; font-size:clamp(0.85rem,2vw,1rem);">CHARIS ONG</span>
                        <h2 class="no-bottom" style="font-weight: 700; font-size: clamp(1.8rem, 5vw, 2.8rem); margin: 0 0 1.5rem 0; line-height:1.1;">Qui sommes-nous?</h2>
                        <p class="text-justify" style="line-height: 1.9; color: #4a5568; font-size:clamp(0.9rem,2.2vw,1rem);">
                            CHARIS ONG est une Organisation Non Gouvernementale à but non lucratif et apolitique créée en 2023 en République du Bénin. Elle soutient les actions du développement durable en faveur de tous, sans distinction. Notre siège est situé à Cotonou, dans le 9ème arrondissement au quartier Kindonou.
                        </p>
                        <p style="line-height: 1.9; color: #4a5568; margin-top: 1rem; font-size:clamp(0.9rem,2.2vw,1rem);">
                            L'objectif général est de contribuer durablement à la réduction de la pauvreté au Bénin en plaçant l'agriculture résiliente, la nutrition et l'insertion socioéconomique au cœur de nos actions.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div style="max-width: 100%; margin: 0 auto; width: 100%;">
                            <img src="{{ asset('images/background/bel.png') }}" alt="CHARIS ONG" style="width: 100%; height: auto; border-radius: 12px; max-width: 450px; margin: 0 auto;">
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div style="text-align: center; margin-bottom: 3rem;">
                            <h3 style="font-size: clamp(1.3rem,3.5vw,1.5rem); font-weight: 700; color: #0f3a72; margin-bottom: 0.5rem;">Nos Trois Objectifs Stratégiques</h3>
                            <p style="color: #6b7280; margin: 0; font-size:clamp(0.9rem,2vw,1rem);">Trois piliers qui guident nos actions et nos interventions</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="objective-card h-100">
                            <div class="objective-card__icon">
                                <i class="icofont-flora"></i>
                            </div>
                            <h4 class="objective-card__title">Agriculture Résiliente</h4>
                            <p class="objective-card__text">
                                Promouvoir des systèmes de production agricoles et d'élevage résilients face aux changements climatiques, à travers la diffusion de pratiques agroécologiques et l'amélioration durable de la productivité.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="objective-card h-100">
                            <div class="objective-card__icon">
                                <i class="icofont-food-cart"></i>
                            </div>
                            <h4 class="objective-card__title">Nutrition & Santé</h4>
                            <p class="objective-card__text">
                                Contribuer à l'amélioration durable de l'état nutritionnel et sanitaire des populations vulnérables par des actions de prévention, de sensibilisation et d'appui aux structures communautaires.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="objective-card h-100">
                            <div class="objective-card__icon">
                                <i class="icofont-briefcase"></i>
                            </div>
                            <h4 class="objective-card__title">Autonomie Économique</h4>
                            <p class="objective-card__text">
                                Renforcer l'autonomie économique des femmes et des jeunes à travers l'appui à l'entrepreneuriat productif, l'accès aux marchés et le développement d'activités génératrices de revenus durables.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
