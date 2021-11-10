<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 - Celcius Form</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <legend>Our Celcius Form</legend>
        <label for="cel">Enter your Celcius</label>
        <input type="number" name="cel">
        <input type="submit" value="Convert it!!">
        <p><a href="">Reset!</a></p>
    </fieldset>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5 ) + 32;
        $far_rounded = round($far, 0);
                if($cel == NULL){
                    echo '<h2>Please fill out your Celcius Value</h2></p>';  
            } elseif($far <= 32){
                echo '<p> '.$far_rounded.' degrees and it is pretty cold!</p>';
            } elseif($far <= 40){
                echo '<p> '.$far_rounded.' degrees and it is not as cold!</p>';
            } elseif($far <= 50){
                echo '<p> '.$far_rounded.' degrees and it is getting warmer!</p>';
            } elseif($far <= 60){
                echo '<p> '.$far_rounded.' degrees and I\'m liking it!!</p>';
            } elseif($far <= 70){
                echo '<p> '.$far_rounded.' degrees and I\'m really liking it!</p>';
            } elseif($far <= 80){
                echo '<p> '.$far_rounded.' degrees and I\'m going swimming!</p>';
            } elseif($far <= 95){
                echo '<p> '.$far_rounded.' degrees and it\'s getting hot!</p>';
            } else{
                echo '<p>It is a cooker!</p>';
            }
    }//end isset

}//end server post
    ?>
</body>
</html>