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
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
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
<h1>The Art Association of American Colleges</h1>
<p>The Art Association of American Colleges is funded in large part through the contributions of individuals like you. Membership of the Art Association of American Colleges signifies that you support the largest American Association of arts. It means you recognize the importance of collecting and preserving the history and art of the American people for future generations. It shows you care.</p>
<p>All Members receive free admission to the Museums, discounts on workshops, classes, and gift shop items, and special invitations to previews, exhibition openings, and members-only events. All memberships include complimentary guest passes to share the Museums with others. Please view individual Membership Levels for a full list of benefits. Help us continue our mission. Join Us As We Grow!</p>


<img class="homeImage" src="images/home.jpeg" alt="">

</div><!-- end wrapper -->
<?php
include('includes/footer.php');
