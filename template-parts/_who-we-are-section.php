<div class="section who-we-are"  id="who">
	<div class="container cols-16-8 cols-md-24-24 align-vert-c">
		<div class="col">
			<div class="container cols-14 cols-xl-24 content">
				<div class="col">
					<div class="h1"><?php the_sub_field('title')?></div>
					<div class="h2"><?php the_sub_field('sub_title')?></div>
					<div class="animText">
						<?php the_sub_field('content')?>
					</div>
				</div>
			</div>
			<div class="container cols-8 cols-md-12 cols-sm-24 animateSection">
				<?php if( have_rows('person') ):
				while( have_rows('person') ): the_row();?>
					<div class="col person animate" data-individual="individual-<?php echo get_row_index(); ?>">
						<div class="person_profile">
							<?php if( get_field('profile_image') ): ?>
								<?php 
									$image = get_sub_field('profile_image');
								?>
								<img src="<?php echo esc_url($profile_image['url']); ?>" />
							<?php else: ?>
								<?php get_template_part("inc/img/profile-image"); ?>
							<?php endif; ?>
						</div>
						<div class="person_name"><?php the_sub_field('name')?> <?php the_sub_field('surname')?></div>
						<div class="job_title"><?php the_sub_field('job_title')?></div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
		<div class="col align-center hide-md">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" class="animateImage"/>
		</div>
	</div>

<?php if( have_rows('person') ):
	while( have_rows('person') ): the_row();?>

	<div class="individual" id="individual-<?php echo get_row_index(); ?>">
		<div class="container cols-10-14 cols-sm-24-24">
			<div class="col image hide-sm">
				<?php if( get_field('profile_image') ): ?>
					<?php 
						$image = get_sub_field('profile_image');
					?>
					<img src="<?php echo esc_url($profile_image['url']); ?>" />
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/inc/img/profile-image-lg.png"/>
				<?php endif; ?>
			</div>
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