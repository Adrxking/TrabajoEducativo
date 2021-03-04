<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/libros', 'App\Controllers\librosController:getAll');
$app->get('/api/libros/new', 'App\Controllers\librosController:new');
