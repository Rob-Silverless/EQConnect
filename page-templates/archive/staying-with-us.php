<?php
/**
 * ============== Template Name: Staying With Us
 *
 * @package poulton
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_field("hero_heading"); ?></h1>
	
	<?php if(have_rows("rooms")): while(have_rows("rooms")): the_row(); ?>
	
	<div class="wrapper-content mb4">
		
		<div class="title"><?php the_sub_field("title"); ?></div>
	
		<!-- Copy -->
		
		<?php $copy = get_sub_field("copy"); if($copy["intro"]): ?>
		
		<div class="copy"><?php echo $copy["intro"]; ?></div><br>
		
		<?php endif; ?>
		
		<?php if($copy["read_more"]): ?>
		
		<div class="copy expand mb2"><?php echo $copy["read_more"]; ?></div>
		
		<div class="read-more">Read more</div>
		
		<?php endif; ?>
	
		<!-- Copy END -->
		
		<!-- Gallery -->
		
		<?php $images = get_sub_field("gallery"); if($images): ?>
		
		<div class="gallery-carousel gallery owl-carousel mt2">
			
			<?php foreach($images as $image): ?>
			
			<div class="wrapper-image">
				
				<a href="<?php echo $image['url']; ?>" class="lightbox-gallery"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);"></a>
				
			</div>
			
			<?php endforeach; ?>
		
		</div>
			
		<?php endif; ?>
		
		<!-- Gallery END -->
		
		<!-- Actions -->
		
		<div class="wrapper-buttons mt2 mb2">
			
			<a class="button button__dark" href="<?php echo get_field("booking_links", "options")["book_room_link"]; ?>">Book a room</a>
			
		</div>
		
		<!-- Actions END -->
	
	</div>
	
	<?php endwhile; endif; ?>

</div>

<?php get_footer();?>
