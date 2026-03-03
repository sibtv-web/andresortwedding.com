<?php
get_header(); 
if( have_posts() ) :
  while( have_posts() ) : the_post();
    $slug = $post->post_type;
  endwhile;
endif;
get_template_part( 'subpage/single/'.$slug );
get_footer();
?>