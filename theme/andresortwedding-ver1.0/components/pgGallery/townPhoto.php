<?php
$data = [
  [
    'area' => 'hawaii',
    'title' => 'ttl_hawaii.webp',
    'popup' => 'img_town_popup-01.png',
    'main' => 'img_town-01'
  ],
  [
    'area' => 'guam',
    'title' => 'ttl_guam.webp',
    'popup' => 'img_town_popup-02.png',
    'main' => 'img_town-02'
  ],
  [
    'area' => 'okinawa',
    'title' => 'ttl_okinawa.webp',
    'popup' => 'img_town_popup-03.png',
    'main' => 'img_town-03'
  ],
];
$counter = 1;
?>
<section id="townPhoto" class="photoArea townPhoto">
  <div class="photoArea__inner">
    <div class="pgGallery_head_ttl fade-anime" data-fade="fade-up">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/heading_icon_town.svg')); ?>" alt="アイコン">
      <h2 class="pgGallery_head_txt">
        エリアごとに表情がまったく違う！<br><span>街並みフォト</span>
      </h2>
    </div>
    <div class="photoArea__title-image image-mask-wrap">
      <img class="masked-image" data-fade="mask-down" src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/ttl_town-photo.webp')); ?>" alt="town Photo">
    </div>
    <div class="photoArea__slider splide">
      <div class="photoArea__arrow flex fade-anime" data-fade="fade-up-top">
        <div class="splide__arrows flex">
          <button class="splide__arrow splide__arrow--prev"></button>
          <button class="splide__arrow splide__arrow--next"></button>
        </div>
      </div>
      <div class="splide__track photoArea__slider-track">
        <ul class="splide__list fade-anime" data-fade="fade-up-cont">
          <?php foreach ($data as $item) : ?>
            <li class="splide__slide">
              <div class="photoArea__slider-img">
                <img class="photoArea__slider-title <?php echo $item["area"]; ?>" src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/' . $item["title"])); ?>" alt="<?php echo $item["area"]; ?>">
                <img class="photoArea__slider-popup <?php echo $item["area"]; ?>" src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/' . $item["popup"])); ?>" alt="">
                <picture class="photoArea__slider-main">
                  <source media="(max-width: 750px)" srcset="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/' . $item["main"])); ?>_sp.png">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/' . $item["main"])); ?>.webp" alt="">
                </picture>
              </div>
            </li>
          <?php
            $counter++;
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="photoArea">
  <div class="photoArea__inner">
    <div class="photoArea__article fade-anime" data-fade="fade-up-top">
      <img class="photoArea__article-popup left" src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/img_town_popup-04.png')); ?>" alt="">
      <img class="photoArea__article-popup right" src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/img_town_popup-05.png')); ?>" alt="">
      <a class="photoArea__article-link" href="https://andresortwedding.com/article/1177/">
        <div class="photoArea__article-img"></div>
        <div class="photoArea__article-text bg-beg-2">
          <p>ビーチウェディングフォトの魅力｜人気ロケーション・費用・ポーズを紹介</p>
          <span>記事を見る</span>
        </div>
      </a>
    </div>
  </div>
</section>