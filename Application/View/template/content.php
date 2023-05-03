<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <?php 
      // include('breadcrumb.php'); 
      ?>
      <div class="content-body">
      <?php 
      foreach($this->components as $component){
        include("$component.php"); 
      }
      ?>
      </div>
    </div>
</div>
  <!-- END: Content-->