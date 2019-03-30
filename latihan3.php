<!DOCTYPE html>
<html>
<head>
	<title>Php Nasi Goreng</title>
</head>
<body>
<h1>Belajar PHP (IF/ELSE)</h1>
<?php
$uang = 9000;
$harga = 10000;
echo "Saya : Saya mau beli, uang saya cuma ada Rp. $uang Apa bisa?";
if ($uang < $harga) {
	$kurang = $harga- $uang;
	echo "<br/> Om nasi goreng : Ga bisa! Uang anda kurang <b> Rp. $kurang</b>!";
} else {
	echo "<br/> OM nasi goreng : Bisa kok!";
}
?>
</body>
</html>