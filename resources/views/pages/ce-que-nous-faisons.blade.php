@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- Hero Section -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84" style="background: linear-gradient(135deg, rgba(7, 59, 132, 0.82) 0%, rgba(10, 79, 168, 0.88) 100%), url('{{ asset('images/background/Banner-web-axe-1.jpg') }}') center center / cover no-repeat !important;">
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
            <div class="container objectifs-layout">
                <h2 class="section-title">Nos objectifs stratégiques</h2>
                <div class="small-border"></div>
                <p class="section-intro">Nos engagements chiffrés pour la période 2026–2030, axe par axe.</p>

                <div class="tabs-wrap">
                    <input type="radio" name="axe-tabs" id="radio-axe1" class="tab-radio" checked>
                    <input type="radio" name="axe-tabs" id="radio-axe2" class="tab-radio">
                    <input type="radio" name="axe-tabs" id="radio-axe3" class="tab-radio">

                    <div class="tabs">
                        <label class="tab-btn" for="radio-axe1" style="--dot-color: #A3C427;">
                            <span class="dot"></span>
                            Agriculture et élevage intelligents au climat
                        </label>
                        <label class="tab-btn" for="radio-axe2" style="--dot-color: #538BDA;">
                            <span class="dot"></span>
                            Nutrition et santé communautaire
                        </label>
                        <label class="tab-btn" for="radio-axe3" style="--dot-color: #851407;">
                            <span class="dot"></span>
                            Autonomisation des femmes et des jeunes
                        </label>
                    </div>

                    <div class="panels">
                        <div class="panel" id="axe1" style="--accent: #A3C427;">
                            <div class="panel-head">
                                <div class="axis-label">Axe 1 · Agriculture et élevage intelligents au climat</div>
                                <h3>Devenir un acteur structurant de la transition agroécologique au Bénin.</h3>
                            </div>
                            <div class="stat-grid">
                                <div class="stat-card"><div class="num">20</div><div class="label">villages pilotes (6 communes) engagés en pratiques AIC/EIC</div></div>
                                <div class="stat-card"><div class="num">1 000</div><div class="label">producteurs formés aux pratiques résilientes</div></div>
                                <div class="stat-card"><div class="num">20</div><div class="label">sites de démonstration et d'apprentissage</div></div>
                                <div class="stat-card"><div class="num">100</div><div class="label">relais paysans et animateurs formés</div></div>
                            </div>
                        </div>

                        <div class="panel" id="axe2" style="--accent: #538BDA;">
                            <div class="panel-head">
                                <div class="axis-label">Axe 2 · Nutrition et santé communautaire</div>
                                <h3>Renforcer l'accès aux services de santé et la qualité nutritionnelle des ménages.</h3>
                            </div>
                            <div class="stat-grid">
                                <div class="stat-card"><div class="num">50</div><div class="label">centres communautaires appuyés</div></div>
                                <div class="stat-card"><div class="num">12 000</div><div class="label">personnes sensibilisées à la nutrition et à la prévention</div></div>
                                <div class="stat-card"><div class="num">300</div><div class="label">relais communautaires formés et mobilisés</div></div>
                                <div class="stat-card"><div class="num">8</div><div class="label">communes couvertes par des campagnes de détection précoce</div></div>
                            </div>
                        </div>

                        <div class="panel" id="axe3" style="--accent: #851407;">
                            <div class="panel-head">
                                <div class="axis-label">Axe 3 · Autonomisation des femmes et des jeunes</div>
                                <h3>Créer des opportunités d'emploi, d'autonomie économique et d'entrepreneuriat durable.</h3>
                            </div>
                            <div class="stat-grid">
                                <div class="stat-card"><div class="num">500</div><div class="label">jeunes accompagnés dans des parcours d'insertion et d'entrepreneuriat</div></div>
                                <div class="stat-card"><div class="num">50</div><div class="label">groupements de femmes renforcés en AGR</div></div>
                                <div class="stat-card"><div class="num">02</div><div class="label">centres de formation créés pour les jeunes filles et garçons</div></div>
                                <div class="stat-card"><div class="num">100%</div><div class="label">d'accompagnement orienté vers la mise en marché et la durabilité</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Realizations Section -->
        {{-- <section aria-label="section" data-bgcolor="#ffffff" style="padding: clamp(3rem, 8vw, 5rem) 0;">
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
        </section> --}}

        <!-- Perspectives Section -->
        {{-- <section class="section-perspectives">
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
        </section> --}}
    </div>
    <!-- content close -->
@endsection

@push('custom-scripts')
@endpush
