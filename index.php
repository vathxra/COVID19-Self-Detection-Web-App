<!DOCTYPE html>
<html lang="id">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/logo.png">

    <title>Sistem Deteksi Dini COVID-19 Berbasis Web | CoviCare Web</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbar.php');
	?>
	
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg-x3.jpg" alt="First slide" width="1700" height="1000">
            <div class="container">
              <div class="carousel-caption text" style="margin: 100px">
                <h1>Selamat Datang</h1>
                <p>Apakah Anda mengalami gejala COVID-19? 
                <br>Segera lakukan deteksi <i>pre-rapid test</i> dengan Sistem Deteksi Dini COVID-19 disini!</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- Carousel -->

      <!---------------- MODAL ----------------->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Masukkan Identitas Anda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="Masukkan nama Anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="Isikan umur Anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Lanjut</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <h1 class="text-center mb-5">MENU</h1>

  <div class="card-deck container mx-auto">
    <div class="card">
      <div class="card-body">
        <div style="text-align: center">
        <i class="fas fa-stethoscope w3-jumbo" style="margin: 25px"></i>
        <h5 class="card-title">Cek Indikasi</h5>
        <p class="card-text">Mulai test indikasi positif/negatif COVID-19 disini</p>
        <p><button type="button" class="btn btn-lg btn-info" style="margin: 25px" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div style="text-align: center">
        <i class="far fa-hospital w3-jumbo" style="margin: 25px"></i>
        <h5 class="card-title">Rumah Sakit Rujukan</h5>
        <p class="card-text">Cari lokasi rumah sakit rujukan COVID-19 terdekat disini <b>*Khusus Jakarta</b> </p>
        <a type="button" class="btn btn-lg btn-info" href="map.php" style="margin: 25px">Lihat</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div style="text-align: center">
        <i class="far fa-newspaper w3-jumbo" style="margin: 25px"></i>
        <h5 class="card-title">Kiat-Kiat Di Masa Pandemi</h5>
        <p class="card-text">Ketahui kiat-kiat dalam penanganan yang dapat dilakukan selama masa pandemi disini</p>
        <a type="button" class="btn btn-lg btn-info" href="tips.php" style="margin: 25px">Tampilkan</a>
        </div>
      </div>
    </div>
  </div>

    </main>

  	<?php
		include ('footer.php');
	  ?>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>