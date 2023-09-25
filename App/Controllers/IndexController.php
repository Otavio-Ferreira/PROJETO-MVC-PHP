<?php
  namespace App\Controllers;

  use MF\Controller\Action;
  use MF\Model\Container;

  use App\Models\Produtos;
  use App\Models\Info;
  
  class IndexController extends Action{
    
    public function index(){
      //$this->view ->dados = array("Fone de ouvido","Tablet","Celular");
      $produto = Container::getModel('Produtos');

      $produtos = $produto->getProdutos();
      $this->view->dados = $produtos;
      $this->render("index", "layout1");
    }
    
    public function sobreNos(){
      //$this->view ->dados = array("Notebook","Computador","Teclado");
      $info = Container::getModel("Info");

      $informacoes = $info->getInfo();
      $this->view->dados = $informacoes;
      $this->render("sobreNos", "layout1");
    }

  }
?>