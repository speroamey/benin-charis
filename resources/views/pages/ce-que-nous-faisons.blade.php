

@extends('layout.master')

{{-- @section('header-banner')
    @include('layout.landing.header-banner')
@endsection --}}

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
                                <h2 class="no-bottom">Ce que nous faisons</h2>
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
                <div class="row align-items-center ">
                    <div class="col-md-7 text-justify">
                        <span class="p-title">Ce que nous faisons</span><br>
                        <h2>Objectifs stratégiques </h2>
                        <p>
                            Les objectifs stratégiques poursuivis par axe stratégique sont définis ci-dessous.
                            <ul>
                                <li>
                                    <strong>Axe stratégique 1: Nutrition et Santé (NS)</strong>
                                    <ul>
                                        Les objectifs stratégiques de l’axe Nutrition et Santé (NS) sont les suivants:
                                        <li>
                                            <strong>Prévenir la malnutrition:</strong> D’ici 2028, nous avons prévenu la malnutrition chez au moins 1000 enfants et les femmes vulnérables en âge de procréer;
                                        </li>
                                        <li>
                                            <strong>Appuyer les centres de prise en charge:</strong> D’ici 2028, nous avons appuyé au moins 10 centres de prise en charge de la malnutrition et 100 Groupes d’Assistance en Nutrition (GAN) au Bénin.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                   <strong> Axe stratégique 2: Entrepreneuriat agricole et économie verte (EAEV)</strong>
                                    <ul>
                                        Les objectifs stratégiques de l’axe Entrepreneuriat Agricole et Economie Verte (EAEV) sont les suivants :
                                        <li>
                                            <strong>Incuber et accélérer les idées d’entreprises portées par des jeunes:</strong> D’ici 2028, nous avons incubé et accéléré des idées d’entreprises au profit d’au moins 500 jeunes (agroalimentaire, économie verte et économie circulaire) 
                                        </li>
                                        <li>
                                            <strong>Installer une académie d’entreprenariat agricole:</strong> D’ici 2028, nous avons installé une académie de l’entreprenariat agricole qui offre un parcours professionnalisant aux jeunes entrepreneurs agricoles.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                   <strong> Axe stratégique 3: Autonomisation des Femmes et des Jeunes (AFJ)</strong>
                                    <ul>
                                        Les objectifs stratégiques de l’axe Autonomisation des Femmes et des Jeunes (AFJ) sont les suivants :
                                        <li>
                                            <Strong>Mettre en place des centres de formation des jeunes filles et garçons (orphelins):</Strong> D’ici 2028, nous avons mis en place 02 centres de formations des jeunes filles et garçons (orphelins);
                                        </li>
                                        <li>
                                            <strong>Promouvoir les Activités Génératrices de Revenus (AGR) au niveau des groupements de femmes:</strong> D’ici 2028, nous avons promu les AGR au niveau d’au moins 50 groupements de femmes ;
                                        </li>
                                        <li>
                                            <strong>Encourager la scolarisation des filles et des garçons:</strong> D’ici 2028, nous avons encouragé la scolarisation des garçons et des filles dans au moins 50 arrondissements au Bénin.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>Axe stratégique 4: Agriculture et élevage intelligents au climat (AIC-EIC)</strong>
                                    <ul>
                                        Les objectifs stratégiques de l’axe Agriculture et Elevage Intelligents au Climat (AIC-EIC) sont les suivants:
                                        <li>
                                            <strong>Contribuer à la transformation du système de production de quelques terroirs fortement menacées par le changement climatique:</strong> D’ici 2028, nous avons contribué à la transformation du système de production d’au moins 30 villages fortement menacés par les changements climatiques;
                                        </li>
                                        <li>
                                            <strong>Créer des centres de démonstration / formation de référence AIC et EIC:</strong> D’ici 2028, nous avons créé au moins 01 centre de démonstration / formation de référence EIC-AIC
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <strong> Axe stratégique 5: Eau, assainissement et hygiène (WASH)</strong>
                                    <ul>
                                        Les objectifs stratégiques de l’axe Eau, Assainissement et Hygiène (WASH) sont les suivants:
                                        <li>
                                            <strong>Faire un plaidoyer et lobbying en faveur des villages enclavés:</strong> D’ici 2028; nous avons fait un plaidoyer et lobbying au profit de 30 villages enclavés;
                                        </li>
                                        <li>
                                            <strong>Contribuer à la mise en place d’infrastructures sociocommunautaires dans des villages enclavés: D’ici 2028;</strong> nous avons contribué à la mise en place d’infrastructures sociocommunautaires dans au moins 10 villages enclavés.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </p>


                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="row">
                            <div class=" de-images">
                                <img class="di-big img-fluid" src="images/background/Banner-web-.jpg" alt="" />
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class=" de-images">
                                <img class="di-big img-fluid" src="images/background/Banner-web-2-.jpg" alt="" />
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class=" de-images">
                                <img class="di-big img-fluid" src="images/background/Banner-web-3-.jpg" alt="" />
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row  text-justify">
                    <div class="col-lg-6">



                    </div>
                    {{-- <div class="col-lg-6">
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
                    </div> --}}
                </div>
            </div>
        </section>
        <section data-bgcolor="#f2f2f2" class="text-dark" id="qui-sommes-nous">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 offset-lg-5">
                        <span class="p-title">Qui sommes-nous?</span><br>
                        <h2>
                            Notre Expérience<br>Notre Dévouement
                        </h2>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p>
                                    Bénin CHARIS ONG est une Organisation Non Gouvernementale à but non lucratif et est apolitique. Elle a été créée en 2023 en République du Bénin conformément aux dispositions de la loi du 1er Juillet 1901 et le décret du 16 Août portant création des associations, soutenant les actions du développement durable en général sans distinction de sexe, de race et de religion. Le siège de Bénin CHARIS est situé à Cotonou dans le 9ème arrondissement au quartier Kindonou. Est membre de cette organisation toute personne physique qui manifeste un intérêt pour l’organisation. Elle est composée des membres fondateurs, des membres actifs, de sympathisants et de membres d’honneur. L’objectif général est de contribuer durablement à la réduction de la pauvreté au Bénin. De cet objectif général découle quatre objectifs spécifiques que sont :
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
