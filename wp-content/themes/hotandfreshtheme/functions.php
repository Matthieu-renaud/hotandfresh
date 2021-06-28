<?php

function montheme_supports()
{
  add_theme_support('title-tag');
}

function montheme_register_assets()
{
  // Déclaration du fichier de style principal
  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/assets/css/main.css',
  );
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
