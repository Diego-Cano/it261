<?php 
session_start();

include('config.php');

// if the user has not logged in correctly, they will be directed to the log page???

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] ='You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

// Notification message
// if successful, welcome the end user!!!

if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div> <!-- end div success -->
<?php endif; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3> Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p><a class="logout" href="index.php?logout='1' ">Log out</a></p>
</div>   <!-- end welcom-logout div -->
<?php endif ; ?>
</header>
<div id="wrapper">
<h1>Welcome to our Thank you page!</h1>

<!-- your footer include will be placed at the bottom of the page -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ligula sapien. Praesent tristique aliquam scelerisque. Cras felis felis, vulputate eu commodo in, mattis in magna. Curabitur vel dapibus sem. Duis et arcu quis ipsum sollicitudin pretium. In sit amet mi aliquet, eleifend nulla eu, dignissim est. Phasellus sed sem ligula. Phasellus eget pellentesque massa. Ut nec congue tortor, a ornare elit. Maecenas viverra metus interdum justo interdum, a molestie mi placerat.</p>
    <h2>Thank You for submitting your Form!</h2> 

</div><!-- end wrapper -->
<?php
include('includes/footer.php');
