<?php
	session_start();
	include("db.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$myquery=$_POST['myquery'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phoneno=$_POST['phoneno'];
		$msg=$_POST['msg'];
		if(!empty($myquery) && !empty($name) && !empty($email) && !empty($phoneno) && !empty($msg) &&!is_numeric($email))
		{
			$query="insert into contact(myquery,name,email,phoneno,msg)values('$myquery','$name','$email','$phoneno','$msg')";
			mysqli_query($conn,$query);
			echo"<script type='text/javascript'>alert('Message Sent')</script>";
		}
		else
		{
			echo"<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
		}
	}		
?>
<html>
<head>
<title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div class="container">
        <h2>Master Health</h2>
		
        <div class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about1.html">ABOUT</a></li>
                <li><a href="products.php">MENU</a>
				<!--ul class="dropdown">
					<li><a href="food.php">Foods</a></li>
					<li><a href="snack.php">Snacks</a></li>
					<li><a href="juice.php">Juices</a></li>
				</ul>
				</li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a class="reservation" href="login.php">Admin</a></li>
            </ul-->
        </div>
</div>
<div class="head">
<h1>Contact Us</h1>
</div>
<div class="container1">
	<div class="contact-form">
		<form action="" method="post">
		<div class="input-box">
                <label for="query"> Type of Query</label>
                <select name="myquery" id="query">
                    <option value="sel" selected>Select</option>
                    <option value="order">Order related Issues</option>
                    <option value="Site">Site related Issues</option>
                    <option value="food">Food related Issues</option>                  
                    <option value="others"> Others</option>
                </select>
        </div>
		<div class="input-box">
			<label for="name">Enter Customer Name</label>
			<input type="text" name="name" id="name" placeholder="Enter Customer Name">
		</div>
		<div class="input-box">
			<label for="email">Enter Email Address</label>
			<input type="text" name="email" id="email" placeholder="Enter Email Address">
		</div>
		<div class="input-box">
                <label for="pho">Phone Number</label>
                <input type="phone" name="phoneno" id="pho" placeholder="Enter your Phone no">
        </div>
		<div class="input-box">
                <label for="message">Ellaborate your query</label>               
                <textarea name="msg" id="message" cols="20" rows="10" placeholder="Type Our Problem In Well Manner"></textarea>    
        </div>
		<div class="input-box">
            <button type="submit" value="Submit">Submit</button>
		</div>
		</form>
	</div>
</div>
</body>
</html>