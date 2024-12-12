<?php 

require dirname(__DIR__) . "/helper/functions.php";

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    "/" => "index",
    "/about" => "about",
    "/contact" => "contact",
    "/info" => "info",
];

findViewOrAbort($uri, $routes);