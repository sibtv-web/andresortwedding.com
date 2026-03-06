<section id="sale-information" class="sale-information">
  <div class="svg-3">
    <picture>
      <source
        media="(min-width: 750px)"
        srcset="<?= esc_url(get_theme_file_uri('assets/images/idx/bnr/bg_top_pc_01.svg')) ?>"
      >
      <img
        src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/bnr/bg_top_sp_01.svg')); ?>"
        alt="背景1"
      >
    </picture>
  </div>
  <div class="sale-information__inner section__inner fade-anime" data-fade="fade-up">
    <div class="sale-information__title section__title">
      <p class="en ft-blu-4">Sale information</p>
      <h2 class="jp">ブライダルフェア・<br class="sp"/>キャンペーン情報</h2>
    </div>
    <ul class="sale-information__list flex-bt">
      <?php 
        for ($i = 1; $i <= 4; $i++) :
      ?>
        <li class="itm" style="background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/idx/bnr/bnr_sample_'.$i.'.jpg')); ?>);">
          <a href="/" target="_blank">
            <img
              src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/bnr/bnr_sample_'.$i.'.jpg')); ?>"
              alt="バナー画像"
            >
          </a>
        </li>
      <?php endfor; ?>
    </ul>
  </div>
</section>