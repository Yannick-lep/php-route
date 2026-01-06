<?php
include 'functions.php';
require 'routes.php';

//$page =isset($GET['page]) ? $_GET['page] : 'home';
//$page = $_GET['page'] ?? 'home';
$pageFiltre = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$page = $pageFiltre ?? 'home';

if (!array_key_exists($page,$routes)){
   redirect('404.php');
}

// redirect($routes[$page]);
require $routes[$page];
die();
