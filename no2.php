<?php
require 'navbar.php';

echo 'Buat deret bilangan ganjil (angka 1-100)';
echo '<br>';

for ($i=1;$i<= 100;$i++) {
if ($i % 2 == 1) {
 echo $i.'<br>' ;
 }
}
?>