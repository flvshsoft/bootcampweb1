<?php 
	// ==========================================
	
	$bulan = 2;
	echo 'Bulan <br>';
	echo "bulan = $bulan<br>";
	if($bulan == 1){
		echo "Januari";
	}elseif($bulan == 2){
		echo "Februari";
	}elseif($bulan == 3){
		echo "Maret";
	}else{
		echo "Oktober";
	}
	echo "<hr>";

	// ==========================================
	
	$bulan = 10;
	echo 'Bulan <br>';
	echo "bulan = $bulan<br>";
	switch ($bulan) {
		case '1':
			echo "Januari";
			break;
		case '2':
			echo "Februari";
			break;
		case '3':
			echo "Maret";
			break;
		case '4':
			echo "Januari";
			break;
		case '5':
			echo "Januari";
			break;
		case '6':
			echo "Januari";
			break;
		case '7':
			echo "Januari";
			break;
		case '8':
			echo "Januari";
			break;
		case '9':
			echo "Januari";
			break;
		case '10':
			echo "Oktober";
			break;
		case '11':
			echo "November";
			break;
		case '12':
			echo "Januari";
			break;
		
		default:
			echo "-";
			break;
	}
	echo "<hr>";
?>