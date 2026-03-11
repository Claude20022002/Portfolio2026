<?php

use Illuminate\Support\Facades\Route;

$projects = [
    [
        'id' => 1,
        'slug' => 'greenconvert',
        'title' => "Application web de jardinage",
        'subtitle' => "Projet scolaire",
        'category' => 'web',
        'stack' => ['React', 'API'],
        'description' => "Application web centrée sur la gestion et le suivi d'actions liées au jardinage. Interface responsive, affichage des informations et organisation des écrans.",
        'cover' => 'projets/greenconvert/page1.png',
        'gallery' => [
            'projets/greenconvert/page1.png',
            'projets/greenconvert/page2.png',
            'projets/greenconvert/page3.png',
            'projets/greenconvert/page4.png',
        ],
        'url' => null,
    ],
    [
        'id' => 2,
        'slug' => 'bibliotheque',
        'title' => "Bibliothèque en ligne",
        'subtitle' => "Recherche de livres avec API",
        'category' => 'web',
        'stack' => ['Google Books API', 'JavaScript'],
        'description' => "Recherche et consultation de livres via une API (Google Books). Résultats filtrés, affichage des détails et expérience utilisateur simple.",
        'cover' => 'projets/bibliothèque/page1.png',
        'gallery' => [
            'projets/bibliothèque/page1.png',
            'projets/bibliothèque/page2.png',
            'projets/bibliothèque/page3.png',
        ],
        'url' => null,
    ],
    [
        'id' => 3,
        'slug' => 'weatherplan',
        'title' => "Application météo",
        'subtitle' => "API OpenWeather",
        'category' => 'web',
        'stack' => ['API', 'Front-end'],
        'description' => "Application météo consommant une API (OpenWeather). Recherche par ville et affichage d'informations météo essentielles.",
        'cover' => 'projets/weatherplan/page1.png',
        'gallery' => [
            'projets/weatherplan/page1.png',
        ],
        'url' => null,
    ],
    [
        'id' => 4,
        'slug' => 'react-native',
        'title' => "Application mobile (prototype)",
        'subtitle' => "React Native",
        'category' => 'mobile',
        'stack' => ['React Native', 'Mobile'],
        'description' => "Prototype mobile multi‑plateforme : écrans et navigation orientés expérience utilisateur, avec une base prête pour évoluer.",
        'cover' => 'projets/greenconvert/page2.png',
        'gallery' => [
            'projets/greenconvert/page2.png',
            'projets/greenconvert/page3.png',
        ],
        'url' => null,
    ],
    [
        'id' => 5,
        'slug' => 'lan',
        'title' => "Conception d'un réseau LAN",
        'subtitle' => "Cisco Packet Tracer",
        'category' => 'reseau',
        'stack' => ['Réseau', 'Cisco'],
        'description' => "Conception et déploiement d'un réseau LAN (topologie, adressage, routage/switching) simulé et documenté sur Packet Tracer.",
        'cover' => 'projets/greenconvert/page5.png',
        'gallery' => [
            'projets/greenconvert/page5.png',
            'projets/greenconvert/page6.png',
        ],
        'url' => null,
    ],
    [
        'id' => 6,
        'slug' => 'vision',
        'title' => "Détection de mains par caméra",
        'subtitle' => "Python / Vision",
        'category' => 'data',
        'stack' => ['Python', 'Vision'],
        'description' => "Système de détection de mains en temps réel devant caméra. Travail sur la capture, le traitement et l'affichage des résultats.",
        'cover' => 'projets/myanime/page1.jpg',
        'gallery' => [
            'projets/myanime/page1.jpg',
            'projets/myanime/page2.jpg',
            'projets/myanime/page3.jpg',
        ],
        'url' => null,
    ],
];

$skills = [
    [
        'id' => 1,
        'name' => 'HTML',
        'icon' => 'html.svg',
    ],
    [
    'id' => 2,
    'name' => 'Python',
    'icon' => 'python.svg', 
    ],
    [
    'id' => 3,
    'name' => 'PHP',
    'icon' => 'php.svg',
    ],
    [
    'id' => 4,
    'name' => 'JavaScript',
    'icon' => 'javascript.svg',
    ],
    [
    'id' => 5,
    'name' => 'React',
    'icon' => 'react1.svg',
    ],
    [
    'id' => 6,
    'name' => 'Node.js',
    'icon' => 'nodejs.svg',
    ],
    [
    'id' => 7,
    'name' => 'Express',
    'icon' => 'express.svg',
    ],
    [
    'id' => 8,
    'name' => 'MySQL',
    'icon' => 'mysql.svg',
    ],
    [
    'id' => 9,
    'name' => 'MongoDB',
    'icon' => 'mongodb.svg',
    ],
    [
    'id' => 10,
    'name' => 'GitHub',
    'icon' => 'github.svg',
    ],
    [
    'id' => 11,
    'name' => 'C',
    'icon' => 'C.svg',
    ],
    [
    'id' => 12,
    'name' => 'Mui',
    'icon' => 'mui.svg',
    ],
    [
    'id' => 13,
    'name' => 'Vite',
    'icon' => 'vite.svg',
    ],
    [
    'id' => 14,
    'name' => 'Typescript',
    'icon' => 'typescript.svg',
    ],
    [
    'id' => 15,
    'name' => 'Ubuntu',
    'icon' => 'ubuntu.svg',
    ],
    [
    'id' => 16,
    'name' => 'Java',
    'icon' => 'java.svg',
    ],
    [
    'id' => 17,
    'name' => 'Tailwind CSS',
    'icon' => 'tailwind.svg',
    ],
];



$certifications = [
    [
        "title" => "React Native",
        "institution" => "Meta",
        "date" => "Janvier 2026",
        "certificate" => "/certificates/Coursera-React-Native.pdf",
    ],
    [
        "title" => "Plate-forme de bases de données Oracle",
        "institution" => "LearnQuest",
        "date" => "Janvier 2026",
        "certificate" => "/certificates/Coursera-Oracle-database-platform.pdf",
    ],
    [
        "title" => "Fondamentaux du Project Management",
        "institution" => "Google",
        "date" => "Janvier 2026",
        "certificate" => "/certificates/Coursera-Project-management-foundations.pdf",
    ],
    [
        "title" => "Développement d'applications backend avec Node.js et Express",
        "institution" => "IBM",
        "date" => "Avril 2025",
        "certificate" => "/certificates/Coursera-Developing-back-end-apps-with-nodejs-and-express.pdf",
    ],
    [
        "title" => "React avancé",
        "institution" => "Meta",
        "date" => "Avril 2025",
        "certificate" => "/certificates/Coursera-Advanced-react.pdf",
    ],
    [
        "title" => "Fondations de la programmation avec JavaScript, HTML et CSS",
        "institution" => "Duke University",
        "date" => "Février 2025",
        "certificate" => "/certificates/Coursera-Programming-foundations-with_javascript-html-and-css.pdf",
    ],
    [
        "title" => "Introduction à Java",
        "institution" => "LearnQuest",
        "date" => "Décembre 2024",
        "certificate" => "/certificates/Coursera-Introduction-java.pdf",
    ],
    [
        "title" => "Bases de React",
        "institution" => "Meta",
        "date" => "Novembre 2024",
        "certificate" => "/certificates/Coursera-React-basics.pdf",
    ],
    [
        "title" => "Le langage SQL (Structured Query Language)",
        "institution" => "University of Colorado Boulder",
        "date" => "Juin 2024",
        "certificate" => "/certificates/Coursera-The-structured-query-language-sql.pdf",
    ],
    [
        "title" => "Travailler plus efficacement avec Microsoft Word",
        "institution" => "Microsoft",
        "date" => "Juin 2024",
        "certificate" => "/certificates/Coursera-Work-smarter-with-microsoft-word.pdf",
    ],
    [
        "title" => "Conception de bases de données relationnelles",
        "institution" => "University of Colorado Boulder",
        "date" => "Avril 2024",
        "certificate" => "/certificates/Coursera-Relational-database-design.pdf",
    ],
    [
        "title" => "Introduction à la programmation Python",
        "institution" => "University of Pennsylvania",
        "date" => "Janvier 2024",
        "certificate" => "/certificates/Coursera-Introduction-to-python-programming.pdf",
    ],
    [
        "title" => "Introduction au développement web",
        "institution" => "University of California, Davis",
        "date" => "Novembre 2023",
        "certificate" => "/certificates/Coursera-Introduction-to-web-development.pdf",
    ],
];

Route::get('/', fn () => view('pages.index'))->name('home');
Route::get('/about', function () use ($skills) {
    return view('pages.about', [
        'skills' => $skills
    ]);
})->name('about');
Route::get('/resume', function () use ($certifications) {
    return view('pages.resume', [
        'certifications' => $certifications
    ]);
})->name('resume');
Route::get('/services', fn () => view('pages.services'))->name('services');

// CORRECTION : passage de $id correctement à la vue
Route::get('/services/{id}', function ($id) {
    return view('pages.service-details', compact('id'));
})->name('service-details');

Route::get('/portfolio', function () use ($projects) {
    return view('pages.portfolio', compact('projects'));
})->name('portfolio');

// CORRECTION : recherche par slug en priorité, fallback sur id numérique
Route::get('/portfolio/{id}', function ($id) use ($projects) {
    $project = collect($projects)->firstWhere('slug', $id)
        ?? collect($projects)->firstWhere('id', (int) $id);
    abort_if(!$project, 404);
    return view('pages.portfolio-details', compact('project'));
})->name('portfolio-details');

Route::get('/contact', fn () => view('pages.contact'))->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès!');
})->name('contact.submit');