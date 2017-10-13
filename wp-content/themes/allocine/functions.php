<?php

function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('bootstrap_script', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('bootstrap_script');


wp_register_script('main_script', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);

wp_enqueue_script('main_script');


wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );

wp_enqueue_style( 'bootstrap_style' );


wp_register_style( 'main_style', get_template_directory_uri() . '/assets/styles/main.css' );

wp_enqueue_style( 'main_style' );


// enregistrement d'une nouvelle font
wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=Roboto' );
// appel de la font dans la page
wp_enqueue_style( 'google_font' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
