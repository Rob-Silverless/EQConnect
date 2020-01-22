<?php 
	$image = get_sub_field('background_image');
?>
<div class="section data" style="background-image:url(<?php echo esc_url($image['url']); ?>)" id="dataPrivacy">
	<div class="container cols-12">
		<div class="col owl-carousel owl-theme" id="dataCarousel">
		<?php if( have_rows('carousel') ):
			while( have_rows('carousel') ): the_row();?>
			<div id="data<?php echo get_row_index(); ?>">
				<div class="h1"><?php the_sub_field('title')?></div>
				<div class="h2"><?php the_sub_field('sub_title')?></div>
				<div class="content"><?php the_sub_field('content')?></div>
			</div>
		<?php endwhile; endif;?>
		</div>
	</div>
</div>