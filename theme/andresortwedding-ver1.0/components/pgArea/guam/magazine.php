<section id="magazine" class="magazine bg-wht-1">
  <div class="magazine__inner section__inner">
    <div class="magazine__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Magazine</p>
      <h2 class="jp">グアム お役立ち記事</h2>
    </div>
    <div class="magazine__slider splide">
      <div class="splide__track">
        <ul class="splide__list fade-anime" data-fade="fade-up-cont">
          <?php
          $args = [
            'post_type' => 'wedding-magazine',
            'posts_per_page' => 8,
            'post_status' => 'publish',
            'tax_query' => [
              [
                'taxonomy' => 'magazine_tag',
                'field' => 'name', // 「グアム」は名前指定
                'terms' => 'グアム',
              ],
            ],
          ];

          $query = new WP_Query($args);
          ?>

          <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>

              <li class="splide__slide">
                <a href="<?php the_permalink(); ?>">

                  <div class="magazine__slider-img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/magazine/imgs_sample_thumbnail.jpg')); ?>" alt="">
                    <?php endif; ?>
                  </div>

                  <div class="magazine__slider-block bg-wht-1">

                    <div class="info flex-bt">
                      <p class="info__tg bg-beg-2">
                        <?php
                          $terms = get_the_terms(get_the_ID(), 'magazine_category');
                          if ($terms && !is_wp_error($terms)) {
                            echo esc_html($terms[0]->name);
                          }
                        ?>
                      </p>
                      <p class="info__dt"><?php echo get_the_date('Y.m.d'); ?></p>
                    </div>

                    <p class="hash ft-brn-1">
                      <?php
                        $tags = get_the_terms(get_the_ID(), 'magazine_tag');
                        if ($tags && !is_wp_error($tags)) {
                          foreach ($tags as $tag) {
                            echo '<span>#' . esc_html($tag->name) . '</span>';
                          }
                        }
                      ?>
                    </p>

                    <h3 class="ttl"><?php the_title(); ?></h3>
                  </div>

                </a>
              </li>

            <?php endwhile; ?>
          <?php endif; wp_reset_postdata(); ?>
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