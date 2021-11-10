<?php

// this will be my introduction to variables 
// var.php
// a variable is a container for information

$name = 'Diego';
echo $name;
$body_temp = 98.6;
$weather = 'Today is a sunny day';

// if you use single quotes around a variable, the value of the variable will not display 
echo 'My name is $name';
// If you use double quotes, the variable value will display
echo "My name is $name";
// You can display an empty line for display
echo '<br>';
// The perfect solution for the variable situation is as follow:
echo 'My name is '.$name.' ';
// the variable should be enclosed with dots and single quotes in both sides. 
//The dots on the previous line resemble the + in javaScript the difference is that on this case the dots are next to the variable (no space).
echo '<br>'; 

echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
$name = 'Steven';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;
$z = $x * $y;
echo '<br>';
echo $z;
//continue with our name

$first_name = 'Diego';
$last_name = 'Smith';

echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.'  '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.'';

// puntuation challenges - inside single quotes, you MUST nest the variable with
// the following '.$variable.' ... Now, when you have an apostraphe, you must use 
// ESCAPE (\) before the apostraphe \'

echo '<br>';
echo "Here are the names with a double's quote! $first_name$last_name";
echo '<br>';
$name = 'Diego';
$name .= ' Cano';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 20;
$x *= .09;
echo $x;

// our first preset function - number_format()
echo '<br>';
$x = 137;
$x /= 4;
// result is 34.25
$friendly_x = number_format($x, 1);
echo $friendly_x;
echo '<br>';
// our second preset funtion - the date function
echo date('Y'); //this will show the current year.
echo '<br>';
echo date('l'); //this will show the current day of the week.

//ARRAYS - You cannot echo an array
$fruit = 'orange';
$fruit = 'banana';
// The value changes. We need an array
$fruit = 'orange';
$fruit .= 'banana';
// The value changes. It is just concatenating


$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';

echo '<br>';
echo $fruit[3]; //It will echo the 3rd value in the array
//You can echo a single value from an array
echo '<br>';
$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
];

// CANNOT echo an array! It will show a PHP error
echo $fruit;
echo '<br>';
print_r($fruit); // One way of printing an array
echo '<br>';
var_dump($fruit);  // Another way of printing an array

echo '<br>';
//another array in the world of websites

$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

echo $nav[0];

echo '<br>';

//ASSOCIATIVE ARRAY - It matches one value with the other

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

// Or

// index.php is the key of the array, and Home is the value (key, value relationship)
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<pre>';
var_dump($nav);
echo '</pre>';
//<pre> basically adds format to the dumped array
echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "'.$show.'" starring, '.$show_actor.', and it is a '.$show_genre.' ';

$vegetables[]= 'spinach';
$vegetables[]= 'broccoli';
$vegetables[]= 'asparagus';
$vegetables[]= 'kale';
echo $vegetables;