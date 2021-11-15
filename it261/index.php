<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://kit.fontawesome.com/73d7b74d00.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="<?=$logo?>"<?=$logo_color?>></i> Diego Cano - SCC / WEB 261 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?> 
      <!-- <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Diego</a></li> -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2>Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>My name is Diego Cano, and I'm from Venezuela. 
    I've lived in Seattle for two years. I am a college 
    student at Seattle Central College in the IT department. 
    I have experience working with people because I've worked as a waiter, barista, and banquet server.
    I'd like to obtain my ASS-T in programming and try to transfer to a four-year college or university. 
    My goal is to work for a company in the It team or as a freelancer (developer). </p>

    <h3>PHP Error</h3>
    <img src="images/error.jpg" id= "error" alt="error image">
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>

<h3>My weekly Exercises</h3>
<h4>Week 1</h4>
<ul>
<li><a href="website/index.php">Website</a></li>
</ul>
<h4>Week 2</h4>
<ul>
<li><a href="weeks/week2/var.php">var.php</a></li>
<li><a href="weeks/week2/var2.php">var2.php</a></li>
<li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
<li><a href="weeks/week2/currency.php">currency.php</a></li>
<li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
</ul>
<h4>Week 3</h4>
<ul>
<li><a href="weeks/week3/date.php">date.php</a></li>
<li><a href="weeks/week3/foreach.php">foreach.php</a></li>
<li><a href="weeks/week3/forloop.php">forloop-logic.php</a></li>
<li><a href="weeks/week3/if.php">if.php</a></li>
<li><a href="weeks/week3/switch.php">switch.php</a></li>
<li><a href="website/daily.php">USING A SWITCH</a></li>
</ul>
<h4>Week 4</h4>
<ul>
<li><a href="weeks/week4/adder.php">ADDER</a></li>
<br>
<li><a href="weeks/week4/celcius.php">celcius.php</a></li>
<li><a href="weeks/week4/form-arithmetic.php">form-arithmetic.php</a></li>
<li><a href="weeks/week4/form1.php">form1.php</a></li>
<li><a href="weeks/week4/form2.php">form2.php</a></li>
<li><a href="weeks/week4/form3.php">form3.php</a></li>
</ul>
<h4>Week 5</h4>
<ul>
<li><a href="weeks/week5/calculator.php">calculator.php</a></li>
<br>
<li><a href="weeks/week5/currency1.php">currency1.php</a></li>
<li><a href="weeks/week5/currency2.php">currency2.php</a></li>
<li><a href="weeks/week5/currency3.php">currency3.php</a></li>
<li><a href="weeks/week5/currency4.php">currency4.php</a></li>
<li><a href="weeks/week5/null.php">null.php</a></li>
</ul>
<h4>Week 6</h4>
<ul>
<li><a href="weeks/week6/form1.php">form1.php</a></li>
<br>
<li><a href="weeks/week6/functions.php">functions.php</a></li>
<li><a href="weeks/week6/implode.php">implode.php</a></li>
</ul>

<h4>Week 7</h4>
<ul>
<li><a href="website/contact.php">CONTACT.php</a></li>
<br>
<li><a href="weeks/week7/pictures.php">pictures.php</a></li>
<li><a href="weeks/week7/random.php">random.php</a></li>
<li><a href="weeks/week7/strings.php">strings.php</a></li>
</ul>



<p id="phrase">It always seems impossible until it's done </p>
<h5>-Nelson Mandela-</h5>

<h3>MAMP Local host</h3>
<img src="images/mamp.jpg" id= "mamp" alt="mamp">

</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Diego Cano</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>
