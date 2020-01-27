<?php
/**
 * The template for displaying the footer
 * @package eqconnect
 */
?>

</main>

<footer class="footer">

	<div class="socket">

		<div class="container cols-8 cols-sm-24">

			<div class="col colophon">&copy; EQ Connect <?php echo date ('Y');?></div>

			<div class="col silverless">

				<a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>

			</div>

			<div class="col mandatory">
				<?php

					if( have_rows('legal_pages', 'option') ):

					    while ( have_rows('legal_pages', 'option') ) : the_row();?>

				<a href="#" data-modal="<?php the_sub_field('page_name')?>-<?php echo get_row_index(); ?>"><?php the_sub_field('page_name')?></a>

			<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

	</div><!--socket-->

</footer>

</div><!-- #page -->

<?php
			if( have_rows('legal_pages', 'option') ):
			    while ( have_rows('legal_pages', 'option') ) : the_row();?>

<div class="legalInfo" id="<?php the_sub_field('page_name')?>-<?php echo get_row_index(); ?>">
	<div class="legalOverlay"></div>
	<div class="legalContent">
		<div class="close">x</div>
		
 		
 		<?php

		$post_object = get_sub_field('page');

		if( $post_object ): 

			// override $post
			$post = $post_object;
			setup_postdata( $post ); 

			?>

		    <?php the_content();?>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		
	</div>
</div>

<?php endif; ?>
		<?php endwhile; endif; ?>

<?php wp_footer(); ?>

<script>

</script>

</body>

</html>
