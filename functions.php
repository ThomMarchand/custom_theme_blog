<?php

namespace App;

function theme_support()
{
  add_theme_support('title-tag');
}

function register_assets()
{
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

  wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js', [], null, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', [], null, true);
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

  wp_enqueue_style('bootstrap');
  wp_enqueue_script('jquery');
  wp_enqueue_script('popper');
  wp_enqueue_script('bootstrap');
}

add_action('after_setup_theme', __NAMESPACE__ . '\\theme_support');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\register_assets');
