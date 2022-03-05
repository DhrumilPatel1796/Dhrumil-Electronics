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
