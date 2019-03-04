<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kerman_IEC
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="ui stacked raised segments">		
		<header class="entry-header ui purple segment">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php kermaniec_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="ui top basic attached segment clearing">
			<?php kermaniec_post_thumbnail(); ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<footer class="entry-footer">
				<?php //kermaniec_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>		
	</div>		
</article><!-- #post-<?php the_ID(); ?> -->