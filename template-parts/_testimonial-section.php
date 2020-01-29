<?php 
	$image = get_sub_field('background-image');
?>
<div class="section testimonial slow-fade fp-auto-height-responsive" style="background-image:url(<?php echo esc_url($image['url']); ?>)" id="testimonials">
	<div class="container cols-offset-6-12 cols-xl-offset-3-18  cols-sm-offset-1-22 align-vert-c">
		<div class="col testimonial-container align-center">
			<h3 class="heading heading__xl heading__outline heading__bold heading__animate heading__remove-margin-top heading__remove-margin-bottom slow-fade" data-delay="0">
				<svg>
					<text x="50%" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3" style="text-anchor: middle;"><?php the_sub_field('title')?></text>
				</svg>
			</h3>
			<div class="owl-carousel owl-theme" id="testimonialCarousel">
				<?php if( have_rows('testimonial') ):
					while( have_rows('testimonial') ): the_row();?>
				<div class="">
					<div><?php the_sub_field('testimonial_content');?></div>
					<span class="credit">
						<?php the_sub_field('credit');?>
					</span>
				</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</div>