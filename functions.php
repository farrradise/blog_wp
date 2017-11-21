<?php
function add_my_script() {
  wp_enqueue_style( 'style-name', get_stylesheet_uri() );

  // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true ); (autre façon de faire pour inserer les scripts et liens)
  // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
  // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/slick/slick.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', ' add_my_script' );


// Activer le menu
add_theme_support('nav_menus');
register_nav_menu('primary', 'Menu principal');
// primary: id interne, Menu principal: libellé dans le dashboard


// <!--sidebar defaut -->
if (function_exists('register_sidebar'))
// <!-- si la fonction register_sidebar existe -->
register_sidebar(array('name'=>'widget1', //<!-- nom de la sidebar -->
'before_widget'=>'<section class="widget">', //<!-- Départ de chaques sections de la sidebar -->
'after_widget'=>'</section>', //<!-- balise de fin d'une de vos sections -->
'before_title'=>'<h2>',//<!-- //Départ du titre de la section -->
'after_title'=>'</h2>'//<!-- //balise de fin du titre de la section -->
));


// pour rendre visible les thumbnail
add_theme_support( 'post-thumbnails' );
