<div class="section news fp-auto-height-responsive" id="news">
	<div class="container cols-24">
		<div class="col">
			<div class="slide-up heading heading__xl heading__outline heading__animate heading__bold heading__caps heading__remove-margin-bottom news-header" data-delay="500">
				<svg>
					<text x="0" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3"><?php the_sub_field('title')?></text>
				</svg>
			</div>
			<h4 class="slide-up heading heading__lg heading__bold heading__remove-margin-top" data-delay="800"><?php the_sub_field('sub_title')?></h4>
		</div>
	</div>
	<div class="container cols-24 cols-xl-offset-2-20 cols-sm-offset-4-16">
		<div class="col">
			<div class="owl-carousel owl-theme" id="news-carousel">
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
						$row = $posts->current_post;
						$delay = 500;
					?>
 					<div class="slide-up" data-delay="<?php echo $delay * $row + 1?>">
 						<div class="news-image" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
	 						<div class="news-content">
	 						<h3><?php the_field('title');?></h3>
	 						<span class="date"><?php echo get_the_date('d.m.y');?></span>
	 						<p><?php the_field('excerpt');?></p>
	 					</div>
	 					<a href="" class="news-link" target="_blank">
	 						Open Article<br/>
	 						<span>Opens in a new window</span>
	 					</a>
 					</div>

 				<?php endwhile; wp_reset_query();?>
 			</div>
		</div>
	</div>
</div>