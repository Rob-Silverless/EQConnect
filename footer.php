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

				<a href="#" id="tc">Terms</a>

				<span class="divider">|</span>

				<a href="#" id="privacy">Privacy</a>

			</div>

		</div>

	</div>

	</div><!--socket-->

</footer>

</div><!-- #page -->

<div class="legalInfo">
	<div class="legalOverlay"></div>
	<div class="legalContent">
		<div class="close">x</div>
 		<?php
		    // query for the about page
		    $query = new WP_Query( 'pagename=privacy-policy' );
		    // "loop" through query (even though it's just one page) 
		    while ( $query->have_posts() ) : $query->the_post();
		        the_content();
		    endwhile;
		    // reset post data (important!)
		    wp_reset_postdata();
		?>
	</div>
</div>

<?php wp_footer(); ?>

<script>

</script>

</body>

</html>
