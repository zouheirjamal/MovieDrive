<?php
error_reporting(0);
session_start();
include('config.php');
extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width initial scale 1.0">
	<title>reservation</title>
	<link rel="stylesheet" href="style.css">
	<link href="http://fonts.cdnfonts.com/css/wandery-free" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

 </head>
<body>
</div>

<section class="res-sec1">
	<nav>

		<a href="index.php"> <img src= "images/logo.png" ></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" id="closeMen" onclick="hideMenu()" ></i>

		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reservation.php">RESERVATION</a></li>
			<li><a href="foodcourt.php">FOODCOURT</a></li>
			<li><a href="donation.php">DONATION</a></li>
			<li><a href="" class="btn1">sign-up</a></li>

		</ul>
		</div>
		<i class="fa fa-bars" id="showMen" onclick="showMenu()"></i>
	</nav>

<section class="filters">
	<h1>Find a movie</h1>
	<div class="res-container">
	

	</div>


	
</section>
<!----showing search results----->
<section class="showing-this-week" >
<div class="text">
	<h1> Showing Results</h1>
    
                    <div class="cards">
                        <div class="container">
                            <div class="card">
                                <div class="imgBx">
    <?php
          	
          	$qry2=mysqli_query($con,"select DISTINCT movieName,idmovie,description,image,cast from movie where movieName='".$search."'");			
			
			  while($m=mysqli_fetch_array($qry2))
            {
            ?>
                    
                                    <img src="<?php echo $m['image'];?>"> 
                                </div>
                                <div class="content">
                                    <h2><?php echo $m['movieName'];?></h2>
                                    <p><?php echo $m['description'];?></p>
									<?php $_SESSION['moviePresent'] = $m;  ?>
                                    <a href="reserve.php" class="btn1">book ticket</a>
                                </div>
                            </div>   
                        </div>
                    </div>                       
  	    <?php
  	    }
  	    ?>	
</div>
</section>
<?php include "footer.php";
?>
</body>
</html> 
