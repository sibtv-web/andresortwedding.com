<section id="slider-2" class="slider-2 bg-beg-1">
  <div class="slider-2__inner splide">
    <div class="splide__track">
      <ul class="splide__list fade-anime" data-fade="fade-up-cont">
        <?php for ($i = 1; $i <= 8; $i++) : ?>
          <li class="splide__slide flex">
            <div class="img <?php echo 'img-'.$i;?>">
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/slider-2/img_item_0'.$i.'.jpg')); ?>"
                alt="スライダー画像"
                fetchpriority="high"
              >
            </div>
          </li>
        <?php endfor; ?>
      </ul>
    </div>
  </div>
</section>