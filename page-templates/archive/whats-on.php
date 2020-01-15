<?php
/**
 * ============== Template Name: What's On
 *
 * @package poulton
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_field("hero_heading"); ?></h1>
	
	<?php
	
	$paged = (get_query_var("paged")) ? get_query_var("paged") : 1;
	
	$query = new WP_Query(array(
		"posts_per_page" => 4,
		"paged"          => $paged
	));
	
	if($query->have_posts()): ?>
	
	<div class="wrapper-content">
		
		<?php while($query->have_posts()): $query->the_post(); ?>
		
		<?php get_template_part('template-parts/news'); ?>
		
		<?php endwhile;  ?>
		
		<div class="pagination"><?php 
		
			echo paginate_links(array(
				"base"         => str_replace(999999999, "%#%", esc_url(get_pagenum_link(999999999))),
				"total"        => $query->max_num_pages,
				"current"      => max(1, get_query_var("paged")),
				"format"       => "?paged=%#%",
				"show_all"     => false,
				"type"         => "plain",
				"end_size"     => 1,
				"mid_size"     => 1,
				"prev_next"    => true,
				"prev_text"    => sprintf('<i class="fas fa-angle-left"></i>'),
				"next_text"    => sprintf('<i class="fas fa-angle-right"></i>'),
				"add_args"     => false,
				"add_fragment" => "",
			));
		
		?></div>
		
	</div>

	<? wp_reset_postdata(); endif; ?>

</div>

<?php get_footer();?>