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
    function random_pics($photos){
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].'">';
}
    </pre>
    </h2>


    </div> <!--end hero -->
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ligula sapien. Praesent tristique aliquam scelerisque. Cras felis felis, vulputate eu commodo in, mattis in magna. Curabitur vel dapibus sem. Duis et arcu quis ipsum sollicitudin pretium. In sit amet mi aliquet, eleifend nulla eu, dignissim est. Phasellus sed sem ligula. Phasellus eget pellentesque massa. Ut nec congue tortor, a ornare elit. Maecenas viverra metus interdum justo interdum, a molestie mi placerat.</p>
    </main>

    <aside>
    <h3>-Random Image Gallery-</h3>
    </aside>

<?php
include('includes/footer.php'); ?>
