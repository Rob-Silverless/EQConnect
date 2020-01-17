<?php 
	$image = get_sub_field('image');
?>
<div class="section challenge" style="background-image:url(<?php echo esc_url($image['url']); ?>)">
	<div class="container cols-10 align-vert-c">
		<div class="col">
			<div class="h1"><?php the_sub_field('title')?></div>
			<div class="h2"><?php the_sub_field('sub_title')?></div>
			<div>
				<?php the_sub_field('content')?>
			</div>
		</div>
	</div>
</div>