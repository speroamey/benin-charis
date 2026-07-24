

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
                            <h2 style="border-bottom-color:white">Recrutements</h2>
                        </div>
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9 mx-auto">
                            <span class="p-title">Emploi</span><br>
                            <h2>
                                {{$offer->title}}
                                <a href="{{route('formulaire', [$offer->id])}}" class="btn btn-primary">Postuler</a>
                            </h2>
                            <p>
                                {!! $offer->description !!}
                            </p>
                        </div>
                    </div>
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
