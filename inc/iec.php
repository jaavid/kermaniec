<?php

function iec_excerpt_more($more) {
	global $post;
	// edit here if you like
return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'jointswp') . get_the_title($post->ID).'">'. __('ادامه &raquo;', 'jointswp') .'</a>';
}



function set_ppp_service( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'service' ) ) {
    $query->set( 'posts_per_page', '100' );
  }
}
add_action( 'pre_get_posts', 'set_ppp_service' );

?>