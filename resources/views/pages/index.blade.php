@extends('layouts.app')
@section('title', 'Accueil')
@section('description', 'Accueil')
@section('keywords', 'Accueil')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="hero-content">
                    <h1 data-aos="fade-up" data-aos-delay="200">je suis <span class="highlight">KIMFUTA
                            Claudia</span></h1>
                    <h2 data-aos="fade-up" data-aos-delay="300">Développeur Web & Mobile <span class="typed"
                            data-typed-items="React • Node.js, React Native"></span>
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="400">Je transforme des idées en applications fiables
                        et élégantes. De React sur le frontend à Node.js sur le backend, et le développement
                        mobile avec React Native, je construis des projets robustes conçus pour durer et
                        évoluer.</p>
                    <div class="hero-actions" data-aos="fade-up" data-aos-delay="500">
                        <a href="{{ route('portfolio') }}" class="btn btn-primary">Voir mes travaux</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline">Me contacter</a>
                    </div>
                    <div class="social-links" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://www.instagram.com/claudia.lusamote?igsh=bTh2ZzE0Ymppazcz"><i
                                class="bi bi-instagram"></i></a>
                        <a
                            href="https://www.linkedin.com/in/claudia-lusamote-kimfuta-271b512a8?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="https://github.com/Claude20022002"><i class="bi bi-github"></i></a>
                        <a href="https://www.facebook.com/share/1LAWsnW3oS/?mibextid=wwXIfr"><i
                                class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="hero-image" data-aos="zoom-in" data-aos-delay="300">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/profile/profile-square-11.webp') }}" alt="Sarah Mitchell"
                            class="img-fluid">
                        <div class="floating-elements">
                            <div class="floating-card design" data-aos="fade-left" data-aos-delay="700">
                                <i class="bi bi-braces-asterisk"></i>
                                <span>Développement</span>
                            </div>
                            <div class="floating-card code" data-aos="fade-right" data-aos-delay="800">
                                <i class="bi bi-palette"></i>
                                <span>Design</span>
                            </div>
                            <div class="floating-card creativity" data-aos="fade-up" data-aos-delay="900">
                                <i class="bi bi-lightbulb"></i>
                                <span>Idées</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Hero Section -->
@endsection