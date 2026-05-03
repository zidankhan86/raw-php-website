<?php

$request = $_GET['page'] ?? 'home';

$routes = [
    'home' => BASE_PATH . '/app/pages/home.php',
    'about' => BASE_PATH . '/app/pages/about.php',
    'contact' => BASE_PATH . '/app/pages/contact.php',
];

include BASE_PATH . '/includes/header.php';
include BASE_PATH . '/includes/navbar.php';

if(array_key_exists($request, $routes)){
    include $routes[$request];
} else {
    include BASE_PATH . '/app/pages/404.php';
}

include BASE_PATH . '/includes/footer.php';