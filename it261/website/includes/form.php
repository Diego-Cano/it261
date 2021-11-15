<form class="foster" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])
;?>
">
<span class="error">
<?php echo $first_name_Err ;?>
</span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])
;?>
">
<span class="error">
<?php echo $last_name_Err ;?>
</span>

<label for="email">Email</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])
;?>
">
<span class="error">
<?php echo $email_Err ;?>
</span>


<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])
;?>
">
<span class="error">
<?php echo $phone_Err ;?>
</span>



<label for="gender">Gender</label>
<ul>
<li>
<input type="radio" name="gender" value="female"
<?php if(isset($_POST['gender']) &&  $_POST['gender'] == 'female') echo  'checked= "checked"  '
;?>
>Female
</li>
<li>
<input type="radio" name="gender" value="male" 
<?php if(isset($_POST['gender']) &&  $_POST['gender'] == 'male') echo  'checked= "checked"  '
;?>
>Male
</li>
<li>
<input type="radio" name="gender" value="other"
<?php if(isset($_POST['gender']) &&  $_POST['gender'] == 'other') echo  'checked= "checked"  '
;?>
>Other
</li>
</ul>
<span class="error">
<?php echo $gender_Err ;?>
</span>

<label for="dog">Pick your Dog size</label>
<ul>
<li>
<input type="checkbox" name="dog[]" value="XSmall"
<?php if(isset($_POST['dog']) && in_array('XSmall', $dog)) echo 'checked= "checked"' ;?>
>XSmall
</li>
<li>
<input type="checkbox" name="dog[]" value="Small"
<?php if(isset($_POST['dog']) && in_array('Small', $dog)) echo 'checked= "checked"' ;?>
>Small
</li>
<li>
<input type="checkbox" name="dog[]" value="Medium"
<?php if(isset($_POST['dog']) && in_array('Medium', $dog)) echo 'checked= "checked"' ;?>
>Medium
</li>
<li>
<input type="checkbox" name="dog[]" value="Large"
<?php if(isset($_POST['dog']) && in_array('Large', $dog)) echo 'checked= "checked"' ;?>
>Large
</li>
<li>
<input type="checkbox" name="dog[]" value="XLarge"
<?php if(isset($_POST['dog']) && in_array('XLarge', $dog)) echo 'checked= "checked"' ;?>
>XLarge
</li>
</ul>
<span class="error">
<?php echo $dog_Err ;?>
</span>

<label for="foster">Fostering Time</label>
<select name="foster">
<option value="" NULL 
<?php if(isset($_POST['foster']) && $_POST['foster'] == NULL) echo 'selected = "unselected"' ;?>
>Select One</option>
<option value="2weeks " 
<?php if(isset($_POST['foster']) && $_POST['foster'] == '2weeks') echo 'selected = "selected"' ;?>
>2 weeks</option>
<option value="1month"
<?php if(isset($_POST['foster']) && $_POST['foster'] == '1month') echo 'selected = "selected"' ;?>
>1 month</option>
<option value="3month"
<?php if(isset($_POST['foster']) && $_POST['foster'] == '3month') echo 'selected = "selected"' ;?>
>3 months</option>
<option value="6month"
<?php if(isset($_POST['foster']) && $_POST['foster'] == '6month') echo 'selected = "selected"' ;?>
>6 months</option>
<option value="9month"
<?php if(isset($_POST['foster']) && $_POST['foster'] == '9month') echo 'selected = "selected"' ;?>
>9 months</option>
<option value="1year"
<?php if(isset($_POST['foster']) && $_POST['foster'] == '1year') echo 'selected = "selected"' ;?>
>1 year</option>
</select>
<span class="error">
<?php echo $foster_Err ;?>
</span>

<label for="comments">Comments</label>
<textarea name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?>
</textarea>
<span class="error">
<?php echo $comments_Err ;?>
</span>

<label for="privacy">Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) &&  $_POST['privacy'] == 'agree') echo  'checked= "checked"  ';?>
>I agree!</li>
</ul>
<span class="error">
<?php echo $privacy_Err ;?>
</span>

<input type="submit" value="Send it!">
<p><a href="">Reset </a></p>
</fieldset>
</form>