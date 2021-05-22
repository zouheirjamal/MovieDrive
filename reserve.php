<?php include('header.php');

include('config.php');
extract($_POST);
$currentchoice = $_SESSION['moviePresent'];

?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=20.0" />
    <link rel="stylesheet" href="reserve_style.css" />
    <title>Movie Seat Booking</title>
</head>
<body>
<div class="movie-container">
    <label><?php echo $currentchoice['idmovie']; ?></label>
    <select id="movie">
        <?php
            $qry1=mysqli_query($con, "select parkingCoord from ticket where idmovie='".$currentchoice['idmovie']."'");
            while($parkingC=mysqli_fetch_array($qry1))
            {
        ?>
        <script> console.log(<?php echo json_encode($parkingC['parkingCoord']); ?>);
        var myvar = <?php echo json_encode($parkingC['parkingCoord']); ?>;
       var nice = document.getElementById(myvar)
       console.log(nice);
    //    .className = "seat occupied"; 
      </script>
      <?php }
  	    ?>
    </select>
</div>

<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>N/A</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>Selected</small>
    </li>
    <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
    </li>
</ul>

<div class="container">
    <div class="screen"></div>
    <div class="row">
        <img class="seat" id="s1" src="images/sedan.png" />
        <img class="seat" id="s2" src="images/sedan.png" />
        <img class="seat" id="s3" src="images/sedan.png" />
        <img class="seat" id="s4" src="images/sedan.png" />
        <img class="seat" id="s5" src="images/sedan.png" />
        <img class="seat" id="s6" src="images/sedan.png" />
        <img class="seat" id="s7" src="images/sedan.png" />
        <img class="seat" id="s8" src="images/sedan.png" />
    </div>

    <div class="row">
        <img class="seat" id="s9" src="images/sedan.png" />
        <img class="seat" id="s10" src="images/sedan.png" />
        <img class="seat" id="s11" src="images/sedan.png" />
        <img class="seat" id="s12" src="images/sedan.png" />
        <img class="seat" id="s13" src="images/sedan.png" />
        <img class="seat" id="s14" src="images/sedan.png" />
        <img class="seat" id="s15" src="images/sedan.png" />
        <img class="seat" id="s16" src="images/sedan.png" />
    </div>

    <div class="row">
        <img class="seat" id="t1" src="images/truck.png" />
        <img class="seat" id="t2" src="images/truck.png" />
        <img class="seat" id="t3" src="images/truck.png" />
        <img class="seat" id="t4" src="images/truck.png" />
        <img class="seat" id="t5" src="images/truck.png" />
        <img class="seat" id="t6" src="images/truck.png" />
        <img class="seat" id="t7" src="images/truck.png" />
        <img class="seat" id="t8" src="images/truck.png" />
    </div>
    <div class="row">

    </div>
</div>

<p class="text" style="display:none">
    You have selected <span id="count">0</span> seats for a price of $<span
        id="price"
>0</span
>
</p>
<a href="" class="btn1">Book</a>



<script src="hover.js" type="text/javascript"></script>
</body>
</html>