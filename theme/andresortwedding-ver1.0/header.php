<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <?php get_template_part('inc/after-head'); ?>
  <?php get_template_part('inc/meta'); ?>
  <?php get_template_part('inc/link'); ?>
  <script>
    (function(d) {
      var config = {
        kitId: 'imh6ypo',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
  <?php get_template_part('inc/after-body'); ?>
  <header id="header" class="h">
    <div class="h__container flex-bt bg-wht-1">
      <div class="h__logo">
        <a href="<?php echo esc_url(home_url());?>">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo_main_01.png')); ?>" alt="& Resort Wedding ロゴ" fetchpriority="high">
        </a>
      </div>
      <?php get_template_part('components/header/nav'); ?>
      <div id="hm" class="h__hm sp">
      </div>
    </div>
  </header>