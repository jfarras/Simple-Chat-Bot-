<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

// Main route

$messages = [];
$messages[0] = 'Hello! I will ask you some questions ok?';
$app['session']->set('messages', $messages);

$app->get('/', function (Application $app, Request $request) {
    $type = $request->get('message');

    
    if ($request->get('message')){
        
        
        $data = array(
        'success' => true,
        'message' => 'test'
        
    );

    return $app->json($data);
    }
    else {
        
        return $app['twig']->render('index.html', array(
        'title' => 'Bot Test',
        'name' => 'Bot',
        'messages' => $app['session']->get('messages'),
        'enviat' =>  $request->get('message')

    ));
    }
});

$app->put('/blog/', function ($id) {
    // ...
});

/*
$app->get('/', function (Application $app, Request $request) {
    return $app['twig']->render('index.html', array(
        'title' => 'Bot Test',
        'name' => 'Bot',
        'messages' => $app['session']->get('messages')
    ));
});



---- example on how to return json -----
$app->get('/', function (Application $app, Request $request) {
    $data = array(
        'success' => true,s
        'message' => 'test'
    );
    return $app->json($data);
});

-- example on how to use session
$app['session']->set('data', $value);
$app['session']->get('data');
*/
