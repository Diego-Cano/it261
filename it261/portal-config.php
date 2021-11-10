<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information


*/


//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Diego's Home Page";
        $logo = "fab fa-codepen";
    break;

    case 'contactme.php':
        $title = "Diego's Contact Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
    break;

    case 'aia.php':
        $title = "Diego's Aia Page";
        $logo = "fab fa-codepen";
        $logo_color = ' style="color:#00f"';
    break;

    case 'flowchart.php':
        $title = "Diego's flowchart Page";
        $logo = "fab fa-codepen";
    break;

    default:
        $title = THIS_PAGE;
        $logo = " ";//no icon by default
        
}

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Home";
    $nav1['Switch-3.php'] = "Switch-3";
    $nav1['Troubleshoot-4.php'] = "Troubleshoot-4";
    $nav1['Calculator.php'] = "Calculator";
    $nav1['Email.php'] = "Email";
    $nav1['Gallery.php'] = "Gallery";
    $nav1['Database.php'] = "Database";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

