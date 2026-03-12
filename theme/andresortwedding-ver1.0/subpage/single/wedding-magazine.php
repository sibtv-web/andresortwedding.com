<?php
$termsTag = get_the_terms($post->ID, 'magazine_tag');
$termsCat = get_the_terms($post->ID, 'magazine_category');
?>
<?php //$headline = get_field('special_headline');?>
<article id="single_magazine">
  <section class="single_magazine">
    <div class="single_magazine-thumbnail">
      <img src="<?php the_post_thumbnail_url();?>">
    </div>
    <p class="single_magazine-thumbnail-caption">
      <?php
        $thumbnail_id = get_post_thumbnail_id();
        echo get_post( $thumbnail_id )->post_excerpt;
      ?>
    </p>
    <div class="single_magazine-container">
      <div class="single_magazine-container_date">
        <div class="cat">
          <?php
            if ($termsCat && !is_wp_error($termsCat)) {
              echo '<p class="cat-cmn">' . esc_html($termsCat[0]->name) . '</p>';
            }
          ?>
        </div>
        <p class="frame">
          <span class="frame-time">更新日：<time><?php the_modified_date(); ?></time></span>
          <span class="frame-time">公開日：<time><?php echo get_the_date(); ?></time></span>
        </p>
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
      <div class="single_magazine-container-title <?php echo $headline;?>">
        <h1 class="single_magazine-container-title-main"><?php the_title(); ?></h1>
      </div>
      <div class="single_magazine-container-content <?php echo $headline;?>" id="cont">
        <?php the_content(); ?>
      </div>

      <?php
      global $page, $numpages, $multipage, $post;

      if ($multipage) :

        $next_page = $page + 1;
        $next_url = '';
        $next_heading = '';

        if ($next_page <= $numpages) {

          $pages = explode('<!--nextpage-->', $post->post_content);
          $next_content = isset($pages[$next_page - 1]) ? $pages[$next_page - 1] : '';

          if (preg_match('/<h2[^>]*>(.*?)<\/h2>/is', $next_content, $matches)) {
            $next_heading = wp_strip_all_tags($matches[1]);
          }

          $link_tag = _wp_link_page($next_page);

          if (preg_match('/href="([^"]+)"/', $link_tag, $url_matches)) {
            $next_url = $url_matches[1];
          }
        }
      ?>

        <?php if ($next_url) : ?>
          <div class="next-page-link">
            <a href="<?php echo esc_url($next_url); ?>/#cont">
              <span class="label">次のページ</span>
              <?php if ($next_heading) : ?>
                <span class="title"><?php echo esc_html($next_heading); ?></span>
              <?php endif; ?>
            </a>
          </div>
        <?php endif; ?>

        <?php
        wp_link_pages([
          'before'         => '<div class="pagination-singlePage">',
          'after'          => '</div>',
          'pagelink'       => '<span class="page-number">%</span>',
          'next_or_number' => 'number',
        ]);
        ?>

      <?php endif; ?>

      <div class="single_magazine-container-share">
        <p class="single_magazine-container-share-title">この記事をシェアする</p>
        <ul class="single_magazine-container-share-list">
          <li class="single_magazine-container-share-list-item" style="background-color:#0F1419;">
            <a href="http://twitter.com/share?url=<?php echo get_the_permalink();?>" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ico/ico_x-1.png" alt="">
            </a>
          </li>
          <li class="single_magazine-container-share-list-item" style="background-color:#1877F2;">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>&src=sdkpreparse" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ico/ico_fb.svg" alt="Facebook">
            </a>
          </li>
          <li class="single_magazine-container-share-list-item" style="background-color:#06C755;">
            <a href="https://line.me/R/share?text=<?php echo get_the_permalink();?>" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ico/ico_line.svg" alt="LINE">
            </a>
          </li>
          <li class="single_magazine-container-share-list-item" style="background-color:#6BC5F7;">
            <span onclick="copyURL ('<?php echo get_the_permalink();?>')" class="copyBtn">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ico/ico_link.svg" alt="クリップボードへコピー">
            </span>
          </li>
        </ul>
      </div>
      <!-- <div class="single_magazine-container-nextBtn">
        <?php next_post_link('%link', '次の記事を読む'); ?>
      </div> -->
      <!-- <div class="single_magazine-container-backBtn">
        <a href="<?php echo home_url();?>/#special">記事一覧に戻る</a>
      </div> -->
      <div class="magazine__btn btn__more single_magazine-container-backBtn">
        <a class="btn__more-3-b" href="<?php echo esc_url(home_url());?>/wedding-magazine/"><span>記事一覧に戻る</span></a>
      </div>
    </div>
  </section>
  <?php get_template_part('components/article/indexArticle')?>
  <?php //get_template_part('component/indexSale')?>
  <?php //get_template_part('component/indexSpecial')?>
</article>