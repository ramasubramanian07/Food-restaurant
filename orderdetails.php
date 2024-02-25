<?php
include 'db.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h3>&mdash;Order Details&mdash;</h3>
        </div>
    </div>
    <section>
        <table class="table table-order">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Method</th>
                    <th>Flat</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Pin Code</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `order`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <tr>
                                <td>' . $row["name"] . '</td>
                                <td>' . $row["number"] . '</td>
                                <td>' . $row["email"] . '</td>
                                <td>' . $row["method"] . '</td>
                                <td>' . $row["flat"] . '</td>
                                <td>' . $row["street"] . '</td>
                                <td>' . $row["city"] . '</td>
                                <td>' . $row["state"] . '</td>
                                <td>' . $row["country"] . '</td>
                                <td>' . $row["pin_code"] . '</td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
