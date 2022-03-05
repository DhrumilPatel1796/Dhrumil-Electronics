<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Project__Deliverables_1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			
			<?php
				the_custom_logo();

				// <button>My Account</button>
			?>
			<!-- <img src="./assets/img/logo.png" /> -->
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title">
					<a href="
						<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					</a>
				</h1>
				<?php
			else :
				?>
				<p class="site-title">
					<a href="
						<?php echo esc_url( home_url( '/my-account' ) ); ?>" rel="home"><button>My Account</button>
					</a>
				</p>
				<?php
			endif;
			?>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title">
					<a href="
						<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					</a>
				</h1>
				<?php
			else :
				?>
				<p class="site-login">
					<a href="
						<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><button>Login</button>
					</a>
				</p>
				<?php
			endif;
			?>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="search">
					<a href="
						<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					</a>
				</h1>
				<?php
			else :
				?>
				<p class="site-search">
					<input type="search
						<?php echo esc_url( home_url( '/' ) ); ?>" placeholder="Search" rel="home">
				</p>
				<?php
			endif;
			?>
			</div>
			<div class="site-branding">
				<?php
				if ( ! empty( get_custom_logo() ) ) {
					// the_custom_logo();
				} else {
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$project__deliverables_1_description = get_bloginfo( 'description', 'display' );
					if ( $project__deliverables_1_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $project__deliverables_1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif;
				}
				?>
			</div>
			<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> <!-- #site-navigation  -->
	</header><!-- #masthead -->