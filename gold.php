<?php

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

echo 'Gold is '. $prices['Gold'];
echo '<br />';
echo 'Silver is '. ($prices['Silver']);

?>