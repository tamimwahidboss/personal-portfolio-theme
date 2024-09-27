<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tamim_Wahid_Portfolio
 */
$options = get_option( 'tw_portfolio' );
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
<!-- Header Starts -->

		<header class="header" id="navbar-collapse-toggle">
			<!-- Fixed Navigation Starts -->
			<?php
				wp_nav_menu(
					array(
						'theme_location'		=> 'primary',
						'menu_class'			=> 'icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1',
						'container'				=> false,
						'before' 				=> '<i class="fa fa-angle-left"></i>',
						'after'					=> '',
						'link_before'			=> '<h2>',
						'link_after'			=> '</h2>',
						// 'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Ensure menu structure remains intact
					)
				);
			?>
			<!-- Fixed Navigation Ends -->
			 
			<!-- Mobile Menu Starts -->
			<nav role="navigation" class="d-block d-lg-none">
				<div id="menuToggle">
					<input type="checkbox" />
					<span></span>
					<span></span>
					<span></span>
					<?php
						wp_nav_menu(
							array(
								'theme_location'		=> 'primary',
								'menu_class'			=> 'list-unstyled',
								'menu_id'				=> 'menu',
								'container'				=> false,
								'link_before'			=> '<i class="fa fa-home"></i><span>',
								'link_after'			=> '</span>',
							)
						);
					?>
				</div>
			</nav>
			<!-- Mobile Menu Ends -->
		</header>
		<!-- Header Ends -->