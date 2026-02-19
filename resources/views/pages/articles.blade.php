

@extends('layout.master')



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

        <section data-bgcolor="#f2f2f2" class="text-dark" id="qui-sommes-nous">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 offset-lg-5">
                        <span class="p-title">BÉNIN CHARIS ONG</span><br>
                        <h2>
                            Qui sommes-nous?
                        </h2>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p class="text-justify">
                                    BÉNIN CHARIS ONG est une Organisation Non Gouvernementale à but non lucratif et est apolitique. Elle a été créée en 2023 en République du Bénin conformément aux dispositions de la loi du 1er Juillet 1901 et le décret du 16 Août portant création des associations, soutenant les actions du développement durable en général sans distinction de sexe, de race et de religion. Le siège de BÉNIN CHARIS ONG est situé à Cotonou dans le 9ème arrondissement au quartier Kindonou. Est membre de cette organisation toute personne physique qui manifeste un intérêt pour l’organisation. Elle est composée des membres fondateurs, des membres actifs, de sympathisants et de membres d’honneur. L’objectif général est de contribuer durablement à la réduction de la pauvreté au Bénin. De cet objectif général découle quatre objectifs spécifiques que sont :
                                    <ol>
                                        <li>contribuer à la sécurité alimentaire et nutritionnelle;</li>
                                        <li>promouvoir la transition agroécologique et l’économie circulaire;</li>
                                        <li>accompagner l’autonomisation des jeunes et des femmes et</li>
                                        <li>promouvoir l’accès à l’eau potable, l’hygiène et l’assainissement</li>
                                    </ol>

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
