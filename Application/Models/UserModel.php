<?php
namespace Application\Models;

class UserModel extends Database {

  const DB_TABLE = 'users';
  const DB_TABLE_PK = 'id';

  public $id;
  public $username;
  public $password;

  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  public function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  public function usernameExists($username)
  {
    $this->db->where('username', $username);
    return $this->query();
  }

  public function users()
  {
    return $this->query();
  }

}