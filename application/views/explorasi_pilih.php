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
		<?php $this->load->view('sijon/footer') ?>
	</footer> <!-- External JS -->
	<?php $this->load->view('sijon/js') ?>

	<!-- Main JS -->
	<script src="<?php echo base_url('js/app.min.js') ?>"></script>
</body>

</html>
