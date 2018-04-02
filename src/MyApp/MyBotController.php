<?php
namespace MyApp;
 
use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
  
  
class MyBotController implements ControllerProviderInterface {
  
  protected $state;

  public function __construct(){

    $this->state = 0;
  }

  public function connect(Application $app) {
    $factory=$app['controllers_factory'];
    //$factory->get('/ajax','MyApp\MyBotController::doAjax');
    $factory->get('/','MyApp\MyBotController::home');
    
    return $factory;
  }
 
  public function home(Application $app, Request $request) {

    if ( $app['session']->get('messages')==null){
      $this->messages[0]= "Hello! I will ask you some questions ok?";
      $app['session']->set('messages', $this->messages);  
    }
    
    if ($request->get('message')){
        
      if ($this->state == 0) {

        $prov_message = $app['session']->get('messages');
        array_push($prov_message,"What is your name?");
        $app['session']->set('messages', $prov_message);  

        $data = array(
          'success' => true,
          'message' => "What is your name?"
        );

    return $app->json($data);
    }
    }else {
        return $app['twig']->render('index.html', array(
        'title' => 'Bot Test',
        'name' => 'Bot',
        'messages' => $app['session']->get('messages'),
        'enviat' =>  $request->get('message')

    ));
    }
  }
}