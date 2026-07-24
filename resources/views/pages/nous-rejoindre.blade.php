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
                            <h2 style="border-bottom-color:white">Nous rejoindre</h2>
                        </div>
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="section-join">
            <div class="container join-layout">
                <div class="join-intro text-center">
                    <span class="eyebrow">Carrières & bénévolat</span>
                    <h2 class="section-title">Nous rejoindre</h2>
                    <div class="small-border"></div>
                    <p class="section-intro">Rejoignez une équipe engagée au service des communautés et des opportunités durables.</p>
                </div>

                <div class="join-grid">
                    <article class="join-card join-card--highlight">
                        <div class="join-icon">
                            <i class="icofont-group"></i>
                        </div>
                        <div class="join-content">
                            <span class="join-pill">Candidature spontanée</span>
                            <h3>
                                <a href="{{ route('nous-rejoindre-details', [1]) }}">
                                    Candidature spontanée
                                </a>
                            </h3>
                            <p>Envoyez votre profil pour être considéré sur les prochaines opportunités du réseau.</p>
                            <div class="join-meta">
                                <span>Date fin : RAS</span>
                                <a href="{{ route('nous-rejoindre-details', [1]) }}" class="join-cta">Soumettre</a>
                            </div>
                        </div>
                    </article>

                    @foreach ($offers as $offer)
                    <article class="join-card">
                        <div class="join-icon">
                            <i class="icofont-briefcase-2"></i>
                        </div>
                        <div class="join-content">
                            <span class="join-pill">Offre disponible</span>
                            <h3>
                                <a href="{{ route('nous-rejoindre-details', [$offer->id]) }}">
                                    {{ $offer->title }}
                                </a>
                            </h3>
                            <p>Découvrez les missions, les attentes et postulez à l’offre qui correspond à votre profil.</p>
                            <div class="join-meta">
                                <span>Date fin : {{ $offer->end_date ?? 'RAS' }}</span>
                                <a href="{{ route('nous-rejoindre-details', [$offer->id]) }}" class="join-cta">Postuler</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>


    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
