<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package TailwindWP
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
<div id="page-container">

	<header id="main-header">
		<div class="max-w-screen-xl px-4 m-auto">
			<div class="flex flex-wrap -mx-4">
				<div class="xl:w-1/4 w-1/3 px-4 bg-blue-300">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="xl:w-3/4 w-2/3 px-4 bg-red-400">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle text-xl" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tailwindwp' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>
