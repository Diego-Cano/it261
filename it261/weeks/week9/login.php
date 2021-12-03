<?php 
// login.php page
// input fields for username and password

include('server.php');
include('includes/header-form.php');
?>
<div id="wrapper">

<h1 class="center">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<label for="username">Username</label>
<input id="username" type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ;?>">

<label for="password">Password</label>
<input id="password" type="password" name="password">

<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>'">Reset</button>

<?php
include('errors.php');

?>

</fieldset>
</form>
<h3>Not a member?</h3>
<span class="block"><a href="register.php">Register here!</a></span>

</div><!--Close Wrapper-->
<footer>
        <ul>
            <li>Copyright &copy;
                <?php 
                $date_current = date('Y');
                $date_created = 2017;
                if($date_current == $date_created){
                    echo $date_created;
                } else{
                    echo ''.$date_created.' - '.$date_current.'  ';
                }
                ?>
            </li>
            <li>All Rights Reserved</li>
            <li><a href="http://validator.w3.org/check?uri=referer"
                onclick="this.href='http://validator.w3.org/check?uri=' + 
            document.URL"><img
                src="http://www.w3.org/Icons/valid-xhtml10"
                alt="Valid XHTML 1.0!" height="31" width="88" /></a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3">CSS3</a></li>
        </ul>
</footer>
</body>
</html>