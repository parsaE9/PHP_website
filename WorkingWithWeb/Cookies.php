<?php

$name = "someName";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($name,$value,$expiration);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
<?php
if(isset($_COOKIE["someName"])){
    $name = $_COOKIE["someName"];
    echo $name;
}
?>

</body>
</html>