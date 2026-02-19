@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073B84">
            <img src="images/background/subheader4.jpg" class="jarallax-img" alt="">
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

        <section style="background-size: cover;">
            <div class="container" style="background-size: cover;">
                <div class="row " style="background-size: cover;">
                    <div class="col-lg-6 col-md-12 mb30 mx-auto" style="background-size: cover;">
                        <div class="f-box f-icon-left f-icon-rounded" style="background-size: cover;">
                            <a href="nous-rejoindre/1">
                                <i class="icofont-group bg-color text-light"></i>
                            </a>
                            <div class="fb-text" style="background-size: cover;">
                                <h4><a href="nous-rejoindre/candidature-spontanee/formulaire">
                                    Candidaure spontanée
                                </a></h4>
                                <span class="text-justify">
                                    Date fin: RAS
                                </span>
                                <span>
                                    <a href="nous-rejoindre/candidature-spontanee/formulaire" class="btn btn-secondary float-right">Soumettre</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    @foreach ($offers as $offer)
                    <div class="col-lg-6 col-md-12 mb30 mx-auto" style="background-size: cover;">
                        <div class="f-box f-icon-left f-icon-rounded" style="background-size: cover;">
                            <a href="nous-rejoindre/1">
                                <i class="icofont-group bg-color text-light"></i>
                            </a>
                            <div class="fb-text" style="background-size: cover;">
                                <h4>
                                    <a href="{{ route('nous-rejoindre-details', [ $offer->id]) }}">
                                        {{ $offer->title }}
                                    </a>
                                </h4>

                                <span class="text-justify">
                                    Date fin: {{$offer->end_date}}
                                </span>
                                <span>
                                    <a href="{{route('nous-rejoindre-details', [$offer->id])}}" class="text-light btn btn-primary float-right">Postuler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </section>


    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
