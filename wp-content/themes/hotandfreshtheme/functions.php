<?php

function hotandfresh_supports()
{
  add_theme_support('title-tag');
}

function hotandfresh_register_assets()
{
  // Déclaration du fichier de style principal
  wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/assets/css/main.css',
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
