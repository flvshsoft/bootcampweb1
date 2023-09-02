<?php 



	echo "<p>Hello World 1</p>";
	echo "<p>Hello World 2</p>";
	echo "<p>Hello World 3</p>";
	echo "<p>Hello World</p>";
	echo "<p>Hello World</p>";

	echo "<hr>";

	// ==========================================
	echo "<h1>Array</h1>";
	$siswa = ['bayu', 'dean', 'erick', 'faiz'];

	foreach ($siswa as $key => $value) {
		echo '<p>'.($key+1).' Hay, selamat datang '.$value.' di bootcamp php beginner yang di adakan oleh Flashsoft Indonesia.</p>';
	}


	echo "<hr>";

	// ==========================================

?>