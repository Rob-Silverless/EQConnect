<div class="section challenge fp-auto-height-responsive" id="pilotPartners">
	<div class="container cols-24 align-vert-c animateSection">
		<div class="col ">
			<h2 class="slide-up heading heading__xl heading__outline heading__bold heading__remove-margin-top heading__remove-margin-bottom" data-delay="500"><?php the_sub_field('title')?></h2>
			<div class="slide-up heading heading__lg heading__bold heading__remove-margin-top heading__caps" data-delay="800"><?php the_sub_field('sub_title')?></div>
			<div class="container cols-6 cols-md-12 cols-sm-24 brands grid-gap">
				<?php if( have_rows('brands') ):
				while( have_rows('brands') ): the_row();?>
					<?php 
						$image = get_sub_field('image');
						$delay = 1200

					?>
					<div class="col slow-fade" data-delay="<?php echo $delay + (100 * get_row_index());?>">
						<img src="<?php echo esc_url($image['url']); ?>" />
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</div>