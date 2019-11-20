<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('sijon/head.php') ?>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
		<?php $this->load->view('sijon/sidenav.php') ?>
	</div>
	<div id="side-search" class="sidenav">
		<?php $this->load->view('sijon/sidesearch.php') ?>
	</div>
	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
		<?php $this->load->view('sijon/header.php') ?>
	</nav>

	<div id="side-nav" class="sidenav">
		<?php $this->load->view('sijon/sidenav.php') ?>
	</div>
	<div id="side-search" class="sidenav">
		<?php $this->load->view('sijon/sidesearch.php') ?>
	</div>
	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(..img/background.jpg)">
		<div class="container text-center">
			<h1 class="display-2 mb-4">Profilmu</h1>
		</div>
	</div>
	<!-- Reservation Section -->
	<section id="reservation" class="bg-white section-content">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0" data-aos="fade-right">
					<div class="bg-white p-5 shadow">
						<div class="heading-section text-center">
							<h2 class="mb-4">
								Biodata
							</h2>
						</div>
						<form method="post" name="contact-us" action="">
							<div class="row">
								<div class="col-md-12 form-group">
									<div class="col-md-12 text-center">
										<img src="<?php echo base_url('upload/user/'.$user[0]->Image) ?>" alt=""><br><br>
										<button class="btn btn-primary btn-shadow btn-lg" type="submit"
											name="submit">Edit Foto</button>
									</div>
								</div><br>
								<div class="col-md-12 form-group">
									<input type="text disabled" class="form-control" id="name" name="name"
										placeholder="<?php echo $user[0]->nama_lengkap ?>" readonly="">
								</div>
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin"
										placeholder="<?php echo $profil[0]->jenis_kelamin ?>" readonly="">
								</div>
								<div class="col-md-12 form-group">
									<input type="number" class="form-control" id="email" name="email"
										placeholder="<?php echo $profil[0]->email ?>" readonly="">
								</div>
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="sekolah" name="sekolah"
										placeholder="<?php echo $profil[0]->sekolah ?>" readonly="">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1" data-aos="fade-left">
					<h2 class="mb-4">
						Bio
					</h2>
					<p class="mb-4"><?php echo $profil[0]->bio ?></p><br>

					<h2 class="mb-4">
						Pilihan Jurusanku
					</h2>
					<div class="progress mb-3">
						<div class="progress-bar" role="progressbar" style="color: black; width: <?php echo $profil[0]->skor_pertama.'%;' ?>" aria-valuenow="<?php echo $profil[0]->skor_pertama ?>"
							aria-valuemin="0" aria-valuemax="100"><?php echo $profil[0]->jurusan_pertama.' '.$profil[0]->skor_pertama.'%' ?></div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="color: black; width: <?php echo $profil[0]->skor_kedua.'%;' ?>" aria-valuenow="<?php echo $profil[0]->skor_kedua ?>"
							aria-valuemin="0" aria-valuemax="100"><?php echo $profil[0]->jurusan_kedua.' '.$profil[0]->skor_kedua.'%' ?></div>
					</div> <br><br>

					<ul class="list-inline py-2">
						<li class="list-inline-item text-center">
							<span class="lnr fs-40 lnr-rocket"></span>
							<p>Semangat Belajar</p>
						</li>
						<li class="list-inline-item text-center">
							<span class="lnr fs-40 lnr-magic-wand"></span>
							<p>Explore Kampus</p>
						</li>
						<li class="list-inline-item text-center">
							<span class="lnr fs-40 lnr-cog"></span>
							<p>Cek Simulasi</p>
						</li>
					</ul>

					<a href="#" class="btn btn-link p-0">
						<span>CETAK HASIL</span>
						<span class="lnr lnr-arrow-right"></span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Features Section-->
	<footer class="mastfoot my-3">
		<?php $this->load->view('sijon/footer.php') ?>
	</footer>

	<!-- External JS -->
	<?php $this->load->view('sijon/js.php') ?>

</body>

</html>
