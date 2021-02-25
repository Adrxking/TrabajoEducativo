<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();

require __DIR__ . '/../../src/routes/libros.php';
require __DIR__ . '/../../src/routes/categorias.php';
require __DIR__ . '/../../src/routes/editores.php';


$app->run();
