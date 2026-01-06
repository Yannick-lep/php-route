<?php
include 'functions.php';

$page = $_GET['page'] ?? 'home';

$routes = [
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php'
];

if (!array_key_exists($page,$routes)){
   redirect('404.php');
}

redirect($routes[$page]);
