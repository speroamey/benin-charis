@extends('layout.master')

@section('page-content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-white" style="background-color: rgb(0 54 74 / 90%)">
            <img src="images/background/subheader4.jpg" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>Nous Contacter</h1>
                            <p>Réputation. Respect. Resultat.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        {{-- style="background-color: rgb(0 54 74 / 90%);" --}}
        <section aria-label="section" class="text-light" data-bgcolor="#FFB000">
            <div class="container" style="margin-top: 80px;">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- <img src="images/misc/p3.jpg" alt="" class="img-fluid mb30"> -->
                        <h3>Nos Cordonnées</h3>
                        <address class="s1">
                            <h3>LaJoy SARL UNIPERSONNEL</h3>
                            <span><i class="id-color fa fa-map-marker fa-lg"></i>Riviéra 4, Abidjan, Côte d'Ivoire</span>
                            <span> <a href="tel:+225 07 89 71 64 24"><i class="id-color fa fa-phone fa-lg"></i>+225 07 89 71 64 24</a> </span>
                            <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:info@lajoyconsulting.com">info@lajoyconsulting.com</a></span>
                            <!-- <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                        </address>
                    </div>
                    <div class="col-lg-8  mb-sm-30 text-center">
                        <h3>Avez vous des Questions?</h3>
                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
                            <div class="field-set">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Votre Nom" />
                            </div>
                            <div class="field-set">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Votre adresse email" />
                            </div>
                            <div class="field-set">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Votre numéro de téléphone" />
                            </div>
                            <div class="field-set">
                                <textarea name="message" id="message" class="form-control" placeholder="Votre Message"></textarea>
                            </div>
                            <div class="spacer-half"></div>
                            <div id="submit">
                                <input type="submit" id="send_message" value="Valider" class="btn btn-primary" />
                            </div>
                            <div id="mail_success" class="success">Votre message a été envoyé avec succès.</div>
                            <div id="mail_fail" class="error">Désolé, une erreur s'est produite lors de l'envoie du message.</div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <section id="section-text" data-bgcolor="#111111" class="text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                        <div class="de_count ultra-big s2 text-center">
                            <h3 class="timer" data-to="15" data-speed="1000">15</h3>
                            <span class="id-color">Années d'Expérience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <span class="p-title">Bienvenu</span><br>
                        <h2>LaJoy est votre Meilleur Partenaire  Solutions</h2>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
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
