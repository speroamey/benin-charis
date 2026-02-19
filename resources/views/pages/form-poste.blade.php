@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" data-bgcolor="#073b84">
            {{-- <img src="images/background/subheader4.jpg" class="jarallax-img" alt=""> --}}
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h2>BÉNIN CHARIS ONG</h2>
                            <p> {{$offer->title ?? $offer['title']}}</p>
                        </div>
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        {{-- style="background-color: rgb(0 54 74 / 90%);" --}}
        <section aria-label="section" class="text-dark" data-bgcolor="#FFFFFF">
            <div class="container" style="margin-top: 10px;">
                <div class="row">

                    <div class="col-lg-8  mb-sm-30 text-center  mx-auto ">
                        <h3>Formulaire de candidature</h3>
                        <form name="contactForm" id="contact_form" class="form-border"
                        action="#"
                        data-action="{{route('contact')}}">
                           @csrf
                           <div class="spacer-half"></div>
                           <div class="field-set">
                               <select name="sexe" id="sexe" class="form-control border-gray text-dark">
                                   <option value="" selected disabled>Votre civilité</option>
                                   @foreach (['Masculin', 'Feminin'] as $key => $value )
                                       <option value="{{$value}}">{{$value}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="spacer-half"></div>
                            <div class="field-set">
                                <input type="text" name="fullname" id="fullname" class="form-control border-gray" placeholder="Votre Nom et prénoms" required/>
                            </div>
                            <div class="field-set">
                                <input type="email" name="email" id="email" class="form-control border-gray text-dark" placeholder="Adresse email?" required/>
                            </div>

                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <input type="number" name="phone" id="phone" class="form-control border-gray" placeholder="Numéro de téléphone" required />
                            </div>

                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <input type="text" name="country" id="country" class="form-control border-gray" placeholder="Votre pays de résidence?" required/>
                            </div>

                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <input type="text" name="state" id="state" class="form-control border-gray" placeholder="Votre ville de résidence" required/>
                            </div>

                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice" class="text-left">Veuillez charger une copie de votre CV</label>
                                <input type="file" name="file_cv" id="file_cv" class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <div class="spacer-half"></div>
                            <div class="field-set">
                                <label for="choice">Veuillez charger les autres documents (Lettre de motivation, etc...) </label>
                                <input type="file" name="file_id[]" id="file_id" multiple class="form-control border-gray" placeholder="Choisir le fichier" required/>
                            </div>
                            <input type="hidden" name="subject" id="subject" value="Candidature">
                            <input type="hidden" name="id" id="form-sejour" value="form-sejour">

                            <div class="spacer-half"></div>
                            <div id="submit">
                                <input type="submit" value="Soumettre le formulaire" class="btn btn-primary" />
                                <div  class="ajax-loader spinner-border text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>

                            </div>
                            <div id="ajax-response" class="alert " role="alert">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

@endsection

@push('custom-scripts')


@endpush
