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
        $bnrImages = [
          [
            'name' => 'bnr_260310-1.jpg',
            'link' => 'https://www.his-wedding.com/fair/the_sale/',
            'title' => '春キャンペーン',
          ],
          [
            'name' => 'bnr_260310-2.jpg',
            'link' => 'https://www.jtb.co.jp/wed/coupon/',
            'title' => '割引クーポン',
          ],
          [
            'name' => 'bnr_260310-3.jpg',
            'link' => 'https://www.arluis.com/fair-cp/premierphotowedding/',
            'title' => '他にない新しいフォトウェディング',
          ],
          [
            'name' => 'bnr_260310-4.jpg',
            'link' => 'https://www.arluis.com/fair-cp/chapel/',
            'title' => '挙式料 50% OFF',
          ],
        ];
        $counter = 1;
        foreach ($bnrImages as $bnrImage):
      ?>
        <li class="itm" style="background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/idx/bnr/'.$bnrImage['name'])); ?>);">
          <?php if ($bnrImage['link']) :?>
            <a href="<?php echo esc_url($bnrImage['link']); ?>" target="_blank">
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/bnr/'.$bnrImage['name'])); ?>"
                alt="<?php echo $bnrImage['title']; ?>"
              >
            </a>
          <?php else :?>
            <span>
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/bnr/'.$bnrImage['name'])); ?>"
                alt="<?php echo $bnrImage['title']; ?>"
              >
            </span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>