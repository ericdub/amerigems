<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Edin
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php if(is_page_template( 'price-list.php' )) {

echo '<META HTTP-EQUIV="REFRESH" CONTENT="60">' ;

} 
?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="cool"></div>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'edin' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-image" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a><!-- .header-image -->
		<?php endif; // End header image check. ?>

		<?php
			$search_header = get_theme_mod( 'edin_search_header' );
			if ( 1 == $search_header ) :
		?>
		<div class="search-wrapper">
			<?php get_search_form(); ?>
		</div><!-- .search-wrapper -->
		<?php endif; ?>

		<div class="header-wrapper clear">
			<div class="site-branding">
				<?php edin_the_site_logo(); ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				
				


			</div><!-- .site-branding -->
             <div class="social"><a href="http://www.facebook.com/amerigems"><img src="https://amerigems.org/wp-content/themes/amerigems/img/facebook-50.png" width="50" height="50" /></a><a href="https://twitter.com/Amerigems"><img src="https://amerigems.org/wp-content/themes/amerigems/img/twitter-50.png" width="50" height="50" /></a></div>
			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'secondary' ) ) : ?>
				<div id="site-navigation" class="header-navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'edin' ); ?></button>
					<div class="navigation-wrapper clear">
						<?php if ( has_nav_menu( 'secondary' ) ) : ?>
							<nav class="secondary-navigation" role="navigation">
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'secondary',
										'container_class' => 'menu-secondary',
										'menu_class'      => 'clear',
										'depth'           => 1,
									) );
								?>
							</nav><!-- .secondary-navigation -->
						<?php endif; ?>
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav class="primary-navigation" role="navigation">
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'primary',
										'container_class' => 'menu-primary',
										'menu_class'      => 'clear',
									) );
								?>
							</nav><!-- .primary-navigation -->
						<?php endif; ?>
					</div><!-- .navigation-wrapper -->
				</div><!-- #site-navigation -->
			<?php endif; ?>

			<?php if ( 1 == $search_header ) : ?>
				<div id="site-search" class="header-search">
					<a class="search-toggle"><span class="screen-reader-text"><?php _e( 'Search', 'edin' ); ?></span></a>
				</div><!-- #site-search -->
			<?php endif; ?>
		</div><!-- .header-wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
