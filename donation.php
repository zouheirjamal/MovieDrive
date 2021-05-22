
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width initial scale 1.0">
	<title>Foodcourt</title>
	<link rel="stylesheet" href="style.css">
	<link href="http://fonts.cdnfonts.com/css/wandery-free" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

 </head>
<body>
<section class="res-sec1">
	<nav>

		<a href="index.php"> <img src= "images/logo.png" ></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()" id="closeMen"></i>

		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reservation.php">RESERVATION</a></li>
			<li><a href="FOODCOURT.php">FOODCOURT</a></li>
			<li><a href="donation.php">DONATION</a></li>
			<li><a href="login.php" class="btn1">sign-up</a></li>

		</ul>
		</div>	
		<i class="fa fa-bars" onclick="showMenu()" id="showMen"></i>
	</nav>



</section>

	<div class="text-donate">
	<div class="text">
		<h1>You have the power to <br>transform lives by donating today</h1>
		
	</div>
</div>
</section>
<section class="donate">
	<div class="res-container1">
		<form action="process_donation.php" method="post" class="form1">

			<div class="input-group">
			<label for="donation currency" class="input-label">donation currency</label>

				<input type="radio" id="currency1" name="donation currency" value="LBP" class="inputr">
 				<label for="currency1" class="currency">LBP</label>
  				<input type="radio" id="currency2" name="donation currency" value="USD" class="inputr">
  				<label for="currency2" class="currency">USD</label>
  				<input type="radio" id="other" name="donation currency" value="other" class="inputr">
  				<label for="other" class="currencyx">Other</label>
  				<input type="text" class="input" id="add currency" placeholder="add currency">

			</div>
			<div class="input-group">
				<label for="your donation amount" class="input-label">your donation amount</label>
				<input name="amount" type="text" class="input" id="your donation amount" placeholder="add numeric value">
			</div>
			<div class="input-group">
			<a href="index.php" class="btn1">donate</a>
		</div>

		</form>

	</div>
	<div class="res-container2">
	<img src= "images/10.jpg" >
    </div>

</section>
<!<!---- footer----->

<!----java script lal menu--->
<script >
	var navLinks =document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right="0";

	}
	function hideMenu(){
		navLinks.style.right="-200px ";

	}
</script>
<?php include('footer.php');?>
</body>
</html> 