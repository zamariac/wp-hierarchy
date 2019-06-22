<?php get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

      <?php if ( have_posts () ) : while ( have_posts() ): the_post(); ?>

     <!--article is coming from content.php-->

            <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <!-- gives each post a unique ID // postclass will echo out the class -->

            <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post ->ID );?>">
        </span>

            <!-- <h1>index.php</h1> pull in the title tag-->

            <?php the_title( '<h1>', '</h1>'); ?>
        
        <div class="byline">
            <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>
        </div>

            </header>

            <div class="entry-content">
            <!-- allows us to export out code-->
            <pre> <?php var_export( $post ); ?></pre>

            <!-- <p> lorem ipsum lorem ipsum </p>  pull in the contetn-->

            <?php the_content();?>

            </div> 

  <?php if( comments_open() ) : ?>

       <?php comments_template();?>

   <?php endif; ?>




</article>









      <?php endwhile; else: ?>

          <?php get_template_part('template-parts/content', 'none'); ?>

      <?php endif; ?> 

      <p> Template: attachment.php</p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>