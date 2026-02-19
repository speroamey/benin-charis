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
                            <div class="col-md-5 mb-sm-30 text-lg-center text-sm-center mx-auto my-aut"
                                data-bgcolor="#073B84">
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
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Nos ambitions </h2>
                        <div class="small-border"></div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3  text-center mx-aut">
                                <div class="de-images-rounded">
                                    <img class="di-bi img-fluid" src="images/misc/axe1.png" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-7  mt-4 mx-aut">
                                <strong>Nutrition et Santé (NS)</strong>
                                <br>
                                Les objectifs stratégiques de l’axe Nutrition et Santé (NS) sont les suivants:
                                <ul class="text-justify">
                                    <li>
                                        <span>Prévenir la malnutrition:</span> D’ici 2028, nous avons prévenu la malnutrition chez
                                        au moins 1000 enfants et les femmes vulnérables en âge de procréer;
                                    </li>
                                    <li>
                                        <span>Appuyer les centres de prise en charge:</span> D’ici 2028, nous avons appuyé au moins
                                        10 centres de prise en charge de la malnutrition et 100 Groupes d’Assistance en Nutrition
                                        (GAN) au Bénin.
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center  mt-4">

                            <div class="col-lg-7  mt-4 order-2 order-lg-1 mt-4 mx-aut text-justify">
                                <strong> Autonomisation des Femmes et des Jeunes (AFJ)</strong>
                                <br>
                                Les objectifs stratégiques de l’axe Autonomisation des Femmes et des Jeunes (AFJ) sont les
                                suivants :
                                <ul class="text-justify">
                                    <li>
                                        <span class="">Mettre en place des centres de formation des jeunes filles et garçons
                                            (orphelins):</span> D’ici 2028, nous avons mis en place 02 centres de formations des
                                        jeunes filles et garçons (orphelins);
                                    </li>
                                    <li>
                                        <span>Promouvoir les Activités Génératrices de Revenus (AGR) au niveau des groupements de
                                            femmes:</span> D’ici 2028, nous avons promu les AGR au niveau d’au moins 50 groupements
                                        de femmes ;
                                    </li>
                                    <li>
                                        <span>Encourager la scolarisation des filles et des garçons:</span> D’ici 2028, nous avons
                                        encouragé la scolarisation des garçons et des filles dans au moins 50 arrondissements au
                                        Bénin.
                                    </li>
                                    <li>
                                        <span>Incuber et accélérer les idées d’entreprises portées par des jeunes:</span> D’ici
                                        2028, nous avons incubé et accéléré des idées d’entreprises au profit d’au moins 500 jeunes
                                        (agroalimentaire, économie verte et économie circulaire)
                                    </li>
                                    <li>
                                        <span>Installer une académie d’entreprenariat agricole:</span> D’ici 2028, nous avons
                                        installé une académie de l’entreprenariat agricole qui offre un parcours professionnalisant
                                        aux jeunes entrepreneurs agricoles.
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-2 col-7  order-1 order-lg-2 text-center mx-3">
                                <div class="de-images-rounded">
                                    <img class="di-big img-fluid" src="images/misc/axe2.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center  mt-4 ">
                            <div class="col-lg-2 col-7 text-center mx-3">
                                <div class="de-images-rounded">
                                    <img class="di-bi img-fluid" src="images/misc/axe3.png" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-7 mt-4 mx-aut">
                                <strong>Agriculture et élevage intelligents au climat (AIC-EIC)</strong>
                                <ul class="text-justify">
                                    Les objectifs stratégiques de l’axe Agriculture et Elevage Intelligents au Climat (AIC-EIC) sont
                                    les suivants:
                                    <li>
                                        <span>Contribuer à la transformation du système de production de quelques terroirs fortement
                                            menacées par le changement climatique:</span> D’ici 2028, nous avons contribué à la
                                        transformation du système de production d’au moins 30 villages fortement menacés par les
                                        changements climatiques;
                                    </li>
                                    <li>
                                        <span>Créer des centres de démonstration / formation de référence AIC et EIC:</span> D’ici
                                        2028, nous avons créé au moins 01 centre de démonstration / formation de référence EIC-AIC
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <h2>Nos réalisations depuis 2023</h2>
                        <div class="small-border"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    {{-- <div class="m">{{$post->id}}</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="" src="https://www.w3schools.com/bootstrap5/paris.jpg">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">
                                            LE TITRE
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="https://dp-www.s3.ensam.eu/public/2016-11/pdf.pdf">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    {{-- <div class="m">{{$post->id}}</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="" src="https://www.w3schools.com/bootstrap5/newyork.jpg">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">
                                            LE TITRE 2
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="https://dp-www.s3.ensam.eu/public/2016-11/pdf.pdf">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    {{-- <div class="m">{{$post->id}}</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="" src="https://www.w3schools.com/bootstrap5/sanfran.jpg">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">
                                            LE TITRE 3
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="https://dp-www.s3.ensam.eu/public/2016-11/pdf.pdf">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <h2>Nos perspectives</h2>
                        <div class="small-border"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    {{-- <div class="m">{{$post->id}}</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="" src="{{asset('images/misc/perspective1.jpg')}}">
                                </div>
                                <div class="post-text">
                                    <h4><a href="">
                                        Développement Durable
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="https://dp-www.s3.ensam.eu/public/2016-11/pdf.pdf">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    {{-- <div class="m">{{$post->id}}</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="developpement" src="{{asset('images/misc/developpement.jpg')}}">                                </div>
                                <div class="post-text">
                                    <h4><a href="">
                                        Développement Rural
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="https://dp-www.s3.ensam.eu/public/2016-11/pdf.pdf">Télécharger</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    {{-- <div class="m">{{$post->id}}</div> --}}
                                </div>
                                <div class="post-image">
                                    <img alt="sécurité alimentaire" src="{{asset('images/misc/security.jpg')}}">                                </div>
                                <div class="post-text">
                                    <h4><a href="">
                                        Sécurité Alimentaire
                                            <span></span></a></h4>
                                    <span class="p-author"><a
                                            href="https://dp-www.s3.ensam.eu/public/2016-11/pdf.pdf">Télécharger</a></span>
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
