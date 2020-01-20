<div class="section heading" id="home">
	<div class="container cols-13-11 align-vert-c">
		<div class="col">
			<?php 
				$fundedBy = get_sub_field('funded_by');
			?>
			<h1><?php the_sub_field('heading')?></h1>
			<h2><?php the_sub_field('sub_heading')?></h2>
			<?php if( have_rows('content') ):
				while( have_rows('content') ): the_row();?>
				<div class="blockquote">
					<?php the_sub_field('quote_content')?>
					<span class="credit">
						<?php the_sub_field('credit')?>
					</span>
				</div>
				<div class="funded">
					<img src="<?php echo esc_url($fundedBy['url']); ?>" />
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
	<div id="mouse-scroll-anchor">
		<?php get_template_part("inc/img/mouse-scroll"); ?>
	</div>
</div>