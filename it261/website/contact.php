<?php 
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ligula sapien. Praesent tristique aliquam scelerisque. Cras felis felis, vulputate eu commodo in, mattis in magna. Curabitur vel dapibus sem. Duis et arcu quis ipsum sollicitudin pretium. In sit amet mi aliquet, eleifend nulla eu, dignissim est. Phasellus sed sem ligula. Phasellus eget pellentesque massa. Ut nec congue tortor, a ornare elit. Maecenas viverra metus interdum justo interdum, a molestie mi placerat.</p>
    <h2>Please fill out our form!</h2> 
    <?php 
    include('includes/form.php');
    ?>
    </main>

    <aside>
    <h3>Our Aside for our Form</h3>
    </aside>

<?php
include('includes/footer.php'); ?>
