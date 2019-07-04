<?php /*
 Template Name: خدمات الکترونیکی
 */
get_header();
?>
<div id="primary" class="content-area ui container">
	<div class="ui stackable grid">
		<main id="main" class="site-main sixteen wide column">
			<?php
			if (function_exists('yoast_breadcrumb')) {yoast_breadcrumb('<div class="ui mini message">', '</div>');
			}
			?>
			<div class="ui grid">
				<div class="four wide column">
					<?php get_template_part('template-parts/right', 'menu'); ?>
				</div>
				<div class="twelve wide column">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="ui segment centered inverted purple raised">
							<h3 class="centered">به میز خدمت شرکت شهرکهای صنعتی استان کرمان خوش آمدید.</h3>
							<h5 class="centered">کاربر گرامی، برای کارایی بهتر این صفحه از مرورگر Chrome استفاده کنید.</h5>
						</header>
						<div class="entry-content">
							<?php get_template_part( 'services/box', 'fanni' ); ?>
							<?php get_template_part( 'services/box', 'barname' ); ?>
							<?php get_template_part( 'services/box', 'sme' ); ?>
							<?php get_template_part( 'services/box', 'legal' ); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
				</div>
		</main><!-- #main -->
	</div><!-- #Grid -->
</div><!-- #primary -->
<?php
get_footer();
