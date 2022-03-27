<?php
require 'navbar.php';

echo 'Buat deret bilangan genap (angka 1-100)';
echo '<br>';

for ($i=1;$i<= 100;$i++) {
if ($i % 2 == 0) {
 echo $i.'<br>' ;
 }
}


?>