<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kerman_IEC
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
				<div class="nine wide column">
					<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
							the_post_navigation();
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
					?>
				</div>
				<!-- 
					Moved To sidebar.php
					<div class="three wide column">
				-->
					<?php get_sidebar(); ?>
				<!-- </div> -->
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->
<?php
get_footer();