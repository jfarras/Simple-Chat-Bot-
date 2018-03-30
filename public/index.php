<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../start/main.php';
// Controller
$app->mount('/', new MyApp\MyBotController());


$app->run();