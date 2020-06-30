<?php 
include_once("main.class.php");
$userID=base64_decode($_POST['ui']);
$data=$object->insertSubscribe($userID);
?>       