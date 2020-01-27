<div class="section" id="contact">
	<div class="container cols-12-12 cols-md-24-24 align-vert-c animateSection">
		<div class="col">
			<div class="h1 slide-up" data-delay="500"><?php the_sub_field('title')?></div>
			<div class="h2 slide-up" data-delay="800"><?php the_sub_field('sub_title')?></div>
			<div class="slide-up animText" data-delay="1000" data-delay="6">
				<?php the_sub_field('content')?>
			</div>
			<div class="contact-email slide-up" data-delay="1500">
				<a href="mailto:<?php the_sub_field('email')?>"><?php the_sub_field('email')?></a>
			</div>
		</div>
		<div class="col align-center">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" class="slow-fade"  data-delay="1800"/>
		</div>
	</div>
</div>