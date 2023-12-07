<?php 


/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );


/** photo mise en avant */
add_theme_support( 'post-thumbnails' );
 



  /** Nouveau CPT Vélos (exercice...) */
function mon_cpt_velo() {

  $labels = array(
    'name' => 'Vélos',
    'all_items' => 'Tous les vélos',
    'singular_name' => 'Vélo',
    'add_new_item' => 'Ajouter un vélo',
    'add_new' => 'Ajouter un vélo',
    'edit_item' => 'Modifier un vélo',
    'menu_name' => 'Vélos',

  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-cart',
  );


  register_post_type('velos', $args);

  
  $labels = array(      // (Taxonomie du CPT vélos)
    'name' => 'Marque',
    'new_item_name' => 'Nom de la Marque',
    'parent_item' => 'Marque parent',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true,
  );

  register_taxonomy('marque_velo', 'velos', $args);

}
add_action('init', 'mon_cpt_velo');

  ?>






<?php

//Reproduction du CPT Apprenants

function apprenantsbis() {

  $labels = array(
    'name' => 'ApprenantsBis',
    'all_items' => 'Tous les apprenants',
    'singular_name' => 'Apprenant',
    'add_new_item' => 'Ajouter un apprenant',
    'add_new' => 'Ajouter un apprenant',
    'edit_item' => 'Modifier un apprenant',
    'menu_name' => 'ApprenantsBis',

  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'menu_position' => 30,
    'menu_icon' => 'dashicons-welcome-learn-more',
  );


  register_post_type('apprenantsbis', $args);

  
  $labels = array(      // (Taxonomie de ApprenantsBis)
    'name' => 'Année promo',
    'new_item_name' => 'Année promo',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('annee_promo', 'apprenantsbis', $args);

  
  $labels = array(
    'name' => 'Compétences',
    'new_item_name' => 'Compétences',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('competences', 'apprenantsbis', $args);

  $labels = array(
    'name' => 'Formation suivie',
    'new_item_name' => 'Formation suivie',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('formation_suivie', 'apprenantsbis', $args);

}
add_action('init', 'apprenantsbis');

  ?>