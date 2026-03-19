<?php
  $args = array(
    'posts_per_page' => 24,
    'post_type' => array('wedding-magazine'),
    'post_status' => array('publish'),
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => array(
      array(
        'taxonomy' => 'magazine_category',
        'terms' => 'section3',
        'field' => 'slug',
      )
    ),
  );
  $the_query = new WP_Query($args);

  if ($the_query->have_posts()) :
?>
<section class="pg_magazine_section" id="section3">
  <div class="pg_magazine_section_ttl" style="background-image: url(<?php echo esc_url(get_theme_file_uri('assets/images/magazine/section3/list_head.jpg')); ?>)">
    <h3>挙式当日</h3>
  </div>

  <div class="splide pg_magazine-list pg_magazine_section_list">
    <div  class="splide__track">
      <ul class="splide__list pg_magazine-pageList">
        <?php
          $postCounter = $the_query->post_count;
          $counter = 0;
          while( $the_query->have_posts() ) : $the_query->the_post();
          global $post;
          $slug = $post->post_name;
          $termsTag = get_the_terms($post->ID, 'magazine_tag');
          $termsCat = get_the_terms($post->ID, 'magazine_category');
          $exTitle = get_field('magazine_title_excerpt');
          if ($counter % 6 === 0) {
            echo '<li class="splide__slide pg_magazine-pageList-item">';
            echo '<ul class="subList">';
          }
        ?>
          <li class="subList-item">
            <a href="<?php echo home_url();?>/article/<?php echo $slug;?>">
              <div class="image">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="記事イメージ">
                  <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/magazine/imgs_sample_thumbnail.jpg')); ?>" alt="記事イメージ">
                  <?php endif; ?>
              </div>
              <div class="detail">
                <div class="label">
                  <div class="cat">
                    <?php
                      if ($termsCat && !is_wp_error($termsCat)) {
                        echo '<p class="cat-cmn">' . esc_html($termsCat[0]->name) . '</p>';
                      }
                    ?>
                  </div>
                  <p class="time"><?php echo get_the_date(); ?></p>
                </div>
                <div class="tag">
                  <?php
                    if($termsTag):
                      foreach($termsTag as $termTag):
                        echo "<span>".$termTag->name."</span>";
                      endforeach;
                    endif;
                  ?>
                </div>
                <p class="title">
                  <?php
                    $title = get_the_title();
                    if ($exTitle) {
                      echo $exTitle;
                    } else {
                      echo $title;
                    }
                  ?>
                </p>
              </div>
            </a>
          </li>
        <?php
          $counter++;
          if ($counter % 6 === 0) {
            echo '</ul>';
            echo '</li>';
          }
          endwhile;
          if ($counter % 6 !== 0) {
            echo '</ul>';
            echo '</li>';
          }
          wp_reset_postdata();
        ?>
      </ul>
    </div>
    <?php
      if ($counter > 4) :
    ?>
      <div class="splide__arrows pg_magazine-arrows">
        <div class="splide__arrow splide__arrow--prev prev">
          ← 前の記事
        </div>
        <ul class="splide__pagination"></ul>
        <div class="splide__arrow splide__arrow--next next">
          次の記事 →
        </div>
      </div>
    <?php endif;?>
  </div>

</section>
<?php endif;?>