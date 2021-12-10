<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
<header>
        <a href="index.php">
            <img src="images/logo1.png" alt="logo" id="logo">
        </a>
    <nav>
<ul>
            <?php
            echo my_nav($nav);
            ?>
</ul>
    </nav>