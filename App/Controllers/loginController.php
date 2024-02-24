<?php

namespace App\Controllers;

use App\Models\Usuarios;
use MF\Controller\Action;
use MF\Model\Container;

class LoginController extends Action
{

  public function login()
  {
    session_start();
    //$this->view ->dados = array("Notebook","Computador","Teclado");
    // $info = Container::getModel("Info");

    // $informacoes = $info->getInfo();
    // $this->view->dados = $informacoes;
    if (
      isset($_POST['email']) && !empty($_POST['email']) &&
      isset($_POST['password']) && !empty($_POST['password'])
    ) {
      $email = addslashes($_POST['email']);
      $password = addslashes($_POST['password']);

      $usuarios = Container::getModel("Usuarios");

      if ($usuarios->verifyUser($email, $password)) {
        header('Location: /home');
      } else {
        $_SESSION['errorLogin'] = "Email ou senha incorretas!";
        header('Location: /');
        exit;
      }
      exit;
    }

    $this->render("index", "login");
  }
}
