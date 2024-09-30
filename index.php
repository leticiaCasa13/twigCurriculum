<?php
require_once "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false, // Desactivar cache en desarrollo
]);

// Datos del currículo
$education = [
    [
        'degree' => 'Batxillerat',
        'year' => '2000 - 2002',
    ],
    [
        'degree' => 'Primer curso Ciclo Superior Desarrollador de App Web',
        'year' => 'cursando',
    ],
];

$work_experience = [
    [
        'role' => 'Helpdesk',
        'year' => 'Julio 2023 - February 2024',
    ]
];

$learning = [
    ['language' => 'C'],
    ['language' => 'PHP'],
    ['language' => 'TypeScript'],
    ['language' => 'Java'],
];

// Definir las rutas de Bootstrap CSS y JS
$bootstrap_css = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css';
$bootstrap_js = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js';

// Renderizar la plantilla Twig y pasar las variables
echo $twig->render('index.twig', [
    'titulo' => 'CV Leticia',
    'name' => 'Leticia',
    'emoji' => '😊',
    'social_network' => 'Github',
    'social_link' => 'https://www.github.com/leticiaCasa13',
    'education' => $education,
    'work_experience' => $work_experience,
    'learning' => $learning,
    // Pasar las rutas de Bootstrap
    'bootstrap_css' => $bootstrap_css,
    'bootstrap_js' => $bootstrap_js,
]);
?>

