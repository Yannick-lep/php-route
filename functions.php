<?php
define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT']  . "/php-route");
define("WEB_ROOT", "/php-route");

function dg($data)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
};

function dd($data)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
    die();
};

function redirect($url) {
    header("Location: " . WEB_ROOT . '/' . $url);
    exit;
}