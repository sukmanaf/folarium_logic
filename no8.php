<?php 
require 'navbar.php';

echo 'Array arr adalah sebuah list berisikan nama – nama kota di Indonesia dengan
representasi sebagai berikut :
$arr = array(“Jakarta”, “Yogyakarta”, ”Bandung”, ”Bogor”, “Semarang”);';

if(@$_POST){
	
	$arr = array('Jakarta', 'Yogyakarta', 'Bandung', 'Bogor', 'Semarang');
	$hasil = false;
	foreach ($arr as $key => $value) {
		if($_POST['val'] == $value){
				$hasil = true;
		}
	}
}


 ?>

<form action="no8.php" method="POST">
		<input type="text" name="val" value="<?php echo @$_POST['val'] ?>" />
		<button type="submit" name="submit" value="submit">Hasil</button>

</form>

<?php echo @$hasil; ?>
