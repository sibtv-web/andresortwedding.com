<?php
/* include */
get_template_part( 'inc/styles' );
get_template_part( 'inc/scripts' );

/* setup */
function setup() {
  // 各種機能サポート
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio' ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-header' );
  // add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'editor-style' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
  add_theme_support( 'widgets' );
  add_theme_support( 'menus' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'customize-selective-refresh-widgets' );
  // add_theme_support( 'editor-color-palette' );

  // wp_head関数の出力データ削除
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'index_rel_link');
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_head', 'rel_canonical' );
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );

  // ギャラリー用CSS停止
  add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'setup' );


/* version表記削除 */
function remove_ver( $dep ) {
	$dep->default_version = '';
}
add_action( 'wp_default_scripts', 'remove_ver' );
add_action( 'wp_default_styles', 'remove_ver' );

// /*
//   管理画面メニューバー
// -------------------------------*/
/* admin menu */
function remove_menus() {
  // remove_menu_page( 'index.php' );                  // ダッシュボード
  // remove_menu_page( 'edit.php' );                   // 投稿
  // remove_menu_page( 'upload.php' );                 // メディア
  // remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
  // remove_menu_page( 'edit-comments.php' );          // コメント
  // remove_menu_page( 'themes.php' );                 // 外観
  // remove_menu_page( 'plugins.php' );                // プラグイン
  // remove_menu_page( 'users.php' );                  // ユーザー
  // remove_menu_page( 'tools.php' );                  // ツール
  // remove_menu_page( 'options-general.php' );        // 設定
}
add_action('admin_menu', 'remove_menus');

//日程・時間 変数セット
$week = array('日', '月', '火', '水', '木', '金', '土');
$w = date('w');
$nowdate = new DateTime();
$today = $nowdate->format('Ymd');

// 画像サイズ
function not_create_image($sizes){
  $sizes = array();
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');

//タイトル セパレーター変更
add_filter('document_title_separator', function($sep) {
  return '|';
});

// // タイトルタグ変更
// add_filter('pre_get_document_title', function($title) {
//   if (is_home() || is_front_page()) {
//     return $title;
//   }
//   else {
//     return get_the_title() . "｜＆ Resort Wedding";
//   }
//   return $title;
// });

// 記事全体の自動整形の無効化
// remove_filter( 'the_content', 'wpautop' );
// 記事抜粋の自動整形の無効化
// remove_filter( 'the_excerpt', 'wpautop' );

//ページネーション
// function set_pre_get_posts($query) {
//   if (is_admin() || !$query->is_main_query()) {
//     return;
//   }
//   if ($query->is_post_type_archive('news')) {
//     $query->set('posts_per_page', '6');
//     return;
//   }
// }
// function wp_link_pages_args_prevnext_add($args) {
//   global $page, $numpages, $more, $pagenow;
//   if (!$args['next_or_number'] == 'next_and_number')
//     return $args;
//     $args['next_or_number'] = 'number';
//     if (!$more)
//       return $args;
//     if($page-1)
//       $args['before'] .= _wp_link_page($page-1)
//       . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>';
//     if ($page<$numpages)
//       $args['after'] = _wp_link_page($page+1)
//       . $args['link_before'] . ' ' . $args['nextpagelink'] . $args['link_after'] . '</a>'
//       . $args['after'];
//   return $args;
// }
// add_action('pre_get_posts', 'set_pre_get_posts');
// add_filter('wp_link_pages_args','wp_link_pages_args_prevnext_add');

//slug 自動化
function custom_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( $post_type == 'wedding-magazine') {
    $get_post = get_post($post_ID);
    $slug = $post_ID;
    return $slug;
  }
  return $slug;
}
add_filter( 'wp_unique_post_slug', 'custom_auto_post_slug', 10, 4 );

// 絞り込み
function build_filter_remove_url($taxonomy, $term_id, $selected_categories, $selected_tags) {
  $new_categories = is_array($selected_categories) ? $selected_categories : [];
  $new_tags = is_array($selected_tags) ? $selected_tags : [];

  if ($taxonomy === 'category') {
    $new_categories = array_values(array_diff($new_categories, [$term_id]));
  }

  if ($taxonomy === 'tag') {
    $new_tags = array_values(array_diff($new_tags, [$term_id]));
  }

  $base_url = get_post_type_archive_link('wedding-magazine');
  $params = [];

  if (!empty($new_categories)) {
    $params['filter_category'] = $new_categories;
  }

  if (!empty($new_tags)) {
    $params['filter_tag'] = $new_tags;
  }

  return !empty($params) ? add_query_arg($params, $base_url) : $base_url;
}

//ACF ブロックエディター追加
// if ( function_exists( 'acf_custom_block_add_1' ) && function_exists( 'acf_custom_block_add_2' ) ) {
// if ( function_exists( 'acf_register_block_type' ) ) {
// 	add_action( 'acf/init', 'acf_custom_block_add_1' );
// }
// add_filter('block_categories_all', function ($categories) {
//   $new_category = [
//       'slug' => 'acf-block',
//       'title' => 'ACFブロック',
//   ];
//   array_splice($categories, 1, 0, [$new_category]);
//   return $categories;
// });

//カードブロック
// function acf_custom_block_add_1() {
//   if ( function_exists( 'acf_register_block_type' ) ) {
//     acf_register_block_type(
//       array(
//       'name'            => 'bg-block',
//       'title'           => __( 'カードデザイン' ),
//       'description'     => __( 'カードレイアウトを作成できます。' ),
//       'render_template' => 'acf-blocks/acf-block/cade-block.php',
//       'category'        => 'acf-block',
//       'icon'            => 'media-default',
//       'keywords'        => array( 'カードレイアウト' ),
//       // 'enqueue_style'   => get_template_directory_uri() . '/acf-blocks/acf-block/acf-block.css',
//       'enqueue_style'   => get_template_directory_uri() . '/assets/css/acf-block.css',
//       'mode'            => 'auto',
//       )
//     );
//   }
// }