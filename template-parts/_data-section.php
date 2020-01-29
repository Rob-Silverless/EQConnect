<?php 
	$image = get_sub_field('background_image');
?>
<div class="section data slow-fade" style="background-image:url(<?php echo esc_url($image['url']); ?>)" id="dataPrivacy">
	<div class="container cols-18 cols-md-offset-4-16 cols-sm-offset-2-20">
		<div class="col">
			<h2 class="heading heading__xl heading__outline heading__bold heading__animate heading__remove-margin-top heading__remove-margin-bottom slow-fade" data-delay="0">
				<svg class="sm-overide">
					<text x="0" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3"><?php the_sub_field('title')?></text>
				</svg>
			</h2>
			<div class="owl-carousel owl-theme" id="dataCarousel">

			<?php if( have_rows('carousel') ):
				while( have_rows('carousel') ): the_row();?>
				<div id="data<?php echo get_row_index(); ?>">
					<h3 class="slide-up heading heading__lg heading__bold heading__remove-margin-top"><?php the_sub_field('sub_title')?></h3>
					<div class="content"><?php the_sub_field('content')?></div>
				</div>
			<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</div>