<form>
	<input type="text" name="bulan" placeholder="Masukkan bulan" autofocus="" required="">
	<input type="text" name="tahun" placeholder="Masukkan tahun" required="">
	<input type="submit" value="Proses">
</form>

<?php 

	if(isset($_GET['bulan'])){
		$bulan = $_GET['bulan'];
		$tahun = $_GET['tahun'];
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

		echo ' '.$tahun;
		echo "<hr>";
	}
?>