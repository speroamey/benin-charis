

@extends('layout.master')



@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84" style="background: linear-gradient(135deg, rgba(7, 59, 132, 0.82) 0%, rgba(10, 79, 168, 0.88) 100%), url('{{ asset('images/background/Banner-web-axe-1.jpg') }}') center center / cover no-repeat !important;">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <div class="col-md-5 mb-sm-30 text-lg-center text-sm-center mx-auto my-aut"  data-bgcolor="#073B84">
                                <h2 style="border-bottom-color:white">Dernières nouvelles</h2>
                            </div>
                            {{-- <p>Réputation. Respect. Resultat.</p> --}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Nos Articles</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">{{$post->id}}</div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="" src="{{Storage::url($post->image)}}">
                                    </div>
                                    <div class="post-text">
                                        <h4><a href="{{ route('article', [$post->id]) }}">
                                                {{$post->title}}
                                                <span></span></a></h4>
                                        <span class="p-author"><a
                                                href="{{ route('article', [$post->id]) }}">Lire l'article</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row  ">
                    <ul class="pagination">
                        <li><a href="{{$posts->previousPageUrl()}}">Préc.</a></li>
                        @for($i=1;$i<=$posts->lastPage();$i++)
                            <li class="{{ ($posts->currentPage() == $i) ? 'active' : '' }}">
                                <a href="{{$posts->url($i)}}">{{$i}}</a>
                            </li>
                        @endfor
                        <li><a href="{{$posts->nextPageUrl()}}">Suiv.</a></li>
                    </ul>

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
