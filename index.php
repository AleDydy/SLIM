<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
require __DIR__ . '/vendor/autoload.php';
include_once "Classe.php";
include_once "Alunno.php";
include_once "controllers/AlunniController.php";
include_once "controllers/AlunniAPIController.php";


$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});


$app->get('/alunni', 'AlunniController:index');

$app->get('/alunni/{nome}', 'AlunniController:show');

$app->get('/api/alunni', 'AlunniAPIController:index');

$app->get('/api/alunni/{nome}', 'AlunniAPIController:show');


$app->run();