@extends('layouts.app')
@section('title', 'Mes projets')
@section('description', 'Sélection de projets web, mobile, réseau et data.')
@section('keywords', 'portfolio, projets, web, mobile, réseau, data')
@section('body_class', 'portfolio-page')
@section('content')

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Mes projets</h2>
        <p>Sélection de projets académiques et personnels : web, mobile, réseau et data, développés durant mon parcours
            à HESTIM et en auto‑formation.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                <li data-filter="*" class="filter-active">Tous</li>
                <li data-filter=".filter-web">Web</li>
                <li data-filter=".filter-mobile">Mobile</li>
                <li data-filter=".filter-reseau">Réseau & Infra</li>
                <li data-filter=".filter-data">Données & IA</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $project['category'] }}">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="{{ asset($project['cover']) }}" alt="{{ $project['title'] }}" class="img-fluid">
                            <div class="portfolio-overlay">
                                {{-- CORRECTION : fallback sécurisé sur cover si gallery est vide --}}
                                @php($lightbox = $project['gallery'][1] ?? $project['gallery'][0] ?? $project['cover'])
                                <a href="{{ asset($lightbox) }}" class="glightbox portfolio-lightbox" title="Aperçu">
                                    <i class="bi bi-plus"></i>
                                </a>
                                <a href="{{ route('portfolio-details', ['id' => $project['slug']]) }}"
                                    class="portfolio-details-link" title="Voir les détails">
                                    <i class="bi bi-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h4>{{ $project['title'] }}</h4>
                            <p>{{ $project['subtitle'] }}</p>
                            <div class="portfolio-tags">
                                @foreach ($project['stack'] as $tag)
                                <span>{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- End Portfolio Items Container -->

        </div><!-- End isotope-layout -->

    </div>

</section><!-- /Portfolio Section -->

@endsection