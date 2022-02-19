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
						<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><button>My Account</button>
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
			<div class="nav_menu">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<?php
			else :
				?>
				<p class="menu">
					<a href="
						<?php echo esc_url( home_url( '/home' ) ); ?>" rel="home"><h3>Home</h3>
					</a>
					<a href="
						<?php echo esc_url( home_url( '/about' ) ); ?>" rel="about"><h3>About</h3>
					</a>
					<a href="
						<?php echo esc_url( home_url( '/block' ) ); ?>" rel="blog"><h3>Block Test</h3>
					</a>
					<a href="
						<?php echo esc_url( home_url( '/contact' ) ); ?>" rel="contact"><h3>Contact</h3>
					</a>
				</p>
				<?php
			endif;
			?>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> #site-navigation -->
	</header><!-- #masthead -->