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
                    <i class="bi bi-magic"></i>
                    <span>Minimalism</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="160">
                <div class="fact-pill">
                    <i class="bi bi-headphones"></i>
                    <span>Lo-fi Beats</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="fact-pill">
                    <i class="bi bi-geo-alt"></i>
                    <span>City Walks</span>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="240">
                <div class="fact-pill">
                    <i class="bi bi-brush"></i>
                    <span>Sketching</span>
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
        <h2>Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut
            perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem
            aperiam</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box">
                    <h3>HTML</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    <span class="text-end d-block">90%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-box">
                    <h3>CSS</h3>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                    <span class="text-end d-block">90%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="skill-box">
                    <h3>JavaScript</h3>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor.</p>
                    <span class="text-end d-block">80%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="skill-box">
                    <h3>Photoshop</h3>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                    <span class="text-end d-block">55%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
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
                    <img src="{{ asset('img/person/person-m-2.webp') }}" alt="Avatar 1" class="rounded-circle"
                        loading="lazy">
                    <img src="{{ asset('img/person/person-m-3.webp') }}" alt="Avatar 2" class="rounded-circle"
                        loading="lazy">
                    <img src="{{ asset('img/person/person-f-5.webp') }}" alt="Avatar 3" class="rounded-circle"
                        loading="lazy">
                    <img src="{{ asset('img/person/person-m-5.webp') }}" alt="Avatar 4" class="rounded-circle"
                        loading="lazy">
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row counters">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <h2><span data-purecounter-start="0" data-purecounter-end="185" data-purecounter-duration="1"
                                class="purecounter"></span>+</h2>
                        <p>Nemo enim ipsam</p>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <h2><span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>K</h2>
                        <p>Voluptatem sequi</p>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <h2><span data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="1"
                                class="purecounter"></span>+</h2>
                        <p>Dolor sit consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Stats Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                }
            }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora
                                            entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam
                                            eget nibh et. Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="{{ asset('img/person/person-m-9.webp') }}" class="img-fluid testimonial-img"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore
                                            quem cillum quid cillum eram malis quorum velit fore eram velit sunt
                                            aliqua noster fugiat irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="{{ asset('img/person/person-f-5.webp') }}" class="img-fluid testimonial-img"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint
                                            quorum nulla quem veniam duis minim tempor labore quem eram duis
                                            noster aute amet eram fore quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="{{ asset('img/person/person-f-12.webp') }}" class="img-fluid testimonial-img"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                                            export minim fugiat minim velit minim dolor enim duis veniam ipsum
                                            anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="{{ asset('img/person/person-m-12.webp') }}" class="img-fluid testimonial-img"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->

@endsection