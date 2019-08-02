<?php
/*
Template Name: قالب خالی برای نظرسنجی
*/
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<divnk rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="site-content">
	<div id="primary" class="content-area ui container">
		<div class="ui stackable grid">
			<main id="main" class="site-main sixteen wide column">				
			<div class="ui grid">
				<div class="sixteen wide column">
				<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile; // End of the loop.
				?>
				</div>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #page -->
<?php wp_footer(); ?>	
</body>
</html>