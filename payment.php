<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width initial scale 1.0">
	<title>payment</title>
	<link rel="stylesheet" href="style.css">
	<link href="http://fonts.cdnfonts.com/css/wandery-free" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
<body>
<section class="payment">
    <div class="container1">
        <h1>Payment details</h1>
        <div class="first-row">
            <div class="owner">
                <h3>cardholder name</h3>
                <div class="input-field1" >
                    <input type="text" class="input" id="cardholder" placeholder="provide name " >
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field1">
                    <input type="password" class="input" id="cvv" placeholder="XXX">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field1">
                    <input type="text" class="input" id="card number" placeholder="provide card number">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>expiration date</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                    	<option value="xx">xx</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                      	<option value="xxxx">xxxx</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                      </select>
                </div>
                <div class="cardss">
                    <img src="images/mc.png" alt="">
                    <img src="images/vi.png" alt="">
                    <img src="images/pp.png" alt="">
                </div>
            </div>    
        </div>
<a href="" class="btn1">confirm</a>	
    </div>
</section>
</body>
</html>