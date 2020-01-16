<?php
/**
 * ============== Template Name: Home Page
 *
 * @package eqconnect
 */
get_header();?>

<div id="fullpage">
	<?php if( have_rows('heading_section') ):
	while( have_rows('heading_section') ): the_row();?>
		<div class="section">
			<div class="container cols-14-10 align-vert-c">
				<div class="col">
					<h1><?php the_sub_field('heading')?></h1>
					<h2><?php the_sub_field('sub_heading')?></h2>
					<?php if( have_rows('content') ):
						while( have_rows('content') ): the_row();?>
						<div class="blockquote">
							<?php the_sub_field('quote_content')?>
							<span>
								<?php the_sub_field('credit')?>
							</span>
						</div>
					<?php endwhile; endif;?>
				</div>
				<div class="col">
					<?php 
						$image = get_sub_field('image');
					?>
					<img src="<?php echo esc_url($image['url']); ?>" />
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>

	<?php if( have_rows('awareness_section') ):
	while( have_rows('awareness_section') ): the_row();?>
		<div class="section">
			<div class="container cols-10-14 align-vert-c">
				<div class="col">

				</div>
				<div class="col">
					<div class="h1"><?php the_sub_field('title')?></div>
					<div class="h2"><?php the_sub_field('sub_title')?></div>
					<div>
						<?php the_sub_field('content')?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>

	<?php if( have_rows('three_points_section') ):
	while( have_rows('three_points_section') ): the_row();?>
		<div class="section">
			<div class="container cols-8 grid-gap">
				<div class="col">
					<div class="three-points-number">
						1
					</div>
					<div>
						<?php the_sub_field('first_block')?>
					</div>
				</div>
				<div class="col">

				</div>
				<div class="col">

				</div>
			</div>
		</div>
		<div class="section">
			<div class="container cols-8 grid-gap">
				<div class="col">
					<div class="three-points-number">
						1
					</div>
					<div>
						<?php the_sub_field('first_block')?>
					</div>
				</div>
				<div class="col">
					<div class="three-points-number">
						2
					</div>
					<div>
						<?php the_sub_field('second_block')?>
					</div>
				</div>
				<div class="col">

				</div>
			</div>
		</div>
		<div class="section">
			<div class="container cols-8 grid-gap">
				<div class="col">
					<div class="three-points-number">
						1
					</div>
					<div>
						<?php the_sub_field('first_block')?>
					</div>
				</div>
				<div class="col">
					<div class="three-points-number">
						2
					</div>
					<div>
						<?php the_sub_field('second_block')?>
					</div>
				</div>
				<div class="col">
					<div class="three-points-number">
						3
					</div>
					<div>
						<?php the_sub_field('third_block')?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>

	<?php if( have_rows('challenge_section') ):
	while( have_rows('challenge_section') ): the_row();?>
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
	<?php endwhile; endif;?>


	<?php if( have_rows('news_section') ):
	while( have_rows('news_section') ): the_row();?>
		<div class="section">
			<div class="container cols-24">
				<div class="col">
					<div class="h1"><?php the_sub_field('title')?></div>
					<div class="h2"><?php the_sub_field('sub_title')?></div>
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>
</div>

<?php get_footer();?>