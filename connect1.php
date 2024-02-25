<?php
$servername="localhost";
$username="root";
$password="";
$dbname="account";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed".mysqli_connect_error());
}
if(!$conn)
{
	echo"coonected";
}
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql_query="insert into account(username,email,password)values('$username','$email','$password')";
	
	if(mysqli_query($conn,$sql_query))
	{
		echo"Successfully Register";
	}
	else
	{
		echo"Error:".$sql."".mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>