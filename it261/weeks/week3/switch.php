<?php
//class coffee exercise
//if today is thursday, it will be pumpkin latte day
//we will start with the isset() function
//the we will introduce our first GLOBAL variable
//our switch

// $variable = 'Life is good!';
// if(isset($variable)){
//     echo 'Yippy-skippy!!!';
// } else {
//     echo 'Not';
// }

// starting the switch
// if something is set, $today, the all is well 
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

//switch

switch($today){
    case 'Thursday' :
    $coffee = '<h2>Thursday is our Cap Day!</h2>';
    $pic = 'cap.jpeg';
    $alt = 'Cappacino';
    $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
    break;

    case 'Friday' :
    $coffee = '<h2>Friday is our Americano Day!</h2>';
    $pic = 'americano.jpeg';
    $alt = 'Americano';
    $content = '<b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
    break;

    case 'Saturday' :
    $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
    $pic = 'coffee.png';
    $alt = 'Coffee';
    $content = 'In New York, <b>coffee</b> snobbery is the norm with fancy (and admittedly delicious) java joints like Blue Bottle, Gorilla Coffee, and Brooklyn Roasting. But the mark of an authentic coffee snob is someone who demands a "regular coffee"—usually at a deli/corner store/bodega. <br> <i>A regular coffee is a coffee with cream (or milk) and two sugars.</i>';
    break;

    case 'Sunday' :
    $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
    $pic = 'green-tea.jpeg';
    $alt = 'Green Tea';
    $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
    #wrapper{
        width:940px;
        margin:20px auto;
    }
    </style>
</head>
<body>
<div id="wrapper">
  <h1>My Wonderful Switch Classwork Exercise!</h1>  
  <p><?php echo $coffee; ?></p>
  <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt;?>">
  <p><?php echo $content;?></p>

  <h2>Check out our Daily Specials</h2>

  <ul>
  <li><a href="switch.php?today=Thursday">Thursday</a></li>
  <li><a href="switch.php?today=Friday">Friday</a></li>
  <li><a href="switch.php?today=Saturday">Saturday</a></li>
  <li><a href="switch.php?today=Sunday">Sunday</a></li>
  </ul>
  </div> <!-- end wrapper -->
</body>
</html>