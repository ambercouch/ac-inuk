<?php

/**
 * Implement the Custom Post Types
 */
function ac_cpt() {
  $labels = array(
      'name' => _x('Lyrics', 'Song lyrics'),
      'singular_name' => _x('Lyrics', 'Song lyrics'),
      'add_new' => _x('Add New', 'Lyrics'),
      'add_new_item' => __('Add New Lyrics'),
      'edit_item' => __('Edit Lyrics'),
      'new_item' => __('New Lyrics'),
      'all_items' => __('All Lyrics'),
      'view_item' => __('View Lyrics'),
      'search_items' => __('Search Lyrics'),
      'not_found' => __('No Lyrics found'),
      'not_found_in_trash' => __('No Lyrics found in the Trash'),
      'parent_item_colon' => '',
      'menu_name' => 'lyrics'
  );
  $args = array(
      'labels' => $labels,
      'description' => 'Tim Arnold Lyrics',
      'public' => true,
      'menu_position' => 2,
      //'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes','comments' ,'post-formats' ),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive' => true,
  );
  register_post_type('lyrics', $args);

  $labels = array(
      'name' => _x('Reviews', 'Reviews'),
      'singular_name' => _x('Review', 'Song Reviews'),
      'add_new' => _x('Add New', 'Review'),
      'add_new_item' => __('Add New Review'),
      'edit_item' => __('Edit Review'),
      'new_item' => __('New Review'),
      'all_items' => __('All Reviews'),
      'view_item' => __('View Review'),
      'search_items' => __('Search Reviews'),
      'not_found' => __('No Reviews found'),
      'not_found_in_trash' => __('No Reviews found in the Trash'),
      'parent_item_colon' => '',
      'menu_name' => 'reviews'
  );
  $args = array(
      'labels' => $labels,
      'description' => 'Tim Arnold Reviews',
      'public' => true,
      'menu_position' => 3,
      //'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes','comments' ,'post-formats' ),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'has_archive' => true,
  );
  register_post_type('reviews', $args);
}

add_action('init', 'ac_cpt');

/**
 * Implement the Custom Taxonomies
 */
function ac_tax() {
  $labels = array(
      'name' => _x('Albums', 'Albums'),
      'singular_name' => _x('Album', 'taxonomy singular name'),
      'search_items' => __('Search Albums'),
      'all_items' => __('All Albums'),
      'parent_item' => __('Parent Albums'),
      'parent_item_colon' => __('Parent Albums:'),
      'edit_item' => __('Edit Albums'),
      'update_item' => __('Update Albums'),
      'add_new_item' => __('Add Albums'),
      'new_item_name' => __('New Albums'),
      'menu_name' => __('Albums'),
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
  );
  register_taxonomy('Albums', array('lyrics', 'reviews'), $args);

//  $labels = array(
//      'name' => _x('Service Types', 'taxonomy general name'),
//      'singular_name' => _x('Service Type', 'taxonomy singular name'),
//      'search_items' => __('Search Service Types'),
//      'all_items' => __('All Service Types'),
//      'parent_item' => __('Parent Service Type'),
//      'parent_item_colon' => __('Parent Service Type:'),
//      'edit_item' => __('Edit Service Type'),
//      'update_item' => __('Update Service Type'),
//      'add_new_item' => __('Add New Service Type'),
//      'new_item_name' => __('New Service Type'),
//      'menu_name' => __('Service Types'),
//  );
//  $args = array(
//      'labels' => $labels,
//      'hierarchical' => true,
//  );
//  register_taxonomy('service_type', 'service', $args);
}

add_action('init', 'ac_tax', 0);
