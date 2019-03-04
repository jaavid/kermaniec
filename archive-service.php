<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kerman_IEC
 */
get_header(); ?>
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
					<header class="ui segment centered inverted purple raised">
						<a href="http://eservice.isipo.ir/" class="ui fluid button floated left large icon labeled green" target="_blank">
							<i class="globe icon"></i>
							ورود به 
							سامانه ميزخدمت و درگاه خدمات الكترونيكي : 
							سازمان صنایع کوچک و شهرک های صنعتی ایران
						</a>
						<br />
						<h1 class="centered">میز خدمت شرکت شهرکهای صنعتی استان کرمان</h1>
						<h3>
							با کلیک بر روی آیکون
							<button class="ui icon button mini red" target="_blank" style="line-height: 1 !important"> 
								<i class="icon file pdf"></i> 
							</button>
							میتوانید فایل پی‌دی‌اف شناسه هر خدمت را دریافت کنید.
						</h3>
						<h3>
							با کلیک بر روی آیکون
							<button class="ui icon button mini blue" target="_blank" style="line-height: 1 !important"> 
								<i class="icon file word"></i> 
							</button>
							میتوانید فایل ورد مراحل فرآیند هر خدمت را دریافت کنید.
						</h3>
					</header><!-- .page-header -->
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content-archive', get_post_type() );
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
				</div>
			<?php get_sidebar(); ?>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->
<?php get_footer();