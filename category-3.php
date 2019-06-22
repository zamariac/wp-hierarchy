<!-- the number 3 comes from dashboard categories individual category url ...can also get that ID for author etc-->

<?php get_header('splash'); ?>

<div id="primary" class="content-area excerpt">

		<main id="main" class="site-main">

        <h1> <?php the_archive_title();?>
             <?php esc_html_e( ' Posts Only!', 'wphierarchy' ); ?>
        </h1>
        <p><?php echo category_description(); ?></p>
        <hr>

      <?php if ( have_posts () ) : while ( have_posts() ): the_post(); ?>

          <?php get_template_part('template-parts/content-posts', get_post_format() ); ?>

      <?php endwhile; else: ?>

          <?php get_template_part('template-parts/content', 'none'); ?>

      <?php endif; ?> 

      <?php echo paginate_links(); ?>

      <p> Template: category-3.php</p>

    </main>

</div>

<?php get_footer('splash'); ?>