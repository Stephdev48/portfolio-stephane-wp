<?php 


/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );


/** photo mise en avant */
add_theme_support( 'post-thumbnails' );
 



  /**Nouveau CPT Vélos (exercice...) */
function mon_cpt_velo() {

  $labels = array(
    'name' => 'Vélos',
    'all_items' => 'Tous les vélos',
    'singular_name' => 'Vélo',
    'add_new_item' => 'Ajouter un vélo',
    'edit_item' => 'Modifier un vélo',
    'menu_name' => 'Vélos',

  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-cart',
  );


  register_post_type('velos', $args);

  
  $labels = array(      // (Taxonomie du CPT vélos)
    'name' => 'Marque',
    'new_item_name' => 'Nom de la Marque',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('marque_velo', 'velos', $args);

}
add_action('init', 'mon_cpt_velo')

  ?>






<?php

//Reproduction du CPT Apprenants

// function reproduction_apprenants() {

//   $labels = array(
//     'name' => 'Vélos',
//     'all_items' => 'Tous les vélos',
//     'singular_name' => 'Vélo',
//     'add_new_item' => 'Ajouter un vélo',
//     'edit_item' => 'Modifier un vélo',
//     'menu_name' => 'Vélos',

//   );

//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'show_in_rest' => true,
//     'has_archive' => true,
//     'supports' => array( 'title', 'editor', 'thumbnail'),
//     'menu_position' => 5,
//     'menu_icon' => 'dashicons-cart',
//   );


//   register_post_type('velos', $args);

  
//   $labels = array(      // (Taxonomie du CPT vélos)
//     'name' => 'Marque',
//     'new_item_name' => 'Nom de la Marque',
//   );

//   $args = array(
//     'labels'=> $labels,
//     'public' => true,
//     'show_in_rest' => true,
//   );

//   register_taxonomy('marque_velo', 'velos', $args);

// }
// add_action('init', 'mon_cpt_velo')

//   ?>