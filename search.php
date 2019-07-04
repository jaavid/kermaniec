<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'kermaniec' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
			if(function_exists('wp_paginate')) :
			    wp_paginate('range=4&anchor=2&nextpage=بعدی&previouspage=قبلی');
			else:
			the_posts_navigation();	
			endif;			
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		</div>
					<?php get_sidebar(); ?>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->
<?php
get_footer();