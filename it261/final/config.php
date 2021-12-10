<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 
// initialize/ define our variables

$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();
 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}


// FINAL

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Switch';
$nav['paintings.php'] = 'Paintings';
$nav['contact.php'] = 'Contact';

// create a function for our navigation, so the function is called out on our header.php page

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key){
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else{ 
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} //end function

// FIX MEEE
switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Art Association of American Colleges';
        break;
    case 'about.php':
        $title = 'About page of our Art Association of American Colleges';
        break;
    case 'switch.php':
        $title = 'Switch page of our Art Association of American Colleges';
        break;
    case 'paintings.php':
        $title = 'Paintings Page';
        $body = 'women inner';
        $headline = 'Welcome to our Powerful Women Page';
        break;
    case 'paintings-view.php':
        $title = 'Paintings-view Page';
        break;
    case 'contact.php':
        $title = 'Contact page of our Art Association of American Colleges';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our IT 261 Website';
        $body = 'gallery';
        $headline = 'Welcome to our Gallery page of our IT 261 Website';
        break;
    case 'thx.php':
        $title = 'Thank you page of our Art Association of American Colleges';
        break;
    case 'login.php':
        $title = 'Login to Art Association of American Colleges';
        break;
    case 'register.php':
        $title = 'Register to Art Association of American Colleges';
        break;
}
 

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}


// emailable form php!


$first_name= '';
$last_name= '';
$gender= '';
$email= '';
$position= '';
$region= '';
$comments= '';
$privacy= '';
$phone = '';

$first_name_Err= '';
$last_name_Err= '';
$gender_Err= '';
$email_Err= '';
$position_Err= '';
$region_Err= '';
$comments_Err= '';
$privacy_Err= '';
$phone_Err= '';

 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your First Name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your Last Name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['gender'])) {
    $gender_Err = 'Please check your gender';
} else {
    $gender = $_POST['gender'];
}

if(empty($_POST['email'])) {
    $email_Err = 'Please enter your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['position'])) {
    $position_Err = 'Please choose your position';
} else {
    $position = $_POST['position'];
}



if($_POST['region'] == NULL) {
    $region_Err = 'Please select your Region';
} else{
    $region = $_POST['region'];
}

if(empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST agree';
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phone_Err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_Err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    }
    }


// the logic is fi post wines IS NOT empty, then, 
// we need to grab the wines and display the, just like 
// we did in our implode.php

function position(){
    $my_return = '';
    if(!empty($_POST['position'])) {
        $my_return = implode(', ', $_POST['position']);
    }
    return $my_return;
} //close function

if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['position'],
    $_POST['region'],
    $_POST['comments'],
    $_POST['privacy'],
    $_POST['phone']
)){
    
    $to = 'szemeo@mystudentswa.com';
    $subject = 'Test Email,' .date('m/d/y');
    $body = '
    The First Name is: '.$first_name.' '.PHP_EOL.'
    The Last Name is: '.$last_name.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    US Region: '.$region.' '.PHP_EOL.'
    Position: '.position().' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    ';

    $headers = array(
        'From' => 'noreply@canodiego.com',
        'Reply-to' => ''.$email.''
    );

    
    
    mail($to, $subject, $body, $headers );
    header('Location: thx.php');
}

} //END IF SERVER REQUEST


