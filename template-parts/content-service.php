<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kerman_IEC
 */
$spod 		= pods('service', get_the_id());
$shenase 	= $spod->field('shenase'); 
$marahel 	= $spod->field('marahel');				   
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content ui segment attached top raised purple">
		<a class="ui black ribbon label"><i class="info circle icon"></i> شناسه خدمت : <?php echo $spod->field('serviceid'); ?></a>
      	<span>
	      	<!-- <a href="<?= $shenase['guid'] ?>" class="ui icon button mini red" target="_blank" style="line-height: 1 !important" download="شناسه خدمت <?php echo $spod->field('serviceid'); ?>"> 
				<i class="icon file pdf"></i> 
			</a>
			<a href="<?= $marahel['guid'] ?>" class="ui icon button mini blue" target="_blank" style="line-height: 1 !important" download="مراحل فرآیند  خدمت <?php echo $spod->field('serviceid'); ?>"> 
				<i class="icon file word"></i> 
			</a> -->	 
			<?php //the_title() ?>
		</span>      	
		<h3 class="centered">
			<?php the_title() ?>
		</h3>
      	<hr />
		<div class="ui fluid accordion">
			<div class="ui segments">
				<!-- <div class="ui segment black raised">
				  	<div class="active title"><i class="dropdown icon"></i> نحوه درخواست خدمت ( چگونگی ارائه درخواست خدمت در سایت ) </div>
				  	<div class="active content"> <?php echo $spod->field('darkhast'); ?> </div>	
				  </div>
				  <div class="ui segment black raised">
				  	<div class="title"> <i class="dropdown icon"></i> نحوه ارائه خدمت ( چگونگی ارائه خدمت در سایت ) </div>
				  	<div class="content"> <?php echo $spod->field('erae'); ?> </div>
				  </div> -->
				  <div class="ui segment black raised">		  
				  <div class="title"> <i class="dropdown icon"></i> 
				  	مدارک مورد نیاز 
				  </div>
				  <div class="content"> <?php echo $spod->field('madarek'); ?> </div>		  
				  </div>
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	قوانین و مقررات 
				  </div>
				  <div class="content"> <?php echo $spod->field('ghavanin'); ?> </div>
				  </div>
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	استعلام ( فرآیند های مشترک بین دستگاهی ) 
				  </div>
				  <div class="content"> <?php echo $spod->field('estelam'); ?> </div>
				  </div>
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	پاسخ به سوالات متداول  
				  </div>
				  <div class="content"> <?php echo $spod->field('faq'); ?> </div>
				  </div>
				  <!-- <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	مدت زمان انجام خدمت  
				  </div>
				  <div class="content"> <?php echo $spod->field('zaman'); ?> </div>
				  </div> -->
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	هزینه های مورد نیاز جهت دریافت خدمت 
				  </div>
				  <div class="content"> <?php echo $spod->field('hazine'); ?> </div>		  
				  </div>
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	حوزه و مسئول ارائه خدمت 
				  </div>				  
				  <div class="content"> <?php echo $spod->field('masool'); ?> </div>		  
				  </div>
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	مراحل فرآیند دریافت خدمت  
				  </div>
				  <div class="content"> 				  	
				   <a href="<?= $marahel['guid'] ?>" class="ui basic large label" target="_blank"> 
						<i class="icon file word"></i> دریافت فایل <?= $marahel['post_title'] ?> 
					</a>	
				  </div>		  
				  </div>
				  <!-- <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	فرم نظر سنجی از ارباب رجوع 
				  </div>
				  <div class="content"> <?php echo $spod->field('erae'); ?> </div>		  
				  </div>
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	مشاهده نظرات 
				  </div>
				  <div class="content"><?php //comments_template(); ?> </div>		  
				  </div> -->
				  <!-- <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	فرم ثبت شکایات  
				  </div>
				  <div class="content"> <?php echo $spod->field('erae'); ?> </div>
				  </div> -->
			</div>
		</div>
		<hr />
		<div class="four ui tiny buttons">
		  <button class="ui button">نظرسنجی</button>
		  <a href="http://www.saamad.ir/portal/home/?17439/%D8%B4%DA%A9%D8%A7%DB%8C%D8%A7%D8%AA" class="ui red button">ثبت شکایات</a>
		  <button class="ui button">پیگیری شکایات</button>
		  <button class="ui labeled icon button">
			  <i class="chart line icon"></i>
			  <?php echo wp_statistics_pages('total','',get_the_ID()); ?> بازدید
			</button>
		</div>
		<hr />
		<a href="http://eservice.isipo.ir/" class="ui fluid button floated left icon labeled green" target="_blank">
			<i class="globe icon"></i>
			ورود به 
			سامانه ميزخدمت و درگاه خدمات الكترونيكي : 
			سازمان صنایع کوچک و شهرک های صنعتی ایران
		</a>
		<hr />
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
		
		<?php #kermaniec_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->