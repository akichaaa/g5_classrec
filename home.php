<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/g5_classrec/resource/php/class/core/init.php';

$user = new User();
echo $user->data()->name;
 ?>
