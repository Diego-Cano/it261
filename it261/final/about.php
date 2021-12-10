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
<!-- Nav var -->
</header>
<div id="wrapper">
<h1>Databases</h1>
<img class="database1" src="images/database1.png" alt="">
<img class="database2" src="images/database2.png" alt="">

</div><!-- end wrapper -->
<?php
include('includes/footer.php');