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
		  <div class="eight wide mobile eight wide tablet four wide computer column">		  	
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
						<br><i class="icon phone"></i>
						 تلفن گویا : ۱۵۷۰
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <div class="eight wide mobile eight wide tablet four wide computer column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">		  			      
	  				<?php dynamic_sidebar('weather'); ?>
		  		</div>
		  	</div>
		  </div>
		  <div class="eight wide mobile eight wide tablet four wide computer column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">	  			      
	  				<?php dynamic_sidebar('azan'); ?>
		  		</div>
		  	</div>
		  </div>
		  <div class="eight wide mobile eight wide tablet four wide computer column">
		  	<div class="inverted grey ui">
		  		<div class="segment stacked purple ui">	  			      
	  				<?php dynamic_sidebar('amar'); ?>
		  		</div>
		  	</div>
		  </div>
		  <div class="ui segment basic sixteen wide tiny center aligned column inverted purple">
			<div class="abaan">
				طراحی و پشتیبانی : <a href="http://abaan.ir" class="ui inverted violet tiny basic button">راهکارهای پایدار آبان</a>
				<a href="https://github.com/jaavid/kermaniec" class="ui button secondary tiny icon">
					<i class="icon github"></i>
				</a>
				
				<a href="https://iec.kr.ir/privacy" class="ui button secondary tiny icon">
					<i class="info circle icon"></i>
				</a>
				<a href="https://iec.kr.ir/sla" class="ui button secondary tiny icon">
					<i class="info circle icon"></i>
				</a>
				
			</div>				
		</div>
		</footer>		
</div><!-- #page -->
<?php wp_footer(); ?>	
<script type="text/javascript" charset="utf-8">
	jQuery(function($) {
		$(document).ready(function(){
			//var resizePopup = function(){$('.ui.popup').css('max-height', $(window).height());};
			//	$(window).resize(function(e){resizePopup();});			
				$('.foothq').matchHeight();
				$('.nav-links div').matchHeight();
				$('.special.card .image').dimmer({on: 'hover'});
				$('.entry-content .ui.accordion')
				  .accordion({
				    selector: {
				      trigger: '.title'
				    }
				  });
				$('#servicecomments').click(function(){
			        $('#servicemodal').modal('show');    
			     });  
			//	$('.eforms').popup({inline: true,hoverable: true,position:'bottom right',lastResort:'bottom right',
			//       onShow: function(){resizePopup();},
			//	    delay: {show: 100,hide: 800}
			//	  });				
			});
		});
</script>
</body>
</html>