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
		<?php get_template_part("template-parts/_heading-section"); ?>
	<?php endwhile; endif;?>

	<?php if( have_rows('awareness_section') ):
	while( have_rows('awareness_section') ): the_row();?>
		<?php get_template_part("template-parts/_awareness-section"); ?>
	<?php endwhile; endif;?>

	<?php if( have_rows('three_points_section') ):
	while( have_rows('three_points_section') ): the_row();?>
		<?php get_template_part("template-parts/_three-points-section"); ?>
	<?php endwhile; endif;?>

	<?php if( have_rows('challenge_section') ):
	while( have_rows('challenge_section') ): the_row();?>
		<?php get_template_part("template-parts/_challenge-section"); ?>
	<?php endwhile; endif;?>

	<?php if( have_rows('data_section') ):
	while( have_rows('data_section') ): the_row();?>
		<?php get_template_part("template-parts/_data-section"); ?>
	<?php endwhile; endif;?>


	<?php if( have_rows('news_section') ):
	while( have_rows('news_section') ): the_row();?>
		<?php get_template_part("template-parts/_news-section"); ?>
	<?php endwhile; endif;?>

	<?php if( have_rows('partners_section') ):
	while( have_rows('partners_section') ): the_row();?>
		<?php get_template_part("template-parts/_partners-section"); ?>
	<?php endwhile; endif;?>

	<?php if( have_rows('testimonial_section') ):
	while( have_rows('testimonial_section') ): the_row();?>
		<?php get_template_part("template-parts/_testimonial-section"); ?>
	<?php endwhile; endif;?>
</div>

<?php get_footer();?>