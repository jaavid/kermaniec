<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Kerman_IEC
 */

if ( ! function_exists( 'kermaniec_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function kermaniec_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'kermaniec' ), $time_string);

		echo '		
		<span class="posted-on ui top pointing purple basic tiny label">
			<i class="icon calendar"></i> ' . 
			$posted_on . 
			'<i class="icon clock"></i> ' .
			get_the_time().
		'</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'kermaniec_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function kermaniec_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'kermaniec' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'kermaniec_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function kermaniec_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( '، ', 'kermaniec' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( 
				'<span class="tiny button icon inverted violet ui"><i class="icon folder"></i>' 
					. esc_html__( '  %1$s', 'kermaniec' ) . 
				'</span>', 
				$categories_list 
				); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '<span class="ui label">','</span><span class="ui label">','</span>');
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="ui tag mini labels purple">' . esc_html__( ' %1$s', 'kermaniec' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'درج دیدگاه <span class="screen-reader-text"> در %s</span>', 'kermaniec' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'ویرایش <span class="screen-reader-text">%s</span>', 'kermaniec' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'kermaniec_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function kermaniec_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<a href="<?php the_post_thumbnail_url( 'large' ); ?>" rel="lightbox">
					<?php 
						the_post_thumbnail(
							'medium', 
							array(
								'class'=>'ui rounded image medium floated left',
								'alt' => the_title_attribute( array(
									'echo' => false,
								) ),
								)
							); ?>
				</a>				
			</div><!-- .post-thumbnail -->

		<?php else : ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'class'=>'ui image small rounded floated left',
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;
