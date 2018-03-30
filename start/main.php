<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();



$app['debug'] = true;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views'
));

$app->register(new Silex\Provider\SessionServiceProvider(), array(
    'session.storage.handler' => null
));

$app->register(new Silex\Provider\RoutingServiceProvider());


return $app;
