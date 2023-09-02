<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootcamp Fs</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Function</h1>
		<p>Ini adalah halaman function atau method</p>
		
		<?php 
			$no = 1;
			$produk = [];
			// insert
			$temp = [];
			$temp['nama'] = 'Ayam Bakar';
			$temp['tanggal'] = '20-10-2021';
			$produk[] = $temp;
			// insert
			$temp = [];
			$temp['nama'] = 'Ayam Penyet';
			$temp['tanggal'] = '21-10-2021';
			$produk[] = $temp;
			// insert
			$temp = [];
			$temp['nama'] = 'Dendeng';
			$temp['tanggal'] = '22-10-2021';
			$produk[] = $temp;
			// insert
			$temp = [];
			$temp['nama'] = 'Mie Aceh';
			$temp['tanggal'] = '05-11-2021';
			$produk[] = $temp;
		?>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Tanggal Post</th>
					<th>Tanggal Post</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($produk as $key => $value): ?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?= $value['nama'] ?></td>
						<td><?= $value['tanggal'] ?></td>
						<td><?= ubahTanggal($value['tanggal']) ?></td>
					</tr>
					<?php $no++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>

		<h4>Tabel Baru</h4>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Tanggal Post</th>
					<th>Tanggal Post</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($produk as $key => $value){ 
						if(isset($value)){
				?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['nama'] ?></td>
								<td><?= $value['tanggal'] ?></td>
								<td><?= ubahTanggal($value['tanggal']) ?></td>
							</tr>
				<?php 
							$no++;
						}
					} 
				?>
			</tbody>
		</table>






		<?php 
			function ubahTanggal($data){
				$tgl = substr($data,0, 2);
				$bulan = substr($data,3, 2);
				$tahun = substr($data,6, 4);

				switch ($bulan) {
					case '1':
						$bulan =  "Januari";
						break;
					case '2':
						$bulan =  "Februari";
						break;
					case '3':
						$bulan =  "Maret";
						break;
					case '4':
						$bulan =  "Januari";
						break;
					case '5':
						$bulan =  "Januari";
						break;
					case '6':
						$bulan =  "Januari";
						break;
					case '7':
						$bulan =  "Januari";
						break;
					case '8':
						$bulan =  "Januari";
						break;
					case '9':
						$bulan =  "Januari";
						break;
					case '10':
						$bulan =  "Oktober";
						break;
					case '11':
						$bulan =  "November";
						break;
					case '12':
						$bulan =  "Januari";
						break;
					
					default:
						$bulan =  "-";
						break;
				}
				return $tgl.' '.$bulan.' '.$tahun;
			}
		?>
	</div>

</body>
</html>