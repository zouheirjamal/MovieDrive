<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Beirut');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Drive-In Cinema</title>
<meta name="viewport" content="with=device-width initial scale 1.0">
	<title>The Drive-In Cinema</title>
	<link rel="stylesheet" href="style.css">
	<link href="http://fonts.cdnfonts.com/css/wandery-free" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section class="header">
	<nav>
		<a href="index.php"> <img src= "images/logo.png" ></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()" id="closeMen"></i>

		<ul>
            <li><a href="index.php">Home</a></li>
			<li><a href="reservation.php">RESERVATION</a></li>
			<li><a href="foodcourt.php">FOODCOURT</a></li>
			<li><a href="donation.php">DONATION</a></li>
			<li>
                <?php 
                    if(isset($_SESSION['user'])){
			  		    $us=mysqli_query($con,"select * from client where idclient='".$_SESSION['user']."'");
        			    $user=mysqli_fetch_array($us);
                ?>
                <a href="profile.html" class="btn1">
                    <?php echo $user['firstName'];?>
                </a>
                <a href="logout.html">Logout</a>
                <?php 
                    }
                    else{
                ?>
                <a href="login.php">Login</a>
                <?php 
                    }
                ?>
            </li>
        </ul>
		</div>	
		<i class="fa fa-bars" onclick="showMenu()" style="color:#e8d5be" id="showMenu"></i>
	</nav>	
</section>
