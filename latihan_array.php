<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
</head>
<body>
	<?php
	tampil();
	$arraySaya = array('tahun' => 1993, 'nama' => 'renza', 'tempat' => 'bengkulu' );
	echo $arraySaya['tahun'];
	echo "<br>";
	echo $arraySaya['nama'];
	echo "<br>";
	echo $arraySaya['tempat'];
	echo "<br>";

	$lemari = array(
		array('baju', 'celana'),
		array('laptop', 'komputer'),
		array('buku', 'pulpen'));
	echo $lemari[2][0];
	echo "<br>";
	echo $lemari[2][1]; echo " "; echo$lemari[2][0];
	echo "<br>";
	echo $lemari[1][0];
	echo "<br>";
	echo $lemari[1][1];
 ?>

<?php  
function tampil()
	{
		echo " Hello World";
		echo "<br> Saya admin";
	}
function tampilNilai($apa)
	{
		echo"Nilai adalah :". $apa;
	}
function perkalian($a,$b)
	{
		$total = $a * $b;
		return $total;
	}

	$nilai1 =7;
	$nilai2 =2;

	$nilai_return = perkalian($nilai1,$nilai2);
echo"<br>";
$apa = 12;
$nilai_ku = 4;
tampilNilai($nilai_ku);
echo"<br>";
tampilNilai($apa);
echo"<br>";

tampil();


echo"<br>";
echo "Nilai return adalah : " . $nilai_return;
?>

</body>
</html>