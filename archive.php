<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		<?php if ( have_posts() ) : ?>

			<header class="ui segment inverted purple raised">
				<?php
				the_archive_title( '<h1 class="ui large violet ribbon label">', '</h1>' );
				the_archive_description( '<div>', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			if(function_exists('wp_paginate')) :
			    wp_paginate('range=4&anchor=2&nextpage=بعدی&previouspage=قبلی');
			else:
			the_posts_navigation();	
			endif;
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
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