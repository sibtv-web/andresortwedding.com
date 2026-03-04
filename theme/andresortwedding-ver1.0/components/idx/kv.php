<div id="kv" class="kv">
  <div class="kv__container">
    <div class="kv__inner">
      <video class="kv__video" loop autoplay muted playsinline>
        <source src="<?php echo get_theme_file_uri(); ?>/assets/videos/mv-pc.mp4" type="video/mp4" media="(min-width: 751px)">
        <source src="<?php echo get_theme_file_uri(); ?>/assets/videos/mv-sp.mp4" type="video/mp4" media="(max-width: 750px)">
      </video>
    </div>
    <div class="svg-kv">
      <picture>
        <source
          media="(min-width: 750px)"
          srcset="<?= esc_url(get_theme_file_uri('assets/images/idx/kv/bg_bottom_pc.svg')) ?>"
        >
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/kv/bg_bottom_sp.svg')); ?>"
          alt="背景1"
        >
      </picture>
    </div>
  </div>
</div>