<?php

function montheme_supports()
{
  add_theme_support('title-tag');
}

function montheme_register_assets()
{
  wp_register_style('hotandfresh', './assets/css/hotandfresh_style.css');
  wp_enqueue_style('hotandfresh');
}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
