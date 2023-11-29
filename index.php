<?php get_header(); ?>




<?php if ( have_posts() ) :
     while ( have_posts() ) : the_post(); ?>



<div class="maincontent">
    <?php the_content(); ?>
</div>
<?php wp_link_pages(); ?>


<?php endwhile; ?>


<?php endif; ?>
<?php get_footer(); ?>