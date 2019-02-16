<?php

$connection = mysqli_connect("localhost","root","","first data base");

if(!$connection)
    die("CONNECTION TO SERVER FAILED");

$query = "SELECT * FROM test";

$result = mysqli_query($connection,$query);

if(!$result)
    die("query failed" . mysqli_error($connection));

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM test WHERE id = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("query failed");
    }

}


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
        <h1>DELETE</h1>
        <form action="DeleteDatabase.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"
            </div>

            <div class="form-group">
                <select name="id" id="">

                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        echo "<option value='$id'>$id</option>";
                    }

                    ?>


                </select>

            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">

        </form>

    </div>
</div>


</body>
</html>