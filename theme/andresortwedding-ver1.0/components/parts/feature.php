<?php 
  $data = [
    [
      'src' => 'img_feature_01.jpg',
      'link' => 'compare',
    ],
    [
      'src' => 'img_feature_02.jpg',
      'link' => 'preparation',
    ],
    [
      'src' => 'img_feature_03.jpg',
      'link' => 'area',
    ],
    [
      'src' => 'img_feature_01.jpg',
      'link' => 'compare',
    ],
    [
      'src' => 'img_feature_02.jpg',
      'link' => 'preparation',
    ],
    [
      'src' => 'img_feature_03.jpg',
      'link' => 'area',
    ],
  ];
  $counter = 1;
?>
<section id="feature" class="feature bg-wht-1">
  <div class="feature__container">
    <div class="feature__title section__title fade-anime" data-fade="fade-up">
      <!-- <p class="en ft-blu-1">Special contents</p> -->
      <div class="en">
        <picture>
          <source media="(min-width: 750px)" srcset="<?= esc_url(get_theme_file_uri('assets/images/font/ft_ttl_feature_pc.svg')) ?>">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/font/ft_ttl_feature_sp.svg')); ?>" alt="Special contents">
        </picture>
      </div>
      <h2 class="jp">リゾートウェディング<br class="sp"/>特集コンテンツ</h2>
    </div>
    <div class="feature__slider splide">
      <div class="splide__track">
        <ul class="splide__list fade-anime" data-fade="fade-up-cont">
          <?php foreach ($data as $item):?>
            <li class="splide__slide">
              <?php if ($item['link'] !== "") : ?>
                <a href="<?php echo esc_url(home_url()) . '/' .  $item['link'] . '/' ; ?>">
                  <div class="feature__slider-img">
                    <img
                      src="<?php echo esc_url(get_theme_file_uri('assets/images/feature/'.$item['src'])); ?>"
                      alt="記事イメージ"
                    >
                  </div>
                </a>
              <?php else :?>
                <div class="link">
                  <div class="feature__slider-img">
                    <img
                      src="<?php echo esc_url(get_theme_file_uri('assets/images/feature/'.$item['src'])); ?>"
                      alt="記事イメージ"
                    >
                  </div>
                </div>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="feature__arrow flex fade-anime" data-fade="fade-up-top">
        <div class="splide__arrows flex">
          <button class="splide__arrow splide__arrow--prev"></button>
          <button class="splide__arrow splide__arrow--next"></button>
        </div>
      </div>
    </div>
  </div>
</section>