<div class="section who-we-are"  id="who">
	<div class="container cols-16-8 align-vert-c">
		<div class="col">
			<div class="container cols-14 content">
				<div class="col">
					<div class="h1"><?php the_sub_field('title')?></div>
					<div class="h2"><?php the_sub_field('sub_title')?></div>
					<div>
						<?php the_sub_field('content')?>
					</div>
				</div>
			</div>
			<div class="container cols-8">
				<?php if( have_rows('person') ):
				while( have_rows('person') ): the_row();?>
					<div class="col person">
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
						<div class="person_name"><?php the_sub_field('name')?></div>
						<div class="job_title"><?php the_sub_field('job_title')?></div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
		<div class="col align-center">
			<?php 
				$image = get_sub_field('image');
			?>
			<img src="<?php echo esc_url($image['url']); ?>" />
		</div>
	</div>



	<div class="individual">
		<div class="container cols-10-14">
			<div class="col image">
				<img src="<?php echo get_template_directory_uri(); ?>/inc/img/profile-image-lg.png"/>
			</div>
			<div class="col info">
				<a class="close" href="#">x</a>
				<div class="content-name">
					<div class="name h3">
						<div>
							Will
						</div>
						<div>
							Mace
						</div>
					</div>
					<div class="role-title">
						CEO
					</div>
				</div>
				<div class="role-description">
					<ul>
						<li>MBA - Judge Business School, Cambridge</li>
						<li>5 years Head of Innovation @ Kindred</li>
						<li>10 years British Arm, 5 years Banking</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>