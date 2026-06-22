@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        
        <!-- Hero Section -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <div class="col-md-8 mx-auto">
                                <h2 class="no-bottom" style="font-size: clamp(1.8rem, 5vw, 2.8rem); line-height: 1.1; font-weight: 700;">Ce que nous faisons</h2>
                                <p style="font-size: clamp(1rem, 2vw, 1.15rem); margin-top: 1rem; opacity: 0.95;">Nos 3 axes stratégiques pour transformer le Bénin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ambitions Section -->
        <section class="section-ambitions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="margin-bottom: clamp(2rem, 4vw, 3rem);">
                        <h2 style="font-size: clamp(1.6rem, 4vw, 2.2rem);">Nos ambitions</h2>
                        <div class="small-border"></div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- AXE 1: Nutrition et Santé -->
                        <div class="ambition-card axe-1">
                            <span class="axe-badge">Axe 1</span>
                            {{-- <div class="axe-icon-wrapper">
                                <img src="{{asset('images/misc/axe1.png')}}" alt="Nutrition et Santé" />
                            </div> --}}
                            <h3>Nutrition et Santé (NS)</h3>
                            <p>Les objectifs stratégiques de l'axe Nutrition et Santé (NS) sont les suivants:</p>
                            <ul>
                                <li>
                                    <span>Prévenir la malnutrition:</span> D'ici 2028, nous avons prévenu la malnutrition chez au moins 1000 enfants et les femmes vulnérables en âge de procréer;
                                </li>
                                <li>
                                    <span>Appuyer les centres de prise en charge:</span> D'ici 2028, nous avons appuyé au moins 10 centres de prise en charge de la malnutrition et 100 Groupes d'Assistance en Nutrition (GAN) au Bénin.
                                </li>
                            </ul>
                        </div>

                        <!-- AXE 2: Autonomisation des Femmes et des Jeunes -->
                        <div class="ambition-card axe-2">
                            <span class="axe-badge">Axe 2</span>
                            {{-- <div class="axe-icon-wrapper">
                                <img src="{{asset('images/misc/axe2.png')}}" alt="Autonomisation des Femmes et des Jeunes" />
                            </div> --}}
                            <h3>Autonomisation des Femmes et des Jeunes (AFJ)</h3>
                            <p>Les objectifs stratégiques de l'axe Autonomisation des Femmes et des Jeunes (AFJ) sont les suivants:</p>
                            <ul>
                                <li>
                                    <span>Mettre en place des centres de formation:</span> D'ici 2028, nous avons mis en place 02 centres de formations des jeunes filles et garçons (orphelins);
                                </li>
                                <li>
                                    <span>Promouvoir les Activités Génératrices de Revenus (AGR):</span> D'ici 2028, nous avons promu les AGR au niveau d'au moins 50 groupements de femmes;
                                </li>
                                <li>
                                    <span>Encourager la scolarisation:</span> D'ici 2028, nous avons encouragé la scolarisation des garçons et des filles dans au moins 50 arrondissements au Bénin;
                                </li>
                                <li>
                                    <span>Incuber et accélérer les idées d'entreprises:</span> D'ici 2028, nous avons incubé et accéléré des idées d'entreprises au profit d'au moins 500 jeunes;
                                </li>
                                <li>
                                    <span>Installer une académie d'entreprenariat agricole:</span> D'ici 2028, nous avons installé une académie qui offre un parcours professionnalisant aux jeunes entrepreneurs agricoles.
                                </li>
                            </ul>
                        </div>

                        <!-- AXE 3: Agriculture et élevage intelligents -->
                        <div class="ambition-card axe-3">
                            <span class="axe-badge">Axe 3</span>
                            {{-- <div class="axe-icon-wrapper">
                                <img src="{{asset('images/misc/axe3.png')}}" alt="Agriculture et élevage intelligents au climat" />
                            </div> --}}
                            <h3>Agriculture et élevage intelligents au climat (AIC-EIC)</h3>
                            <p>Les objectifs stratégiques de l'axe Agriculture et Elevage Intelligents au Climat (AIC-EIC) sont les suivants:</p>
                            <ul>
                                <li>
                                    <span>Contribuer à la transformation du système de production:</span> D'ici 2028, nous avons contribué à la transformation du système de production d'au moins 30 villages fortement menacés par les changements climatiques;
                                </li>
                                <li>
                                    <span>Créer des centres de démonstration / formation:</span> D'ici 2028, nous avons créé au moins 01 centre de démonstration / formation de référence EIC-AIC.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Realizations Section -->
        <section aria-label="section" data-bgcolor="#ffffff" style="padding: clamp(3rem, 8vw, 5rem) 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="margin-bottom: clamp(2.5rem, 5vw, 4rem);">
                        <h2 style="font-size: clamp(1.6rem, 4vw, 2.2rem);">Nos réalisations depuis 2023</h2>
                        <div class="small-border"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="Projet 1" src="https://www.w3schools.com/bootstrap5/paris.jpg">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">LE TITRE</a></h4>
                                    <span class="p-author"><a href="#">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="Projet 2" src="https://www.w3schools.com/bootstrap5/newyork.jpg">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">LE TITRE 2</a></h4>
                                    <span class="p-author"><a href="#">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="Projet 3" src="https://www.w3schools.com/bootstrap5/sanfran.jpg">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">LE TITRE 3</a></h4>
                                    <span class="p-author"><a href="#">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Perspectives Section -->
        <section class="section-perspectives">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="margin-bottom: clamp(2.5rem, 5vw, 4rem);">
                        <h2 style="font-size: clamp(1.6rem, 4vw, 2.2rem);">Nos perspectives</h2>
                        <div class="small-border"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="Développement Durable" src="{{asset('images/misc/perspective1.jpg')}}">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">Développement Durable</a></h4>
                                    <span class="p-author"><a href="#">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="Développement Rural" src="{{asset('images/misc/developpement.jpg')}}">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">Développement Rural</a></h4>
                                    <span class="p-author"><a href="#">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <img alt="Sécurité Alimentaire" src="{{asset('images/misc/security.jpg')}}">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">Sécurité Alimentaire</a></h4>
                                    <span class="p-author"><a href="#">Télécharger</a></span>
                                </div>
                            </div>
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
