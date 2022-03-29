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

	<footer><!-- opening footer tag -->

	<!-- opening php tag and using wp_query function for displaying three posts per page in the footer section --><?php
		$electronic_args = array(
			'post_type' 	 => array( 'electronic' ),
			'post_status' 	 => 'publish',
			'posts_per_page' => 3,
			'orderby'		 => 'rand',
			'post__not_in'   => array( get_the_ID() ),
		);

		$electronic_query = new WP_Query( $electronic_args );
		?> <!-- closing php tag -->
		<div class="grid-container"> <!-- creating div with class name as grid-container -->
			<div class="grid-x grid-margin-x grid-padding-y"> <!-- creating div with class name as grid-x, grid-margin-x and grid-padding-y -->
				<!-- opening php tag and using if else conditions and while loop as well --><?php
					if ( $electronic_query->have_posts() ) {
						while ( $electronic_query->have_posts() ) {
							$electronic_query->the_post();
							?><!-- closing php tag -->
							<div class="cell small-12 medium-4 title"><!-- creating div with class name as title and size for small and medium screen  -->
								<!-- opening php tag and for displaying the custom posts title, image, and excerpt --><?php 
								the_post_thumbnail();?> <!-- closing php tag -->
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php
								the_excerpt(); 
								?>
							</div><!-- closing div -->
							<!-- opening php tag and reseting postdata --><?php
						}
					wp_reset_postdata();
					}
				?><!-- closing php tag -->
			</div><!-- closing div -->
		</div><!-- closing div -->
				<div class="lists"><!-- creating div with class name as lists -->
					<div class="footer1"><!-- creating div with class name as footer1 -->
							<!-- opening php tag for creating one sidebar in the footer with using if condition --><?php
								if(is_active_sidebar('footer-1')) {
									dynamic_sidebar('footer-1');
								}
								?><!-- closing php tag -->
					</div><!-- closing div for  .footer 1 -->
					<div class="footer2"><!-- creating div with class name as footer2 -->
							<!-- opening php tag for creating second sidebar in the footer with using if condition --><?php
								if(is_active_sidebar('footer-2')) {
									dynamic_sidebar('footer-2');
								}
								?><!-- closing php -->
					</div><!-- closing div for .footer 2 -->
					<div class="footer3"><!-- creating div with class name as footer3 -->
							<!-- opening php tag for creating one sidebar in the footer with using if condition --><?php
								if(is_active_sidebar('footer-3')) {
									dynamic_sidebar('footer-3');
								}
								?><!-- closing php tag -->
					</div><!-- closing div for .footer 3 -->
				</div><!-- closing div of lists -->
	</footer><!-- closing footer tag -->

<?php wp_footer(); ?>

</body><!-- closing body tag -->
</html><!-- clsoing html tag -->
