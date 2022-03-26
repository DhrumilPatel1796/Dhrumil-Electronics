<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Project__Deliverables_1
 */

?>

	<footer>

	<?php
		$electronic_args = array(
			'post_type' 	 => array( 'electronic' ),
			'post_status' 	 => 'publish',
			'posts_per_page' => 3,
			'orderby'		 => 'rand',
			'post__not_in'   => array( get_the_ID() ),
		);

		$electronic_query = new WP_Query( $electronic_args );
		?>
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-y">
				<?php
					if ( $electronic_query->have_posts() ) {
						while ( $electronic_query->have_posts() ) {
							$electronic_query->the_post();
							?>
							<div class="cell small-12 medium-4">
								<?php 
								the_post_thumbnail();
								the_title( '<h3>', '</h3>' );
								the_excerpt(); 
								?>
							</div>
							<?php
						}
					wp_reset_postdata();
					}
				?>
			</div>
		</div>

		<div class="lists">
			<div class="footer1">

			<?php
				if(is_active_sidebar('footer-1')) {
					dynamic_sidebar('footer-1');
				}
				?>
			</div><!-- .footer 1 -->
			<div class="footer2">

			<?php
				if(is_active_sidebar('footer-2')) {
					dynamic_sidebar('footer-2');
				}
				?>
			</div><!-- .footer 2 -->
			<div class="footer3">

			<?php
				if(is_active_sidebar('footer-3')) {
					dynamic_sidebar('footer-3');
				}
				?>
			</div><!-- .footer 3 -->
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
