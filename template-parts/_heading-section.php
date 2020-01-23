<div class="section heading" id="home">
	<div class="container cols-13-11 cols-xl-15-9 cols-md-24-24 align-vert-c">
		<div class="col headerContent">
			<?php 
				$fundedBy = get_sub_field('funded_by');
			?>
			<h1 class="slide-up"><?php the_sub_field('heading')?></h1>
			<h2 class="slide-up"><?php the_sub_field('sub_heading')?></h2>
			<?php if( have_rows('content') ):
				while( have_rows('content') ): the_row();?>
				<div class="blockquote slide-up">
					<?php the_sub_field('quote_content')?>
					<span class="credit slide-up">
						<?php the_sub_field('credit')?>
					</span>
				</div>
				<div class="funded slide-up">
					<img src="<?php echo esc_url($fundedBy['url']); ?>" />
				</div>
			<?php endwhile; endif;?>
		</div>
		<div class="col headerImage slow-fade">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" id="headerSpin" />
		</div>
	</div>
	<div id="mouse-scroll-anchor">
		<?php get_template_part("inc/img/mouse-scroll"); ?>
	</div>
</div>