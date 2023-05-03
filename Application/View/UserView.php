<?php
namespace Application\View;

use Application\Interfaces\ViewInterface;
use Application\View\TemplateView;

class UserView extends TemplateView implements ViewInterface {

  public function view($data = [])
  {
    $this->render($data);
  }
}