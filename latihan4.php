<!DOCTYPE html>
<html>
<head>
	<title>Php Nasi Goreng</title>
</head>
<body>
<h1>Belajar PHP (IF/ELSE)</h1>
<form method="post">
	Uang kita = <input type="text" name="uang" value=" "><br>
	Harga nasi goreng = <input type="text" name="harga" value=" "><br>
	<?php
	$uang=@$_POST["uang"];
	$harga=@$_POST["harga"];
	if (($uang && $harga) == ""){
		echo "<br/> Silahkan isi uang dan harga!";
	}elseif($uang < $harga) {
		$kurang = $harga - $uang;
		echo "<br/>Uang anda kurang <b> Rp. $kurang</b>!";
	}else{
		$lebih = $uang - $harga;
		echo "<br/> Uang anda lebihan <b> Rp. $lebih</b>";
	}
	?>
	<br><input type="submit" value="Proses">
</form>
</body>
</html>