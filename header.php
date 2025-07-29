<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Verification -->
	<?php if (is_front_page()) {
		echo '<meta name="fo-verify" content="8761238d-c673-4c81-a972-903a5d32e4ce" />';
	}; ?>
	
	
	<!-- Check -->
	<script type="text/javascript" src="https://s.skimresources.com/js/284292X1770733.skimlinks.js"></script>

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
		<div class="container">
			<div class="nav-layout">

				<div class="hamburger nav-hamburger">
					<?php get_template_part( 'template-parts/svg/hamburger' ); ?>
				</div>

				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php get_template_part( 'template-parts/svg/logo' ); ?>
					</a>
				</div>
				
				<?php if (has_nav_menu('primary')) : ?>
					<nav class="desktop-navigation">
						<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu desktop-menu',
							'menu_id'        => 'primary-menu', 
							'container'      => false,
							'walker'         => new Custom_Walker_Nav_Menu(), // Use the custom walker
						)); ?>
					</nav>
				<?php endif; ?>

				<!-- Search icon -->
				 <div class="search-icon">
					<a href="<?php echo esc_url( home_url( '/search/' ) ); ?>" class="search-icon__link" aria-label="<?php esc_attr_e( 'Search', 'textdomain' ); ?>">
				 		<?php get_template_part( 'template-parts/svg/search' ); ?>
					</a>
				</div>
				
			</div><!-- .nav-layout --> 
		</div><!-- .container --> 
	</header>

	<div class="mobile-nav-drawer" id="nav-drawer">
		<div class="container">
			<div class="mobile-nav-layout">
				<div class="mobile-nav-header">
					<div class="hamburger nav-hamburger">
						<?php get_template_part( 'template-parts/svg/hamburger' ); ?>
					</div>
				</div>
				<nav class="mobile-nav">
					<?php wp_nav_menu(array(
						'theme_location' => 'primary',
						'menu_class' => 'primary-menu mobile-menu',
						'menu_id' => 'primary-menu', 
						'container' => false,
					)); ?>
				</nav>
			</div>
		</div>
	</div>