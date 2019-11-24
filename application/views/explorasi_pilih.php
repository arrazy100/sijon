<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('sijon/head') ?>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
        <?php $this->load->view('sijon/sidenav') ?>
	</div>

	<div id="side-search" class="sidenav">
        <?php $this->load->view('sijon/sidesearch') ?>
	</div>

	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
        <?php $this->load->view('sijon/header') ?>
	</nav>

	<div id="side-nav" class="sidenav">
        <?php $this->load->view('sijon/sidenav') ?>
	</div>

	<div id="side-search" class="sidenav">
        <?php $this->load->view('sijon/sidesearch') ?>
	</div>

	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/background.jpg)">
		<div class="container text-center">
			<h1 class="display-2 mb-4">Pilih Simulasi Jurusan</h1>
		</div>
	</div>
	<section id="who-we-are" class="bg-white">
		<div class="container">
			<div class="section-content">
				<div class="title-wrap" data-aos="fade-up">
					<h2 class="section-title">Simulasi Jurusan Kamu Semakin Dekat di <b> Sijon! </b></h2>
					<p class="section-sub-title"><br> Ayo selesaikan soal simulasimu sekarang!</p>
				</div>

				<div class="row text-center">
					<div class="col-md-4 col-sm-6" data-aos="fade-up">
						<img class="rounded-circle" src="<?php echo base_url('img/programming-bg.jpg') ?>" alt="Generic placeholder image"
							width="140" height="140"><br><br>
						<h5 class="mb-4"><?php echo $jurusan[0]->jurusan_pertama ?></h5>
						<p><a class="btn btn-link" href="<?php echo site_url('explorasi_soal') ?>?soal=<?php echo $pertama[0]->id ?>,1" role="button">Mulai</a></p>
					</div>
					<!-- /.col-md-4 col-sm-6  -->
                    <div class="col-md-4 col-sm-6" data-aos="fade-up">
						<img class="rounded-circle" src="<?php echo base_url('img/research-bg.jpg') ?>" alt="Generic placeholder image"
							width="140" height="140"><br><br>
						<h5 class="mb-4"><?php echo $jurusan[0]->jurusan_kedua ?></h5>
						<p><a class="btn btn-link" href="<?php echo site_url('explorasi_soal') ?>?soal=<?php echo $kedua[0]->id ?>,2" role="button">Mulai</a></p>
					</div>
					<!-- /.col-md-4 col-sm-6  -->
				</div>
				<!-- /.row -->
			</div>
		</div>
	</section>
	<!-- End of Blog Section -->
	<!-- Features Section-->

	<!-- End of Features Section-->
	</div>
	<footer class="mastfoot my-3">
		<div class="inner container">
			<div class="row">
				<div class="col-lg-4 col-md-12 d-flex align-items-center">

				</div>
				<div class="col-lg-4 col-md-12 d-flex align-items-center">
					<p class="mx-auto text-center mb-0">&copy; 2019 Roxy. Design by <a href="https://gettemplates.co"
							target="_blank">GetTemplates</a>.</p>
				</div>

				<div class="col-lg-4 col-md-12">
					<nav class="nav nav-mastfoot justify-content-center">
						<a class="nav-link" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="nav-link" href="#">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="nav-link" href="#">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="nav-link" href="#">
							<i class="fab fa-linkedin"></i>
						</a>
						<a class="nav-link" href="#">
							<i class="fab fa-youtube"></i>
						</a>
					</nav>
				</div>

			</div>
		</div>
	</footer> <!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>

</html>
