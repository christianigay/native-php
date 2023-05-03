<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/load.php');

use Application\Controllers\UserController;
use Application\View\UserView;

$user = new UserController(new UserView);
$user->create();