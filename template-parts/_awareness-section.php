<div class="section" id="awarenessSection">
	<div class="container cols-12-12 cols-xl-15-9 cols-md-24-24 align-vert-c">
		<div class="col" id="awarenessSectionContainer">
			<div class="h1 slide-up" data-delay="500"><?php the_sub_field('title')?></div>
			<div class="h2 slide-up" data-delay="800"><?php the_sub_field('sub_title')?></div>
			<div class="slide-up animText" data-delay="1000" data-speed="8">
				<?php the_sub_field('content')?>
			</div>
		</div>
		<div class="col align-center">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" id="awarenessImage" class="slow-fade" data-delay="1300"/>
		</div>
	</div>
</div>