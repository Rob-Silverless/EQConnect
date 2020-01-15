<?php
/**
 * ============== Template Name: Terms and Privacy
 *
 * @package poulton
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_field("hero_heading"); ?></h1>
	
	<div class="wrapper-content">
		
		<div class="copy"><?php the_field("content"); ?></div>
	
	</div>

</div>

<?php get_footer();?>
