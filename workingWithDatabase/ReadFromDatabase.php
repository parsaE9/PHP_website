<?php

$connection = mysqli_connect("localhost", "root", "", "first data base");

if (!$connection)
    die("CONNECTION TO SERVER FAILED");

$query = "SELECT * FROM test";

$result = mysqli_query($connection, $query);

if (!$result)
    die("query failed" . mysqli_error($connection));


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-sm-6">
        <?php

        while($row = mysqli_fetch_array($result)){
            ?>
            <pre>
            <?php
            print_r($row);
            ?>
            </pre>
            <?php
        }
        ?>

    </div>
</div>


</body>
</html>