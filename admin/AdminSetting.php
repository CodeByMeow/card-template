<?php

namespace Card\Admin;

if (!defined('ABSPATH')) die;

class Admin
{
  public function __construct()
  {
    $this->regiter_post_type_card();
    $this->add_script();
  }

  private function regiter_post_type_card()
  {
    add_action('init', [$this, 'register_post_card']);
  }

  public function register_post_card()
  {
    $labels = [
      'name'               => __('Cards'),
      'singular_name'      => __('Card'),
      'add_new'            => __('Add New Card'),
      'add_new_item'       => __('Add New Card'),
      'edit_item'          => __('Edit Card'),
      'new_item'           => __('New Card'),
      'all_items'          => __('All Cards'),
      'view_item'          => __('View Card'),
      'search_items'       => __('Search Cards'),
      'featured_image'     => 'Preview',
      'set_featured_image' => 'Add Preview'
    ];

    $args = [
      'labels'            => $labels,
      'public'            => true,
      'menu_position'     => 5,
      'supports'          => array('title', 'custom-field'),
      'has_archive'       => false,
      'show_in_menu'      => true,
      'query_var'         => true,
      'menu_icon'         => 'dashicons-embed-photo',
      'exclude_from_search' => true
    ];

    register_post_type('card', $args);
  }

  private function add_script()
  {
    add_action('wp_enqueue_scripts', [$this, 'html2canvas']);
  }

  public function html2canvas()
  {
    wp_enqueue_script('card_template', CT_URL_ASSET . 'html2canvas.min.js');
  }
}

new Admin();
