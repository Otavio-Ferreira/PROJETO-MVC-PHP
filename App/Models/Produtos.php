<?php
  namespace App\Models;
  use MF\Model\Model;
  
  class Produtos extends Model{
    protected $db;

    public function __construct(\PDO $db){
      $this->db = $db;
    }

    public function getProdutos(){
      $query = "select * from tb_produtos";
      return $this->db->query($query)->fetchAll();
    }
  }
?>