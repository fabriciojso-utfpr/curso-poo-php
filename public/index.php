<?php
require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response, array $args) {
    
    return $response;
});