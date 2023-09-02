<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fs</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container">
		<h1>Bootcamp</h1>
		<?php $siswa = ['bayu', 'dean', 'erick', 'faiz', 'yura']; ?>

		<?php foreach ($siswa as $key => $value): ?>
			<div class="">
				<div class="card col-3" style="float:left">
				  <img class="card-img-top" src="https://i.pinimg.com/564x/de/ec/0f/deec0feb2620d1cc4e06927b40a3630a.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $value ?></h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Absen</a>
				  </div>
				</div>
			</div>
		<?php endforeach; ?>
		
	</div>
</body>
</html>