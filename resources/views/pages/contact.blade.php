@extends('layouts.app')
@section('title', 'Me contacter')
@section('description', 'Me contacter')
@section('keywords', 'Me contacter')
@section('content')

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Me contacter</h2>
        <p>Vous avez un projet, une idée ou une opportunité de collaboration&nbsp;? Écrivez‑moi, je vous répondrai avec
            plaisir.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                    <h3>Mes coordonnées</h3>
                    <p>Basée à Casablanca, je suis disponible pour des projets à distance ou en présentiel.</p>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Localisation</h4>
                            <p>Bd Ghandi</p>
                            <p>Casablanca, Maroc</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Téléphone</h4>
                            <p>+212 775-127-274</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email</h4>
                            <p>cl.lusamote@hestim.ma</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <h3>Envoyer un message</h3>
                    <p>Remplissez ce formulaire pour me décrire brièvement votre besoin (type de projet, délais,
                        contexte, etc.).</p>

                    <form action="{{ route('contact.submit') }}" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Votre nom" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Votre email"
                                    required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Sujet" required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Votre message"
                                    required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit" class="btn">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section><!-- /Contact Section -->

@endsection