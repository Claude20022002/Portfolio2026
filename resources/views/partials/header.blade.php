<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <!--
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('img/logo.png') }}" alt="">

                <h1 class="sitename">Lk Code</h1>
            </a>
            -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                </li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">A
                        propos</a>
                </li>
                <li><a href="{{ route('resume') }}"
                        class="{{ request()->routeIs('resume') ? 'active' : '' }}">Curriculum
                        vitae</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Mes
                        services</a></li>
                <li>
                    <a href="{{ route('portfolio') }}"
                        class="{{ request()->routeIs('portfolio') || request()->routeIs('portfolio-details') ? 'active' : '' }}">
                        Mes projets
                    </a>
                </li>
                <li class="dropdown"><a href="#"><span>Mes compétences</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li class="dropdown"><a href="#"><span>CSS</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">MySQL</a></li>
                                <li><a href="#">React</a></li>
                                <li><a href="#">React Native</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Node.js</a></li>
                        <li><a href="#">Express</a></li>
                        <li><a href="#">MongoDB</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Me
                        contacter</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="https://www.instagram.com/claudia.lusamote?igsh=bTh2ZzE0Ymppazcz" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/claudia-lusamote-kimfuta-271b512a8?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Claude20022002" class="github"><i class="bi bi-github"></i></a>
            <a href="https://www.facebook.com/share/1LAWsnW3oS/?mibextid=wwXIfr" class="facebook"><i
                    class="bi bi-facebook"></i></a>
        </div>

    </div>
</header>