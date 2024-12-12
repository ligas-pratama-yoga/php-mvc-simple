<?php 

function base_path($path){
    return dirname(__DIR__) . "/$path";
}
function views($view, $variables){
    extract($variables);
    require base_path("views/$view.php");
}

function findViewOrAbort($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require base_path("controllers/$routes[$uri].php");
    } else {
        echo "404";
    }
}