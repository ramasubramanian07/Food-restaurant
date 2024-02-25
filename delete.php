<?php
if(isset($_GET['fname'])){
	$name=$_GET['fname'];
require_once("db.php");
$query="delete from food where id=$name";
$result=mysqli_query($conn,$query);
}
?>