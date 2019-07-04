<?php get_header(); ?>
	<div id="primary" class="content-area ui container">
		<div class="ui stackable grid">
			<main id="main" class="site-main sixteen wide column">
			<div class="ui grid">
			  <!-- <div class="sixteen wide column"> -->
			  	<div class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">			  	
			  	<div class="ui large images  slider-for">
				<?php $args = array('category_name' => 'news-and-events,slides', 'posts_per_page' => 15, ); ?>
				<?php $the_query = new WP_Query($args); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div>
							<div class="ui segment basic clearing">
								<div class="ui spaced rounded bordered massive floated left image">
									<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('large');
										} else {
											?><img width="200" height="200" src="/wp-content/uploads/2014/12/cropped-images_news_Arm00-111-180x180.jpg" alt="<?php the_title(); ?>" /><?php
										}
									?>								
								  <div class="ui violet label large left ribbon">
								  	<i class="calendar icon"></i> <?php unset($previousday); the_date(); ?> <i class="icon clock"></i> <?php the_time(); ?>
								  </div>
								</div>								
								<a href="<?php the_permalink(); ?>"><h3 style="clear:none; text-align: justify"><?php the_title(); ?></h3></a>
								<br />
								<?php the_excerpt(); ?>
						      	<br />			
							  <span class="ui tag tiny labels">	
						      	<?php the_tags('<span class="ui label"> ','</span><span class="ui label">', '</span>'); ?>
						      </span>
						      
							</div>						      
						</div>			
					<?php endwhile; ?>			
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>			
			<div class="slider-nav ui three cards computer only">
				<?php $args = array('category_name' => 'news-and-events,slides', 'posts_per_page' => 15, ); ?>
				<?php $the_query = new WP_Query($args); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div>
							<div class="ui clearing segment raised eqheight">
								<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('thumbnail', array('class'=>'ui left bordered rounded floated tiny image'));
								} else {
									?><img width="200" height="200" src="/wp-content/uploads/2014/12/cropped-images_news_Arm00-111-180x180.jpg" class="ui bordered rounded left floated tiny image" alt="<?php the_title(); ?>" /><?php
								}
							?>
							<?php the_title(); ?>
							</div>
						</div>		
					<?php endwhile; ?>			
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			  </div>
			  <div class="four wide column computer only">			  	
			  	 <?php get_template_part( 'template-parts/right', 'menu' ); ?>
			  </div>
			  <!-- <div class="nine wide column">	 -->
			  <div class="sixteen wide mobile nine wide tablet nine wide computer column">		  	
			  	<div class="home-tabs ui top attached tabular menu">
				  <div class="item active" data-tab="one"><i class="list icon"></i> اخبار</div>
				  <div class="center item" data-tab="two"><i class="list icon"></i> اطلاعیه ها</div>
				  <div class="item " data-tab="three"><i class="list icon"></i> مناقصات و مزایدات</div>
				</div>
				<div class="ui bottom attached tab segment active" data-tab="one">
				  <?php $args = array('category_name' => 'news-and-events', 'posts_per_page' => 7, ); ?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="ui stacked raised segments">
								<div class="ui purple segment">
									<a href="<?php the_permalink(); ?>"><h3 style="text-align: justify"><?php the_title(); ?></h3></a>
								</div>
							<div class="ui top basic attached segment">
									<a href="<?php the_permalink(); ?>">				  								      
								      <?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('thumbnail', array('class'=>'ui spaced rounded bordered floated left small image'));
										} else {
											?><img width="200" height="200" src="/wp-content/uploads/2014/12/cropped-images_news_Arm00-111-180x180.jpg" alt="<?php the_title(); ?>" class="ui spaced rounded bordered  floated left small image" /><?php
										}
										?>	
								  	</a>						 
						      <?php the_excerpt(); ?>
						      <br style="clear:both">
						      <div class="ui violet label tiny left ribbon">
							  	<i class="calendar icon"></i> <?php unset($previousday); the_date(); ?> <i class="icon clock"></i> <?php the_time(); ?>
							  </div>				
							  <span class="ui tag tiny labels">	
						      	<?php the_tags('<span class="ui label"> ','</span><span class="ui label">', '</span>'); ?>
						      </span>		
						    </div>
							</div>					
						<?php endwhile; ?>
						<div class="ui pagination menu">
						  <a href="http://iec.kr.ir/detail-archive" class="active item"><i class="icon archive"></i> بایگانی ماهیانه / سالیانه اخبار</a>
						  <a href="http://iec.kr.ir/newsarchive/page/2" class="item">۲</a>				  
						  <a href="http://iec.kr.ir/newsarchive/page/3" class="item">۳</a>
						  <a href="http://iec.kr.ir/newsarchive/page/4" class="item">۴</a>
						  <a href="http://iec.kr.ir/newsarchive/page/5" class="item">۵</a>
						  <a href="http://iec.kr.ir/newsarchive/page/6" class="item">۶</a>
						  <a href="http://iec.kr.ir/newsarchive/page/7" class="item">۷</a>
						  <a href="http://iec.kr.ir/newsarchive/page/8" class="item">۸</a>
						  <a href="http://iec.kr.ir/newsarchive/page/9" class="item">۹</a>
						  <div class="disabled item">...</div>
						</div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="ui bottom attached tab segment" data-tab="two">
				  <?php
				  // notices Tab , تپ اطلاعیه ها - بدون عکس - بدون تگ 
				  	$args = array('category_name' => 'notices', 'posts_per_page' => 6, ); ?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="ui stacked raised segments">
								<div class="ui purple segment">
									<a href="<?php the_permalink(); ?>"><h3 style="text-align: justify"><?php the_title(); ?></h3></a>
								  <div class="ui violet label tiny left ribbon">
								  	<i class="calendar icon"></i> <?php unset($previousday); the_date(); ?> <i class="icon clock"></i> <?php the_time(); ?>
								  </div>
								</div>
							<div class="ui top basic attached segment">
						      <?php the_excerpt(); ?>		
						    </div>
							</div>					
						<?php endwhile; ?>						
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="ui bottom attached tab segment" data-tab="three">
				  <?php
				  // monaghesat Tab , تپ مناقصه ها - بدون عکس - بدون تگ 
				  	$args = array('category_name' => 'monaghesat', 'posts_per_page' => 6, ); ?>
					<?php $the_query = new WP_Query($args); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="ui stacked raised segments">
								<div class="ui purple segment">
									<a href="<?php the_permalink(); ?>"><h3 style="text-align: justify"><?php the_title(); ?></h3></a>
								  <div class="ui violet label tiny left ribbon">
								  	<i class="calendar icon"></i> <?php unset($previousday); the_date(); ?> <i class="icon clock"></i> <?php the_time(); ?>
								  </div>
								</div>
							<div class="ui top basic attached segment">
						      <?php the_excerpt(); ?>		
						    </div>
							</div>					
						<?php endwhile; ?>						
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			  </div>
			  <div class="three wide column computer only">	
			  	<div class="ui piled segment  purple">				  
				  <a class="ui purple large ribbon label"><i class="angle left icon"></i> نماز </a>
				  	پیامبر اکرم (ص):<br>
آگاه باشید که نماز، غذای الهی در زمین است که خداوند آن را روزی پنج بار برای اهل رحمتش (افراد شایسته رحمت) گوارا نموده است.(مستدرک الوسائل و مستنبط المسائل، ج. ۳، ص. ۱۶)
				</div>
			  			  	
			  	<div class="ui piled segment  purple">				  
				  <a class="ui purple large ribbon label"><i class="angle left icon"></i> سخن روز</a>
				  	<?php $dailyargs = array('post_type' => 'daily','orderby' => 'rand', 'posts_per_page' => 1); ?>
					<?php $daily_query = new WP_Query($dailyargs); ?>
					<?php if ( $daily_query->have_posts() ) : ?>
						<?php while ( $daily_query->have_posts() ) : $daily_query->the_post(); ?>
								<?php the_content(); ?>
						<?php endwhile; ?>				
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			  	<a href="http://esfand9th.com/" class="ui violet fluid tiny button">هفدهمین همایش روز ملی حمایت از حقوق مصرف کنندگان</a>
			  	<br />
			  	<a href="http://iec.kr.ir/workflows" class="ui purple fluid tiny labeled icon button"><i class="clipboard icon"></i> لیست فرآیندها و خدمات </a>
			  	<br />
			  	<a href="http://iec.kr.ir/wp-content/uploads/2018/07/%D8%AF%D8%B3%D8%AA%D9%88%D8%B1%D8%A7%D9%84%D8%B9%D9%85%D9%84-%D8%A8%D9%87%D8%B1%D9%87-%D8%A8%D8%B1%D8%AF%D8%A7%D8%B1%DB%8C-97.pdf" class="ui purple fluid tiny labeled icon button"><i class="clipboard icon"></i>   دستورالعمل بهره برداری </a>
			  	<br />
			  	<a href="http://iec.kr.ir/wp-content/uploads/2018/07/97.pdf" class="ui purple fluid tiny labeled icon button"><i class="pdf file icon"></i> حق انتفاع مصوب سال97  </a>
			  	<br />			  	
			  	<a href="http://iec.kr.ir/wp-content/uploads/2016/05/Tashilat.pdf" class="ui purple fluid tiny labeled icon button"><i class="pdf file icon"></i>تسهیلات سرمایه در گردش رونق تولید</a>
			  	<br />
			  	<a href="http://iec.kr.ir/hsee" class="ui purple fluid tiny labeled icon button"><i class="clinic icon"></i>HSEE</a>
			  	<div class="ui special card">
				  	<a href="https://iec.kr.ir/sadid" class="image blurring dimmable">				  		
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <div class="ui inverted button tiny">شهرک صنعتی غیردولتی سدید صانع (صنفی – کارگاهی)</div>
				          </div>
				        </div>
				      </div>
				      <img src="https://iec.kr.ir/wp-content/uploads/2019/03/ASl-300x300.png">
				  	</a>				    
				  </div>
			  	<div class="segment raised ui">
		  			<a class="ui purple large ribbon label">وب سایتهای مرتبط</a>
		  			<br />
		  			<div class="content">
		  				<br />
		  				<div class="ui vertical basic buttons fluid labeled icon basic blue mini">
					  	<a href= "http://btsc-kr.ir/" 			class="button ui"><i class="linkify icon"></i> مرکز فناوری کسب و کار</a>
					  	<a href="http://kerman.techmart.ir/" 	class="button ui"><i class="linkify icon"></i> فن بازار کرمان</a>
					  	<a href="http://sif.ir/" 				class="button ui"><i class="linkify icon"></i> صندوق ضمانت سرمایه گذاری صنایع کوچک</a>
					  	<a href="http://kccd.ir/" 				class="button ui"><i class="linkify icon"></i> خوشه کسب و کار فرش دستباف   </a>
					  	<a href="http://jiroftgolkhane.ir/" 	class="button ui"><i class="linkify icon"></i> خوشه کسب و کار محصولات گلخانه ای </a>
					  	<a href="http://iranpistachio.org/" 	class="button ui"><i class="linkify icon"></i> انجمن پسته</a>
					  	<a href="http://kermanpda.com/" 		class="button ui"><i class="linkify icon"></i> انجمن خرما</a>
					  	<a href="http://kerman.isipo.ir/" 		class="button ui"><i class="linkify icon"></i> سامانه دریافت انشعابات</a>
					  	<a href="http://gis.isipo.ir/" 			class="button ui"><i class="linkify icon"></i> سامانه اطلاعات مکانی</a>
						</div>	
					</div>	
			  	</div>
			  	<div class="segment raised purple ui">
		  			<a class="ui purple large ribbon label"><i class="newspaper icon"></i> نشریات استان کرمان</a>
		  			<div class="content">
		  				<script src="https://teetr.ir/widget/" type="text/javascript" charset="utf-8"></script>
		  			</div>
		  			<div class="ui bottom attached label">تیتر : سامانه نشریات استان کرمان</div>
		  		</div>
		  		
			  </div>
			</div>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();