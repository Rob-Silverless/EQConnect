<?php 
	$image = get_sub_field('background-image');
?>
<div class="section testimonial" style="background-image:url(<?php echo esc_url($image['url']); ?>)">
	<div class="container cols-offset-6-12 align-vert-c">
		<div class="col testimonial-container">
			<div class="h1 align-center">
				<?php the_sub_field('title');?>
			</div>
		</div>
	</div>
</div>