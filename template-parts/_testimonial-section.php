<?php 
	$image = get_sub_field('background-image');
?>
<div class="section testimonial" style="background-image:url(<?php echo esc_url($image['url']); ?>)" id="testimonials">
	<div class="container cols-offset-6-12 align-vert-c">
		<div class="col testimonial-container align-center">
			<div class="h1 ">
				<?php the_sub_field('title');?>
			</div>
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