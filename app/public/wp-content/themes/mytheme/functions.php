<?php

//アイキャッチを有効化
add_theme_support( 'post-thumbnails');
set_post_thumbnail_size( 400, 267, true );

//ウィジェット機能
register_sidebar(array(
  'name' => 'sidebar1-サイド表示',
  'id' => 'sidebar1'
));

//グローバルナビの追加
add_theme_support('menus');
  //作成したメニューをヘッダーナビに使えるようにする
  register_nav_menus( array(
  'header-navigation' => 'Header Navigation',
) );
function add_post_tag_archive( $wp_query ) {
  if ($wp_query->is_main_query() && $wp_query->is_tag()) {
    $wp_query->set( 'post_type', array('post','sites'));
    return;
  }
  if ($wp_query->is_main_query() && $wp_query->is_category()) {
    $wp_query->set( 'post_type', array('post','sites'));
    return;
  }
}
add_action( 'pre_get_posts', 'add_post_tag_archive');