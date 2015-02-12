<?php

$content = file_get_contents('http://www.kitco.com/texten/texten.html');
  $content = explode("\n",$content);

  for($i=39; $i<=42; $i++) {
    $thisLine = explode(' ',preg_replace('/(?:\s\s+|\n|\t)/', ' ',$content[$i]),4);
    //$prices[$thisLine[1]] = '$'.$thisLine[2];
      $prices[$thisLine[1]] = $thisLine[2];
  }
 $gold = $prices['Gold'];
  $silver = $prices['Silver'];

$goldhalf = $gold / 2; 
$silverhalf = $silver / 2; 

$goldq = $gold / 4; 
$silverq = $silver / 4; 

$goldt = $gold / 10; 
$silvert = $silver / 10;



echo '
<table>
   <thead>
       <tr>
           <th>Spot wt.</th><th>Name</th><th>Buy</th><th>Sell</th>
       </tr>
   </thead>
    <tr>
       <td>1oz.</td> <td>American Eagle gem/unc</td><td>'.echo ($gold + 10).' </td><td>'.echo ($gold + 60).'</td></tr>
            <tr><td>1oz.</td> <td>American Buffalo gem/unc</td><td>'. echo ($gold + 10).' </td><td>'. echo ($gold + 60).'</td></tr>
             <tr> <td>1oz.</td> <td>Canadian Maple Leaf gem/unc .9999</td><td>'. echo $gold .'</td><td>'.echo ($gold + 50).'</td></tr>
              <tr> <td>1oz.</td> <td>Canadian Maple Leaf gem/unc .999</td><td>'. echo ($gold - 25) .'</td><td>'.echo ($gold + 45).'</td></tr>
               <tr><td>1oz.</td> <td>Krugerrand</td><td>'. echo echo ($gold - 25).'</td><td>'.echo ($gold + 45).'</td></tr>
               <tr><td>1oz.</td> <td>Chinese Panda</td><td>'. echo $gold.'</td><td>'.echo ($gold + 60).'</td></tr>
               <tr> <td>1oz.</td> <td>Austrian Philharmonic gem/unc</td><td>'. echo $gold.'</td><td>'.echo ($gold + 60).'</td></tr>
                <tr><td>1oz.</td> <td>Australian Kangaroo gem/unc</td><td>'. echo $gold.'</td><td>'.echo ($gold + 60).'</td></tr>
                <tr><td>per oz.</td> <td>generic/spotted/stainedc</td><td>'. echo ($gold - 40).'</td><td>'.echo ($gold + 25).'</td></tr>
               
                <tr><td>1/2oz.</td> <td>American Eagle gem/unc</td><td>'. echo $goldhalf .'</td><td>'.echo ($goldhalf * 1.09).'</td></tr>
                 <tr><td>1/2oz.</td> <td>Canadian Maple Leaf gem/unc</td><td>'. echo $goldhalf .'</td><td>'.echo ($goldhalf * 1.08).'</td></tr>
                  <tr><td>1/2oz.</td> <td>Krugerrand gem/unc</td><td>'. echo $goldhalf .'</td><td>'.echo ($goldhalf * 1.07).'</td></tr>
                  <tr><td>1/2oz.</td> <td>Chinese Panda gem/unc</td><td>'. echo $goldhalf .'</td><td>'.echo ($goldhalf * 1.08).'</td></tr>
                  <tr><td>1/2oz.</td> <td>First Spouse gem/unc</td><td>'. echo $goldhalf .'</td><td>'.echo ($goldhalf * 1.09).'</td></tr>
           
           
           
    
    
    
</table>

';
?>