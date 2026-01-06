<?php
include 'functions.php';
require 'routes.php';

//$page =isset($GET['page]) ? $_GET['page] : 'home';
//$page = $_GET['page'] ?? 'home';
$pageFiltre = filter input(INPUT GET, 'page', FILTER SANITIZE FULL SPECIAL CHARS);
$page = $pageFiltre ?? 'home';

if (!array_key_exists($page,$routes)){
   redirect('404.php');
}

redirect($routes[$page]);
