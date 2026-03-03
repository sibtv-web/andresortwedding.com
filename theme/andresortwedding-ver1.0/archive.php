<?php
get_header();
$slug = get_query_var( 'post_type' );
get_template_part( 'subpage/archive/'.$slug );
get_footer();
?>
