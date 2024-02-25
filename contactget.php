<?php
require_once("db.php");
$sql="select *from contact";
$result=$conn->query($sql);
?>
<html >
<head>
    <!--meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <title>Master Health</title>
	 <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/contactget.css">
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
		<h3>&mdash;Customer Messages&mdash;</h3>
	</div>	
</div>
	<section>
					<table class="table table-order">
						<tr>
						<th>Issues</th>
						<th>Customer Name</th>
						<th>Email</th>
						<th>Phoneno</th>
						<th>Problem</th>
						</tr>

	<?php
		while($row=mysqli_fetch_assoc($result))
		{
            echo'	
						<tr>
						<td>'.$row{"myquery"}.'</td>
						<td>'.$row{"name"}.'</td>
						<td>'.$row{"email"}.'</td>
						<td>'.$row{"phoneno"}.'</td>
						<td>'.$row{"msg"}.'</td>
						</tr>';

        }
        ?>
		</table>
</section>
</body>
</html>
        

