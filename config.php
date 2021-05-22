<?php
    $host = "localhost";
    $user = "root";                     // Database username
    $pass = "";                         // Database password; NO password by default
    $db = "drivein";                   // Database name that we want to connect to
    //$port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
?>