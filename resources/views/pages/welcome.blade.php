@extends('layout.master')


@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="section-slider" class="fullwidthbanner-container text-white" aria-label="section-slider">
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10"
                            src="{{ asset('images/background/Banner-web-axe-2.png') }}">

                        <div class="tp-caption very-big-white"
                            data-x="['0','0','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['220','180','center','center']"
                            data-voffset="['0','0','0','0']"
                            data-width="['720','580','420','300']"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;"
                            data-start="600"
                            data-splitin="none"
                            data-splitout="none"
                            data-responsive_offset="on"
                            style="background: rgba(0,0,0,0.45); padding: 28px 32px; border-radius: 24px;">

                            <h1 style="font-size: clamp(1.4rem, 4vw, 3.6rem); line-height: 1.1;
                                    margin-bottom: 1rem; text-align: center;">
                                Agriculture et élevage intelligents au climat
                            </h1>
                            <p class="lead xs-hide"
                            style="font-size: clamp(0.85rem, 2vw, 1.05rem); line-height: 1.8;
                                    margin-bottom: 1.5rem; text-align: center;">
                                Promotion des pratiques agroécologiques, agriculture résiliente face aux changements climatiques, formation et accompagnement des producteurs, sites de démonstration et innovation rurale.
                            </p>
                            <a class="btn-custom btn-green" href="{{ url('nous-contacter') }}"
                            style="padding: 1rem 2rem; font-size: 0.98rem; letter-spacing: 0.12em;
                                    display: block; text-align: center; width: fit-content; margin: 0 auto;">
                                Nous soutenir
                            </a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" src="{{ asset('images/background/Banner-web-axe-1.png') }}">
                        <div class="tp-caption very-big-white"
                            data-x="['0','0','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['220','180','center','center']"
                            data-voffset="['0','0','0','0']"
                            data-width="['720','580','420','380']"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;"
                            data-start="600"
                            data-splitin="none"
                            data-splitout="none"
                            data-responsive_offset="on"
                            style="background: rgba(0,0,0,0.45); padding: 28px 32px; border-radius: 24px;">
                            <h1 style="font-size: clamp(1.4rem, 4vw, 3.6rem); line-height: 1.1; margin-bottom: 1rem; text-align: center;">
                                Nutrition et santé communautaire
                            </h1>
                            <p class="lead xs-hide" style="font-size: clamp(0.85rem, 2vw, 1.05rem); line-height: 1.8; margin-bottom: 1.5rem; text-align: center;">
                                Prévention de la malnutrition, sensibilisation nutritionnelle, appui aux centres communautaires, renforcement des relais communautaires.
                            </p>
                            <a class="btn-custom btn-green" href="{{ url('nous-contacter') }}"
                                style="padding: 1rem 2rem; font-size: 0.98rem; letter-spacing: 0.12em; display: block; text-align: center; width: fit-content; margin: 0 auto;">
                                Nous soutenir
                            </a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                        <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" src="{{ asset('images/background/Banner-web-axe-3.png') }}">
                        <div class="tp-caption very-big-white"
                            data-x="['0','0','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['220','180','center','center']"
                            data-voffset="['0','0','0','0']"
                            data-width="['720','580','420','380']"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                            data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;"
                            data-start="600"
                            data-splitin="none"
                            data-splitout="none"
                            data-responsive_offset="on"
                            style="background: rgba(0,0,0,0.45); padding: 28px 32px; border-radius: 24px;">
                            <h1 style="font-size: clamp(1.4rem, 4vw, 3.6rem); line-height: 1.1; margin-bottom: 1rem; text-align: center;">
                                Autonomisation des femmes et des jeunes par l'entrepreneuriat
                            </h1>
                            <p class="lead xs-hide" style="font-size: clamp(0.85rem, 2vw, 1.05rem); line-height: 1.8; margin-bottom: 1.5rem; text-align: center;">
                                Appui à l'entrepreneuriat, coaching et formation, développement des activités génératrices de revenus, facilitation de l'accès aux marchés.
                            </p>
                            <a class="btn-custom btn-green" href="{{ url('nous-contacter') }}"
                                style="padding: 1rem 2rem; font-size: 0.98rem; letter-spacing: 0.12em; display: block; text-align: center; width: fit-content; margin: 0 auto;">
                                Nous soutenir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="section-devise" class="pt80 pb80 bg-color text-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 text-center text-lg-left">
                        <span class="p-title text-uppercase" style="letter-spacing:0.28em; font-weight:700; opacity:0.9;">Notre devise</span>
                        <h3 class="no-bottom mt-4" style="font-weight:700; letter-spacing:0.08em; font-size: clamp(2rem, 3vw, 3rem); line-height:1.05;">
                            Agir. Vaincre la pauvreté.
                        </h3>
                        <p class="mt-4" style="max-width: 760px; margin: 0 auto 0 0; font-size: 1.05rem; line-height: 1.9; opacity: 0.92;">
                            Ensemble, nous renforçons la dignité des populations vulnérables en menant des actions durables et adaptées qui construisent un avenir plus juste pour tous.
                        </p>
                        <div class="mt-4">
                            <a href="{{ url('nous-contacter') }}" class="btn-custom btn-green" style="min-width: 220px; padding: 1rem 2rem; font-size: 0.98rem; letter-spacing: 0.12em;">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <div class="devise-support-card">
                            <h4 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 1rem; color: #0b3b73;">Contribuons durablement à la réduction de la pauvreté</h4>
                            <p style="font-size: 1rem; line-height: 1.9; color: #42504c; margin-bottom: 2rem;">
                                CHARIS ONG mobilise des actions ciblées pour améliorer les conditions de vie et donner aux communautés les moyens de bâtir un avenir durable.
                            </p>
                            <a href="{{ url('nous-contacter') }}" class="btn-custom btn-white-outline" style="min-width: 180px; padding: 0.95rem 1.8rem; font-size: 0.95rem; letter-spacing: 0.12em;">
                                Nous soutenir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="nos-forces"></div>
        <section id="section-highlight" class="relative">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-4">
                        <span class="p-title text-uppercase" style="letter-spacing:0.2em; font-weight:700;">Nos forces</span><br>

                        <div class="small-border sm-left mt-2"></div>
                    </div>
                    <div class="col-md-8">
                        <p class="lead" style="font-size: 1.05rem; line-height: 1.9; color: #4d4d4d; max-width: 680px; margin: 0 auto 0 0;">
                            Les cofondateurs de CHARIS ONG mettent en commun une expertise terrain, une feuille de route claire et une volonté inébranlable pour générer un impact durable. Nous investissons dans des projets concrets, en phase avec les priorités des communautés, pour transformer des idées en progrès mesurable.
                        </p>
                    </div>
                </div>
                <div class="row g-4 mt-5 text-center text-md-start justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <div style="background:#fff; border-radius:28px; padding:clamp(20px,4vw,32px) clamp(18px,3.5vw,30px); min-height:auto; box-shadow:0 16px 40px rgba(0,0,0,0.06); border:1px solid rgba(15,23,42,0.06);">
                            <div style="width:48px; height:48px; border-radius:16px; margin:0 auto 1rem; display:flex; align-items:center; justify-content:center; background:rgba(11,59,115,0.08);">
                                <i class="icofont-flora" style="color:#0b3b73; font-size:1.25rem;"></i>
                            </div>
                            <h4 style="font-weight:700; margin-bottom:0.85rem; color:#0b3b73; font-size:clamp(1rem,2vw,1.15rem);">Expérience</h4>
                            <p style="color:#6d6d6d; line-height:1.8; font-size:0.95rem;">Une présence reconnue sur le terrain et des actions éprouvées en agriculture, nutrition et autonomisation.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div style="background:#fff; border-radius:28px; padding:clamp(20px,4vw,32px) clamp(18px,3.5vw,30px); min-height:auto; box-shadow:0 16px 40px rgba(0,0,0,0.06); border:1px solid rgba(15,23,42,0.06);">
                            <div style="width:48px; height:48px; border-radius:16px; margin:0 auto 1rem; display:flex; align-items:center; justify-content:center; background:rgba(11,59,115,0.08);">
                                <i class="icofont-eye-alt" style="color:#0b3b73; font-size:1.25rem;"></i>
                            </div>
                            <h4 style="font-weight:700; margin-bottom:0.85rem; color:#0b3b73; font-size:clamp(1rem,2vw,1.15rem);">Vision</h4>
                            <p style="color:#6d6d6d; line-height:1.8; font-size:0.95rem;">Une stratégie ambitieuse pour un développement social durable et une meilleure qualité de vie pour tous.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div style="background:#fff; border-radius:28px; padding:clamp(20px,4vw,32px) clamp(18px,3.5vw,30px); min-height:auto; box-shadow:0 16px 40px rgba(0,0,0,0.06); border:1px solid rgba(15,23,42,0.06);">
                            <div style="width:48px; height:48px; border-radius:16px; margin:0 auto 1rem; display:flex; align-items:center; justify-content:center; background:rgba(11,59,115,0.08);">
                                <i class="icofont-fire-burn" style="color:#0b3b73; font-size:1.25rem;"></i>
                            </div>
                            <h4 style="font-weight:700; margin-bottom:0.85rem; color:#0b3b73; font-size:clamp(1rem,2vw,1.15rem);">Détermination</h4>
                            <p style="color:#6d6d6d; line-height:1.8; font-size:0.95rem;">Une équipe engagée, prête à surmonter les défis pour donner aux familles les moyens de réussir.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div style="background:#fff; border-radius:28px; padding:clamp(20px,4vw,32px) clamp(18px,3.5vw,30px); min-height:auto; box-shadow:0 16px 40px rgba(0,0,0,0.06); border:1px solid rgba(15,23,42,0.06);">
                            <div style="width:48px; height:48px; border-radius:16px; margin:0 auto 1rem; display:flex; align-items:center; justify-content:center; background:rgba(11,59,115,0.08);">
                                <i class="icofont-chart-line" style="color:#0b3b73; font-size:1.25rem;"></i>
                            </div>
                            <h4 style="font-weight:700; margin-bottom:0.85rem; color:#0b3b73; font-size:clamp(1rem,2vw,1.15rem);">Investissement</h4>
                            <p style="color:#6d6d6d; line-height:1.8; font-size:0.95rem;">Des ressources humaines et financières ciblées pour construire des résultats durables et visibles.</p>
                        </div>
                    </div>
                </div>
                <div class="spacer-double"></div>
            </div>
        </section>

        {{-- <section class="no-top relative z1000 bg-light">
            <div class="container">
                <div class="row mt-100">
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">

                                    <a href="{{ route('ce-que-nous-faisons') }}" class="">
                                        <h3><i class="icofont-data"></i><span>Axes Stratégiques</span></h3>
                                        <p class="xs- md-">
                                            Spécialement conçus pour répondre aux différents besoins des
                                         populations.
                                        </p>
                                    </a>
                                    <div class="spacer20"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">

                                    <a href="{{ route('articles') }}" class="">
                                        <h3><i class="icofont-user-alt-1"></i><span>Les dernières nouvelles</span></h3>
                                        <p class="xs- md-">
                                            L'actuailité concernant nos domaines d'activités et actions.</p>
                                    </a>
                                    <div class="spacer20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <a href="{{ route('faq') }}" class="">
                                        <h3><i class="icofont-location-arrow"></i><span>FAQ
                                        </span></h3>
                                        <p class="xs- md-">
                                         La liste exhaustive des questions qui reviennent le plus souvent et leur réponse
                                        </p>
                                    </a>
                                    <div class="spacer20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <section data-bgcolor="#f8fafb" class="text-dark pt80 pb80" id="qui-sommes-nous">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <span class="p-title d-block mb-2" style="letter-spacing:0.18em; font-size:clamp(0.85rem,2vw,1rem);">CHARIS ONG</span>
                        <h2 class="no-bottom" style="font-weight: 700; font-size: clamp(1.8rem, 5vw, 2.8rem); margin: 0 0 1.5rem 0; line-height:1.1;">Qui sommes-nous?</h2>
                        <p class="text-justify" style="line-height: 1.9; color: #4a5568; font-size:clamp(0.9rem,2.2vw,1rem);">
                            CHARIS ONG est une organisation non gouvernementale à but non lucratif, basée à Cotonou, engagée dans la réduction durable de la pauvreté au Bénin à travers des actions à fort impact social, économique et environnemental. Reconnue en 2024 (N°2024/0011/MISP/DC/SHM/DAIC/SACC/SA), elle intervient auprès des communautés rurales sur l'agriculture climato-intelligente, la nutrition communautaire et l'autonomisation des femmes et des jeunes.
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
                            <h3 style="font-size: clamp(1.3rem,3.5vw,1.5rem); font-weight: 700; color: #0f3a72; margin-bottom: 0.5rem;">Nos Trois Axes Stratégiques</h3>
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
                            <h4 class="objective-card__title"> Agriculture et élevage intelligents au climat</h4>
                            <p class="objective-card__text">
                                Promotion des pratiques agroécologiques, agriculture résiliente face aux changements climatiques, formation et accompagnement des producteurs, sites de démonstration et innovation rurale.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="objective-card h-100">
                            <div class="objective-card__icon">
                                <i class="icofont-food-cart"></i>
                            </div>
                            <h4 class="objective-card__title">Nutrition et santé communautaire</h4>
                            <p class="objective-card__text">
                                Prévention de la malnutrition, sensibilisation nutritionnelle, appui aux centres communautaires, renforcement des relais communautaires.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="objective-card h-100">
                            <div class="objective-card__icon">
                                <i class="icofont-briefcase"></i>
                            </div>
                            <h4 class="objective-card__title">Autonomisation des femmes et des jeunes</h4>
                            <p class="objective-card__text">
                                Appui à l'entrepreneuriat, coaching et formation, développement des activités génératrices de revenus, facilitation de l'accès aux marchés.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt80 pb80 bg-light text-dark" id="notre-vision">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                        <div style="max-width: 380px; margin: 0 auto 0 0; text-align: left;">
                            <span class="p-title d-block mb-2" style="letter-spacing:0.18em; font-size:clamp(0.85rem,2vw,1rem);">Notre Vision</span>
                            <h2 class="no-bottom" style="font-weight: 700; font-size: clamp(1.8rem, 5vw, 3rem); margin: 0; line-height:1.1;">Notre Vision</h2>
                            <div class="small-border mt-3" style="width: 70px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div style="max-width: 700px;">
                            <p class="lead" style="font-size: clamp(1rem,2.2vw,1.15rem); line-height: 1.95; color: #2d3748;">
                                    Un monde juste et équitable où toutes les communautés vivent dignement dans un environnement sain, en répondant à leurs besoins présents sans compromettre ceux des générations futures.                            </p>
                            {{-- <p style="font-size: clamp(0.9rem,2vw,1rem); line-height: 1.85; color: #4a5568; margin-top: 1rem;">
                                Nous agissons pour une transformation durable en plaçant l'agriculture résiliente, la nutrition et l'insertion socioéconomique au cœur de nos actions collectives.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt80 pb80" id="notre-mission" style="background: linear-gradient(135deg, #0f6b39 0%, #0c4b72 100%);">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                        <div style="max-width: 380px; margin: 0 auto 0 0; text-align: left;">
                            <span class="p-title d-block mb-2 text-light" style="letter-spacing:0.18em; font-size:clamp(0.85rem,2vw,1rem);">Notre Mission</span>
                            <h2 class="no-bottom text-light" style="font-weight: 700; font-size: clamp(1.8rem, 5vw, 3rem); margin: 0; line-height:1.1;">Notre Mission</h2>
                            <div class="small-border mt-3" style="width: 70px; border-color: rgba(255,255,255,0.7);"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div style="background: rgba(255,255,255,0.96); border-radius: 30px; padding: clamp(24px,5vw,36px) clamp(22px,4vw,32px); box-shadow: 0 24px 48px rgba(0,0,0,0.08);">
                            <p style="font-size: clamp(0.95rem,2.2vw,1.05rem); line-height: 1.9; color: #163f2d; margin-bottom: 0;">
                            CHARIS ONG contribue à la réduction durable de la pauvreté au Bénin en agissant sur trois leviers : la sécurité alimentaire et nutritionnelle, la transition agroécologique, et l'insertion socioéconomique des populations vulnérables, en particulier les femmes et les jeunes.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="nos-services"></div>
        <section id="section-practice-areas" class="pt80 pb80 bg-light text-dark">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2>Groupes cibles</h2>
                        <div class="small-border mx-auto"></div>
                        <p class="section-practice-areas__intro mt-4">
                            CHARIS ONG travaille à impacter positivement les sept (07) groupes cibles suivants :
                        </p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="practice-card wow fadeInRight" data-wow-delay=".2s">
                            <h5 class="practice-card__heading">Communautés rurales</h5>
                            <ul class="practice-card__list">
                                <li>Petits agriculteurs : hommes, femmes et jeunes</li>
                                <li>Éleveurs</li>
                                <li>Communautés exposées aux effets du changement climatique</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="practice-card wow fadeInRight" data-wow-delay=".25s">
                            <h5 class="practice-card__heading">Groupes vulnérables</h5>
                            <ul class="practice-card__list">
                                <li>Enfants</li>
                                <li>Femmes vulnérables</li>
                                <li>Ménages en situation de vulnérabilité nutritionnelle</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="practice-card wow fadeInRight" data-wow-delay=".3s">
                            <h5 class="practice-card__heading">Entrepreneures</h5>
                            <ul class="practice-card__list">
                                <li> Femmes entrepreneuses</li>
                                <li>Jeunes entrepreneurs</li>
                                <li>Groupements et coopératives portées par des femmes ou des jeunes </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section aria-label="section" id="nos-valeurs" class="pt80 pb80 bg-light text-dark">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 style="font-size:clamp(1.6rem,4vw,2.2rem);">Nos valeurs</h2>
                        <div class="small-border mx-auto"></div>
                        <p class="section-practice-areas__intro mt-3" style="font-size:clamp(0.95rem,2vw,1.05rem);">
                            Les valeurs qui guident les actions de CHARIS ONG et renforcent notre engagement auprès des communautés.
                        </p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card h-100">
                            <div class="value-card__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h5 class="value-card__title">Charité</h5>
                            <p class="value-card__text">Engagement à agir avec humanité, solidarité et sens du service au profit des communautés vulnérables.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card h-100">
                            <div class="value-card__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h5 class="value-card__title">Intégrité</h5>
                            <p class="value-card__text">Respect des principes d'éthique, de transparence et de responsabilité dans la gestion et la mise en œuvre des interventions.</p>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="value-card h-100">
                            <div class="value-card__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h5 class="value-card__title">Équité sociale</h5>
                            <p class="value-card__text">
                                Promotion de l'inclusion et de l'égalité des chances, sans discrimination liée au genre, à l'origine ou à la condition sociale.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card h-100">
                            <div class="value-card__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <h5 class="value-card__title">Impact durable</h5>
                            <p class="value-card__text">Recherche de résultats mesurables et pérennes, contribuant à l'amélioration durable des conditions de vie des bénéficiaires.</p>
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <section id="section-articles" class="pt80 pb80 bg-light text-dark">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 style="font-size:clamp(1.6rem,4vw,2.2rem);">Nos Articles</h2>
                        <div class="small-border mx-auto"></div>
                        <p class="section-practice-areas__intro mt-3" style="font-size:clamp(0.95rem,2vw,1.05rem);">
                            Découvrez nos derniers articles et actualités sur nos domaines d'intervention et nos réalisations.
                        </p>
                    </div>
                </div>
                <div class="row g-4">
                    {{-- {{dd($posts)}} --}}
                    @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <article class="article-card h-100">
                            <div class="article-card__image-wrapper">
                                <img alt="{{$post->title}}" src="{{Storage::url($post->image)}}" class="article-card__image">
                                <div class="article-card__date">
                                    {{ $post->created_at->format('d') }}
                                </div>
                            </div>
                            <div class="article-card__body">
                                <h3 class="article-card__title">
                                    <a href="{{ route('article', [$post->id]) }}">{{$post->title}}</a>
                                </h3>
                                <p class="article-card__meta">
                                    {{ $post->created_at->format('d M Y') }}
                                </p>
                                <a href="{{ route('article', [$post->id]) }}" class="article-card__link">
                                    Lire l'article
                                    <i class="fa fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection

@push('custom-scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9QACWaLVsNlAgz4vJJmdSh5XB0Aap2xM&callback=initMap&v=weekly"
        defer></script>
    <script>
        function initMap() {
            const default_cordinate = {
                lat: 5.364256,
                lng: -3.975483
            };
            const map = new google.maps.Map(document.getElementById("default_map"), {
                zoom: 13,
                center: default_cordinate,
            });
            const marker = new google.maps.Marker({
                position: default_cordinate,
                map: map,
            });
            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();
            document.getElementById("select-agency").addEventListener("change", () => {
                geocodeLatLng(geocoder, map, infowindow);
            });
        }

        function geocodeLatLng(geocoder, map, infowindow) {
            const input = document.getElementById("latlng").value;
            const latitude = parseFloat($("select option:selected").data('lat').replace(",", "."));
            const longitude = parseFloat($("select option:selected").data('lng').replace(",", "."));
            const latlngStr = [latitude, longitude];
            const latlng = {
                lat: latitude,
                lng: longitude,
            };
            geocoder
                .geocode({
                    location: latlng
                })
                .then((response) => {
                    if (response.results[0]) {
                        map.setZoom(13);
                        const marker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                        });
                        infowindow.setContent(response.results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert("No results found");
                    }
                })
                .catch((e) => window.alert("Geocoder failed due to: " + e));
        }
        window.initMap = initMap;
        // $(document).ready(function(e) { alert("cool"); });
    </script>
@endpush
