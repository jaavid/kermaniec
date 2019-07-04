<?php
/*
Template Name: عریض
*/
get_header();
?>
	<div id="primary" class="content-area ui container">
		<div class="ui stackable grid">
			<main id="main" class="site-main sixteen wide column">
				<?php if ( function_exists('yoast_breadcrumb') ){yoast_breadcrumb('<div class="ui mini message">','</div>');}?>
			<div class="ui grid">
				<div class="four wide column">
					<?php get_template_part( 'template-parts/right', 'menu' ); ?>
				</div>
				<div class="twelve wide column">
				<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
			
					endwhile; // End of the loop.
				?>
				</div>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->
<?php
get_footer();