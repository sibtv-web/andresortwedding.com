<section id="magazine" class="magazine bg-wht-1">
  <div class="magazine__inner section__inner">
    <div class="magazine__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Magazine</p>
      <h2 class="jp">ハワイ お役立ち記事</h2>
    </div>
    <div class="magazine__slider splide">
      <div class="splide__track">
        <ul class="splide__list fade-anime" data-fade="fade-up-cont">
          <?php
            for ($i = 1; $i <= 8; $i++) :
          ?>
            <li class="splide__slide">
              <a href="/">
                <div class="magazine__slider-img">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/magazine/imgs_sample_thumbnail.jpg')); ?>"
                    alt="サンプル画像"
                  >
                </div>
                <div class="magazine__slider-block bg-wht-1">
                  <div class="info flex-bt">
                    <p class="info__tg bg-beg-2">結婚式準備・基礎知識</p>
                    <p class="info__dt">2026.03.03</p>
                  </div>
                  <p class="hash ft-brn-1"><span>#ハワイ</span><span>#時期・ベストシーズン</span></p>
                  <h3 class="ttl">記事タイトルが入ります記事タイトルが入ります</h3>
                </div>
              </a>
            </li>
          <?php endfor; ?>
        </ul>
      </div>
      <div class="magazine__arrow flex fade-anime" data-fade="fade-up-top">
        <div class="splide__arrows flex">
          <button class="splide__arrow splide__arrow--prev"></button>
          <button class="splide__arrow splide__arrow--next"></button>
        </div>
        <p class="magazine__btn btn__more">
          <a class="btn__more-2" href="<?php echo esc_url(home_url());?>/article/"><span>すべて見る</span></a>
        </p>
      </div>
    </div>
  </div>
</section>