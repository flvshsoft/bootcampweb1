<?php 
	echo "<h1>String</h1>";
	//deklarasi
	$siswa1 = "Bayu";
	$siswa2 = "Dean";
	$siswa3 = "Erick";
	$siswa4 = "Faiz";
	$siswa5 = "Rahmad";

	//pemanggilan
	echo $siswa1."<br>";
	echo $siswa2."<br>";
	echo $siswa3."<br>";
	echo $siswa4."<br>";
	echo $siswa5."<br>";

	//array
	echo "<h1>Array</h1>";
	$siswa = ['Bayu', 'Dean', 'Erick', 'Faiz', 'Rahmad'];
	echo $siswa[0]."<br>";
	echo $siswa[1]."<br>";
	echo $siswa[2]."<br>";
	echo $siswa[3]."<br>";
	echo $siswa[4]."<br>";
	
	print_r($siswa);
	echo "<br>";

	var_dump($siswa);

	echo "<h1>Array</h1>";
	foreach ($siswa as $key => $value) {
		echo $key." - ".$value."<br>";
	}
?>