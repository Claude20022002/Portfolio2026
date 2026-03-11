@extends('layouts.app')
@section('title', 'Mes services')
@section('description', 'Mes services')
@section('keywords', 'Mes services')
@section('content')
<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Mes services</h2>
        <p>Ce que je peux apporter à votre projet : développement web & mobile, intégration backend et
            accompagnement technique.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

            <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <div class="service-content">
                        <h3>Développement d’applications web</h3>
                        <p>
                            Conception et développement de sites et applications web modernes avec HTML, CSS,
                            JavaScript,
                            React et Laravel : interfaces responsives, intégration d’API et bonnes pratiques de
                            performance.
                        </p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="bi bi-phone-fill"></i>
                    </div>
                    <div class="service-content">
                        <h3>Développement mobile (React Native)</h3>
                        <p>
                            Création d’applications mobiles multi‑plateformes avec React Native, centrées sur
                            l’expérience
                            utilisateur et la fiabilité, pour transformer une idée en produit utilisable sur le
                            terrain.
                        </p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="bi bi-hdd-network"></i>
                    </div>
                    <div class="service-content">
                        <h3>Backend & bases de données</h3>
                        <p>
                            Mise en place de backends Node.js / Express ou PHP / Laravel, conception de schémas
                            de bases
                            de données (MySQL, Oracle, MongoDB) et intégration d’API sécurisées.
                        </p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                    <div class="service-content">
                        <h3>Réseaux & support technique</h3>
                        <p>
                            Aide à la conception de réseaux LAN (Cisco Packet Tracer), support informatique sur
                            site et
                            accompagnement dans la mise en place de solutions techniques adaptées au contexte.
                        </p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <div class="service-content">
                        <h3>Projets académiques & POC</h3>
                        <p>
                            Réalisation de prototypes, projets scolaires ou preuves de concept : applications
                            météo,
                            bibliothèques en ligne, jeux sérieux, systèmes de détection par vision, etc.
                        </p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="service-content">
                        <h3>Collaboration & vulgarisation</h3>
                        <p>
                            Travail en équipe sur des projets étudiants ou associatifs, partage de connaissances
                            et
                            accompagnement pour rendre les concepts techniques accessibles à tous.
                        </p>
                    </div>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- /Services Section -->

@endsection