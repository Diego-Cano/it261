<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our IT 261 Website';
        $body = 'home';
        $headline = 'Welcome to our Home page of our IT 261 Website';
        break;
    case 'about.php':
        $title = 'About page of our IT 261 Website';
        $body = 'about inner';
        $headline = 'Welcome to our About page of our IT 261 Website';
        break;
    case 'daily.php':
        $title = 'Daily page of our IT 261 Website';
        $body = 'daily';
        $headline = 'New 7 Wonders of the World';
        break;
    case 'project.php':
        $title = 'Project page of our IT 261 Website';
        $body = 'project inner';
        $headline = 'Welcome to our Project page of our IT 261  Website';
        break;
    case 'contact.php':
        $title = 'Contact page of our IT 261 Website';
        $body = 'contact inner';
        $headline = 'Welcome to our Fostering Dog Program';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our IT 261 Website';
        $body = 'gallery';
        $headline = 'Welcome to our Gallery page of our IT 261 Website';
        break;
    case 'thx.php':
        $title = 'Thank you page of our IT 261 Website';
        $body = 'thx';
        $headline = 'Welcome to our Thank you page of our IT 261 Website';
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
$dog= '';
$foster= '';
$comments= '';
$privacy= '';
$phone = '';

$first_name_Err= '';
$last_name_Err= '';
$gender_Err= '';
$email_Err= '';
$dog_Err= '';
$foster_Err= '';
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

if(empty($_POST['dog'])) {
    $dog_Err = 'Please choose your dog size';
} else {
    $dog = $_POST['dog'];
}

if($_POST['foster'] == NULL) {
    $foster_Err = 'Please select your Fostering Time';
} else{
    $foster = $_POST['foster'];
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

function my_dog(){
    $my_return = '';
    if(!empty($_POST['dog'])) {
        $my_return = implode(', ', $_POST['dog']);
    }
    return $my_return;
} //close function

if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['dog'],
    $_POST['foster'],
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
    Fostering Time: '.$foster.' '.PHP_EOL.'
    Dog size: '.my_dog().' '.PHP_EOL.'
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

//  photos - we will display our photos ramdomly

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

// $i = rand(0, 4);
// $selected_image = ''.$photos[$i].'.jpg';
// echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].'">';

function random_pics($photos){
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    echo '<img class="random" src="images/'.$selected_image.'" alt=" '.$photos[$i].'">';
}


