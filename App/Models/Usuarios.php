<?php

namespace App\Models;

use MF\Model\Model;

class Usuarios extends Model
{
  protected $db;

  public function __construct(\PDO $db)
  {
    $this->db = $db;
  }

  public function getProdutos()
  {
    $query = "select * from usuarios";
    return $this->db->query($query)->fetchAll();
  }

  public function verifyUser($email, $senha)
  {
    $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();

    return $stmt->fetchAll();
  }
}
