
       
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

<!-- gives each post a unique ID // postclass will echo out the class -->

  <header class="entry-header">

    <!-- <h1>index.php</h1> pull in the title tag-->

    <?php the_title( '<h1>', '</h1>'); ?>


  </header>

  <div class="entry-content">

    <!-- <p> lorem ipsum lorem ipsum </p>  pull in the contetn-->

    <?php the_content();?>

  </div> 

</article>