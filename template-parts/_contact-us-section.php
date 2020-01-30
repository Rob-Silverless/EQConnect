<div class="section" id="contact">
	<div class="container cols-12-12 cols-md-24-24 align-vert-c animateSection">
		<div class="col">
			<h4 class="slow-fade heading heading__animate heading__xl heading__outline heading__bold heading__remove-margin-top heading__remove-margin-bottom" data-delay="500">
				<svg>
					<text x="0" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3"><?php the_sub_field('title')?></text>
				</svg>
			</h4>
			<h5 class="slide-up heading heading__lg heading__bold heading__remove-margin-top heading__caps" data-delay="800"><?php the_sub_field('sub_title')?></h5>
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