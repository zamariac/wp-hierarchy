<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

<!-- gives each post a unique ID // postclass will echo out the class -->

  <header class="entry-header">

    <h1> <?php esc_html_e( '404', 'wphierarchy' ); ?></h1>

  </header>

  <div class="entry-content">

  <h1> <?php esc_html_e( 'Sorry! No content found', 'wphierarchy' ); ?></h1>

  </div> 

</article>