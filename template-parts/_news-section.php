
<div class="section news">
	<div class="container cols-24">
		<div class="col">
			<div class="h1"><?php the_sub_field('title')?></div>
			<div class="h2"><?php the_sub_field('sub_title')?></div>
			<div class="owl-carousel owl-theme">
			<?php
			    $args = array(
			      'post_type' => 'post',
				  'posts_per_page' => -1,
				  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				  'post__not_in' => array(get_the_ID()),
			    );
			    $posts = new WP_Query( $args );
 				while ($posts -> have_posts()) : $posts -> the_post(); ?>
 					<?php 
						$image = get_field('image');
					?>
 					<div>
 						<div class="news-image" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
 						<h3><?php the_field('title');?></h3>
 						<span class="date"><?php echo get_the_date('d.m.y');?></span>
 						<p><?php the_field('excerpt');?></p>
 					</div>

 				<?php endwhile; wp_reset_query();?>
 			</div>
		</div>
	</div>
</div>