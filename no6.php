<?php 
require 'navbar.php';

echo 'Tampilkan 5 angka random dari 1-100';


	for ($i=1;$i<=5;$i++) {
		$hasil='';
		$lipat='';
		$val = rand(1,100);
		if($val <= 60 ){
			$hasil = $val.' Kurang';
		}elseif($val > 60 && $val <= 70 ){
			$hasil = $val.' Cukup';
		}elseif($val > 70 && $val <= 80 ){
			$hasil = $val.' Baik';
		}elseif($val > 60 ){
			$hasil = $val.' Luar Biasa';
		}

		echo $hasil.'<br>';
		echo 'Kelipatan 5 dari '.$val.' = ';
		$a=$val;

		for($j=1;$j<=5;$j++){
				echo $a.',';
				$a=$a * 3;
		
		}
		echo "<br>";
	
	    }
	
 ?>