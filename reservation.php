 <?php 
 session_start();
 include('config.php');
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
			<li><a href="login.php" class="btn1">sign-up</a></li>

		</ul>
		</div>
		<i class="fa fa-bars" id="showMen" onclick="showMenu()"></i>
	</nav>

<section class="filters">
	<h1>Find a movie</h1>
	<div class="res-container">
	<form action="process_search.php" class="form" id="reservation-form" method="post">
			
				<div class="input-group">
					<label for="movie name" class="input-label">movie name</label>
					<input type="text" class="input" required id="moviename111" name="search">
				</div>
				<div class="input-group">
					<label for="movie genre" class="input-label">movie genre</label>
					<input type="text" class="input" required id="moviegenre111" name="search_genre">
				</div>
				<div class="input-group">
					<label for="date" class="input-label">date</label>
					<input type="date" class="input" id="date" required id="moviedate111" name="search_date">
				</div>

				<div class="input-group">
					<label for="showtimes" class="input-label">showtime</label>
					<input type="text" class="input" id="showtimes" required id= "movietime111" name="search_time">
			
				</div>
				<div class="input-group">
				<input class="btn1" type="submit" value="Search" id="button111">
			</div>
		
		</form>

	</div>


	
</section>
<!----showing this week Friday----->
<section class="showing-this-week" >
<div class="text">
	<h1> showing this weekend</h1>
	<h3> Friday</h3>

</div> 
<div class="cards">
<div class="container">
	<div class="card">
		<div class="imgBx">
			<img src ="images/1.jpg"> 
		</div>
		<div class="content">
			<h2>the choice</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="reserve.html" class="btn1">book ticket</a>

			
		</div>
	</div>


	<div class="card">
		<div class="imgBx">
			<img src="images/2.jpg">
		</div>
		<div class="content">
			<h2>hunter killer</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="reserve.html" class="btn1"> book ticket</a>

			
		</div>
	</div>

	
</div>
</div>

</section>
<!----showing this week saturday----->
<section class="showing-this-week" >
<div class="text">
	<h3>Saturday</h3>

</div> 
<div class="cards">
<div class="container">
	<div class="card">
		<div class="imgBx">
			<img src="images/1m.jpg">
		</div>
		<div class="content">
			<h2>the choice</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="reserve.html" class="btn1">book ticket</a>

			
		</div>
	</div>


	<div class="card">
		<div class="imgBx">
			<img src="images/2m.jpg">
		</div>
		<div class="content">
			<h2>hunter killer</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="reserve.html" class="btn1"> book ticket</a>

			
		</div>
	</div>

	
</div>
</div>

</section>
<!----showing this week sunday----->
<section class="showing-this-week" >
<div class="text">
	<h3>Sunday</h3>

</div> 
<div class="cards">
<div class="container">
	<div class="card">
		<div class="imgBx">
			<img src="images/3m.jpg">
		</div>
		<div class="content">
			<h2>the choice</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="reserve.html" class="btn1">book ticket</a>

			
		</div>
	</div>


	<div class="card">
		<div class="imgBx">
			<img src="images/4m.jpg">
		</div>
		<div class="content">
			<h2>hunter killer</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="reserve.html" class=".filters btn1"> book ticket</a>

			
		</div>
	</div>

	
</div>
</div>

</section>
<!---- footer----->


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
<?php include "footer.php";
?>
</body>
</html> 