<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kerman_IEC
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header ui basic segment">
		<div class="ui right floated basic segment">
			<div class="ui buttons">
				<a href="<?php the_permalink() ;?>?print=pdf" class="ui  purple  tiny labeled icon button">
				  <i class="file pdf outline icon"></i>
				  PDF
				</a>
				<a href="<?php the_permalink() ;?>?print=print" class="ui purple  tiny labeled icon button">
				  <i class="print icon"></i>
				  چاپ
				</a>
			</div>
		</div>		
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			if ( 'post' === get_post_type() ) :
		?>		
			<div class="entry-meta ui basic mini segment">
				<button class="ui   basic purple  mini labeled icon button">
					  <i class="chart line icon"></i>
					  <?php echo wp_statistics_pages('total','',get_the_ID()); ?> بازدید
					</button>
				<?php
					kermaniec_posted_on();
					//kermaniec_posted_by();
					//print do_shortcode("[bws_pdfprint display='pdf,print']");
					if ( 'post' === get_post_type() ) {
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( esc_html__( '، ', 'kermaniec' ) );
					if ( $categories_list ) {
						/* translators: 1: list of categories. */
						printf( 
						'<span class="ui left pointing purple basic tiny label"><i class="icon folder"></i>' 
							. esc_html__( '  %1$s', 'kermaniec' ) . 
						'</span>', 
						$categories_list 
						); // WPCS: XSS OK.
					}
					$tags_list = get_the_tag_list( '<span class="ui label">','</span><span class="ui label">','</span>');
					if ( $tags_list ) {
						/* translators: 1: list of tags. */
						printf( '<span class="ui tag mini labels purple">' . esc_html__( ' %1$s', 'kermaniec' ) . '</span>', $tags_list ); // WPCS: XSS OK.
					}
				}
				?>	
					
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->	
	<div class="entry-content">
		<?php kermaniec_post_thumbnail(); ?>
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'ادامه <span class="screen-reader-text"> "%s"</span> ...', 'kermaniec' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kermaniec' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php 
			$singlepod 		= pods('post', get_the_id());
			$singlegallery 	= $singlepod->field('news_images');
			$files 			= $singlepod->field('files');
			if ( !empty($singlegallery ) ) : 
				?>
					<div class="ui violet segment fluid">					
					<h3 class="ui label ribbon violet">گالری تصاویر خبر</h3>
					<hr />
					<?php  
						foreach ($singlegallery as $image) {
							$thumb 		= pods_image_url($image, 'thumbnail');
							$original 	= pods_image_url($image, 'original');
							?>
								<a href="<?= $original ?>" data-rel="lightbox">
									<img src="<?= $thumb ?>" alt="<?= $image['post_title'] ?>" />
								</a>								
							<?php
						}
					?>
					</div>	
				<?php
			endif;
		?>
		<?php
		if ( !empty($files) ) : 
				?>
				<div class="ui blue segment fluid">
					<h3 class="ui label ribbon blue">فایلهای ضمیمه </h3>
					<hr />
					<?php  
						foreach ($files as $file) {
							//print_r($file);
							?>
							<div class="ui right labeled button" tabindex="0">							
							  <div class="ui icon button">
							    <i class="file icon"></i>
							  </div>
							  <a href="<?= $file['guid'] ?>" class="ui basic label" target="_blank"> 
									<?= $file['post_title'] ?> 
								</a>							  
							</div>
															
							<?php
						}
					?>
				</div>
				<?php
			endif;
		?>
		<?php #kermaniec_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->