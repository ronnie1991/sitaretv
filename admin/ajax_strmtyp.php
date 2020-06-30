 <?php 
include_once('main.class.php');
 $strmId=$_POST['strmId'];
$strmTyp=$object->strmType($strmId);
echo $strmTyp['category'];
?>                         
