<div class="section">
	<div class="container cols-14-10 align-vert-c">
		<div class="col">
			<h1><?php the_sub_field('heading')?></h1>
			<h2><?php the_sub_field('sub_heading')?></h2>
			<?php if( have_rows('content') ):
				while( have_rows('content') ): the_row();?>
				<div class="blockquote">
					<?php the_sub_field('quote_content')?>
					<span>
						<?php the_sub_field('credit')?>
					</span>
				</div>
			<?php endwhile; endif;?>
		</div>
		<div class="col">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" />
		</div>
	</div>
</div>