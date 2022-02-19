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

	<footer id="colophon" class="site-footer">
		<div class="customer">
			<a  href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Customer Care' ), 'WordPress' );
				?>
			</a>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Help Centre' ), 'WordPress' );
				?>
			</li>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Shipping Info' ), 'WordPress' );
				?>
			</li>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Return Policy' ), 'WordPress' );
				?>
			</li>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Contact Us' ), 'WordPress' );
				?>
			</li>
		</div><!-- .Customer -->
		<div class="corporate">
			<a  href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Corporate' ), 'WordPress' );
				?>
			</a>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'About Us' ), 'WordPress' );
				?>
			</li>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Career' ), 'WordPress' );
				?>
			</li>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Terms & Conditions' ), 'WordPress' );
				?>
			</li>
			<li href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Privacy' ), 'WordPress' );
				?>
			</li>
			<p href="<?php echo esc_url( __( 'https://wordpress.org/', 'projdeliverablesone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '&copy; copyright 2022' ), 'WordPress' );
				?>
			</p>
		</div><!-- .Corporate -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
