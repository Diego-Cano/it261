<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
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

<label for="position">Position</label>
<ul>
<li>
<input type="checkbox" name="position[]" value="Student"
<?php if(isset($_POST['position']) && in_array('Student', $position)) echo 'checked= "checked"' ;?>
>Student
</li>
<li>
<input type="checkbox" name="position[]" value="Professor"
<?php if(isset($_POST['position']) && in_array('Professor', $position)) echo 'checked= "checked"' ;?>
>Professor
</li>
<li>
<input type="checkbox" name="position[]" value="Parent"
<?php if(isset($_POST['position']) && in_array('Parent', $position)) echo 'checked= "checked"' ;?>
>Parent
</li>
<li>
<input type="checkbox" name="position[]" value="Artist"
<?php if(isset($_POST['position']) && in_array('Artist', $position)) echo 'checked= "checked"' ;?>
>Artist
</li>
<li>
<input type="checkbox" name="position[]" value="Sponsor"
<?php if(isset($_POST['position']) && in_array('Sponsor', $position)) echo 'checked= "checked"' ;?>
>Sponsor
</li>
</ul>
<span class="error">
<?php echo $position_Err ;?>
</span>

<label for="region">USA Region</label>
<select name="region">
<option value="" NULL 
<?php if(isset($_POST['region']) && $_POST['region'] == NULL) echo 'selected = "unselected"' ;?>
>Select One</option>
<option value="West" 
<?php if(isset($_POST['region']) && $_POST['region'] == 'West') echo 'selected = "selected"' ;?>
>West</option>
<option value="North-West"
<?php if(isset($_POST['region']) && $_POST['region'] == 'North-West') echo 'selected = "selected"' ;?>
>North-West</option>
<option value="North-East"
<?php if(isset($_POST['region']) && $_POST['region'] == 'North-East') echo 'selected = "selected"' ;?>
>North-East</option>
<option value="Mid-West"
<?php if(isset($_POST['region']) && $_POST['region'] == 'Mid-West') echo 'selected = "selected"' ;?>
>Mid-West</option>
<option value="South-West"
<?php if(isset($_POST['region']) && $_POST['region'] == 'South-West') echo 'selected = "selected"' ;?>
>South-West</option>
<option value="South-East"
<?php if(isset($_POST['region']) && $_POST['region'] == 'South-East') echo 'selected = "selected"' ;?>
>South-East</option>
<option value="Mid-Atlantic"
<?php if(isset($_POST['region']) && $_POST['region'] == 'Mid-Atlantic') echo 'selected = "selected"' ;?>
>Mid-Atlantic</option>
</select>
<span class="error">
<?php echo $region_Err ;?>
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

<input class="submit" type="submit" value="Send it!">
<p><a href="" class="reset">Reset </a></p>
</fieldset>
</form>