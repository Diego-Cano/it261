<?php 
// this will be my errors page

// logically, if we have more that 0 errors, we need to display a message
// if en-user did not fill on the email input field, the message will display - Email is requires
// array_push($errors, 'Email is required')
// don't forget, we cannot echo an array - foreach loop
// we will be using the foreach loop!

if(count($errors) > 0) :?>
<div class="error">
<?php foreach($errors as $error) : ?>
<p><?php echo $error; ?> </p>
<?php endforeach; ?>
</div>
<?php endif ;?>