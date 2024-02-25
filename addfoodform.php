<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST")
	{
$fname=$_POST['fname'];
$des=$_POST['des'];
$price=$_POST['price'];
$img=base64_encode(file_get_contents($_FILES['img1']['tmp_name']));
$category=$_POST['category'];
if(!empty($fname) && !empty($des) && !empty($price) && !empty($img) && !empty($category))
		{
			$sql="insert into food(fname,des,price,img,category)values('$fname','$des','$price','$img','$category')";
			mysqli_query($conn,$sql);
			echo"<script type='text/javascript'>alert('Successfully Register')</script>";
		}
		else
		{
			echo"<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
		}
	}
?>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/addfood.css">
</head>
<body>
    <div class="container">
        <h2>Master Health</h2>
	</div>
	<div class="container1">
        <div class="login-form">
            <h2>Add Food</h2>
			<br>
            <form  method="post"  enctype="multipart/form-data">
				
				<label for="name">Food Name</label>
				<input type="text" name="fname" id="name" placeholder="Food Name" required>
				<label for="des">Food Descripition</label>
                <input type="text" name="des" id="des" placeholder="descripition" required>
				<label for="price">Food Price</label>
                <input type="text" name="price" id="price" placeholder="Food Rate" required>
				<br>
				<label for="file">Select Photo</label>
				<input type="file" name="img1" file accept=".jpg,.jpeg,.png" required>
				<label for="category">Select Food Category</label>
				<select placeholder="Food Category" id="category" name="category">
					<option  value="food">Food</option>
					<option  value="juice">Juice</option>
					<option  value="snack">Snack</option> 	
				</Select>
				<br>
                <button type="submit" >Add</button>
				<br>
				<div class="btn">
                <a href="getfood.php">Back</a>
				</div>
            </form>
        </div>

</body>
</html>