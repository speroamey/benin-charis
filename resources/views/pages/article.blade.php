

@extends('layout.master')



@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" style="background-color: #073B84">
            <!-- <img src="images/background/subheader3.jpg" class="jarallax-img" alt=""> -->
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>Article</h1>
                            <p>{{$post->title}}</p>
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
                    <div class="col-md-8">
                        <blockquote>
                            {{ $post->title}}
                         </blockquote>
                            <div class="blog-read">
                                <img alt="" src="images/news/5.jpg" class="img-fullwidth">
                                <div class="post-text">
                                    {!! $post->body  !!}
                                </div>
                            </div>

                    </div>
                    <div id="sidebar" class="col-md-4">
                        {{-- <div class="widget widget-post">
                            <h4>Autres Sujets</h4>
                            <div class="small-border"></div>
                            <ul>
                                <li><span class="date">01</span><a href="{{route('blog','marketing-par-les-donnees')}}">Marketing par les données</a></li>
                                <li><span class="date">02</span><a href="{{route('blog','le-marketing-de-donnees')}}">Marketing de données</a></li>
                                <li><span class="date">03 </span><a href="{{route('blog','le-marketing-et-la-communication')}}">Marketing & Communication</a></li>
                                <li><span class="date">04 </span><a href="{{route('blog','la-transformation-digitale-gestion-du-changement')}}">Transformation digitale, gestion du changement</a></li>
                                <li><span class="date">05</span><a href="{{route('blog','femmes-leaders-dans-l-economie-ivoirienne')}}">Femmes leaders dans l’économie ivoirienne</a></li>
                                <li><span class="date">06</span><a href="{{route('blog','l-innovation-disruptive')}}">L'innovation disruptive</a></li>

                            </ul>
                        </div> --}}
                        <div class="widget widget-text">
                            <h4>A Propos</h4>
                            <div class="small-border"></div>
                            BÉNIN CHARIS ONG est une Organisation Non Gouvernementale à but non lucratif et est apolitique. Elle a été créée en 2023 en République du Bénin conformément aux dispositions de la loi du 1er Juillet 1901 et le décret du 16 Août portant création des associations, soutenant les actions du développement durable en général sans distinction de sexe, de race et de religion. Le siège de BÉNIN CHARIS ONG est situé à Cotonou dans le 9ème arrondissement au quartier Kindonou. Est membre de cette organisation toute personne physique qui manifeste un intérêt pour l’organisation. Elle est composée des membres fondateurs, des membres actifs, de sympathisants et de membres d’honneur. L’objectif général est de contribuer durablement à la réduction de la pauvreté au Bénin. De cet objectif général découle quatre objectifs spécifiques que sont :
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
