<?php

session_start();

include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location: women.php');
} 

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] ='You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}



$sql = 'SELECT * FROM famous_paintings WHERE painting_id = '.$id.'';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement --- if we have more than 0 rows... yippy skippy

if(mysqli_num_rows($result) > 0) {
    // now tume for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)){
    // we are not echoing here, we are assigning our row first name to $first_name
    $ranking = stripslashes($row['ranking']);
    $name = stripslashes($row['name']);
    $artist = stripslashes($row['artist']);
    $location = stripslashes($row['location']);
    $date = stripslashes($row['date']);
    $feedback = '';
    } // ending while

} else {
    $feedback = 'Something is not working!!!!!';
}

include('includes/header.php');
//FOR THE BIG ASSIGNMENT, YOU WILL NOW CALL OUT THE HEADER INCLUDE

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

<h1>Welcome to <?php echo $name ;?>'s page!</h1>
<div id="wrapper">
<main>

<?php
if($feedback == ''){
echo '<ul class="paintingViewUl">';
echo '<li><b>Ranking: </b> '.$ranking.'</li>';
echo '<li><b>Name: </b> '.$name.'</li>';
echo '<li><b>Artist: </b> #'.$artist.'</li>';
echo '<li><b>Location: </b> '.$location.'</li>';
echo '<li><b>Date: </b> '.$date.'</li>';
echo '</ul>';
echo '<br>';
echo '<p class="paintingP">Return back to the <a class="backButton" href="paintings.php">10 Most Famous Paintings in the World Page!</a></p>';
}

?>
</main>

<aside>
<?php
if($feedback == ""){
    echo '<img class="center" src="images/painting'.$id.'.jpeg" alt="'.$first_name.'">';
}
?>
<br>
</aside>
</div>


<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');

?>