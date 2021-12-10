<?php 

session_start();

include('./config.php');

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

<h1>10 Most Famous Paintings in the World</h1>

<div id="wrapper">
<main>

<?php
$sql = 'SELECT * FROM famous_paintings';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
// now tume for the while loop - and the while loop will return the array
while($row = mysqli_fetch_assoc($result)){
  echo '<h4 class="paintingH4">For more information about <i>'.$row['name'].'</i>, please click <a class="clickHere" href="paintings-view.php?id='.$row['painting_id'].' ">here!</a></h4>';
  echo '<ul class="paintingList">';
  echo '<li> '.$row['name'].'</li>';
  echo '<li>'.$row['artist'].'</li>';
  echo '<li> Ranking #'.$row['ranking'].'</li>';
  echo '</ul>';
  echo '<br>';
  echo '<hr>';
} //closing while

} else{
  echo 'Houston, we have a problem!!!';
}

mysqli_free_result($result);
mysqli_close($iConn);

?> 


</div>

</div><!-- end wrapper -->
<?php
include('includes/footer.php');
