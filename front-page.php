<?php get_header(); ?>
	<div id="primary" class="content-area ui container">
		<div class="ui stackable grid">
			<main id="main" class="site-main sixteen wide column">
			<div class="ui grid">
			  <div class="sixteen wide column">			  	
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
								<h3 style="clear:none;"><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
						      				
							  <span class="ui tag tiny labels">	
						      	<?php the_tags('<span class="ui label"> ','</span><span class="ui label">', '</span>'); ?>
						      </span>
						      
							</div>						      
						</div>			
					<?php endwhile; ?>			
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>			
			<div class="slider-nav ui three cards">
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
			  <div class="four wide column">
			  	<div class="ui vertical fluid inverted purple menu">
				  <div class="item">
				    <div class="ui icon input">
				    	<input type="text" placeholder="جستجو...">
				    	<i class="search icon"></i>
				    </div>
				  </div>				  
				  <a href="https://iec.kr.ir/ceo-message" class="item">
				    <i class="envelope open text icon"></i> پیام مدیرعامل
				  </a>
				  <a href="https://iec.kr.ir/download/1.zip" class="item">
				    <i class="hand holding usd icon"></i> الویت های سرمایه گذاری
				  </a>				  
				  <a href="https://iec.kr.ir/archive/industrial-area" class="item">
				    <i class="city icon"></i> شهرک ها و نواحی صنعتی
				  </a>				  				  				  
				  <a href="https://iec.kr.ir/eforms" class="item">
				    <i class="grid layout icon"></i> فرم خدمات الکترونیک
				  </a>
				  <a href="https://iec.kr.ir/applicants-guide/iec-64-kerman.html" class="item">
				    <i class="grid layout icon"></i> رسیدگی به شکایات
				  </a>
				  <a href="http://new.isipo.ir/index.jsp?siteid=1&fkeyid=&siteid=1&pageid=416" class="item">
				    <i class="grid layout icon"></i> خدمات الکترونیک
				  </a>   
				  <a href="https://iec.kr.ir/%d8%a7%d8%b1%d8%aa%d8%a8%d8%a7%d8%b7-%d8%a8%d8%a7-%d9%86%d8%ae%d8%a8%da%af%d8%a7%d9%86-%d9%88-%d8%b5%d8%a7%d8%ad%d8%a8-%d9%86%d8%b8%d8%b1%d8%a7%d9%86-%d8%ad%d9%88%d8%b2%d9%87-%d8%b5%d9%86%d8%b9%d8%aa" class="item">
				    <i class="envelope icon"></i> ارتباط با نخبگان
				  </a>
				  <a href="https://iec.kr.ir/faq/iec-36-kerman.html" class="item">
				    <i class="info icon"></i> سوالات متداول
				  </a>
				  <a href="https://iec.kr.ir/albums" class="item">
				    <i class="images icon"></i> گالری تصاویر
				  </a>
				  <a href="https://iec.kr.ir/%d8%a7%d9%85%d9%88%d8%b1-%d9%81%d8%b1%d9%87%d9%86%da%af%db%8c" class="item">
				    <i class="grid layout icon"></i> امور فرهنگی
				  </a>
				  <a href="https://iec.kr.ir/2014-12-17-16-00-29" class="item">
				    <i class="grid layout icon"></i> بسیج
				  </a>
				  <div class="item">
				    معاونت ها
				    <div class="menu">
				      <a href="https://iec.kr.ir/planning" class="item">
					    <i class="grid layout icon"></i> معاونت برنامه ریزی و امور اقتصادی
					  </a>
					  <a href="https://iec.kr.ir/archive/small-industries" class="item">
					    <i class="grid layout icon"></i> معاونت صنایع کوچک
					  </a>
					  <a href="https://iec.kr.ir/%d9%85%d8%b9%d8%a7%d9%88%d9%86%d8%aa-%d8%b9%d9%85%d8%b1%d8%a7%d9%86-%d9%88-%d9%85%d8%ad%db%8c%d8%b7-%d8%b2%db%8c%d8%b3%d8%aa" class="item">
					    <i class="grid layout icon"></i> معاونت فنی
					  </a>		
				    </div>
				  </div>
				</div>			  	
				  <div class="ui special card">
				  	<a href="http://leader.ir" class="image blurring dimmable">				  		
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <div class="ui inverted button tiny">Leader.ir</div>
				          </div>
				        </div>
				      </div>
				      <img src="https://iec.kr.ir/wp-content/uploads/2016/04/leader.jpg">
				  	</a>				    
				  </div>
				  
				  <div class="ui special card">
				  	<a href="http://dolat.ir" class="image blurring dimmable">				  		
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <div class="ui inverted button tiny">Dolat.ir</div>
				          </div>
				        </div>
				      </div>
				      <img src="https://iec.kr.ir/wp-content/uploads/2016/04/dolat.jpg">
				  	</a>				    
				  </div>
				  
				  <div class="ui special card">
				  	<a href="http://gov.kr.ir" class="image blurring dimmable">				  		
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <div class="ui inverted button tiny">Gov.KR.ir</div>
				          </div>
				        </div>
				      </div>
				      <img src="https://iec.kr.ir/wp-content/uploads/2016/04/gov.jpg">
				  	</a>				    
				  </div>
				  <div class="ui special card">
				  	<a href="http://mimt.gov.ir" class="image blurring dimmable">				  		
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <div class="ui inverted button tiny">MimT.GOV.ir</div>
				          </div>
				        </div>
				      </div>
				      <img src="https://iec.kr.ir/wp-content/uploads/2016/04/r.jpg">
				  	</a>				    
				  </div>
				  <div class="ui special card">
				  	<a href="http://isipo.ir" class="image blurring dimmable">				  		
				      <div class="ui dimmer">
				        <div class="content">
				          <div class="center">
				            <div class="ui inverted button tiny">Isipo.ir</div>
				          </div>
				        </div>
				      </div>
				      <img src="https://iec.kr.ir/wp-content/uploads/2016/04/logo.jpg">
				  	</a>				    
				  </div>				  
			  		<a href="https://t.me/ieckerman" class="ui telegram fluid labeled icon large button"><i class="telegram icon"></i>کانال تلگرام</a>
			  		<br />
			  		<a href="http://behinyab.ir/" class="ui violet fluid tiny button">درگاه اطلاعات و خدمات صنعت، معدن و تجارت(بهین یاب)</a>
			  		<br />
			  		<a href="http://iec.kr.ir/%D9%81%D8%B1%D9%85-%D9%86%D8%B8%D8%B1%D8%B3%D9%86%D8%AC%DB%8C-%D8%A7%D8%B1%D8%A8%D8%A7%D8%A8-%D8%B1%D8%AC%D9%88%D8%B9" class="ui purple fluid large labeled icon button"><i class="poll icon"></i> نظرسنجی ارباب رجوع</a>			
			  	<hr />
			  	Monasebat			  
			  </div>
			  <div class="nine wide column">
			  	<div class="ui top attached tabular menu">
				  <div class="item active" data-tab="one">اخبار</div>
				  <div class="center item" data-tab="two">اطلاعیه ها</div>
				  <div class="item " data-tab="three">مناقصات و مزایدات</div>
				</div>
				<div class="ui bottom attached tab segment active" data-tab="one">
				  <?php $args = array('category_name' => 'news-and-events', 'posts_per_page' => 6, ); ?>
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
									the_post_thumbnail('medium', array('class'=>'ui spaced rounded bordered floated left small image'));
								} else {
									?><img width="200" height="200" src="/wp-content/uploads/2014/12/cropped-images_news_Arm00-111-180x180.jpg" alt="<?php the_title(); ?>" class="ui spaced rounded bordered  floated left small image" /><?php
								}
								?>	
						  	</a>						 
				      <?php the_excerpt(); ?>
				      <div class="ui violet label tiny left ribbon">
					  	<i class="calendar icon"></i> <?php unset($previousday); the_date(); ?> <i class="icon clock"></i> <?php the_time(); ?>
					  </div>				
					  <span class="ui tag tiny labels">	
				      	<?php the_tags('<span class="ui label"> ','</span><span class="ui label">', '</span>'); ?>
				      </span>		
				    </div>
					</div>					
				<?php endwhile; ?>
			<nav class="page-navigation">
				<ul class="pagination">
					<li class="current"><a href="http://iec.kr.ir/detail-archive"><i class="fi-archive"></i> بایگانی ماهیانه / سالیانه اخبار</a></li>
					<li></li>
					<li></li>
					<li class="current">1</li>
					<li><a href="http://iec.kr.ir/newsarchive/page/2">2</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/3">3</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/4">4</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/5">5</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/6">6</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/7">7</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/2">...</a></li>
					<li><a href="http://iec.kr.ir/newsarchive/page/2">بعدی</a></li>							
				</ul>
			</nav>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
				</div>
				<div class="ui bottom attached tab segment" data-tab="two">
				  <p></p>
				  <p></p>
				</div>
				<div class="ui bottom attached tab segment" data-tab="three">
				  <p></p>
				  <p></p>
				</div>
			  </div>
			  <div class="three wide column">			  	
			  	<div class="ui piled segment  purple">
				  <h4 class="ui header">سخن روز</h4>
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
			  	<div class="segment raised ui">
		  			<a class="ui purple large ribbon label">وب سایتهای مرتبط</a>
		  			<br />
		  			<div class="content">
		  				<br />
					  	<a href= "http://btsc-kr.ir/" class="ui large purple fluid  inverted tag label">مرکز فناوری کسب و کار</a>
					  	<br /><br />
					  	<a href="http://kerman.techmart.ir/" class="ui large purple fluid  inverted tag label">فن بازار کرمان</a>
					  	<br /><br />
					  	<a href="http://sif.ir/" class="ui large purple fluid  inverted tag label">صندوق ضمانت سرمایه گذاری صنایع کوچک</a>
					  	<br /><br />
					  	<a href="http://kccd.ir/" class="ui large purple fluid  inverted tag label">خوشه کسب و کار فرش دستباف   </a>
					  	<br /><br />
					  	<a href="http://jiroftgolkhane.ir/" class="ui large purple fluid  inverted tag label">خوشه کسب و کار محصولات گلخانه ای </a>
					  	<br /><br />			  	
					  	<a href="http://iranpistachio.org/" class="ui large purple fluid  inverted tag label">انجمن پسته</a>
					  	<br /><br />
					  	<a href="http://kermanpda.com/" class="ui large purple fluid  inverted tag label">انجمن خرما</a>
					  	<br /><br />
					  	<a href="http://kerman.isipo.ir/" class="ui large purple fluid  inverted tag label">سامانه دریافت انشعابات</a>
					  	<br /><br />
					  	<a href="http://gis.isipo.ir/" class="ui large purple fluid  inverted tag label">سامانه اطلاعات مکانی</a>
					</div>	
			  	</div>
			  	<div class="segment raised ui">
		  			<a class="ui purple large ribbon label">نشریات استان کرمان</a>
		  			<div class="content">
		  				<script src="https://teetr.ir/widget" type="text/javascript" charset="utf-8"></script>
		  			</div>
		  			<div class="ui bottom attached label">تیتر : سامانه نشریات استان کرمان</div>
		  		</div>
		  		
			  </div>
			</div>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();