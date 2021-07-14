<!DOCTYPE html>
<html lang="id">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/logo.png">

    <title>Peta Rumah Sakit Rujukan | CoviCare Web</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

</head>
<body>
	<?php
		include ('navbar.php');
	?>

    <div class="container-fluid" align="center">
    <h2 style="padding:30px"> Cari Rumah Sakit Rujukan COVID-19 Terdekat </h2>
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dq4XbU_-V8nPuofYxkfKlb6B9x71oBWQ" width="1200" height="480"></iframe>
    </div>
    <?php
		include ('footer.php');
	?>
</body>