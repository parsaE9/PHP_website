<?php
if(isset($_POST["button"])){

    echo "submit button was pressed";
    echo "<br>";

    if(($_POST["username"] != "parsa2020") || ($_POST["password"] != "ehsanz313")){
        echo "YOU ARE NOT ALLOWED TO ACCESS HERE";
    }

    else{
        echo "WELCOME PARSA2020";
    }
}

?>

