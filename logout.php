<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/instasoc/resource/php/class/core/init.php';
$user = new User();
$user->logout();
Redirect::to('login.php');
 ?>
