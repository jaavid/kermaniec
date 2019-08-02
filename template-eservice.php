<?php /*
 Template Name: خدمات الکترونیکی
 */
get_header();
?>
<div id="primary" class="content-area ui container">
	<div class="ui stackable grid">
		<main id="main" class="site-main sixteen wide column">
			<?php 
				if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<div class="ui mini message">', '</div>');
				} 
			?>
			<div class="ui grid">
				<div class="four wide column">
					<?php get_template_part('template-parts/right', 'menu'); ?>
				</div>
				<div class="twelve wide column" style="line-height: 2.5">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="ui segment centered inverted purple raised" style="text-align: center">
							<h3 class="centered">به میز خدمت شرکت شهرکهای صنعتی استان کرمان خوش آمدید.</h3>
							<h5 class="centered">کاربر گرامی، برای کارایی بهتر این صفحه از مرورگر Chrome استفاده کنید.</h5>
						</header>
						<div class="entry-content">
							<?php //get_template_part( 'services/box', 'fanni' ); ?>
							<?php //get_template_part( 'services/box', 'barname' ); ?>
							<?php //get_template_part( 'services/box', 'sme' ); ?>
							<?php //get_template_part( 'services/box', 'legal' ); ?>
							<?php //get_template_part( 'services/box', 'other' ); ?>
							<?php 
								$args = array(
									'post_type' 	=> 'service',
									'post_parent'	=> 0,
									'orderby' 		=> 'menu_order',
									'post_status' 	=> 'publish',									
									'order' 		=> 'ASC',
									'posts_per_page'=>-1
								);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
									echo '
									<div class="ui segment stacked raised violet">
									<div class="header">
										<h2><i class="folder horizontally violet flipped outline icon"></i> '.get_the_title().'</h2>
									</div>	';
									
									$child_args = array(
										'post_type' 	=> 'service',
										'post_status' 	=> 'publish',
										'post_parent'	=> get_the_id(),
										'posts_per_page'=>-1
									);
									 $the_inner_query = new WP_Query( $child_args );
										if (  $the_inner_query->have_posts() ) {
											while ( $the_inner_query->have_posts() ) {
												$the_inner_query->the_post();
												$ch_args = array(
													'post_parent' => get_the_id(),
													'post_type'   => 'service', 
													'post_status' 	=> 'publish',
													'output'	  => 'ARRAY_A'
												);
												$children = get_children( $ch_args );
											
											if (!$children) { ?>
												<div class="ui styled fluid accordion raised">
													<div class="title">
														<a href="<?php the_permalink(); ?>">
															<!-- <i class="folder open horizontally flipped icon"></i> -->
															<div class="ui teal horizontal label">شناسه خدمت:   <?= get_post_meta( get_the_id(), 'serviceid', true ); ?> </div>
															<?php the_title(); ?>
														</a>
														<?php 
															$spod 		= pods('service', get_the_id());
															$shenasname = $spod -> field('shenasname');
														 ?>
														<a href="<?= $shenasname['guid'] ?>"><i class="file pdf icon red"></i></a> 
													</div>
												</div>
											<?php }else{ ?>
												<div class="ui styled fluid accordion raised">
													<div class="title">
														<i class="dropdown icon"></i> 
														<div class="ui teal horizontal label">شناسه خدمت:   <?= get_post_meta( get_the_id(), 'serviceid', true ); ?> </div>
														<?php the_title(); ?>
														<?php 
															$spod 		= pods('service', get_the_id());
															$shenasname = $spod -> field('shenasname');
														 ?>
														<a href="<?= $shenasname['guid'] ?>"><i class="file pdf icon red"></i></a> 
													</div>
													<div class="content">
														<div class="transition ui segment inverted grey raised">
															<div class="ui list inverted grey">
																<?php 
																$in_child_args = array(
																	'post_type' 	=> 'service',
																	'post_status' 	=> 'publish',
																	'post_parent'	=> get_the_id(),
																	'posts_per_page'=>-1
																);
																	$the_in_inner_query = new WP_Query($in_child_args);
																	if (  $the_in_inner_query->have_posts() ) {
																		while ( $the_in_inner_query->have_posts() ) {
																			$the_in_inner_query->the_post();
																			?>
																			<div class="item">
																				
																				<div class="content">
																					<div class="header">
																						<a href="<?php the_permalink(); ?>">
																							<div class="ui teal horizontal label">شناسه خدمت:   <?= get_post_meta( get_the_id(), 'serviceid', true ); ?> </div>
																							<?php the_title(); ?>
																						</a>
																						<?php 
																							$spod 		= pods('service', get_the_id());
																							$shenasname = $spod -> field('shenasname');
																						 ?>
																						<a href="<?= $shenasname['guid'] ?>"><i class="file pdf icon red"></i></a> 
																					</div>
																				</div>
																			</div>
																			<?php
																		}
																		$the_inner_query->reset_postdata();
																	}
																 ?>
															</div>
														</div>
													</div>
												</div>
											<?php	}
											}
										}
									$the_inner_query->reset_postdata();
									echo '</div>';
								}					
								$the_query->reset_postdata();
							}
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
				</div>				
		</main><!-- #main -->
	</div><!-- #Grid -->
</div><!-- #primary -->
<?php
get_footer();
