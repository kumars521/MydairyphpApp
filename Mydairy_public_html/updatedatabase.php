<?php

    session_start();

    if (array_key_exists("content", $_POST)) {
        
        include("Mysqlconnection.php");
        
        
        $query = "UPDATE `my_Daily_Data` SET `Diary` = '".mysqli_real_escape_string($sqllink, $_POST['content'])."' WHERE id = ".mysqli_real_escape_string($sqllink, $_SESSION['id'])." LIMIT 1";
        
        mysqli_query($sqllink, $query);
        
    }

?>
