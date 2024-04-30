<?php
// define('BASE_URL', 'http://localhost/Tukdo.com/');

$request = $_SERVER['REQUEST_URI'];

// $request = str_replace(BASE_URL, '', $request);

// echo $request;

$viewDir = '/view/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/home':
        require __DIR__ . $viewDir . 'view/home.php';
        break;

    case '/blog':
        require __DIR__ . $viewDir . 'blog.php';
        break;

    case '/products':
        require __DIR__ . $viewDir . 'products.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
