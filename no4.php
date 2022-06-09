<?php
require 'navbar.php';


echo 'Buat deret bilangan fibonacci (angka 1-100)';
echo '<br>';

$f = [];

  for ($i = 0; $i <=100; $i++) {
    if ($i < 2) {
      $b = $i;
    } else {
      $b = $f[$i - 1] + $f[$i - 2];
    }

    if ($b <= 100) {
   	 	array_push($f, $b);
    	
    }else{
    	break;
    }
  }

   	 	unset($f[0]	);
  foreach ($f as $key => $value) {
  	echo $value.'<br>';
  }


?>