<?php
    session_start();
    include('config.php');
    extract($_POST);
    $_SESSION['user']=$usr['user_id'];
    mysqli_query($con,"insert into  donations (amount,idclient) values('$amount','".$_SESSION['user']."')");
    // $_SESSION['user']=$id;
    header('location:index.php');
?>