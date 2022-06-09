<?php 
require 'navbar.php';
echo 'Buat deret bilangan prima (angka 1-100)';
echo '<br>';

for($a=1;$a<=100;$a++){ 
    $k=0;
    for($b=1;$b<=$a;$b++){ 
        if($a % $b == 0){
            $k++;
        }
    }
        if($k == 2){ 
        echo $a.'<br>';
        }
}
 

?>