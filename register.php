<?php
	session_start();
	include("db.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query="insert into customer(username,email,password)values('$username','$email','$password')";
			mysqli_query($conn,$query);
			echo"<script type='text/javascript'>alert('Successfully Register')</script>";
			header("location:login1.php");
		}
		else
		{
			echo"<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
		}
	}		
?>
<html>
<head>
    <title>Register page</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
	<header>
    <div class="container">
        <h2>Master Health</h2>
        <!--div class="navbar">
            <ul>
                <li><a href="proj2.php">HOME</a></li>
                <li><a href="about1.html">ABOUT</a></li>
                <li><a href="products.php">MENU</a>
				<ul class="dropdown">
					<li><a href="foods.html">Foods</a></li>
					<li><a href="snacks.html">Snacks</a></li>
					<li><a href="juices.html">Juices</a></li>
				</ul>
				</li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a class="reservation" href="login.php">Account</a></li>
            </ul>
        </div-->
    </div>
	</header>
    <div class="container1">
        <div class="login-form">
            <h2>Register Now</h2>
            <form  method="POST">
                <input type="text" name="username" placeholder="Username" required>
				<input type="email" name="email" placeholder="Email address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
            <p>If you already a member? <a href="index.php">login</a></p>
        </div>
    </div>
</body>
</html>