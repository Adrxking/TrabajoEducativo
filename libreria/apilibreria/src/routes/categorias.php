<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/categorias', 'App\Controllers\categoriasController:getAll');
$app->get('/api/categorias/new', 'App\Controllers\categoriasController:new');
