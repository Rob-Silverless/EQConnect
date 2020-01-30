<div class="section" id="awarenessSection">
	<div class="container cols-12-12 cols-xl-15-9 cols-md-24-24 align-vert-c">
		<div class="col" id="awarenessSectionContainer">
			<h2 class="slow-fade heading heading__xl heading__animate heading__bold heading__remove-margin-top heading__remove-margin-bottom" data-delay="500">
				<svg>
					<text x="0" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3"><?php the_sub_field('title')?></text>
				</svg>
			</h2>
			<h3 class="slide-up heading heading__lg heading__bold heading__remove-margin-top" data-delay="800"><?php the_sub_field('sub_title')?></h3>
			<div class="slide-up" data-delay="1000">
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