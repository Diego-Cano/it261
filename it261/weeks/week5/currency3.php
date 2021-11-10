<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Our currency 3 - Our Sticky Form!</title>
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label for="name">NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])    ;?>"> 
<!-- fixme is not working -->
<label for="email">EMAIL</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<label for="amount">How much money do you have?</label>
<input type="text" name="amount" value="
<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ;?>
">


<label for="currency">Choose your currency</label>
<ul>
<li><input type="radio" name="currency" value="0.013"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013' ) echo 'checked="checked"' ;?>>
Rubles</li>
<li><input type="radio" name="currency" value="0.76"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76' ) echo 'checked="checked"' ;?>>
Canadian</li>
<li><input type="radio" name="currency" value="1.28"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28' ) echo 'checked="checked"' ;?>>
Pounds</li>
<li><input type="radio" name="currency" value="1.18"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18' ) echo 'checked="checked"' ;?>>
Euros</li>
<li><input type="radio" name="currency" value="0.0094"
<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094' ) echo 'checked="checked"' ;?>>
Yens</li>
</ul>

<select name="bank">
<option value="" NULL
<?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected= "selected"';?>>
Select one!</option>
<option value="BOA"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected= "selected"';?>>
Bank of America</option>
<option value="key"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'key') echo 'selected= "selected"';?>>
Key Bank</option>
<option value="chase"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected= "selected"';?>>
Chase</option>
<option value="BECU"
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected= "selected"';?>>
Boeing Credit Union</option>
<option value="mattress" 
<?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress') echo 'selected= "selected"';?>>
Mattress</option>
</select>

<input type="submit" value="Convert it!">
<p><a href="">Reset</a></p>

</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //if our posts name, email, currency and amount is empty
    //then we will call out a specific echo!

    if(empty($_POST['name'])){
        echo '<span class="error">Please fill out your name</span>';
    }
    if(empty($_POST['email'])){
        echo '<span class="error">Please fill out your email</span>';
    }
    if(empty($_POST['amount'])){
        echo '<span class="error">Please fill out your amount</span>';
    }
    if(empty($_POST['currency'])){
        echo '<span class="error">Please choose your currency</span>';
    }

    //if post bank is NULL, please select your bank!
    // ERROR FIXME
    if($_POST['bank'] == NULL){
        echo '<span class="error">Please choose your banking 
        institution</span>';
    }

    if(isset(
        $_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency'],
        $_POST['bank']) &&
        is_numeric($_POST['amount'])
    ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        $total = $amount * $currency;
        $friendly_total = floor($total);

        echo '
        <div class="box">
        <h2>Hello, '.$name.'</h2>
        <p>You now have $'.$friendly_total.' American Dollars, and it will be
        deposited in <b>'.$bank.'</b> and  we will email you at <b>'.$email.'</b> in the next 24
        hours!</p>
        </div>
        ';

    } //close isset

}//Server Request
?>
    
</body>
</html>