<?php  
	echo "<hr>";
	$no = 1;
	echo $no.'<br>';
	$no = 2;
	echo $no.'<br>';
	$no = $no + 1;
	echo $no.'<br>';
	$no += 1;
	echo $no.'<br>';
	$no++;
	echo $no.'<br>';
	$no++;
	echo $no.'<br>';
	echo "<hr>";
	

	$no = 1;
	while ($no < 5) {
		echo $no.'<br>';
		$no++;
	}
	echo "<hr>";



	$no = 1;
	do{
		echo $no.'<br>';
		$no++;
	}while ($no < 5);
?>