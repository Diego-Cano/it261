<?php 
//index.php
// GITHUB >> https://github.com/Diego-Cano/it261/tree/main/it261/weeks/week9
// this index page is the home page of your wonderful website
// alse, after creating this index.php, you will not be able to access it unless you login as a user, or register first, then login!

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
<main>
    <h1 class="foster">Join Our Association Today!</h1>
    <h2 class="foster">Please fill out your Application!</h2> 
    <?php 
    include('includes/form.php');
    ?>
 </main>


</div><!-- end wrapper -->
<?php
include('includes/footer.php');
