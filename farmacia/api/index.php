<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//archivos requerido para el correcto funcionamiento
require '../vendor/autoload.php';
require 'routes/config/db.php';

$app = new \Slim\App;

//rutas de las API a utilizar
require 'routes/farmacias.php';
require 'routes/usuarios.php';

$app->run();