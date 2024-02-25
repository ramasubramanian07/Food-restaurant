<?php
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
//database coonection
$conn=new mysqli('localhost','root','','account');
if($conn->connect_error)
{
die('connection Failed:'.$conn->connect_error);
}
else
{
$stmt=$conn->prepare("insert into register(username,email,password)values(?,?,?)");
$stmt->bind_param("sss",$username,$email,$password);
$stmt->execute();
echo"Registration Successfully";
$stmt->close();
$conn->close();
}
?>



