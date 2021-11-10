<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<style>

form {
    width: 350px;
    margin: 0 auto;
    border: 1px solid red;
    padding: 10px;
}

h1 {
    text-align: center;
    color: green;
}

body {
    display: block;
    margin: 8px;
}

h2 {
    font-size: 1.5em;
    text-align: center;
}

p {
    color: red;
    text-align: center;
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
        textarea{
            width:90%;
        }

        h3{
            color:red;
            text-align:center;
        }

</style>
</head>
<body>
<h1>Adder.php</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<label>Enter the first number:</label>
<input type="text" name="num1"><br>
<label>Enter the second number:</label>
<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['num1'],
        $_POST['num2'])){
            
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num1_int = intval($num1);
$num2_int = intval($num2);
$myTotal = $num1_int + $num2_int;

if(empty($num1_int && $num2_int)) {
    echo '<h3>Please fill out the input fields</h3>';
} else{
echo '<h2>You added '.$num1_int.' and '.$num2_int.'</h2>'; 
echo '<p> and the answer is <br> <style="color:red;">'.$myTotal.' </p> <br>';
echo '<p><a href="">Reset page</a>';
    }
} 
}
?>

<!-- here are my errors--> 
<!-- CORRECTIONS: 
    -Removed forward slash from form tag on line 64.
    -Moved php closing tag.
    -Added $_POST['num2'] on line 75.
    -Single quotes around echo on line 87.
    -Removed double quotes around > sing on line 87.
    -Added closing quote on line 87.
    -Got rid of the negative sign before the equal sign on  line 81.
    -Added double quote on line 87 in the style tag.
    -Added semi colon at the echo statement on line 88. 
    -Added closing Double quote on line 69 "Add Em!!"
    - Got rid of ';{ on last line 119.
    -Added opening label tags on form.
    -Added contitional if/else statement.
    -Added meta tags.
    -Added closing h2 tag on line 86.
    -Added post method to the form tag.
    -I got rid of the comment next to the initial php tag. On line 1. 
    -I moved the php code to the bottom of the page.
    -Added some style to the form.
    -Added $_SERVER['REQUEST_METHOD'] == 'POST' on line 73.
    -Added php form action on line 64.
    here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors -->
</body>
</html>

   