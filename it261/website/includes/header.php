<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" >
    <title> <?php echo $title; ?></title>
</head>
<body class="<?php echo $body;?>">
    <header>
        <div class="header-inner">
        <a href="index.php">
            <img src="images/php.jpeg" alt="logo" id="logo">
        </a>
        <nav>
            <!-- <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Daily</a></li>
                <li><a href="">Project</a></li>
                <li><a href="">Gallery</a></li>
            </ul> -->
            <ul>
            <?php
            echo my_nav($nav);
            ?>
            </ul>
        </nav>
        </div> <!-- end header inner -->
    </header>