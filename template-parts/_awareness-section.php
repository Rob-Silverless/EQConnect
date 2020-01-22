<div class="section" id="awarenessSection">
	<div class="container cols-12-12 align-vert-c">
		<div class="col" id="awarenessSectionContainer">
			<div class="h1 animate"><?php the_sub_field('title')?></div>
			<div class="h2 animate"><?php the_sub_field('sub_title')?></div>
			<div class="animText">
				<?php the_sub_field('content')?>
			</div>
		</div>
		<div class="col align-center">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" id="awarenessImage"/>
		</div>
	</div>
</div>