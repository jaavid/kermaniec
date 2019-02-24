<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @divnk https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Kerman_IEC
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<divnk rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-divnk screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kermaniec' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="headerimage">
			<img src="https://iec.kr.ir/wp-content/uploads/2016/08/95.jpg" alt="شرکت شهرکهای صنعتی استان کرمان" />
		</div>
		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kermaniec' ); ?></button> -->
		<div class="segment ui attached raised top">
			<div class="ui menu">
		    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header item" rel="home"><?php bloginfo( 'name' ); ?></a> -->
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="item"><i class="home icon"></i></a>
		    <div class="ui simple dropdown item">
		    	<a href="https://iec.kr.ir/about-province">معرفی استان</a>
		    	<i class="dropdown icon"></i>
				<div class="menu">
					<a href="https://iec.kr.ir/about-province/cdivtural-history" class="item">پیشینه و تاریخچه فرهنگی</a>
					<a href="https://iec.kr.ir/about-province/geo-location" class="item">موقیعت جغرافیایی،اقلیمی و طبیعی</a>
					<a href="https://iec.kr.ir/about-province/industry-and-mining" class="item">قابلیت های صنعت و معدن</a>
					<a href="https://iec.kr.ir/about-province/crops" class="item">محصولات کشاورزی</a>
				</div>	
		    </div>
			<div class="ui simple dropdown item">
				<a href="https://iec.kr.ir/introduction-of-the-company">معرفی شرکت</a>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a href="https://iec.kr.ir/introduction-of-the-company/history" class="item">تاریخچه</a>
					<a href="https://iec.kr.ir/introduction-of-the-company/organizational-structure" class="item">ساختار سازمانی</a>
					<a href="https://iec.kr.ir/introduction-of-the-company/chart" class="item">چارت سازمانی</a>
					<a href="https://iec.kr.ir/introduction-of-the-company/code-of-ethics" class="item">منشور اخلاقی</a>
					<a href="https://iec.kr.ir/introduction-of-the-company/company-address" class="item">ادرس شرکت</a>
				</div>
			</div>
			<div class="ui simple dropdown item">
				<a href="https://iec.kr.ir/statistics-and-information">آمار و اطلاعات</a>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a href="https://iec.kr.ir/statistics-and-information/strategic-plan" class="item">سند راهبردی</a>
					<a href="https://iec.kr.ir/statistics-and-information/virtual-office" class="item">دفتر کار مجازی</a>
					<a href="https://iec.kr.ir/statistics-and-information/indicators" class="item">شاخص ها</a>
					<a href="https://iec.kr.ir/mahroom" class="item">فهرست مناطق محروم</a>
					<a href="https://iec.kr.ir/vazayef" class="item">شرح وظایف برنامه ها</a>
					<a href="https://iec.kr.ir/statistics-and-information/active-units" class="item">واحدهای فعال</a>
					<a href="https://iec.kr.ir/archive/industrial-area" class="item">شهرک ها و نواحی صنعتی</a>
				</div>
			</div>
			<div class="ui simple dropdown item"><a href="https://iec.kr.ir/archive/appdivcants-guide">امور متقاضیان</a>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a href="https://iec.kr.ir/appdivcants-guide/iec-1464-kerman.html" class="item">زمین های دارای مرغوبیت</a>
					<a href="https://iec.kr.ir/investment-incentives" class="item">مشوق های سرمایه گذاری</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-1218-kerman.html" class="item">تجمیع قرارداد</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-1217-kerman.html" class="item">تفکیک قرارداد</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-121-kerman.html" class="item">فسخ قرارداد</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-120-kerman.html" class="item">تجمیع و تفکیک قرارداد</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-119-kerman.html" class="item">انتقال سند</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-118-kerman.html" class="item">نقل و انتقال</a>
					<a href="http://kerman.isipo.ir/" class="item">دریافت انشعاب آب و برق و گاز و تلفن و فاضلاب</a>
					<a href="http://gis.isipo.ir/isipogis/" class="item">سامانه اطلاعات مکانی شهرک ها و نواحی صنعتی ایران</a>
					<a href="https://iec.kr.ir/appdivcants-guide/iec-117-kerman.html" class="item">نحوه دریافت حق بهره برداری</a>
					<a href="http://iec.kr.ir/wp-content/uploads/2016/05/%D8%AF%D8%B3%D8%AA%D9%88%D8%B1%D8%A7%D9%84%D8%B9%D9%85%D9%84-%D8%A8%D9%87%D8%B1%D9%87-%D8%A8%D8%B1%D8%AF%D8%A7%D8%B1%DB%8C-%D8%B3%D8%A7%D9%8495.pdf" class="item">دستورالعمل بهره برداری ۹۵</a>
					<a href="http://iec.kr.ir/%D8%AD%D9%82-%D8%A7%D9%86%D8%AA%D9%81%D8%A7%D8%B9-%D8%A7%D8%B1%D8%A7%D8%B6%D9%8A" class="item">حق انتفاع اراضی شهرکها و نواحی صنعتی کرمان در سال ۹۷</a>
				</div>
			</div>
								
			<div class="ui simple dropdown item">
				<a href="https://iec.kr.ir/contact">ارتباط با ما</a>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a href="https://iec.kr.ir/pishnahadat" class="item">انتقادات و پیشنهادات</a>
					<a href="http://iec.kr.ir/%D9%81%D8%B1%D9%85-%D9%86%D8%B8%D8%B1%D8%B3%D9%86%D8%AC%DB%8C-%D8%A7%D8%B1%D8%A8%D8%A7%D8%A8-%D8%B1%D8%AC%D9%88%D8%B9" class="item">نظرسنجی ارباب رجوع</a>
										
				</div>
			</div>
			
			<div class="right menu">
				<div class="ui simple dropdown inverted orange menu item">
					<a href="http://iec.kr.ir/feed" class="ui orange icon button">
						<i class="icon square rss"></i> 
					</a>
				<div class="menu">
					<a href="http://iec.kr.ir/archive/news-and-events/feed" class="item"><i class="icon square rss"></i>  اخبار</a>
					<a href="http://iec.kr.ir/archive/notices/feed" class="item"><i class="icon square rss"></i> اطلاعیه‌ها</a>
					<a href="http://iec.kr.ir/archive/monaghesat/feed" class="item"><i class="icon square rss"></i>  مناقصات و مزایدات</a>
				</div>
			</div>		   
		  </div>
			</div>
			
		</div>		
		</div>    		
			<?php
	  		#TODO: Make Dynamic Menu
	  		#TODO: Write Wordpress Menu Walker Class			
	  		/*
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'		 => '',
				'container_class'=> '',
				'menu'            => '',
		        'container_id'    => '',
		        'menu_class'      => 'ui menu',
		        'menu_id'         => '',
		        'echo'            => true,
		        'fallback_cb'     => 'wp_page_menu',
		        'before'          => '',
		        'after'           => '',
		        'divnk_before'     => '',
		        'divnk_after'      => '',
		        'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
		        'item_spacing'    => 'preserve',
		        'depth'           => 0,
		        'walker'          => '',
				
			) );
			 * 
			 */
			?>
	</header><!-- #masthead -->	
	<div id="content" class="site-content">
