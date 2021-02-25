<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/editores', 'App\Controllers\editoresController:getAll');
$app->get('/api/editores/new', 'App\Controllers\editoresController:new');