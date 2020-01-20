<div class="section" id="contact">
	<div class="container cols-12-12 align-vert-c">
		<div class="col">
			<div class="h1"><?php the_sub_field('title')?></div>
			<div class="h2"><?php the_sub_field('sub_title')?></div>
			<div>
				<?php the_sub_field('content')?>
			</div>
			<div class="contact-email">
				<a href="mailto:<?php the_sub_field('email')?>"><?php the_sub_field('email')?></a>
			</div>
		</div>
		<div class="col align-center">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" />
		</div>
	</div>
</div>