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
	<div class="ui tall stacked segment">
		<a href="<?php the_permalink(); ?>" class="ui black ribbon label">
	    	<i class="info circle icon"></i> شناسه خدمت : <?php echo $spod->field('serviceid'); ?>
	    </a>
	    <span>
	    <a href="<?= $shenase['guid'] ?>" class="ui icon button mini red" target="_blank" style="line-height: 1 !important" download="شناسه خدمت <?php echo $spod->field('serviceid'); ?>"> 
			<i class="icon file pdf"></i> 
		</a>
		<a href="<?= $marahel['guid'] ?>" class="ui icon button mini blue" target="_blank" style="line-height: 1 !important" download="مراحل فرآیند  خدمت <?php echo $spod->field('serviceid'); ?>"> 
			<i class="icon file word"></i> 
		</a>
	    <a href="<?php the_permalink(); ?>">
	  		<?php the_title( '<span>', '</span>' ); ?>
	  	</a>	      
	</div>
</article>
<hr />