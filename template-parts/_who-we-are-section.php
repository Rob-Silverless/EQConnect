<div class="section who-we-are"  id="who">
	<div class="container cols-16-8 cols-md-24-24 align-vert-c">
		<div class="col">
			<div class="container cols-14 cols-xl-24 content">
				<div class="col">
					<h4 class="slow-fade heading heading__animate heading__xl heading__outline heading__bold heading__remove-margin-top heading__remove-margin-bottom" data-delay="500">
						<svg>
							<text x="0" y="60" fill="#fff" fill-opacity="0" stroke="#fff" class="animate-outline" stroke-width="0.3"><?php the_sub_field('title')?></text>
						</svg>
					</h4>
					<h5 class="slide-up heading heading__lg heading__bold heading__remove-margin-top heading__caps" data-delay="800"><?php the_sub_field('sub_title')?></h5>
					<div class="slide-up" data-delay="1000">
						<?php the_sub_field('content')?>
					</div>
				</div>
			</div>
			<div class="container cols-8 cols-md-12 cols-sm-24 people">
				<?php if( have_rows('person') ):
				while( have_rows('person') ): the_row();?>
					<div class="col person slow-fade" data-individual="individual-<?php echo get_row_index(); ?>" data-delay="<?php echo 1200 + (200* get_row_index()); ?>">
						<div class="person_profile">
							<?php 
								$image = get_sub_field('thumbnail_image');
								if( $image ):
							?>
								<img src="<?php echo esc_url($image['url']); ?>" />
							<?php else: ?>
								<?php get_template_part("inc/img/profile-image"); ?>
							<?php endif; ?>
						</div>
						<div class="person_name"><?php the_sub_field('name')?> <?php the_sub_field('surname')?></div>
						<div class="job_title"><?php the_sub_field('job_title')?></div>
					</div>

					<div class="individual" id="individual-<?php echo get_row_index(); ?>">
						<div class="container cols-10-14 cols-sm-24-24">
							<?php 
									$image = get_sub_field('profile_image');
									if( $image ):
								?>
							<div class="col image hide-sm" style="background-image:url(<?php echo esc_url($image['url']); ?>)"></div>
								<?php else: ?>
							<div class="col image hide-sm" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc/img/profile-image-lg.png)"></div>
								<?php endif; ?>
							
							<div class="col info">
								<a class="close" href="#">x</a>
								<div class="content-name">
									<div class="name h3">
										<div>
											<?php the_sub_field('name')?>
										</div>
										<div>
											<?php the_sub_field('surname')?>
										</div>
									</div>
									<div class="role-title">
										<?php the_sub_field('job_title')?>
									</div>
								</div>
								<div class="role-description">
									<?php the_sub_field('information')?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
		<div class="col align-center hide-md">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" class="slow-fade" data-delay="1800"/>
		</div>
	</div>

</div>