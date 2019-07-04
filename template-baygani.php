<?php
/*
Template Name: بایگانی
*/
get_header();
?>
	<div id="primary" class="content-area ui container">
		<div class="ui stackable grid">
			<main id="main" class="site-main sixteen wide column">
				<?php if ( function_exists('yoast_breadcrumb') ){yoast_breadcrumb('<div class="ui mini message">','</div>');}?>
			<div class="ui grid">
				<div class="four wide column">
					<?php get_template_part( 'template-parts/right', 'menu' ); ?>
				</div>
				<div class="twelve wide column">
				<?php 
					 global $wpdb, $jdate_month_name, $ztjalali_option;					    
					        $YearlyQry = $wpdb->get_results(
					                "SELECT DATE_FORMAT( post_date ,'%Y-%m-%d' ) as date,
					                        count(ID) as count,
					                        YEAR(post_date) AS `year`, 
					                        MONTH(post_date) AS `month`, 
					                        DAYOFMONTH(post_date) AS `dayofmonth` 
					                FROM $wpdb->posts 
					                WHERE post_date < NOW() 
					                  AND post_type = 'post' 
					                  AND post_status = 'publish' 
					                GROUP BY date ORDER BY post_date DESC");
					        
					        if (!empty($YearlyQry)) {
					            $jYears = array();
					            $i = 1;
					            foreach ($YearlyQry as $res) {
					                $jalali_year = gregorian_to_jalali($res->year, $res->month, $res->dayofmonth);
					                $jYears[$jalali_year[0]]['year'] =$res->year ;
					                if (!array_key_exists('count', $jYears[$jalali_year[0]])) {
					                    $jYears[$jalali_year[0]]['count'] = 0;
					                }
					                $jYears[$jalali_year[0]]['count'] +=$res->count ;
					            }
					            foreach ($jYears as $jYear =>$data) {
					                if ($ztjalali_option['change_url_date_to_jalali'])
					                    $url = get_year_link($jYear);
					                else
					                    $url = get_year_link($data['year']);
					                
					                $jYear = ztjalali_persian_num($jYear);
					                $c_after = $show_post_count ? '&nbsp;(' . ztjalali_persian_num($data['count']) . ')' . $after : '';
					                ?>
					                <div class="ui row">
					                	<div class="ui segment primary raised purple ">
									        <h3><?php echo get_archives_link($url, $jYear, $format, 'اخبار مربوط به سال ', ' : '); ?></h3>									        
									    	<div class="callout primary">
									       <div class="ui four column grid row">
									       	<div class="column">
									       		بهار
									       		<br />
									       		تابستان
									       		<br />
									       		پاییز
									       		<br />
									       		زمستان
									       	</div>
									       	<div class="column">
									       		<a href="<?= $url ; ?>/01">فروردین</a>
									       		<br />									       		
									       		<a href="<?= $url ; ?>/04">تیر</a>
									       		<br />
									       		<a href="<?= $url ; ?>/07">مهر</a>
									       		<br />
									       		<a href="<?= $url ; ?>/10">دی</a>
									       	</div>
									       	<div class="column">
									       		<a href="<?= $url ; ?>/02">اردیبهشت</a>
									       		<br />									       		
									       		<a href="<?= $url ; ?>/05">مرداد</a>
									       		<br />
									       		<a href="<?= $url ; ?>/08">آبان</a>
									       		<br />
									       		<a href="<?= $url ; ?>/11">بهمن</a>
									       	</div>
									       	<div class="column">
									       		<a href="<?= $url ; ?>/03">خرداد</a>
									       		<br />									       		
									       		<a href="<?= $url ; ?>/06">شهریور</a>
									       		<br />
									       		<a href="<?= $url ; ?>/09">آذر</a>
									       		<br />
									       		<a href="<?= $url ; ?>/12">اسفند</a>
									       	</div>
									       </div>
									    </div>
									    </div>									    
					                </div>
									<?php
					                if ($i == $limit)
					                    break;
					                $i++;
					            }
					        }
					?>
				</div>
			</main><!-- #main -->
		</div><!-- #Grid -->
	</div><!-- #primary -->
<?php
get_footer();