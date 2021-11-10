<?php 
include('config.php');
include('includes/header.php'); ?>

<?php
//class coffee exercise
//if today is thursday, it will be pumpkin latte day
//we will start with the isset() function
//the we will introduce our first GLOBAL variable
//our switch

// $variable = 'Life is good!';
// if(isset($variable)){
//     echo 'Yippy-skippy!!!';
// } else {
//     echo 'Not';
// }

// starting the switch
// if something is set, $today, the all is well 
// else, today is TODAY

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

//switch

switch($today){
    case 'Monday' :
        $wonder = 'Monday is our Christ the Redeemer day!';
        $pic = 'christ.jpg';
        $alt = 'Christ the Redeemer';
        $content = '<b>Christ the Redeemer</b> is an Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil. Constructed between 1922 and 1931, the statue is 30 metres (98 ft) high. The statue weighs 635 metric tons (625 long, 700 short tons), and is located at the peak of the 700-metre (2,300 ft) Corcovado mountain in the Tijuca Forest National Park overlooking the city of Rio de Janeiro.';
        $color = 'monday';
        $actDay = 'blue';
        break;
    case 'Tuesday' :
        $wonder = 'Tuesday is our Great Wall of China Day!';
        $pic = 'wall.jpg';
        $alt = 'Great Wall of China';
        $content = '<b>The Great Wall of China </b> is a series of fortifications that were built across the historical northern borders of ancient Chinese states and Imperial China as protection against various nomadic groups from the Eurasian Steppe.  Several walls were built from as early as the 7th century BC, with selective stretches later joined together by Qin Shi Huang (220–206 BC), the first emperor of China.';
        $color = 'tuesday';
        $actDay = 'green';
        break;
    case 'Wednesday' :
        $wonder = 'Wednesday is our Petra Day!';
        $pic = 'petra.jpg';
        $alt = 'Petra';
        $content = '<b>Petra</b> is a famous archaeological site in Jordan\'s southwestern desert. Dating to around 300 B.C., it was the capital of the Nabatean Kingdom. Accessed via a narrow canyon called Al Siq, it contains tombs and temples carved into pink sandstone cliffs, earning its nickname, the "Rose City." <br> <i>Perhaps its most famous structure is 45m-high Al Khazneh, a temple with an ornate, Greek-style facade, and known as The Treasury.</i>';
        $color = 'wednesday';
        $actDay = 'orange';
        break;

    case 'Thursday' :
        $wonder = 'Thursday is our Colosseum Day!';
        $pic = 'colosseum.jpg';
        $alt = 'Colosseum';
        $content = '<b>The Colosseum</b> is an oval amphitheatre in the centre of the city of Rome, Italy, just east of the Roman Forum. It is the largest ancient amphitheatre ever built, and is still the largest standing amphitheatre in the world today, despite its age. Construction began under the emperor Vespasian (69–79 AD) in 72 and was completed in 80 AD under his successor and heir, Titus (79–81). The Colosseum is built of travertine limestone, tuff (volcanic rock), and brick-faced concrete. The Colosseum could hold an estimated 50,000 to 80,000 spectators at various points in its history having an average audience of some 65,000';
        $color = 'thursday';
        $actDay = 'purple';
        break;

    case 'Friday' :
        $wonder = 'Friday is our Chichen Itza Day!';
        $pic = 'chichen.jpeg';
        $alt = 'Chichen Itza';
        $content = '<b>Chichén Itzá</b>  is a complex of Mayan ruins on Mexico\'s Yucatán Peninsula. A massive step pyramid, known as El Castillo or Temple of Kukulcan, dominates the ancient city, which thrived from around 600 A.D. to the 1200s. Graphic stone carvings survive at structures like the ball court, Temple of the Warriors and the Wall of the Skulls. Nightly sound-and-light shows illuminate the buildings\' sophisticated geometry.';
        $color = 'friday';
        $actDay = 'red';
        break;

    case 'Saturday' :
        $wonder = 'Saturday is our Machu Picchu Day!';
        $pic = 'machu.jpg';
        $alt = 'Machu Picchu';
        $content = '<b>Machu Picchu</b> is an Incan citadel set high in the Andes Mountains in Peru, above the Urubamba River valley. Built in the 15th century and later abandoned, it’s renowned for its sophisticated dry-stone walls that fuse huge blocks without the use of mortar, intriguing buildings that play on astronomical alignments and panoramic views. Its exact former use remains a mystery. ';
        $color = 'saturday';
        $actDay = 'brown';
        break;

    case 'Sunday' :
        $wonder = 'Sunday is our Taj Mahal Day!';
        $pic = 'taj.jpg';
        $alt = 'Taj Mahal';
        $content = '<b>The Taj Mahal </b> is an ivory-white marble mausoleum on the right bank of the river Yamuna in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 17-hectare (42-acre) complex, which includes a mosque and a guest house, and is set in formal gardens bounded on three sides by a crenellated wall.';
        $color = 'sunday';
        $actDay = 'pink';
        break;
}
?>

    <div id="wrapper">
    <main class="<?php echo $color;?>">
    <h1><?php echo $headline; ?></h1>
    <img   class="wonders" src="images/<?php echo $pic; ?>" alt="<?php echo $alt;?>">
    <h2 class="<?php echo $actDay; ?>"> <?php echo $wonder; ?> </h2>
    <p class="dailyContent"><?php echo $content;?></p>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ligula sapien. Praesent tristique aliquam scelerisque. Cras felis felis, vulputate eu commodo in, mattis in magna. Curabitur vel dapibus sem. Duis et arcu quis ipsum sollicitudin pretium. In sit amet mi aliquet, eleifend nulla eu, dignissim est. Phasellus sed sem ligula.</p> -->
    </main>

    <aside class="<?php echo $color;?>">
    <h2>Check out The Wonders of the World</h2>

<ul class="dailyList">
<li><a href="daily.php?today=Monday">Monday*</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday*</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday*</a></li>
<li><a href="daily.php?today=Thursday">Thursday*</a></li>
<li><a href="daily.php?today=Friday">Friday*</a></li>
<li><a href="daily.php?today=Saturday">Saturday*</a></li>
<li><a href="daily.php?today=Sunday">Sunday*</a></li>
</ul>

    </aside>

    

<?php
include('includes/footer.php'); ?>
