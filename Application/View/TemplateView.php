<?php
namespace Application\View;

class TemplateView {

  public $cssFiles = [];
  public $jsFiles = [];
  protected $components = [];

  public $layout = 'default_layout';

  public function __construct()
  {
    $this->loadDefaultAssets();
  }

  protected function loadDefaultAssets()
  {
    $this->loadDefaultCSS();
    $this->loadDefaultJS();
  }

  protected function loadDefaultCSS()
  {
    foreach($this->defaultCSS() as $css){
      $this->addCSS($css);
    }
  }

  protected function loadDefaultJS()
  {
    foreach($this->defaultJS() as $file){
      $this->addJS($file);
    }
  }

  public function addJS($file)
  {
    array_push($this->jsFiles, BASE_URL . '/' . $file);
  }

  public function addCSS($file)
  {
    array_push($this->cssFiles, BASE_URL . '/' . $file);
  }

  public function addComponent($component)
  {
    array_push($this->components, __DIR__ . "/components/$component");
  }

  public function render($data = [])
  {
    include("template/{$this->layout}.php");
  }

  private function defaultCSS()
  {
    return [
      'assets/vendors/css/vendors.min.css',
      'assets/vendors/css/ui/prism.min.css',
      'assets/css/bootstrap.css',
      'assets/css/bootstrap-extended.css',
      'assets/css/colors.css',
      'assets/css/components.css',
      'assets/css/themes/dark-layout.css',
      'assets/css/themes/semi-dark-layout.css',
      'assets/css/core/menu/menu-types/vertical-menu.css',
      'assets/css/core/colors/palette-gradient.css',
      'assets/css/style.css'
    ];
  }

  private function defaultJS()
  {
    return [
      'assets/vendors/js/vendors.min.js',
      'assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js',
      'assets/vendors/js/ui/prism.min.js',
      'assets/js/core/app-menu.js',
      'assets/js/core/app.js',
      'assets/js/scripts/components.js'
    ];
  }
}