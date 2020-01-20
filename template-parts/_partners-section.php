<div class="section challenge">
	<div class="container cols-24 align-vert-c">
		<div class="col">
			<div class="h1"><?php the_sub_field('title')?></div>
			<div class="h2"><?php the_sub_field('sub_title')?></div>
			<div class="container cols-6 brands grid-gap">
				<?php if( have_rows('brands') ):
				while( have_rows('brands') ): the_row();?>
					<?php 
						$image = get_sub_field('image');
					?>
					<div class="col">
						<img src="<?php echo esc_url($image['url']); ?>" />
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</div>