<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootcamp Fs</title>
</head>
<body>
	<h1>Function</h1>
	<p>Ini adalah halaman function atau method</p>
	<?php 
		$alas = 6;
		$tinggi = 4;
	?>
	<hr>
	<h4>Rumus Luas Segitiga 1</h4>
	<p>Alas : <?= $alas ?></p>
	<p>Tinggi : <?php echo $tinggi ?></p>
	<p>Luas : Alas x Tinggi</p>
	<p>Luas : <?= ((1 / 2) * $alas) * $tinggi  ?></p>
	<hr>

	<h4>Rumus Luas Segitiga 2</h4>
	<p>Alas : <?= $alas ?></p>
	<p>Tinggi : <?php echo $tinggi ?></p>
	<p>Luas : Alas x Tinggi</p>
	<p>Luas : <?= segitiga($alas, $tinggi)  ?></p>
	<hr>






	<?php 
		function segitiga($alas, $tinggi){
			$luas = 1/2 * $alas * $tinggi;
			return $luas;
		}
	?>

</body>
</html>