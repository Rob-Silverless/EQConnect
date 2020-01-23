<div class="section challenge" id="pilotPartners">
	<div class="container cols-24 align-vert-c animateSection">
		<div class="col ">
			<div class="h1 animate"><?php the_sub_field('title')?></div>
			<div class="h2 animate"><?php the_sub_field('sub_title')?></div>
			<div class="container cols-6 cols-md-12 cols-sm-24 brands grid-gap">
				<?php if( have_rows('brands') ):
				while( have_rows('brands') ): the_row();?>
					<?php 
						$image = get_sub_field('image');
					?>
					<div class="col animate">
						<img src="<?php echo esc_url($image['url']); ?>" />
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</div>