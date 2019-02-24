<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Kerman_IEC
 */
?>
	</div><!-- #content -->
		<footer class="ui grid grey inverted segment">
		  <div class="four wide column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">
		  			<div class="content foothq widget_azan">
		  				<span class="ui purple large ribbon label"><i class="icon phone alternate"></i> تماس با ما</span>
		  				<h3>شرکت شهرک های صنعتی کرمان</h3>
						<br>
						<i class="icon marker"></i>
						بلوار پارادیس (شهید عباسپور)،نبش میدان عاشورا 
						<br><i class="icon box"></i>
						کدپستی :۷۶۱۴۶۵۶۳۹۴
						<br><i class="icon phone"></i>
						شماره تماس : ۴-۳۱۲۷۲۰۰۰۰-۰۳۴
					
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <div class="four wide column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">		  			      
	  				<?php dynamic_sidebar('weather'); ?>
		  		</div>
		  	</div>
		  </div>
		  <div class="four wide column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">	  			      
	  				<?php dynamic_sidebar('azan'); ?>
		  		</div>
		  	</div>
		  </div>
		  <div class="four wide column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">	  			      
	  				<?php dynamic_sidebar('amar'); ?>
		  		</div>
		  	</div>
		  </div>
		</footer>
		<div class="ui segment basic fluid inverted purple">
			<div class="abaan">
				طراحی و پشتیبانی : <a href="http://abaan.ir">راهکارهای پایدار آبان</a>
			</div>
				<a href="https://github.com/jaavid/kermaniec" class="ui button icon">
					<i class="icon github"></i>
				</a>
		</div>
</div><!-- #page -->
<?php wp_footer(); ?>
	<?php if (is_front_page()) { ?>
		<script type="text/javascript" charset="utf-8">
			jQuery(function($) {		
			    $(document).ready(function(){
			    	$('.eqheight').matchHeight();	    	
			    	$('.home-tabs.menu .item').tab();
			    	$('.slider-for').slick({
					  slidesToScroll: 	1,
					  slidesToShow: 	1,			  
					  asNavFor: 		'.slider-nav',
					  autoplay: 		true,
					  arrows: 			true,
					  fade: 			true,
					  rtl: 				true,
					});
					$('.slider-nav').slick({			  
					  slidesToScroll: 	1,
					  focusOnSelect: 	true,
					  slidesToShow: 	3, 			  
					  centerMode: 		true,
					  asNavFor: 		'.slider-for',
					  autoplay: 		true,
					  dots: 			true,
					  rtl: 				true
					});
			    });
			});
		</script>
	<?php } ?>
<script type="text/javascript" charset="utf-8">
	jQuery(function($) {$(document).ready(function(){$('.foothq').matchHeight();$('.special.card .image').dimmer({on: 'hover'});});});
</script>
</body>
</html>