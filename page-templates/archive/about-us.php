<?php
/**
 * ============== Template Name: About Us
 *
 * @package poulton
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_field("hero_heading"); ?></h1>
	
	<div class="wrapper-content">
		
		<!-- Copy -->
		
		<?php $copy = get_field("copy"); if($copy["intro"]): ?>
		
		<div class="copy"><?php echo $copy["intro"]; ?></div><br>
		
		<?php endif; ?>
		
		<?php if($copy["read_more"]): ?>
		
		<div class="copy expand mb2"><?php echo $copy["read_more"]; ?></div>
		
		<div class="read-more">Read more</div>
		
		<?php endif; ?>
		
		<!-- Copy END -->
		
		<!-- Gallery -->
		
		<?php $images = get_field("gallery"); if($images): ?>
		
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
		    
		    <?php $booking_links =  get_field("booking_links", "options"); ?>
			
			<a class="button button__dark" href="<?php echo $booking_links["book_table_link"]; ?>">Book a table</a>
			
			<a class="button button__dark ml1" href="<?php echo $booking_links["book_room_link"]; ?>">Book a room</a>
			
		</div>
		
		<!-- Actions END -->
		
	</div>

</div>

<?php get_footer();?>
