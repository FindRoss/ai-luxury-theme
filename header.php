<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
		<div class="container">
			<div class="nav-layout">

				<div class="hamburger">
					<?php get_template_part( 'template-parts/svg/hamburger' ); ?>
				</div>

				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php get_template_part( 'template-parts/svg/logo' ); ?>
					</a>
				</div>
				
				<nav class="desktop-navigation">
					<?php wp_nav_menu(array(
						'theme_location' => 'primary',
						'menu_class' => 'primary-menu desktop-menu',
						'menu_id' => 'primary-menu', 
						'container' => false,
					)); ?>
				</nav>
				
			</div><!-- .nav-layout --> 
		</div><!-- .container --> 
	</header>

	<nav class="mobile-navigation">
		<?php wp_nav_menu(array(
			'theme_location' => 'primary',
			'menu_class' => 'primary-menu mobile-menu',
			'menu_id' => 'primary-menu', 
			'container' => false,
		)); ?>
	</nav>