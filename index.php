<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'app/config/db_config.php';

$app = new \Slim\App;


require_once('app/api/users.php');

/*$app->get('/user/{name}', function ($request, $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});*/
$app->run();