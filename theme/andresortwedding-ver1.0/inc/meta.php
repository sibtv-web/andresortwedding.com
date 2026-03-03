<?php
$title = "＆ Resort Wedding｜リゾートウェディング情報サイト";
$description = "リゾートウェディング情報をお届けする、＆ Resort Wedding（アンドリゾートウェディング）基本情報をはじめ、各エリアの紹介や魅力、最新情報を発信！";
$pgDsc = get_the_excerpt();
$ogp = get_theme_file_uri('assets/images/ogp.png');
?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="title" content="<?php echo is_front_page() ? $title : wp_title('|', true, 'right').$title; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php echo is_front_page() ? esc_attr($description) : $pgDsc; ?>">
<meta name="theme-color" content="#27A6EC">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url(home_url()); ?>">
<meta property="og:title" content="<?php echo is_front_page() ? $title : wp_title('|', true, 'right').$title; ?>">
<meta property="og:description" content="<?php echo is_front_page() ? esc_attr($description) : $pgDsc; ?>">
<meta property="og:image" content="<?php echo esc_url($ogp); ?>">
<meta property="og:site_name" content="<?php echo esc_attr($title); ?>">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="summary_large_image">