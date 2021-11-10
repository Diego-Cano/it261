<?php 
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <div id="hero">
    <?php
    echo random_pics($photos);
    ?>
    <h2>
    <pre>
    <br>
    function random_pics($photos){

    }
    </pre>
    </h2>


    </div> <!--end hero -->
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ligula sapien. Praesent tristique aliquam scelerisque. Cras felis felis, vulputate eu commodo in, mattis in magna. Curabitur vel dapibus sem. Duis et arcu quis ipsum sollicitudin pretium. In sit amet mi aliquet, eleifend nulla eu, dignissim est. Phasellus sed sem ligula. Phasellus eget pellentesque massa. Ut nec congue tortor, a ornare elit. Maecenas viverra metus interdum justo interdum, a molestie mi placerat.</p>
    </main>

    <aside>
    <h3>Here is my aside</h3>
    </aside>

<?php
include('includes/footer.php'); ?>
