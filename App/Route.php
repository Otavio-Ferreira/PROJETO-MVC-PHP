<?php
  namespace App;
  use MF\Init\Bootstrap;

  class Route extends Bootstrap{

    protected function initRoutes(){
      $routes['login'] = array(
        'route' => '/',
        'controller' => 'loginController',
        'action' => 'login',
      );

      $routes['home'] = array(
        'route' => '/home',
        'controller' => 'indexController',
        'action' => 'index',
      );

      $routes['sobre_nos'] = array(
        'route' => '/sobreNos',
        'controller' => 'indexController',
        'action' => 'sobreNos',
      );

      $this->setRoutes($routes);

    }
  }

?>