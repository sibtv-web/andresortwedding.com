<?php
$current_post_id = get_the_ID();
$current_terms = get_the_terms($current_post_id, 'magazine_category');

if ($current_terms && !is_wp_error($current_terms)) :

  $first_term = $current_terms[0];

  $args = array(
    'posts_per_page' => 6,
    'post_type'      => 'wedding-magazine',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post__not_in'   => array($current_post_id),
    'tax_query'      => array(
      array(
        'taxonomy' => 'magazine_category',
        'field'    => 'term_id',
        'terms'    => $first_term->term_id,
      )
    ),
  );

  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
?>
<section class="reco">
	<div class="reco_container">
		<h2 class="reco_title">関連記事</h2>

		<ul class="reco_list">
			<?php
			$postCounter = $the_query->post_count;
			$counter = 0;
			while( $the_query->have_posts() ) : $the_query->the_post();
			global $post;
			$slug = $post->post_name;
			$termsTag = get_the_terms($post->ID, 'magazine_tag');
			$termsCat = get_the_terms($post->ID, 'magazine_category');
			$exTitle = get_field('magazine_title_excerpt');
			?>
			<li class="reco_list_cmn">
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
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>
<?php endif;?>
<?php endif;?>