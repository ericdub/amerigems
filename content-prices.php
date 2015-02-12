<?php
/**
 * @package Edin
 */

$content = file_get_contents('http://www.kitco.com/texten/texten.html');
  $content = explode("\n",$content);

  for($i=39; $i<=42; $i++) {
    $thisLine = explode(' ',preg_replace('/(?:\s\s+|\n|\t)/', ' ',$content[$i]),4);
    //$prices[$thisLine[1]] = '$'.$thisLine[2];
      $prices[$thisLine[1]] = $thisLine[2];
  }
 $gold = $prices['Gold'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <?php echo $gold ?>
	</header><!-- .entry-header -->

	<?php edin_post_thumbnail(); ?>

	<div class="entry-content">
		<?php //the_content(); ?>
		
		<?php 
						//Loop through custom price fields
                                                echo '<div class="prices">'; 
                                                  
                                                   if(get_field('buy_formula')){
                                                             $buy_price = get_field('buy_formula');
                                                            echo 'We buy at: $';
                                                             echo $buy_price;						
	                                                    
                                                    }
                                                  if(get_field('storyteller_phone')){
                                                              $st_phone = get_field('storyteller_phone');
                                                             echo '<p>'.$st_phone;
                                                             echo '</p>';						
	                                                     
                                                    }
                                                   
                                                echo '</div>';    
                                                
                         ?> 
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'edin' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edin_entry_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
