<?php 
ob_start();
session_start();
include_once('main.class.php');

if(!isset($_SESSION['sl_no']))
{
	$object->notLogin();
} 
if(isset($_SESSION['sl_no']))
{
	$strmId=base64_decode($_POST['strmId']);
	$userid=$_SESSION['sl_no'];
	$in=$object->insertStreemWishlist($strmId,$userid);
}
?>

