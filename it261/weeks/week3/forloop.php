<?php
// for loops 
// tricky!

for ($x = 0; $x <= 21; $x+= 3) {
    echo "The number is: $x <br>";
}
// is a for loop for our famous celcius - far converter

// do not call out the celcius variable OUTSIDE of the loop!!!

for ($celcius = 0; $celcius <= 100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b> Farenheit:</b> '.$friendly_far.' <b>Celcius:</b> <span style = "color:red; font-weight:bold;">'.$celcius.' </span><hr> ';

}

//kilometers and we have miles