<?php
$data = [
  [
    'area' => 'okinawa',
    'title' => 'ttl_okinawa.webp',
    'popup' => 'img_beach_popup-01.png',
    'main' => 'img_beach-01'
  ],
  [
    'area' => 'hawaii',
    'title' => 'ttl_hawaii.webp',
    'popup' => 'img_beach_popup-02.png',
    'main' => 'img_beach-02'
  ],
  [
    'area' => 'guam',
    'title' => 'ttl_guam.webp',
    'popup' => 'img_beach_popup-03.png',
    'main' => 'img_beach-03'
  ],
];
$counter = 1;
?>
<section id="beachPhoto" class="photoArea beachPhoto">
  <div class="photoArea__inner">
    <div class="pgGallery_head_ttl fade-anime" data-fade="fade-up">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/heading_icon_dusk.svg')); ?>" alt="アイコン">
      <h2 class="pgGallery_head_txt">
        圧倒的な開放感と美しさが映える<br><span>ビーチフォト</span>
      </h2>
    </div>
    <div class="photoArea__title-image image-mask-wrap">
      <img class="masked-image" data-fade="mask-down" src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/ttl_beach-photo.webp')); ?>" alt="Beach Photo">
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
              <div class="photoArea__slider-img <?php echo $item["area"]; ?>">
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