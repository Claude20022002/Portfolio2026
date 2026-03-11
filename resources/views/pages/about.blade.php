@extends('layouts.app')
@section('title', 'A propos')
@section('description', 'A propos')
@section('keywords', 'A propos')
@section('content')

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>A propos</h2>
        <p>Développeuse web & technicienne réseaux junior, déterminée, sérieuse et autonome, prête à devenir un
            élément moteur au sein de votre structure.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Intro + Photo -->
        <div class="row align-items-center justify-content-between gy-5 mb-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="150">
                <div class="intro-content">
                    <span class="eyebrow">Bonjour</span>
                    <h2 class="headline">Bonjour, je suis LUSAMOTE KIMFUTA Claudia, développeuse web &
                        technicienne réseaux junior.</h2>
                    <p class="lead">
                        Je conçois et développe des applications modernes, fiables et évolutives en utilisant
                        React, Node.js, React Native et Laravel. Mon objectif est de transformer des idées en
                        expériences numériques utiles et accessibles.
                    </p>
                    <p>
                        « Déterminée, sérieuse, autonome et consciente du travail qui m'attend, je suis
                        persuadée
                        que je serais un élément moteur au sein de votre structure ! »
                    </p>

                    <div class="cta-group">
                        <a href="{{ route('portfolio') }}"
                            class="{{ request()->routeIs('portfolio') ? 'active' : '' }} btn-ghost">
                            Voir mes travaux <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <a href="{{ asset('others/Curriculum-Vitae.pdf') }}" class="link-underline" target="_blank">
                            Télécharger mon curriculum vitae <i class="bi bi-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="250">
                <figure class="profile-figure text-center text-lg-end">
                    <img src="{{ asset('img/profile/profile-square-11.webp') }}" alt="Portrait of Alex"
                        class="img-fluid profile-photo">
                </figure>
            </div>
        </div>
        <!-- End Intro + Photo -->

        <!-- Skills Grid -->
        <div class="mb-5">
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="120">
                    <div class="skill-item">
                        <i class="bi bi-code-slash"></i>
                        <h3>Développement</h3>
                        <p>Python, Java, PHP, JavaScript, React, React Native, Laravel.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="180">
                    <div class="skill-item">
                        <i class="bi bi-database"></i>
                        <h3>Bases de données</h3>
                        <p>MySQL, Oracle, Microsoft Access, MongoDB.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="skill-item">
                        <i class="bi bi-tools"></i>
                        <h3>Outils</h3>
                        <p>VS Code, Postman, Cisco Packet Tracer, LaTeX, Word.</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-item">
                        <i class="bi bi-clipboard-data"></i>
                        <h3>Soft skills</h3>
                        <p>Autonomie, curiosité, travail en équipe, capacité à apprendre vite.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Skills Grid -->

        <!-- Tech Icons -->
        <div class="mb-5">
            <div class="row g-3 justify-content-center align-items-center">
                @isset($skills)

                @foreach ($skills as $skill)
                <div class="col-3 col-md-2 col-lg-1 text-center" data-aos="fade-up" data-aos-delay="120">
                    <img src="{{ asset('assets/svg/' . $skill['icon']) }}" alt="{{ $skill['name'] }}" class="img-fluid"
                        title="{{ $skill['name'] }}" />
                </div>
                @endforeach
                @endisset
            </div>
        </div>
        <!-- End Tech Icons -->

        <!-- Journey Timeline -->
        <div class="mb-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="120">
                    <article class="timeline-item">
                        <span class="dot"></span>
                        <time>2021 – 2022</time>
                        <h4>Bac Scientifique</h4>
                        <p>Obtention du Baccalauréat Scientifique option Mathématiques au Lycée d'État au Gabon.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="180">
                    <article class="timeline-item">
                        <span class="dot"></span>
                        <time>2023 – 2025</time>
                        <h4>Prépa Ingénierie Informatique</h4>
                        <p>Formation en ingénierie informatique à HESTIM Casablanca. Membre actif du club HIC Code
                            Masters
                            et réalisation de nombreux projets.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
                    <article class="timeline-item">
                        <span class="dot"></span>
                        <time>Juillet 2025</time>
                        <h4>Stage Robotique – HESTIM FabLab</h4>
                        <p>Déploiement d'un système robotique collaboratif avec vision IA. Mise en service de MyCobot280
                            pi
                            et UltraArm P340.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <article class="timeline-item">
                        <span class="dot"></span>
                        <time>2025 – 2026</time>
                        <h4>Cycle Ingénieur d'État</h4>
                        <p>1ère année du cycle Ingénieur d'État à HESTIM Casablanca, en parallèle d'une mission de
                            support
                            informatique et logistique chez Ambition 28.</p>
                    </article>
                </div>
            </div>
        </div>
        <!-- End Journey Timeline -->

        <!-- Quote -->
        <blockquote class="personal-quote text-center mb-5" data-aos="fade-down" data-aos-delay="200">
            <p>Construire des expériences claires et significatives grâce à un code réfléchi et un design discret.
            </p>
        </blockquote>
        <!-- End Quote -->

        <!-- Fun Facts -->
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="120">
                <div class="fact-pill">
                    <i class="bi bi-trophy"></i>
                    <span>Football</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="160">
                <div class="fact-pill">
                    <i class="bi bi-lightning-charge"></i>
                    <span>Judo</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="fact-pill">
                    <i class="bi bi-dribbble"></i>
                    <span>Basketball</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="240">
                <div class="fact-pill">
                    <i class="bi bi-book"></i>
                    <span>Lecture</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="280">
                <div class="fact-pill">
                    <i class="bi bi-geo-alt"></i>
                    <span>Voyages</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="320">
                <div class="fact-pill">
                    <i class="bi bi-file-earmark-code"></i>
                    <span>Documentation</span>
                </div>
            </div>
        </div>
        <!-- End Fun Facts -->

    </div>

</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Compétences</h2>
        <p>Un aperçu de mes compétences techniques acquises à travers mes formations, projets et expériences
            professionnelles.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box">
                    <h3>HTML / CSS</h3>
                    <p>Intégration web, mise en page responsive et design d'interfaces modernes.</p>
                    <span class="text-end d-block">90%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-box">
                    <h3>JavaScript / React</h3>
                    <p>Développement frontend avancé, React JS, React Native et applications SPA.</p>
                    <span class="text-end d-block">80%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="skill-box">
                    <h3>Python</h3>
                    <p>Analyse de données, vision par ordinateur, scripts d'automatisation et gestion de BDD.</p>
                    <span class="text-end d-block">75%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="skill-box">
                    <h3>PHP / Laravel</h3>
                    <p>Développement backend, création d'APIs REST et architecture MVC avec Laravel.</p>
                    <span class="text-end d-block">70%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="skill-box">
                    <h3>Node.js / Express</h3>
                    <p>Développement d'applications backend, routes API et middleware.</p>
                    <span class="text-end d-block">70%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="skill-box">
                    <h3>Bases de données</h3>
                    <p>MySQL, MongoDB, Oracle et Microsoft Access — conception et requêtes avancées.</p>
                    <span class="text-end d-block">75%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <div class="skill-box">
                    <h3>Réseaux</h3>
                    <p>Conception LAN, configuration réseau et simulation sur Cisco Packet Tracer.</p>
                    <span class="text-end d-block">65%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                <div class="skill-box">
                    <h3>Java</h3>
                    <p>Programmation orientée objet, algorithmes et développement d'applications.</p>
                    <span class="text-end d-block">60%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Stats Section -->
<section id="stats" class="stats section dark-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="avatars d-flex align-items-center">
                    <img src="{{ asset('img/profile/profile-square-12.webp') }}" alt="Claudia LUSAMOTE KIMFUTA"
                        class="rounded-circle" loading="lazy">
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row counters">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <h2><span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1"
                                class="purecounter"></span>+</h2>
                        <p>Projets réalisés</p>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <h2><span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                                class="purecounter"></span>+</h2>
                        <p>Certifications obtenues</p>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <h2><span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                class="purecounter"></span></h2>
                        <p>Années de formation tech</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Stats Section -->

@endsection