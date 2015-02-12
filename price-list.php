<?php
/*
Template Name: Price List
*/

get_header(); ?>
    

	<div class="hero <?php echo edin_additional_class(); ?>">
		

			<div class="hero-wrapper">
				<h1 class="page-title">Our Prices 
					
						
				</h1>
				<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
				
				
				<?php

$content = file_get_contents('http://www.kitco.com/texten/texten.html');
  $content = explode("\n",$content);

  for($i=39; $i<=42; $i++) {
    $thisLine = explode(' ',preg_replace('/(?:\s\s+|\n|\t)/', ' ',$content[$i]),4);
    //$prices[$thisLine[1]] = '$'.$thisLine[2];
      $prices[$thisLine[1]] = $thisLine[2];
  }
 




 $data = file_get_contents('http://www.kitco.com/texten/texten.html');
preg_match_all('!Gold\s+([0-9.]+)\s+([0-9.]+)!i',$data,$matches);
preg_match_all('!Silver\s+([0-9.]+)\s+([0-9.]+)!i',$data,$s_matches);

//New York
$ny_bid = $matches[1][0];
$ny_ask = $matches[2][0];
//print("NY\nbid: $ $ny_bid\n");
//print("ask: $ $ny_ask\n\n");

//Asia
$asia_bid = $matches[1][1];
$asia_ask = $matches[2][1];
//print("Asia\nbid: $ $asia_bid\n");
//print("ask: $  $asia_ask\n");

//NY Silver


$nys_bid = $s_matches[1][0];
$nys_ask = $s_matches[2][0];







$gold_bid = $ny_bid;
$gold_ask = $ny_ask;

$silver_bid = $nys_bid;
$silver_ask = $nys_ask;



$goldhalf_bid = $gold_bid / 2; 
$goldhalf_ask = $gold_ask / 2; 

$goldq_bid = $gold_bid / 4; 
$goldq_ask = $gold_ask/ 4; 

$goldt_bid = $gold_bid / 10;
$goldt_ask = $gold_ask / 10;



$silverhalf_bid = $silver_bid / 2; 
$silverhalf_ask = $silver_ask / 2; 

$silverq_bid = $silver_bid / 4; 
$silverq_ask = $silverd_ask/ 4; 

$silvert_bid = $silver_bid / 10;
$silvert_ask = $silver_ask / 10;







echo '
<h2>Gold</h2>

<p>NY Bid: $'.$ny_bid.' 
Ask: $'.$ny_ask.' </p>
<table>
   <thead>
       <tr>
           <th>Spot wt.</th><th>Name</th><th>Buy</th><th>Sell</th>
       </tr>
   </thead>
    <tr>
       <td>1oz.</td> <td>American Eagle gem/unc</td><td>$'. sprintf('%0.2f',($gold_bid + 10)).' </td><td>$'. sprintf('%0.2f',($gold_ask + 60)).'</td></tr>
            <tr><td>1oz.</td> <td>American Buffalo gem/unc</td><td>$'.sprintf('%.2f',($gold_bid + 10)).' </td><td>$'. sprintf('%0.2f', ($gold_ask + 60)).'</td></tr>
             <tr> <td>1oz.</td> <td>Canadian Maple Leaf gem/unc .9999</td><td>$'. sprintf('%.2f', $gold_bid) .'</td><td>$'.sprintf('%0.2f',($gold_ask + 50)).'</td></tr>
              <tr> <td>1oz.</td> <td>Canadian Maple Leaf gem/unc .999</td><td>$'.sprintf('%.2f',($gold_bid - 25)) .'</td><td>$'.sprintf('%0.2f', ($gold_ask + 45)).'</td></tr>
               <tr><td>1oz.</td> <td>Krugerrand</td><td>$'.sprintf('%.2f',($gold_bid - 25)).'</td><td>$'.sprintf('%0.2f', ($gold_ask + 45)).'</td></tr>
               <tr><td>1oz.</td> <td>Chinese Panda</td><td>$'. sprintf('%.2f', $gold_bid).'</td><td>$'.  sprintf('%0.2f',($gold_ask + 60)).'</td></tr>
               <tr> <td>1oz.</td> <td>Austrian Philharmonic gem/unc</td><td>$'. sprintf('%.2f',$gold_bid).'</td><td>$'. sprintf('%0.2f',($gold_ask + 60)).'</td></tr>
                <tr><td>1oz.</td> <td>Australian Kangaroo gem/unc</td><td>$'.sprintf('%.2f', $gold_bid).'</td><td>$'. sprintf('%0.2f', ($gold_ask + 60)).'</td></tr>
                <tr><td>per oz.</td> <td>generic/spotted/stainedc</td><td>$'. sprintf('%.2f', ($gold_bid - 40)).'</td><td>$'. sprintf('%0.2f', ($gold_ask + 25)).'</td></tr>
               
                <tr><td>1/2oz.</td> <td>American Eagle gem/unc</td><td>$'.sprintf('%.2f',  $goldhalf_bid ).'</td><td>$'. sprintf('%.2f', ($goldhalf_ask * 1.09)).'</td></tr>
                 <tr><td>1/2oz.</td> <td>Canadian Maple Leaf gem/unc</td><td>$'. sprintf('%.2f', $goldhalf_bid).'</td><td>$'.sprintf('%.2f', ($goldhalf_ask * 1.08)).'</td></tr>
                  <tr><td>1/2oz.</td> <td>Krugerrand gem/unc</td><td>$'. sprintf('%.2f',  $goldhalf_bid ).'</td><td>$'. sprintf('%.2f', ($goldhalf_ask * 1.07)).'</td></tr>
                  <tr><td>1/2oz.</td> <td>Chinese Panda gem/unc</td><td>$'.  sprintf('%.2f', $goldhalf_bid) .'</td><td>$'. sprintf('%.2f', ($goldhalf_ask * 1.08)).'</td></tr>
                  <tr><td>1/2oz.</td> <td>First Spouse .9999 gem/unc Au .9999 </td><td>$'.  sprintf('%.2f', ($goldhalf_bid * .965 )).'</td><td>$'. sprintf('%.2f', ($goldhalf_ask * 1.09)).'</td></tr>
                  
                  <tr><td>1/4oz.</td> <td>American Eagle gem/unc</td><td>$'. sprintf ('%.2f',$goldq_bid)  .'</td><td>$'.sprintf ('%.2f', ($gold_ask * 1.09)).'</td></tr>
                  <tr><td>1/4oz.</td> <td>Canadian Maple Leaf gem/unc</td><td>$'. sprintf ('%.2f',$goldq_bid)  .'</td><td>$'.sprintf ('%.2f', ($gold_ask * 1.09)).'</td></tr>
                  <tr><td>1/4oz.</td> <td>Krugerrand gem/unc</td><td>$'. sprintf ('%.2f',$goldq_bid)  .'</td><td>$'. sprintf ('%.2f',($gold_ask * 1.09)).'</td></tr>
                  <tr><td>1/4oz.</td> <td>Chinese Panda gem/unc</td><td>$'. sprintf ('%.2f',$goldq_bid)  .'</td><td>$'. sprintf ('%.2f',($gold_ask * 1.09)).'</td></tr>
                  
                   <tr><td>1/10oz.</td> <td>American Eagle gem/unc</td><td>$'. sprintf ('%.2f',($goldt_bid * 1.04)) .'</td><td>$'. sprintf ('%.2f',($goldt_ask* 1.13)).'</td></tr>
                   <tr><td>1/10oz.</td> <td>Canadian Maple Leaf gem/unc</td><td>$'.sprintf ('%.2f', $goldt_bid) .'</td><td>$'. sprintf ('%.2f',($goldt_ask * 1.15)).'</td></tr>
                   <tr><td>1/10oz.</td> <td>Canadian Maple Leaf gem/unc</td><td>$'.sprintf ('%.2f', ($goldt_bid * .98)) .'</td><td>$'.sprintf ('%.2f', ($goldt_ask * 1.15)).'</td></tr>
                   <tr><td>1/10oz.</td> <td>Canadian Maple Leaf gem/unc</td><td>$'. sprintf ('%.2f',$goldt_bid) .'</td><td>$'.sprintf ('%.2f', ($goldt_ask * 1.25)).'</td></tr>
                   
                   <tr><td>1.2057oz.</td> <td>Mexican Gold 50 Peso XF+ </td><td>$'.sprintf('%.2f',($gold_bid * 1.2057 * .98)).'</td><td>$'. sprintf ('%.2f',($gold_ask * 1.2057 * 1.03)).'</td></tr>
                  
                  <tr><td>0.9802oz.</td> <td>Austrian Gold Corona XF+</td><td>$'.sprintf('%.2f',($gold_bid * .9802 * .97)) .'</td><td>$'.sprintf ('%.2f', ($gold_ask * .9802 * 1.03)).'</td></tr>
                    <tr><td>0.4823oz.</td> <td>Mexican Gold Peso XF+</td><td>$'.sprintf('%.2f',($gold_bid * .4823 * .96)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .4823 * 1.03)).'</td></tr>
                    
                    <tr><td>0.443oz.</td> <td>Austrian Gold 4 Ducat XF+</td><td>$'.sprintf('%.2f',($gold_bid * .443 * .95)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .443 * 1.03)).'</td></tr>
                    <tr><td>0.2489oz.</td> <td>Russian Gold 10 Rouble XF+</td><td>$'.sprintf('%.2f',($gold_bid * .2489 * .94)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .2489 * 1.08)).'</td></tr>
                    <tr><td>0.2418oz.</td> <td>US $5 old Commem. BU/PF</td><td>$'.sprintf('%.2f',($gold_bid * .2418 * .93)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .2418 * 1.035)).'</td></tr>
                    <tr><td>0.2411oz.</td> <td>Mexican Gold 10 Peso XF+</td><td>$'.sprintf('%.2f',($gold_bid * .2411 * .93)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .2411 * 1.03)).'</td></tr>
                    <tr><td>0.2345oz.</td> <td>British Gold Sovereign XF+</td><td>$'.sprintf('%.2f',($gold_bid * .2345 * .96)) .'</td><td>$'.sprintf ('%.2f',($gold_ask * .2345 * 1.04)).'</td></tr>
                    <tr><td>0.2304oz.</td> <td>German Gold 20 Marks XF+</td><td>$'.sprintf('%.2f',($gold_bid * .2304 * .95)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .2304 * 1.07)).'</td></tr>
                     <tr><td>0.1867oz.</td> <td>French Gold 20 Francs XF+</td><td>$'.sprintf('%.2f',($gold_bid * .1867 * .91)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .1867 * 1.06)).'</td></tr>
                      <tr><td>0.1867oz.</td> <td>Italian Gold Lires XF+</td><td>$'.sprintf('%.2f',($gold_bid * .1867 * .91)).'</td><td>$'. sprintf ('%.2f',($gold_ask * .1867 * 1.06)).'</td></tr>
                    
                   
                   <tr><td>0.1867oz.</td> <td>Swiss Gold Francs XF+</td><td>$'.sprintf('%.2f',($gold_bid * .1867 * .91)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .1867 * 1.06)).'</td></tr>
                     <tr><td>0.1245oz.</td> <td>Russian Gold 5 Rouble XF+</td><td>$'.sprintf('%.2f',($gold_bid * .1245 * .91)).'</td><td>$'.sprintf ('%.2f', ($gold_ask * .1245 * 1.10)).'</td></tr>
                     <tr><td>0.1205oz.</td> <td>Mexican 5 Peso XF+</td><td>$'.sprintf('%.2f',($gold_bid * .1205 * .86)) .'</td><td>$'. sprintf ('%.2f',($gold_ask * .1205 * 1.05)).'</td></tr>
                        <tr><td>0.1106oz.</td> <td>Austrian Gold 1 Ducat XF+</td><td>$'.sprintf('%.2f',($gold_bid * .1106 * .91)) .'</td><td>$'. sprintf ('%.2f',($gold_ask* .1205 * 1.05)).'</td></tr>
                        <tr><td>0.0602oz.</td> <td>Mexican Gold 2.5 Peso XF+</td><td>$'.sprintf('%.2f',($gold_bid * .0602 * .86)) .'</td><td>$'.sprintf ('%.2f', ($gold_ask * .0602 * 1.09)).'</td></tr>
                        <tr><td>1/20oz.</td> <td>Chinese Panda Gold Commem. XF+</td><td>$'.sprintf('%.2f',($gold_bid * .05 )).'</td><td>$'.sprintf ('%.2f', ($gold_ask * .05 * 1.37)).'</td></tr>
                  <tr><td>.0482oz.</td> <td>Mexican Gold 2 Peso XF+</td><td>$'.sprintf('%.2f',($gold_bid * .0482 * .83 )).'</td><td>$'. sprintf ('%.2f',($gold_ask * .0482 * 1.08)).'</td></tr>
                  
                  
           
           
           
    
    
    
</table>
    
<h2>Silver</h2>

<p>NY Bid: $'.$nys_bid.' 
Ask: $'.$nys_ask.' </p>

<table>
   <thead>
       <tr>
           <th>Spot wt.</th><th>Name</th><th>Buy</th><th>Sell</th>
       </tr>
   </thead>
    <tr>
       <td>1oz.</td> <td>.999 Gen Round clear</td><td>$'. sprintf('%.2f',$silver_bid) .' </td><td>$'. sprintf('%.2f',($silver_ask + 1.50)).'</td></tr>
        <tr><td>1oz.</td> <td>.999 Gen Bar clear</td><td>$'. sprintf('%.2f',$silver_bid) .' </td><td>$'. sprintf('%.2f',($silver_ask + 1.50)).'</td></tr>
       <tr><td>5oz.</td> <td>.999 Gen Bar clear</td><td>$'. sprintf('%.2f',($silver_bid * 5 )) .' </td><td>$'. sprintf('%.2f',(($silver_ask + 2) * 5 )).'</td></tr>
       <tr><td>10oz.</td> <td>.999 Gen Bar clear</td><td>$'.sprintf('%.2f',($silver_bid * 10 )) .' </td><td>$'.sprintf('%.2f', (($silver_ask + 2) * 10 )).'</td></tr>
       <tr><td>100oz.</td> <td>.999 Bar clear</td><td>$'. sprintf('%.2f',($silver_bid - 1 ) * 100) .' </td><td>$'.sprintf('%.2f', (($silver_ask + 1.5) * 100 )).'</td></tr>
       
         <tr><td>1oz.</td> <td>.999 ASE BU</td><td>$'. sprintf('%.2f',($silver_bid + 1.5 )) .' </td><td>$'. sprintf('%.2f',($silver_ask + 3.5 )).'</td></tr>
         
        
         <tr><td>1oz.</td> <td>.999 ASE spotted</td><td>$'. sprintf('%.2f',($silver_bid * .9) ) .' </td><td>$'. sprintf('%.2f',($silver_ask + 3 )).'</td></tr>
          <tr><td>.715oz.</td> <td>90% pre-65 D/Q/H Good+ per $1 face </td><td>$'. sprintf('%.2f',($silver_bid * .715)).' </td><td>$'. sprintf('%.2f',(($silver_ask * .715) * 1.14 )).'</td></tr>
          <tr><td>.2958oz.</td> <td>40% Ken. Halves 1965-69 per $1 face</td><td>$'.sprintf('%.2f',( ($silver_bid * .2958) * .75 )) .' </td><td>$'. sprintf('%.2f',(($silver_ask * .2958 ) * 1.30)).'</td></tr>
          <tr><td>.7734oz.</td> <td>Morgan & Peace AG/GD</td><td>$16 </td><td>$21</td></tr>
          <tr><td>.7734oz.</td> <td>Morgan & Peace VG+</td><td>$18 </td><td>$23</td></tr>
            
        
        
            
            <tr><td>.0562oz.</td> <td>Wartime silver nickels per coin</td><td>$'. sprintf('%.2f',(($silver_bid * .0562) * .5)).' </td><td>$'. sprintf('%.2f', (($silver_ask * .0562) * 1.05 )).'</td></tr>
             
             <tr><td>.6oz.</td> <td>80% Can. D/Q/H pre-67 $1 face</td><td>$'.  sprintf('%.2f',(($silver_bid * .6) * .8)).' </td><td>$'.  sprintf('%.2f', (($silver_ask * .6) * 1.15)).'</td></tr>
              <tr><td>1oz.</td> <td>.999 Can. maple leaf BU</td><td>$'. sprintf('%.2f', ($silver_bid + 1)).' </td><td>$'.  sprintf('%.2f',($silver_ask + 3)).'</td></tr>
              <tr><td>1oz.</td> <td>.999 Chinese Panda BU</td><td>$'.  sprintf('%.2f',($silver_bid + 1)).' </td><td> Quote</td></tr>
              <tr><td>1oz.</td> <td>.999Austrian Phil.</td><td>$'.  sprintf('%.2f',$silver_bid ).' </td><td>$'.  sprintf('%.2f',($silver_ask + 3)) .'</td></tr>
              <tr><td>1oz.</td> <td>.999 Australia Panda/Koala</td><td>$'.  sprintf('%.2f',($silver_bid + 1)).' </td><td>Quote</td></tr>
           
                  
           
           
           
    
    
    
</table>'    
  ;
?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>