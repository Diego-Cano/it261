<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <style>
        form{
            width:400px;
            margin: 0 auto;
        }

        fieldset{
            border: 1px solid red;
            padding: 10px;
        }

        label, textarea{
            display: block;
            margin-bottom:5px;
        }

        input , textarea{
            margin-bottom:10px;
        }

        input[type=text],
        input[type=email],
        textarea{
            width:90%;
        }

        h3{
            color:red;
            text-align:center;
        }

        .box{
            width:400px;
            margin: 20px auto;
            padding: 15px;
            background:beige;
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <!-- ename -->
            <label for="fname">First Name</label>
            <input type="text" name="fname">
            <label for="coffees">How many coffees?</label>
            <input type="number" name="coffees">
            <label for="lattes">Lattes</label>
            <input type="number" name="lattes">
            <label for="caps">Cappucino</label>
            <input type="number" name="caps">
            
            <input type="submit" value="Send it !">
        </fieldset>   
    </form>
    
<?php
// form 3 -- adding the HTML and CSS!
if(isset($_POST['fname'],
        $_POST['coffees'],
        $_POST['lattes'],
        $_POST['caps'])){ 

$fname = $_POST['fname'];
$coffees = $_POST['coffees'];
$int_coffees = intval($coffees);
$lattes = $_POST['lattes'];
$int_lattes = intval($lattes);
$caps = $_POST['caps'];
$int_caps = intval($caps);

$total = $int_coffees + $int_lattes + $int_caps;

// we are going to nest an if/else statement

    if(empty($fname && $int_coffees && $int_lattes && $int_caps)) {
        echo '<h3>Please fill out the input fields</h3>';
    } else{
        // echo $fname;
        // echo "<br>";
        // echo $lname;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $comments;

        echo'
        <div class="box">
        <h2>Hello '.$fname.'</h2>
        <p>You have ordered the following:</p>
        <ul>
        <li>'.$int_coffees.' Coffees</li>
        <li>'.$int_lattes.' Lattes</li>
        <li>'.$int_caps.' Cappuccinos</li>
        </ul>
        <p>Totalling '.$total.' beverages</p>
        </div>
        ';
    } //end else statement
} // end isset
?>

</body>
</html>