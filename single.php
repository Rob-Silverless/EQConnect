<?php
/**
 * The template for displaying all single posts
 *
 * @package poulton
 */
get_header();

if (have_posts()) : while (have_posts()) : the_post();

$page_news = get_page_by_path("whats-on");

$background = get_field("posts_field", $page_news)["background_image"]; if($background): ?>

<div class="background-image" style="background-image: url(<?php echo $background["sizes"]["large"]; ?>);"></div>

<?php endif; ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_title(); ?></h1>
	
	<div class="wrapper-content single-new">
		
		<?php $image = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), "medium_large"); ?>
		
		<div class="container cols-5-7">
		
			<div class="col">
				
				<a class="single-image" href="<?php echo $image; ?>">
					
					<img src="<?php echo $image; ?>">
					
				</a>
				
			</div>
			
			<div class="col">
				
				<!--<div class="single-date"><?php the_time( 'l, jS F Y' ); ?></div>-->
				
				<div class="copy"><?php the_content(); ?></div>
			
			</div>
			
		</div>
		
		<?php $images = get_field("gallery"); if($images): ?>
		
		<div class="gallery-carousel gallery owl-carousel mt5">
			
			<?php foreach($images as $image): ?>
			
			<div class="wrapper-image">
				
				<a href="<?php echo $image['url']; ?>" class="lightbox-gallery"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);"></a>
				
			</div>
			
			<?php endforeach; ?>
		
		</div>
			
		<?php endif; ?>
	
		<div class="wrapper-buttons mt2 <?php if(!$images) echo "align-right"; ?>">
			
			<a href="/whats-on" class="button button__dark">Back to What's on</a>
			
		</div>
		
	</div>

</div>

<?php endwhile; endif;
	
get_footer();?>
