<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!$username || !$password)
        die("username and password field must be filled");

    $connection = mysqli_connect("localhost", "root", "", "first data base");

    if (!$connection)
        die("CONNECTION TO SERVER FAILED");

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    /*$hashFormat = "$2y$10$";
    $salt = "SomeCrazyPassword";
    $hash_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_and_salt);*/

    $query = "INSERT INTO test(username, password) VALUES ('$username','$password')";

    $result = mysqli_query($connection, $query);

    if (!$result)
        die("query failed" . mysqli_error($connection));

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
        <h1>Create</h1>
        <form action="WriteOnDatabase.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="CREATE">

        </form>
    </div>
</div>

</body>
</html>