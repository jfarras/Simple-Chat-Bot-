<?php
namespace MyApp;
 
use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class MyBotController implements ControllerProviderInterface {
 
  public function connect(Application $app) {
    $factory=$app['controllers_factory'];
    $factory->get('/foo','MyApp\MyBotController::doFoo');
    $factory->get('/','MyApp\MyBotController::home');
    return $factory;
  }
 
  public function home() {
    return 'Hello world';
  }
 
  public function doFoo() {
    return 'Bar';
  }
 }
 