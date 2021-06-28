<?php

function montheme_supports()
{
  add_theme_support('title-tag');
}

function montheme_register_assets()
{
  // Déclaration de la librairie d'icônes Font Awesome
  wp_enqueue_style(
    'fontAwesome',
    get_template_directory_uri() . '/assets/css/fontawesome-free-5.15.3/css/all.min.css',
    array(),
    '5.15.3'
  );

  // Déclaration du fichier de style principal
  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/assets/css/main.css',
    array('fontAwesome'),
    '1.0'
  );
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
