<?php

function iec_excerpt_more($more) {
	global $post;
	// edit here if you like
return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'jointswp') . get_the_title($post->ID).'">'. __('ادامه &raquo;', 'jointswp') .'</a>';
}

?>