<?php
// using the heredoc!

$book = 'Handmaid\'s Tale'; //Note the \ ESCAPE sign
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

// heredoc is a way of dealing with quotation marks when coding
// The HAND key word can be replace for any other word.
// It starts with >>> sign and ends with the key word. 
$content = <<<HAND
My favoritebook is $book, written by $author, and is presently a 
miniseries on HULU. Hulu's viewing audience is extremely excited about the 
miniseries  and looks forward to the 5th season of the award winnig "Handmaid's Tale!"

$actor's rendition as $character is right on! Once this content is corrected, it 
will display properly; my content is displayed in orange, and my variables are not displayed in black!!!
As a matter of fact, everything is displayed in red.
HAND;

echo $content;