<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>

<?php get_footer(); ?>
<?php wp_link_pages(); ?>
    <?php endwhile; ?>
    <?php endif; ?>