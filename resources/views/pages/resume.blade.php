@extends('layouts.app')
@section('title', 'Curriculum vitae')
@section('description', 'Curriculum vitae')
@section('keywords', 'Curriculum vitae')
@section('content')

<!-- Resume Section -->
<section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Curriculum vitae</h2>
        <p>Parcours académique, expériences professionnelles et compétences de LUSAMOTE KIMFUTA Claudia.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-6">

                <!-- Education Section -->
                <div class="resume-item" data-aos="fade-up">
                    <h3 class="resume-title">Formations</h3>

                    <div class="resume-content">
                        <article class="education-item">
                            <h4>1ère année Cycle Ingénieur d'État – Ingénierie Informatique</h4>
                            <h5>2025 - 2026</h5>
                            <p class="institution"><em>HESTIM, Casablanca, Maroc</em></p>
                        </article>

                        <article class="education-item">
                            <h4>Classes préparatoires en Ingénierie Informatique</h4>
                            <h5>2023 - 2025</h5>
                            <p class="institution"><em>HESTIM, Casablanca, Maroc</em></p>
                        </article>

                        <article class="education-item">
                            <h4>Baccalauréat Scientifique, option Mathématiques</h4>
                            <h5>2021 - 2022</h5>
                            <p class="institution"><em>Lycée d'État — Gabon</em></p>
                        </article>
                    </div>
                </div><!-- End Education Section -->

                <!-- Professional Skills Section -->
                <div class="resume-item skills-animation" data-aos="fade-up">
                    <h3 class="resume-title">Compétences techniques</h3>

                    <div class="resume-content">
                        <div class="skill-item">
                            <h4>Développement Front-end (HTML, CSS, JavaScript, React)</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <h4>Développement Back-end (Node.js, Express, PHP, Laravel)</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <h4>Bases de données (MySQL, Oracle, MongoDB, Access)</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <h4>Outils & environnement (VS Code, Postman, Cisco Packet Tracer)</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Professional Skills Section -->
            </div>

            <div class="col-lg-6">
                <!-- Experience Section -->
                <div class="resume-item" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Expériences professionnelles</h3>

                    <div class="resume-content">
                        <article class="experience-item">
                            <h4>Assistant Logistique & Support Informatique</h4>
                            <h5>Septembre 2025</h5>
                            <p class="company"><em>AMBITION 28</em></p>
                            <ul>
                                <li>Participation à l'organisation logistique d'un événement avec des acteurs
                                    institutionnels.</li>
                                <li>Mise en place de solutions d'automatisation avec une équipe IT.</li>
                                <li>Support technique et coordination opérationnelle sur site.</li>
                            </ul>
                        </article>

                        <article class="experience-item">
                            <h4>Stagiaire en Robotique – Vision IA</h4>
                            <h5>Juillet 2025</h5>
                            <p class="company"><em>HESTIM FabLab</em></p>
                            <ul>
                                <li>Mise en service de robots collaboratifs (MyCobot280 pi, UltraArm P340).</li>
                                <li>Conception de scénarios robotiques avec vision par ordinateur.</li>
                                <li>Gestion de données liées aux expérimentations.</li>
                            </ul>
                        </article>

                        <article class="experience-item">
                            <h4>Téléprospectrice</h4>
                            <h5>Juin – Juillet 2024</h5>
                            <p class="company"><em>MD CALLCENTER</em></p>
                            <ul>
                                <li>Réalisation de campagnes d'appels pour la promotion de services auprès de
                                    propriétaires.</li>
                                <li>Mise à jour et suivi d'une base de données clients.</li>
                            </ul>
                        </article>

                        <article class="experience-item">
                            <h4>Membre actif – HIC Code Masters</h4>
                            <h5>2023 – 2025</h5>
                            <p class="company"><em>HESTIM Clubs</em></p>
                            <ul>
                                <li>Participation à des projets collaboratifs pour approfondir les compétences en
                                    programmation.</li>
                                <li>Découverte et expérimentation de nouveaux langages et outils.</li>
                            </ul>
                        </article>

                        <article class="experience-item">
                            <h4>Aide technicien</h4>
                            <h5>Février – Août 2023</h5>
                            <p class="company"><em>STI Company</em></p>
                            <ul>
                                <li>Soutien aux techniciens pour l'entretien d'équipements industriels (réacteurs,
                                    ballons, capacités).</li>
                                <li>Réalisation de tâches techniques spécifiques (ex. sablage) en équipe.</li>
                            </ul>
                        </article>
                    </div>
                </div><!-- End Experience Section -->
            </div>
        </div>

        <!-- Certifications Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="resume-item" data-aos="fade-up">
                    <h3 class="resume-title">Certifications</h3>
                    <div class="resume-content row g-3">

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Introduction-to-web-development.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Introduction to Web Development</h4>
                                    <p class="institution"><em>Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Programming-foundations-with_javascript-html-and-css.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Programming Foundations with JavaScript, HTML and CSS</h4>
                                    <p class="institution"><em>Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-React-basics.pdf') }}" target="_blank"
                                class="text-decoration-none">
                                <article class="education-item">
                                    <h4>React Basics</h4>
                                    <p class="institution"><em>Meta / Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Advanced-react.pdf') }}" target="_blank"
                                class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Advanced React</h4>
                                    <p class="institution"><em>Meta / Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Developing-back-end-apps-with-nodejs-and-express.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Developing Back-End Apps with Node.js and Express</h4>
                                    <p class="institution"><em>IBM / Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-The-structured-query-language-sql.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>The Structured Query Language (SQL)</h4>
                                    <p class="institution"><em>Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Relational-database-design.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Relational Database Design</h4>
                                    <p class="institution"><em>Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Introduction-to-python-programming.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Introduction to Python Programming</h4>
                                    <p class="institution"><em>Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('certificates/Coursera-Work-smarter-with-microsoft-word.pdf') }}"
                                target="_blank" class="text-decoration-none">
                                <article class="education-item">
                                    <h4>Work Smarter with Microsoft Word</h4>
                                    <p class="institution"><em>Coursera</em></p>
                                </article>
                            </a>
                        </div>

                        <div class="col-12">
                            <p class="mt-2">
                                + d'autres certifications (réseaux, data, gestion de projet…) complètent ce parcours et
                                seront ajoutées prochainement.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="150">
            <a href="{{ asset('others/Curriculum-Vitae.pdf') }}" class="btn btn-primary" target="_blank">
                Télécharger mon CV (PDF)
            </a>
        </div>

    </div>

</section><!-- /Resume Section -->
@endsection