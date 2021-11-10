<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Our currency 4 - Extra Credit!</title>
</head>

<body>
<h1>Our Trip Calculator</h1>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ;?>" method="post" >
<fieldset>

<!-- Name -->
<label for="name">NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);    ;?>"> 

<!-- Miles -->
<label for="miles">How many Miles will you be Driving?</label>
<input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ;?>">

<!-- Hours per day -->
<label for="hours">How many hours per day would you like to be driving?</label>
<input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ;?>">

<!-- Price per Gallon -->
<label for="price">Price per gallon</label>
<ul>

<!-- $3 -->
<li><input type="radio" name="price" value="3.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.00' ) echo 'checked="checked"' ;?>>
3.00</li>

<!-- $3.50 -->
<li><input type="radio" name="price" value="3.50"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.50' ) echo 'checked="checked"' ;?>>
3.50</li>

<!-- $4 -->
<li><input type="radio" name="price" value="4.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '4.00' ) echo 'checked="checked"' ;?>>
4.00</li>

</ul>

<h2>Fuel Efficiency</h2>

<select name="efficacy">
<option value="" NULL
<?php if(isset($_POST['efficacy']) && $_POST['efficacy'] == NULL) echo 'selected= "selected"';?>>
Select one!</option>

<!-- Terrible -->
<option value="10.00"
<?php if(isset($_POST['efficacy']) && $_POST['efficacy'] == '10') echo 'selected= "selected"';?>>
Terrible</option>

<!-- Getting Better -->
<option value="20"
<?php if(isset($_POST['efficacy']) && $_POST['efficacy'] == '20') echo 'selected= "selected"';?>>
Getting Better</option>

<!-- Good -->
<option value="30"
<?php if(isset($_POST['efficacy']) && $_POST['efficacy'] == '30') echo 'selected= "selected"';?>>
Good</option>

<!-- Great -->
<option value="40"
<?php if(isset($_POST['efficacy']) && $_POST['efficacy'] == '40') echo 'selected= "selected"';?>>
Great</option>

</select>

<input type="submit" value="Calculate">
<p><a href="">Reset</a></p>

</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //if our posts name, email, currency and amount is empty
    //then we will call out a specific echo!

    if(empty($_POST['name'])){
        echo '<span  class="error">Please fill out your name</span>';
    }
    if(empty($_POST['miles'])){
        echo '<span  class="error">Please fill out your miles</span>';
    }
    if(empty($_POST['hours'])){
        echo '<span  class="error">Please fill out your hours</span>';
    }
    if(empty($_POST['price'])){
        echo '<span class="error">Please choose your price</span>';
    }

    //if post bank is NULL, please select your bank!
    // ERROR FIXME
    if($_POST['efficacy'] == NULL){
        echo '<span class="error">Please choose your Fuel Efficacy</span>';
    }

    if(isset(
        $_POST['name'],
        $_POST['miles'],
        $_POST['hours'],
        $_POST['price'],
        $_POST['efficacy']) &&
        is_numeric($_POST['miles']) &&
        is_numeric($_POST['hours'])
    ){
        $name = $_POST['name'];
        $miles = $_POST['miles'];
        $hours = $_POST['hours'];
        $price = $_POST['price'];
        $efficacy = $_POST['efficacy'];

       


        $miles_int = intval($miles);
        $efficacy_int = intval($efficacy);
        $price_int = intval($price);
        $galons = $miles_int/ $efficacy_int;
        $total = $galons * $price_int;
        $final_total = number_format($total, 2);
        $total_hrs = $miles / 65;
        $friendly_totalh = ceil($total_hrs);
        $total_days = $total_hrs / $hours ;
        $friendly_totald = ceil($total_days);

       
        if($efficacy == 0){
            $efficacy = 1;
        }
        

        if($hours == 0){
            $hours = 1;
        }
     
        
        if(!empty($name && $miles && $hours && $efficacy && 
        $price)){

        
        echo '
        <div class="box">
        <h2>Calculator Results</h2>
        <p>'.$name.', you will be driving <b>'.$miles.' miles </b> </p>
        <p>Your vehicle has an efficacy rating of <b>'.$efficacy.' miles per gallon</b></p>
        <p>Your total cost for gas will be <b>$ '.$final_total.' dollars </b></p>
        <p>You will be dirving a total of <b>'.$friendly_totalh.' hours equating to '.$friendly_totald.' days. </b></p>
        </div>
        ';
        }

       
    } //close isset

    

}//Server Request
?>

<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Diego Cano</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></p>
</footer>
    
</body>
</html>