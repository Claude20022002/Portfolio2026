<?php

use Illuminate\Support\Facades\Route;

$projects = [
    [
        'id' => 1,
        'slug' => 'bibliotheque-en-ligne',
        'title' => "Bibliothèque en ligne",
        'subtitle' => "Application web",
        'category' => 'web',
        'stack' => ['React JS', 'Node.js', 'MongoDB', 'Express', 'MUI', 'Google Books API'],
        'description' => "Application web permettant de rechercher et consulter des livres via l'API Google Books avec une interface moderne et dynamique.",
        'cover' => 'projets/bibliothèque/page1.png',
        'gallery' => [
            'projets/bibliothèque/page1.png',
            'projets/bibliothèque/page2.png',
            'projets/bibliothèque/page3.png',
        ],
        'url' => 'https://github.com/Claude20022002/biblioth-que',
    ],

    [
        'id' => 2,
        'slug' => 'formulaire-login',
        'title' => "Formulaire de connexion",
        'subtitle' => "Projet front-end",
        'category' => 'web',
        'stack' => ['HTML', 'CSS'],
        'description' => "Interface simple de formulaire de connexion conçue avec HTML et CSS pour pratiquer la structuration et la mise en forme d'une page web.",
        'cover' => 'projets/formulaire/page1.jpg',
        'gallery' => [
            'projets/formulaire/page1.jpg',
        ],
        'url' => 'https://github.com/Claude20022002/formulaire_HTML',
    ],

    [
        'id' => 3,
        'slug' => 'greenconvert',
        'title' => "GreenConvert",
        'subtitle' => "Application web de jardinage",
        'category' => 'web',
        'stack' => [
            'React JS',
            'Node.js',
            'MySQL',
            'Express',
            'MUI',
            'CSS',
            'PhpMyAdmin',
            'WampServer',
            'Perenual API',
            'Trefle API'
        ],
        'description' => "Application web centrée sur la gestion et le suivi d'informations liées aux plantes et au jardinage avec intégration d'API externes.",
        'cover' => 'projets/greenconvert/page1.png',
        'gallery' => [
            'projets/greenconvert/page1.png',
            'projets/greenconvert/page2.png',
            'projets/greenconvert/page3.png',
            'projets/greenconvert/page4.png',
            'projets/greenconvert/page5.png',
            'projets/greenconvert/page6.png',
            'projets/greenconvert/page7.png',
            'projets/greenconvert/page8.png',
            'projets/greenconvert/page9.png',
        ],
        'url' => 'https://github.com/Claude20022002/GreenConvert',
    ],

    [
        'id' => 4,
        'slug' => 'myanimelist-clone',
        'title' => "MyAnimeList",
        'subtitle' => "Application web d'anime",
        'category' => 'web',
        'stack' => [
            'React JS',
            'Node.js',
            'MongoDB',
            'Express',
            'MUI',
            'CSS',
            'Axios',
            'Jikan API'
        ],
        'description' => "Application web permettant de rechercher et consulter des informations sur les animes via l'API Jikan avec une interface moderne.",
        'cover' => 'projets/myanime/page1.jpg',
        'gallery' => [
            'projets/myanime/page1.jpg',
            'projets/myanime/page2.jpg',
            'projets/myanime/page3.jpg',
            'projets/myanime/page4.jpg',
            'projets/myanime/page5.jpg',
            'projets/myanime/page6.jpg',
            'projets/myanime/page7.jpg',
            'projets/myanime/page8.jpg',
        ],
        'url' => 'https://github.com/Claude20022002/MyAnime',
    ],

    [
        'id' => 5,
        'slug' => 'weatherplan',
        'title' => "WeatherPlan",
        'subtitle' => "Application météo",
        'category' => 'web',
        'stack' => [
            'HTML',
            'CSS',
            'JavaScript',
            'OpenWeatherMap API',
            'Axios',
            'Framer Motion'
        ],
        'description' => "Application web affichant les informations météorologiques via l'API OpenWeatherMap avec des animations et une interface simple.",
        'cover' => 'projets/weatherplan/page1.png',
        'gallery' => [
            'projets/weatherplan/page1.png',
        ],
        'url' => 'https://github.com/Claude20022002/weatherPlan',
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