<?php

use Slim\App;
use Slim\Container;
use Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware;

/***
 * The slim documents: http://www.slimframework.com/docs/objects/router.html
 */

// config
$debug = false;
if (defined("DEBUG")) {
    $debug = true;
}

$configuration = [
    'settings' => [
        'debug' => $debug,
        'whoops.editor' => 'sublime',
        'displayErrorDetails' => $debug
    ]
];

$container = new Container($configuration);


$app = new App($container);
$app->add(new WhoopsMiddleware);

$app->get('/', 'App\Controllers\HomeController:index');

$app->run();