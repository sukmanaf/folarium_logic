<?php
require 'navbar.php';


echo 'Buat pola segitiga siku-siku, dan pola lainnya';


for($i=0;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo "*";	
	}
	echo "<br>";
}

echo "<br>";
for($a=0; $a<=5; $a++){
    for($b=5; $b>=$a; $b-=1){
        echo '&nbsp';
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}



?>