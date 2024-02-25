<?php
require_once("db.php");
$sql="select *from food";
$result=$conn->query($sql);
?>
<html >
<head>
    <!--meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <title>Master Health</title>
	 <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/getfood.css">
</head>
<body>
    <div class="container">
        <h2>Master Health</h2>
		<div id="logo">
			<img src="images/logo1.png" alt="logo">
		</div>
</div>
<div class="menu">
	<div class="heading">
		<h2>Master Health </h2>
		<h3>&mdash;Item-List&mdash;</h3>
	</div>	
</div>
<section>
					<table>
					<tr><th colspan="5"><a href="addfoodform.php">Add Food</a></th></tr>
						<tr>
						<th>Food Name</th>
						<th>Descripition</th>
						<th>Price</th>
						<th>Category</th>
						<th>Admin Use</th>
						</tr>

	<?php
		while($row=mysqli_fetch_assoc($result))
		{
			$fname=$row['fname'];
            echo'	
						<tr>
						<td>'.$row{"fname"}.'</td>
						<td>'.$row{"des"}.'</td>
						<td>'.$row{"price"}.'</td>
			
						<td>'.$row{"category"}.'</td>
						<td><a href="delete.php?fname='.$fname.'">Delete</a></td>
							
						</tr>';

        }
        ?>
		</table>
</section>
<!--?php
	if(isset['Delete'}){
		$query="-->
</body>
</html>