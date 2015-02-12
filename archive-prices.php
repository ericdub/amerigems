<?php


get_header(); 
    
 $content = file_get_contents('http://www.kitco.com/texten/texten.html');
  $content = explode("\n",$content);

  for($i=39; $i<=42; $i++) {
    $thisLine = explode(' ',preg_replace('/(?:\s\s+|\n|\t)/', ' ',$content[$i]),4);
    //$prices[$thisLine[1]] = '$'.$thisLine[2];
      $prices[$thisLine[1]] = $thisLine[2];
  }

  //echo '<pre>';
  //print_r($prices);
  //echo '</pre>';

//$prices['Gold'];

//$prices['Silver'];

?>
	<div class="hero <?php echo edin_additional_class(); ?>">
		<?php if ( have_posts() ) : ?>

			<div class="hero-wrapper">
				<h1 class="page-title">
					<?php
						
							_e( 'Prices', 'edin' );

					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</div>

		<?php else : ?>

			<div class="title-wrapper">
				<h1 class="page-title"><?php _e( 'Nothing Found', 'edin' ); ?></h1>
			</div>

		<?php endif; ?>
	</div><!-- .hero -->

	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
                            $gold = $prices['Gold'];
                            
							get_template_part( 'content-prices', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php edin_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content-prices', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>