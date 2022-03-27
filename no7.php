<?php
require 'navbar.php';


echo 'Tampilkan deret angka kelipatan 3 (angka 1-100)<br> ';
echo '<br>';

$a=3;
for($i=1;$i<=100;$i++){
	
	if($a <= 100){
		echo $a;
		$a=$a * 3;
	}else{
		break;

	}
	echo "<br>";
}




?>