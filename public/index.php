<?php

use Router\Router;

require '../vendor/autoload.php';
require '../routes/Router.php';
// fonction pour appeler le dossier des vue
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
// fonction permettant d'appeler les dossier script telque css/js
define('SCRIPT', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'Controllers\HomeController@index');
$router->get('/posts/:id','Controllers\HomeController@show');

$router->run();