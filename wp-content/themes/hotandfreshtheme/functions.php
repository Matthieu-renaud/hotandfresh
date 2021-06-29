<?php

function hotandfresh_supports()
{
  add_theme_support('title-tag');
}

function hotandfresh_register_assets()
{

  wp_enqueue_style(
    'fontAwesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
    array(),
    '5.15.3'
  );

  // Déclaration du fichier de style principal
  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
  );

  wp_enqueue_style(
    'header',
    get_template_directory_uri() . '/assets/css/header.css',
  );

  wp_enqueue_style(
    'front-page',
    get_template_directory_uri() . '/assets/css/front-page.css',
  );
}

function hotandfresh_document_title_parts($title)
{
  unset($title['tagline']);
  return $title;
}

add_action('after_setup_theme', 'hotandfresh_supports');
add_action('wp_enqueue_scripts', 'hotandfresh_register_assets');
add_filter('document_title_parts', 'hotandfresh_document_title_parts');
