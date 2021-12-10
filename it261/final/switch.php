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
<?php


if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

//switch

switch($today){
    case 'Monday' :
        $wonder = 'Painting!';
        $pic = 'painting.jpeg';
        $alt = 'woman painting';
        $content = '<b>Painting</b> is a way to express your emotions on a canvas. The colors, shading, and overall aesthetics of the painting reflect the artist’s personality. The first painting dates back to 40,000 years. The pre-historic people did not have colors and paintbrushes, so they used charcoal, dirt, and animal fat.';
        break;

    case 'Tuesday' :
        $wonder = 'Sculpture!';
        $pic = 'sculpture.jpeg';
        $alt = 'sculpture';
        $content = '<b>Creating sculpture</b>  is one of the seven forms of art still recognized as a way to express creativity. It is a branch of visual arts that operates in 3 dimensions. One cannot put a price on the art of creating sculptures. However, the most expensive sculpture was sold for a whopping US$141.3 million in May 2015. This visual arts field has much potential, and Edmond Art institute has the best teachers in this discipline.';
        break;

    case 'Wednesday' :
        $wonder = 'Pottery!';
        $pic = 'pottery.jpeg';
        $alt = 'pottery';
        $content = '<b>Pottery</b> is a discipline that focuses on feeling the art itself. Beautiful pots and bowls are created by spinning clay and shaping done by hands. This talent is recognized globally, and the most expensive piece of pottery was sold at US$37.7m.';
        break;

    case 'Thursday' :
        $wonder = 'Calligraphy!';
        $pic = 'caligraphy.jpeg';
        $alt = 'caligraphy';
        $content = '<b>Calligraphy</b> is a discipline of visual arts that combines creativity and hand skills to produce beautiful letters, symbols, words, or sentences. It is one of the most soothing forms of art and can help anyone relax after a rough day. Today, calligraphy is used in logo designing and other projects related to graphics. The most expensive calligraphy was sold at a staggering US$64 million.';
        break;

    case 'Friday' :
        $wonder = 'Performance Art!';
        $pic = 'performance.jpeg';
        $alt = 'performace art';
        $content = '<b>In performance art</b>, the voice, body, and inanimate objects are used to convey artistic expressions. Performance art is still practiced and widely appreciated by its fans. The movement that created performance art and sought its recognition started in 1960, and it was mainly used to express music and poetry through expressions and dance.';
        break;

    case 'Saturday' :
        $wonder = 'Cinema!';
        $pic = 'cinema.jpeg';
        $alt = 'Cinema';
        $content = 'The most widely accepted and known form of art is the <b>cinema</b>. Given its reliance on technology, cinema is the most recent among all seven forms of art. Cinema is an evolved form of performance art that became known to the public through kinetoscopes, allowing people to watch movies one at a time. The most profitable movie to date is Gone with the Wind.';
        break;

    case 'Sunday' :
        $wonder = 'Music!';
        $pic = 'music.jpeg';
        $alt = 'Music';
        $content = 'The most ancient form of art is <b>music</b>. Vocal sounds played an important role in communication when speech was not developed. Now, music has become a part of our lives. Today, music is created in many different genres. No matter what you think of certain music genres, the fact that it provides a window into a society’s culture can’t be denied.';
        break;
}
?>

    <div id="wrapper">
    <main class="<?php echo $color;?>">
    <h1>What Are the 7 Different Forms of Art?</h1>
    <img  class="switchImage" src="images/<?php echo $pic; ?>" alt="<?php echo $alt;?>">
    <h2 class="<?php echo $actDay; ?>"> <?php echo $wonder; ?> </h2>
    <p class="textSwitch"><?php echo $content;?></p>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ligula sapien. Praesent tristique aliquam scelerisque. Cras felis felis, vulputate eu commodo in, mattis in magna. Curabitur vel dapibus sem. Duis et arcu quis ipsum sollicitudin pretium. In sit amet mi aliquet, eleifend nulla eu, dignissim est. Phasellus sed sem ligula.</p> -->
    </main>

    <aside class="<?php echo $color;?>">
    <h2>Check out The other forms of Art</h2>

<ul class="switchList">
<li><a href="switch.php?today=Monday">Painting*</a></li>
<li><a href="switch.php?today=Tuesday">Sculpture*</a></li>
<li><a href="switch.php?today=Wednesday">Pottery*</a></li>
<li><a href="switch.php?today=Thursday">Calligraphy*</a></li>
<li><a href="switch.php?today=Friday">Performance Art*</a></li>
<li><a href="switch.php?today=Saturday">Cinema*</a></li>
<li><a href="switch.php?today=Sunday">Music*</a></li>
</ul>

    </aside>


<!-- your footer include will be placed at the bottom of the page -->

</div><!-- end wrapper -->
<?php
include('includes/footer.php');
