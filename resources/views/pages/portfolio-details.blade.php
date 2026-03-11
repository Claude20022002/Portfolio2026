@extends('layouts.app')
@section('title', $project['title'])
@section('description', $project['subtitle'])
@section('keywords', implode(', ', $project['stack']))
@section('body_class', 'portfolio-details-page')
@section('content')

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ $project['title'] }}</h2>
        <p>{{ $project['subtitle'] }}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="portfolio-details-media">

                    {{-- CORRECTION : affichage du slider uniquement si gallery non vide --}}
                    @if (!empty($project['gallery']))
                    <div class="main-image">
                        <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                            <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 1000,
                                "autoplay": {
                                    "delay": 6000
                                },
                                "effect": "creative",
                                "creativeEffect": {
                                    "prev": {
                                        "shadow": true,
                                        "translate": [0, 0, -400]
                                    },
                                    "next": {
                                        "translate": ["100%", 0, 0]
                                    }
                                },
                                "slidesPerView": 1,
                                "navigation": {
                                    "nextEl": ".swiper-button-next",
                                    "prevEl": ".swiper-button-prev"
                                }
                            }
                            </script>
                            <div class="swiper-wrapper">
                                @foreach ($project['gallery'] as $img)
                                <div class="swiper-slide">
                                    <img src="{{ asset($img) }}" alt="{{ $project['title'] }}" class="img-fluid">
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    {{-- CORRECTION : thumbnails uniquement si gallery a au moins 1 image --}}
                    <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                        <div class="row g-2 mt-3">
                            @foreach (array_slice($project['gallery'], 0, 4) as $thumb)
                            <div class="col-3">
                                <a href="{{ asset($thumb) }}" class="glightbox" title="Aperçu">
                                    <img src="{{ asset($thumb) }}" alt="{{ $project['title'] }}" class="img-fluid">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    {{-- Fallback : affichage de la cover seule --}}
                    <div class="main-image">
                        <img src="{{ asset($project['cover']) }}" alt="{{ $project['title'] }}" class="img-fluid">
                    </div>
                    @endif

                    <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                        @foreach ($project['stack'] as $tag)
                        <span>{{ $tag }}</span>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="portfolio-details-content">
                    <h2 class="project-title">{{ $project['title'] }}</h2>

                    <div class="project-overview">
                        <p class="lead">{{ $project['description'] }}</p>
                    </div>

                    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ route('portfolio') }}" class="btn-view-project">Retour aux projets</a>

                        {{-- CORRECTION : bouton GitHub conditionnel --}}
                        @if (!empty($project['url']))
                        <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="btn-next-project">
                            Voir le projet <i class="bi bi-arrow-right"></i>
                        </a>
                        @else
                        <a href="{{ asset($project['cover']) }}" class="btn-next-project glightbox">
                            Voir l'aperçu <i class="bi bi-arrow-right"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Portfolio Details Section -->

@endsection