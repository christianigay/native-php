<?php
namespace Application\Models;

use MysqliDb;

class Database {

  protected $db;

  const DB_TABLE = 'abstract';
  const DB_TABLE_PK = 'abstract';

  public function __construct()
  {
    if(! $this->db){
      $this->db = new MysqliDb(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
  }

  public function setID($id = 0)
  {
    if((int) $id != 0){
      $this->{$this::DB_TABLE_PK} = $id;
    }
    return $this;
  }

  public function add($data)
  {
    return $this->db->insert($this::DB_TABLE, $data);
  }

  public function addMultiple(array $data)
  {
    return $this->db->insertMulti($this::DB_TABLE, $data);
  }

  public function modify($data, array $where)
  {
    $this->db->where($where['key'], $where['value']);
    return $this->db->update($this::DB_TABLE, $data);
  }

  public function remove($where)
  {
    $this->db->where($where['key'], $where['value']);
    return $this->db->delete($this::DB_TABLE);
  }

  public function query($limit = '')
  {
    return $limit ? $this->db->get($this::DB_TABLE, $limit) : $this->db->get($this::DB_TABLE);
  }

  public function disconnect()
  {
    return $this->db->disconnect();
  }

}