<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php get_header(); ?> <!--récupère le contenu du fichier header-->
  </head>
  <body <?php body_class(); ?>>
  
    <?php if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
 
    <h3><?php the_title(); ?></h3>
 
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
 
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>
  </body>
</html>