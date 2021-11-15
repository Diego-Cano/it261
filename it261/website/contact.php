<?php 
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <main>
    <h1 class="foster"><?php echo $headline; ?></h1>
    <p class="foster">We match fosters with animals who are a good fit in terms of lifestyle & time commitment. We have several different foster programs you can choose to be part of.</p>
    <h2 class="foster">Please fill out your Application!</h2> 
    <?php 
    include('includes/form.php');
    ?>
    </main>

    <aside>
    <h3 class="foster">Foster a Dog today!</h3>
    <ul>
    <li class="foster">Fostering a puppy brings love and joy into your home, and it’s flexible. According to research, dogs really do make us happier. Fostering is a flexible way to bring a dog into your home for a period of time. It’s not permanent unless you fall in love and adopt the dog!</li>
    <li class="foster">You are freeing up a space in a shelter. For every dog that is fostered, there is one more space in a shelter for another dog that needs a forever home.</li>
    <li class="foster">You are giving an injured pup the one-on-one attention they could not get in a crowded shelter. Puppies need special attention, especially ones who have been injured or are experiencing behavior issues due to their previous situation.</li>
    <li class="foster">You are giving a young puppy a safe place to grow until they are ready to be adopted permanently. Puppies aren’t ready for their forever home until they are at least eight weeks old. An experienced foster parent will be able to take care of his or her needs until they are ready to be adopted.</li>
    <li class="foster">You are helping the shelter learn more about the dog so they can find the best family for the dog. Is the puppy shy or does he or she run to greet guests? If the puppy is older, the foster family can let the shelter know if the dog acts strangely in parks, around children, or has a trigger of some kind that may limit their adoption chances. The key is to learn about their behavior to find the perfect match for their forever home.</li>
    </ul>
    <img class="fostering" src="images/foster1.jpeg" alt="foster a dog">
    </aside>

<?php
include('includes/footer.php'); ?>
