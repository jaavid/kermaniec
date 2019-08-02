<?php 
	$ch_args = array(
		'post_parent' => get_the_id(),
		'post_type'   => 'service', 
		'output'	  => 'ARRAY_A'
	);
	$children = get_children( $ch_args );

if (!$children) {
	$spod 		= pods('service', get_the_id());
	$shenase 	= $spod -> field('shenase');
	$marahel 	= $spod -> field('marahel');
	$forms 		= $spod -> field('forms');
	$shenasname = $spod -> field('shenasname');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content ui segment attached top raised purple">
		<a class="ui teal large ribbon label">
			<i class="info circle icon"></i> شناسه خدمت : <?php echo $spod -> display('serviceid'); ?>
		</a>		
		<a href="<?= $shenasname['guid'] ?>" class="ui red tiny labeled icon button">
		<i class="file pdf icon"></i>
			شناسنامه خدمت
		</a>     	
		<h3 class="centered"><?php the_title() ?></h3>
      	<hr />
		<div class="ui fluid accordion">
			<div class="ui segments">
				<div class="ui segment black raised">
				  <div class="title active"> <i class="dropdown icon"></i>حوزه و مسئول ارائه خدمت</div>				  
				  <div class="content active"> <?php echo $spod -> display('masool'); ?> </div>
				</div>
				  
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i>مراحل فرآیند خدمت</div>
				  <div class="content"><a href="<?= $marahel['guid'] ?>" class="ui basic large label" target="_blank"><i class="icon file word"></i> دریافت فایل فرآیند خدمت</a></div>		  
				  </div>
				  
				  <div class="ui segment black raised">
				  <div class="title"><?php if ( $spod -> display('ghavanin')) { ?><i class="dropdown icon"></i><?php } ?>قوانین و مقررات</div>
				  <div class="content"> <?php echo $spod -> display('ghavanin'); ?> </div>
				  </div>
				  
				  <div class="ui segment black raised">
				  <div class="title"><?php if ( $spod -> display('estelam')) { ?><i class="dropdown icon"></i><?php } ?>استعلام ( فرآیند های مشترک بین دستگاهی )</div>
				  <?php if ( $spod -> display('estelam')) { ?>
					  <div class="content"> <?php echo $spod -> display('estelam'); ?> </div>
				  <?php } ?> 
				  </div>
				  <div class="ui segment black raised">		  
				  <div class="title"> 
				  <?php if ( $spod -> display('madarek')) { ?>
					  <i class="dropdown icon"></i>
				  <?php } ?> 
				  	مدارک مورد نیاز 
				  </div>				  
				  <?php if ( $spod -> display('madarek')) { ?>
					  <div class="content"> <?php echo $spod -> display('madarek'); ?> </div>
				  <?php } ?>		  
				  </div>
				  
				  <div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	فرم ها 
				  </div>
				  <div class="content">
					  <?php 
					  if (count($forms) >0) {
						foreach ($forms as $form) { ?>
						  <a href="<?= $form['guid'] ?>" class="ui basic large label" target="_blank"> 
						  	<i class="icon file word"></i> دریافت فایل <?= $form['post_title'] ?> 
				 	 	  </a>
					  	<?php }
								}
					  ?>
				  </div>
				  </div>
				<div class="ui segment black raised">
				  <div class="title"> <i class="dropdown icon"></i> 
				  	هزینه های مورد نیاز جهت دریافت خدمت 
				  </div>
				  <div class="content"> <?php echo $spod -> display('hazine'); ?> </div>		  
				  </div>
				  
				  <div class="ui segment black raised">
				  <div class="title"> 
				  <?php if ( $spod -> display('faq')) { ?>
					  <i class="dropdown icon"></i>
				  <?php } ?> 
				  	پاسخ به سوالات متداول  
				  </div>
				  <?php if ( $spod -> display('faq')) { ?>
					  <div class="content"> <?php echo $spod -> display('faq'); ?> </div>
				  <?php } ?>
				  
				  </div>
				  
				  
				  
			</div>
		</div>
		<hr />
		<div class="four ui tiny buttons">
		  <button class="ui button green" id="servicecomments">نظرسنجی</button>
		  <a href="http://www.saamad.ir/portal/home/?17439/%D8%B4%DA%A9%D8%A7%DB%8C%D8%A7%D8%AA" class="ui red button">ثبت و پیگیری شکایات</a>
		  <a href="http://eservice.isipo.ir/" class="ui fluid button floated left icon labeled blue" target="_blank">
			<i class="globe icon"></i>
				دریافت الکترونیک خدمت
			</a>		  
		  <button class="ui labeled icon button">
			  <i class="chart line icon"></i>
			  <?php echo wp_statistics_pages('total', '', get_the_ID()); ?> بازدید
			</button>
		</div>
		<!-- <hr />
		<a href="http://eservice.isipo.ir/" class="ui fluid button floated left icon labeled green" target="_blank">
			<i class="globe icon"></i>
			ورود به 
			سامانه ميزخدمت و درگاه خدمات الكترونيكي : 
			سازمان صنایع کوچک و شهرک های صنعتی ایران
		</a>
		<hr /> -->	</div><!-- .entry-content -->
	<footer class="entry-footer">
		
		<?php #kermaniec_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


<div class="ui modal" id="servicemodal">
  <div class="header">نظرسنجی <?php the_title(); ?></div>
  <div class="content">
    <?= do_shortcode('[gravityform id="7" title="false" description="true"]'); ?>
  </div>
</div>

<?php }	else { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class("ui segment black raised"); ?>>
	<div class="entry-content ui segment attached top raised purple">
		<h3 class="centered"><?php the_title() ?></h3>
		<hr />
	</div>
	<div class="ui list">
		<?php foreach ($children as $child) { ?>
			<div class="item">
				<i class="folder icon"></i> 
				<div class="content">
					<a href="<?= get_post_permalink($child); ?>"><?= $child -> post_title; ?></a>
				</div>
			</div>
		<?php } ?>
	</div>	
</article>
<?php } ?>