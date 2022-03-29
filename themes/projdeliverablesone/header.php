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
	<header id="masthead" class="site-header"> <!-- giving id name masthead and class name site-header -->
		<div class="site-branding"> <!-- creating div with class name site-branding -->
			<div class="cell small-12 medium-4"><!-- creating div with class name cell and declaring the sizes for small adn medium screen -->
			<!-- opening php tag -->	<?php 
					the_custom_logo(); 
				?><!-- closing php tag -->
			</div> <!-- closing div -->
			<!-- opening php tag and using if else condition --><?php
			if ( is_front_page() && is_home() ) :
				?> <!-- closing php tag -->
				<h1 class="search"> <!-- declaring h1 tag with class name search -->
					<a href="
						<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					</a> <!-- opening a hyperlink tag and closing a hyperlink tag -->
				</h1> <!-- closing h1 tag -->
			<!-- opening php tag -->	<?php
			else :
				?>
				<p class="site-search"> <!-- opening p tag -->
					<input type="search
						<?php echo esc_url( home_url( '/' ) ); ?>" placeholder="Search" rel="home"> <!-- using input tag for displaying search -->
				</p> <!-- closing p tag -->
				<!-- opening php tag and ending if else conditions --><?php
			endif;
			?> <!-- ending php tag -->
			</div> <!-- ending div  -->

		<nav id="site-navigation" class="main-navigation"> <!-- declaring nav with class name main-navigation and id name site-navigation -->
			<!-- opening php tag and using wp_has_nav function for displaying primary menus and buttons --><?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-primary',
					'menu_id'        => 'primary-menu',
				)
			);

			wp_nav_menu(
				array(
					'theme_location' => 'menu-buttons',
					'menu_id'        => 'buttons-menu',
				)
			);
			?><!-- closing php tag -->
		</nav> <!-- #site-navigation  -->
	</header><!-- #masthead -->