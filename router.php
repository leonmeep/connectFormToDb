<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes =
[
'/' => 'controllers/index.php',
'/response' => 'controllers/response.php',
];


function routeToController($uri, $routes): void
{
if (array_key_exists($uri, $routes)) {
require $routes[$uri];
} else {
abort();
}
}

function abort($code = 404)
{
http_response_code($code);

require "controllers/{$code}.php";

die();

}

routeToController($uri, $routes);