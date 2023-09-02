<?php 
	$segitiga = [];
	//1
	$baru = [];
	$baru['alas'] = 10;
	$baru['tinggi'] = 5;
	$segitiga[] = $baru;
	//2
	$baru = [];
	$baru['alas'] = 10;
	$baru['tinggi'] = 7;
	$segitiga[] = $baru;
	//3
	$baru = [];
	$baru['alas'] = 5;
	$baru['tinggi'] = 8;
	$segitiga[] = $baru;

	echo "<h1>1. Luas Segitiga Dengan Array</h1>";
	$alas = $segitiga[0]['alas'];
	$tinggi = $segitiga[0]['tinggi'];
	$luas = 1 / 2 * $alas * $tinggi;
	echo "Alas = ".$alas."<br>";
	echo "Tinggi = ".$tinggi."<br>";
	echo "Luas = ".$luas;
	echo "<hr>";

	echo "<h1>2. Luas Segitiga Dengan Array</h1>";
	$alas = $segitiga[1]['alas'];
	$tinggi = $segitiga[1]['tinggi'];
	$luas = 1 / 2 * $alas * $tinggi;
	echo "Alas = ".$alas."<br>";
	echo "Tinggi = ".$tinggi."<br>";
	echo "Luas = ".$luas;
	echo "<hr>";

	echo "<h1>3. Luas Segitiga Dengan Array</h1>";
	$alas = $segitiga[2]['alas'];
	$tinggi = $segitiga[2]['tinggi'];
	$luas = 1 / 2 * $alas * $tinggi;
	echo "Alas = ".$alas."<br>";
	echo "Tinggi = ".$tinggi."<br>";
	echo "Luas = ".$luas;
	echo "<hr>";
?>