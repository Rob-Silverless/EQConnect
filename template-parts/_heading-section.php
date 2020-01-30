<div class="section" id="home">
	<div class="container cols-13-11 cols-xl-15-9 cols-md-24-24 align-vert-c">
		<div class="col headerContent">
			<?php 
				$fundedBy = get_sub_field('funded_by');
			?>
			<h1 class="heading heading__xl heading__animate heading__bold heading__remove-margin-top heading__remove-margin-bottom slow-fade" data-delay="500">
				<svg height="48">
					<text x="0" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3"><?php the_sub_field('heading')?></text>
				</svg>
			</h1>
			<h2 class="slide-up heading heading__lg heading__bold heading__remove-margin-top" data-delay="1000"><?php the_sub_field('sub_heading')?></h2>
			<?php if( have_rows('content') ):
				while( have_rows('content') ): the_row();?>
				<div class="blockquote">
					<div class="slide-up" data-delay="1500">
						<?php the_sub_field('quote_content')?>
					</div>
					<span class="credit slide-up" data-delay="2000">
						<?php the_sub_field('credit')?>
					</span>
				</div>
				<div class="funded slide-up" data-delay="2500">
					<img src="<?php echo esc_url($fundedBy['url']); ?>" />
				</div>
			<?php endwhile; endif;?>
		</div>
		<div class="col headerImage slow-fade" data-delay="4000">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" id="headerSpin" alt="Responsible Gambling - Joining up the approach"/>
		</div>
	</div>
	<div id="mouse-scroll-anchor">
		<?php get_template_part("inc/img/mouse-scroll"); ?>
	</div>
</div>