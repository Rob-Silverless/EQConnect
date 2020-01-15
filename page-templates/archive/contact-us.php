<?php
/**
 * ============== Template Name: Contact Us
 *
 * @package poulton
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_field("hero_heading"); ?></h1>
	
	<div class="wrapper-content">
		
		<div class="container contact-flex">
		
			<div class="col contact-info">
				
				<?php if(have_rows("contact_info", "options")): while(have_rows("contact_info", "options")): the_row(); ?>
					
				<div class="mb2"><?php the_sub_field("telephone"); ?></div>
				<div class="mb2"><?php the_sub_field("email"); ?></div>
				<div class="mb2"><?php the_sub_field("address"); ?></div>
				
				<?php endwhile; endif; ?>
				
				<div class="contact-socials socials mt2">
        
					<?php if(have_rows("social_links", "option")): while(have_rows("social_links", "option")): the_row(); ?>
					
					<a href="<?php the_sub_field("page_link"); ?>"><i class="fab fa-<?php the_sub_field("name"); ?>"></i></a>
					
					<?php endwhile; endif; ?>
				
				</div>
				
			</div>
			
			<div class="col">
				
				<?php echo do_shortcode('[contact-form-7 id="2116" title="Contact Form" html_id="contact-form"]'); ?>
				
			</div>
			
			<div class="col contact-actions">
				
				<?php
				
				$images = get_field("image_actions");
		    
				$booking_links =  get_field("booking_links", "options");
			
				?>
				
				<a href="<?php echo $booking_links["book_table_link"]; ?>" class="contact-links">
					<div class="mb2" style="background: url(<?php echo $images["book_table"]["sizes"]["medium"]; ?>)">Book a table</div>
				</a>
				
				<a href="<?php echo $booking_links["book_room_link"]; ?>" class="contact-links">
					<div style="background: url(<?php echo $images["book_room"]["sizes"]["medium"]; ?>)">Book a room</div>
				</a>
				
			</div>
		
		</div>
		
	</div>
	
	<div style="height:50vh;" class="find-us">
		<?php get_template_part("template-parts/map"); ?>
	</div>

</div>

<?php get_footer();?>
