<?php 
	$image = get_sub_field('background_image');
?>
<?php if( have_rows('carousel') ):
	while( have_rows('carousel') ): the_row();?>
<div class="section data" style="background-image:url(<?php echo esc_url($image['url']); ?>)">
	<div class="container cols-12" id="data<?php echo get_row_index(); ?>">
		<div class="col">
			<div class="h1"><?php the_sub_field('title')?></div>
			<div class="h2"><?php the_sub_field('sub_title')?></div>
			<div><?php the_sub_field('content')?></div>
		</div>
	</div>
</div>
<?php endwhile; endif;?>