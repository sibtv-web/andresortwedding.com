<?php
$selected_categories = isset($_GET['filter_category'])
  ? array_map('intval', (array) $_GET['filter_category'])
  : [];

$selected_tags = isset($_GET['filter_tag'])
  ? array_map('intval', (array) $_GET['filter_tag'])
  : [];

$has_filter = !empty($selected_categories) || !empty($selected_tags);
?>

<article class="pg_magazine" id="pg_magazine">
  <section class="pg_magazine_ttl">
    <div class="pg_magazine_container">
      <div class="section__title fade-anime" data-fade="fade-up">
        <p class="en ft-blu-1">Magazine</p>
        <h2 class="jp">リゾートウェディングの魅力</h2>
      </div>
    </div>
  </section>

  <div class="pg_magazine_container">
    <div class="pg_magazine_con">
      <div class="pg_magazine_main">
        <div class="cls-def" <?php if ($has_filter) echo 'style="display:none;"'; ?>>
          <ul class="pg_magazine_main_links cls-def">
            <li><a href="#section1">結婚式準備・基礎知識</a></li>
            <li><a href="#section2">エリア・式場選び</a></li>
            <li><a href="#section3">挙式当日</a></li>
            <li><a href="#section4">フォトウェディング</a></li>
          </ul>


          <div class="pg_magazine_main_list cls-def">
            <?php get_template_part('components/pgMagazine/section1'); ?>
            <?php get_template_part('components/pgMagazine/section2'); ?>
            <?php get_template_part('components/pgMagazine/section3'); ?>
            <?php get_template_part('components/pgMagazine/section4'); ?>
          </div>
        </div>

        <div class="cls-search" <?php if (!$has_filter) echo 'style="display:none;"'; ?>>
          <div class="pg_magazine_main_search">
            <p class="pg_magazine_main_search_ttl">絞り込み結果</p>
            <ul class="pg_magazine_main_search_list search_actives">
              <?php foreach ($selected_categories as $term_id) :
                $term = get_term($term_id, 'magazine_category');
                if ($term && !is_wp_error($term)) : ?>
                  <li class="pg_magazine_main_search_list_cmn is-active">
                    <a href="<?php echo esc_url(build_filter_remove_url('category', $term_id, $selected_categories, $selected_tags)); ?>">
                      <?php echo esc_html($term->name); ?> ×
                    </a>
                  </li>
                <?php endif;
              endforeach; ?>

              <?php foreach ($selected_tags as $term_id) :
                $term = get_term($term_id, 'magazine_tag');
                if ($term && !is_wp_error($term)) : ?>
                  <li class="pg_magazine_main_search_list_cmn is-active">
                    <a href="<?php echo esc_url(build_filter_remove_url('tag', $term_id, $selected_categories, $selected_tags)); ?>">
                      <?php echo esc_html($term->name); ?> ×
                    </a>
                  </li>
                <?php endif;
              endforeach; ?>
            </ul>
          </div>

          <div class="">
            <div class="splide pg_magazine-list pg_magazine_section_list">
              <div  class="splide__track">
                <ul class="splide__list pg_magazine-pageList">
                  <?php
                    $tax_query = ['relation' => 'AND'];

                    if (!empty($selected_categories)) {
                      $tax_query[] = [
                        'taxonomy' => 'magazine_category',
                        'field'    => 'term_id',
                        'terms'    => $selected_categories,
                        'operator' => 'IN',
                      ];
                    }

                    if (!empty($selected_tags)) {
                      $tax_query[] = [
                        'taxonomy' => 'magazine_tag',
                        'field'    => 'term_id',
                        'terms'    => $selected_tags,
                        'operator' => 'IN',
                      ];
                    }

                  $args = [
                    'posts_per_page' => 24,
                    'post_type'      => ['wedding-magazine'],
                    'post_status'    => ['publish'],
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                  ];

                  if ($has_filter) {
                    $args['tax_query'] = $tax_query;
                  }
                    $the_query = new WP_Query($args);
                    $postCounter = $the_query->post_count;
                    $counter = 0;
                    if($the_query->have_posts()) :
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
                      <a href="<?php echo home_url();?>/wedding-magazine/<?php echo $slug;?>">
                        <div class="image" style="background-image: url(
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail_url(); ?>
                            <?php else : ?>
                              <?php echo esc_url(get_theme_file_uri('assets/images/idx/magazine/imgs_sample_thumbnail.jpg')); ?>
                              <?php endif; ?>
                        )"></div>
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
                  <?php else :?>
                    <li>
                      <p>投稿がありません</p>
                    </li>
                  <?php endif;?>
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
          </div>
        </div>

      </div>

      <form method="get" action="<?php echo esc_url(get_post_type_archive_link('wedding-magazine')); ?>" class="pg_magazine_nav" id="js-magazine-filter">
        <div class="pg_magazine_nav_cmn">
          <div class="pg_magazine_nav_cmn_label">カテゴリーで絞り込む</div>
          <ul class="pg_magazine_nav_cmn_list">
            <?php
              $categories = get_terms([
                'taxonomy'   => 'magazine_category',
                'hide_empty' => true
              ]);
              foreach ($categories as $category):
                $is_checked = in_array($category->term_id, $selected_categories, true);
              ?>
                <li class="pg_magazine_nav_cmn_list_cmn <?php echo $is_checked ? 'is-active' : ''; ?>">
                  <input
                    id="category-<?php echo esc_attr($category->term_id); ?>"
                    type="checkbox"
                    name="filter_category[]"
                    value="<?php echo esc_attr($category->term_id); ?>"
                    <?php checked($is_checked); ?>
                  >
                  <label for="category-<?php echo esc_attr($category->term_id); ?>">
                    <?php echo esc_html($category->name); ?>
                  </label>
                </li>
              <?php endforeach; ?>
          </ul>
        </div>

        <div class="pg_magazine_nav_cmn">
          <div class="pg_magazine_nav_cmn_label">タグで絞り込む</div>
          <ul class="pg_magazine_nav_cmn_list">
            <?php
            $tags = get_terms([
              'taxonomy'   => 'magazine_tag',
              'hide_empty' => true
            ]);
            foreach ($tags as $tag):
              $is_checked = in_array($tag->term_id, $selected_tags, true);
            ?>
              <li class="pg_magazine_nav_cmn_list_cmn <?php echo $is_checked ? 'is-active' : ''; ?>">
                <input
                  id="tag-<?php echo esc_attr($tag->term_id); ?>"
                  type="checkbox"
                  name="filter_tag[]"
                  value="<?php echo esc_attr($tag->term_id); ?>"
                  <?php checked($is_checked); ?>
                >
                <label for="tag-<?php echo esc_attr($tag->term_id); ?>">
                  <?php echo esc_html($tag->name); ?>
                </label>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </form>
    </div>
  </div>
</article>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('js-magazine-filter');
  if (!form) return;

  const inputs = form.querySelectorAll('input[type="checkbox"]');

  inputs.forEach((input) => {
    input.addEventListener('change', function () {
      form.submit();
    });
  });
});
</script>