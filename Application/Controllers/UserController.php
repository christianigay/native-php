<?php
namespace Application\Controllers;

use Application\Interfaces\ViewInterface;
use Application\Models\UserModel;

class UserController {

  protected $view;
  protected $data;
  public $userModel;

  public function __construct(ViewInterface $view)
  {
    $this->view = $view;
    $this->userModel = new UserModel;
  }

  public function index()
  {
    $this->view->addJS('assets/js/scripts/pages/app-user.js');
    $this->data['meta'] = ['title' => 'Users'];
    $this->data['users'] = $this->userModel->users();
    $this->view->addComponent("user/index");
    return $this->view->view($this->data);
  }

  public function create()
  {
    $this->data['meta'] = ['title' => 'Users'];
    $this->view->addComponent("user/users");
    return $this->view->view($this->data);
  }

  public function add()
  {
    $message = '';
    $result = false;
    if(isset($_POST['username']) && $_POST['username']){
      $exist = $this->userModel->usernameExists($_POST['username']);
      $result = ! $exist 
        ? $this->userModel->add($_POST) : false;
    }
    $this->data['result']['success'] = $result;
    $this->data['result']['message'] = $result 
      ? 'User successfully recorded' : 'username already exist';
    $this->data['contents'] = $_POST;
    $result ? $this->index() : $this->show();
  }

  public function show()
  {
    $this->view->addComponent("user/users");
    return $this->view->view($this->data);
  }

  
}