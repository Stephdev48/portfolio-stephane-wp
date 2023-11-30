                            <!-- Contact -->
<div class="contact-bg">
    <?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="form">
            <?php the_content(); ?>
        </div>
    <?php get_footer(); ?>
    <?php wp_link_pages(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
