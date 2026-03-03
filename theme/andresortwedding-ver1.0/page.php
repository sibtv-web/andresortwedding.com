<?php
  if( have_posts() ) :
    while( have_posts() ) : the_post();
      $slug = $post->post_name;
    endwhile;
  endif;
  $parent_id = $post->post_parent;
  if( $parent_id ) :
    $slug = get_post( $parent_id )->post_name.'-'.$slug;
  endif;
  get_header();
  get_template_part( 'subpage/pages/'.$slug );
  get_footer();
?>
