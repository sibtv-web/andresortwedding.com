<section id="magazine" class="magazine bg-wht-1">
  <div class="magazine__inner section__inner">
    <div class="magazine__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Magazine</p>
      <h2 class="jp">お役立ち記事</h2>
    </div>
    <?php
      $args = array(
        'posts_per_page' => 8,
        'post_type'      => 'wedding-magazine',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
    ?>
      <div class="magazine__slider splide">
        <div class="splide__track">
          <ul class="splide__list fade-anime" data-fade="fade-up-cont">
          <?php
            $counter = 0;
            $postCounter = $the_query->post_count;
            while( $the_query->have_posts() ) : $the_query->the_post();
            global $post;
            $slug = $post->post_name;
            $termsTag = get_the_terms($post->ID, 'magazine_tag');
            $termsCat = get_the_terms($post->ID, 'magazine_category');
            $exTitle = get_field('magazine_title_excerpt');
            $imgUrl = get_theme_file_uri('assets/images/idx/magazine/imgs_sample_thumbnail.jpg');
            if( has_post_thumbnail() ) {
              $imgUrl = get_the_post_thumbnail_url();
            }
          ?>
            <li class="splide__slide">
              <a href="<?php echo home_url();?>/article/<?php echo $slug;?>">
                <div class="magazine__slider-img">
                  <img
                    src="<?php echo esc_url($imgUrl); ?>"
                    alt="記事イメージ"
                  >
                </div>
                <div class="magazine__slider-block bg-wht-1">
                  <div class="info flex-bt">
                    <div>
                      <?php 
                        if ($termsCat && !is_wp_error($termsCat)) {
                          echo '<p class="info__tg bg-beg-2">' . esc_html($termsCat[0]->name) . '</p>'; 
                        }
                      ?>
                    </div>
                    <p class="info__dt"><?php echo get_the_date(); ?></p>
                  </div>
                  <p class="hash ft-brn-1">
                    <?php
                      if($termsTag):
                        foreach($termsTag as $termTag):
                          echo "<span>#".$termTag->name."</span>";
                        endforeach;
                      endif;
                    ?>
                  </p>
                  <h3 class="ttl"><?php echo get_the_title(); ?></h3>
                </div>
              </a>
            </li>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>
          </ul>
        </div>
        <div class="magazine__arrow flex fade-anime" data-fade="fade-up-top">
          <div class="splide__arrows flex">
            <button class="splide__arrow splide__arrow--prev"></button>
            <button class="splide__arrow splide__arrow--next"></button>
          </div>
          <p class="magazine__btn btn__more">
            <a class="btn__more-2" href="<?php echo esc_url(home_url());?>"><span>すべて見る</span></a>
          </p>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>