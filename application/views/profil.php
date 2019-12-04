<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('sijon/head.php') ?>
	<link rel="stylesheet" href="<?php echo base_url('css/profil.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/navbar.css') ?>">
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
	<div class="jumbotron jumbotron-single d-flex align-items-center"
		style="background-image: url(<?php echo base_url('img/background.jpg') ?>)">
		<div class="container text-center">
			<h1 class="display-2 mb-4">Profilmu</h1>
		</div>
	</div>
	<!-- Reservation Section -->
	<section id="reservation" class="bg-white section-content">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0" data-aos="fade-right">
					<form method="post" action="<?php echo site_url('registers/update') ?>"
						enctype="multipart/form-data">
						<div class="bg-white p-5 shadow">
							<div class="heading-section text-center">
								<h2 class="mb-4">
									Biodata
								</h2>
							</div>
							<div class="row">
								<div class="col-md-12 form-group">
									<div class="col-md-12 text-center">
										<img id="gambar_" src="<?php echo base_url('upload/user/'.$user[0]->Image) ?>"
											alt=""><br><br>
										<div class="avartar-picker">
											<input type="file" name="gambar" id="gambar-avatar" class="inputfile"
												onchange="readURL(this); show_btn()" />
											<label for="gambar-avatar">
												<i class="fa fa-camera"></i>
												<span>Edit Foto</span>
											</label>
											<input type="hidden" name="old_image"
												value="<?php echo $user[0]->Image ?>" />
										</div>
									</div>
								</div><br>
								<div class="col-md-12 form-group">
									<label for="name">Nama Lengkap</label>
									<input type="text disabled" class="form-control" id="name" name="name"
										value="<?php echo $user[0]->nama_lengkap ?>" readonly="">
								</div>
								<div class="col-md-12 form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email"
										value="<?php echo $profil[0]->email ?>" readonly="">
								</div>
								<div class="col-md-12 form-group">
									<label for="sekolah">Sekolah</label>
									<input type="text" class="form-control" id="sekolah" name="sekolah"
										value="<?php echo $profil[0]->sekolah ?>" readonly="">
								</div>
								<div class="col-md-12 form-group">
									<label for="jurusan_pertama">Jurusan Pertama</label>
									<select
										class="form-control <?php echo form_error('jurusan_pertama') ? 'is-invalid':'' ?>"
										name="jurusan_pertama" onchange="show_btn()">
										<?php foreach($jurusan as $j) { ?>
										<option value="<?php echo $j->jurusan ?>"
											<?php if ($profil[0]->jurusan_pertama == $j->jurusan) { ?> selected
											<?php } ?>><?php echo $j->jurusan ?></option>
										<?php } ?>
									</select>
									<div class="invalid-feedback">
										<?php echo form_error('jurusan_pertama') ?>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<label for="jurusan_kedua">Jurusan Kedua</label>
									<select
										class="form-control <?php echo form_error('jurusan_kedua') ? 'is-invalid':'' ?>"
										name="jurusan_kedua" onchange="show_btn()">
										<?php foreach($jurusan as $j) { ?>
										<option value="<?php echo $j->jurusan ?>"
											<?php if ($profil[0]->jurusan_kedua == $j->jurusan) { ?> selected
											<?php } ?>><?php echo $j->jurusan ?></option>
										<?php } ?>
									</select>
									<div class="invalid-feedback">
										<?php echo form_error('jurusan_kedua') ?>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<label for="kampus_pertama">Kampus Pertama</label>
									<input type="text"
										class="form-control <?php echo form_error('kampus_pertama') ? 'is-invalid':'' ?>"
										id="kampus_pertama" name="kampus_pertama"
										value="<?php echo $profil[0]->kampus_pertama ?>" oninput="show_btn()">
									<div class="invalid-feedback">
										<?php echo form_error('kampus_pertama') ?>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<label for="kampus_kedua">Kampus Kedua</label>
									<input type="text"
										class="form-control <?php echo form_error('kampus_kedua') ? 'is-invalid':'' ?>"
										id="kampus_kedua" name="kampus_kedua"
										value="<?php echo $profil[0]->kampus_kedua ?>" oninput="show_btn()">
									<div class="invalid-feedback">
										<?php echo form_error('kampus_kedua') ?>
									</div>
								</div>
							</div>
							<input id="save_btn" style="display: none;" type="submit" class="btn btn-primary btn-block"
								value="Save" />
						</div>
				</div>
				<div class="col-lg-4 offset-lg-1" data-aos="fade-left">
					<h2 class="mb-4">
						Bio
					</h2>
					<div class="form-group">
					    <textarea class="form-control" id="bio" name="bio" oninput="show_btn()"><?php echo $profil[0]->bio ?></textarea><br>
					</div>
					</form>
					<h2 class="mb-4">
						Pilihan Jurusanku
					</h2>
					<div class="progress mb-3">
						<div class="progress-bar" role="progressbar"
							style="color: black; width: <?php echo $profil[0]->skor_pertama.'%;' ?>"
							aria-valuenow="<?php echo $profil[0]->skor_pertama ?>" aria-valuemin="0"
							aria-valuemax="100">
							<?php echo $profil[0]->jurusan_pertama.' '.$profil[0]->skor_pertama.'%' ?></div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar"
							style="color: black; width: <?php echo $profil[0]->skor_kedua.'%;' ?>"
							aria-valuenow="<?php echo $profil[0]->skor_kedua ?>" aria-valuemin="0" aria-valuemax="100">
							<?php echo $profil[0]->jurusan_kedua.' '.$profil[0]->skor_kedua.'%' ?></div>
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
	<script src="<?php echo base_url('js/profil.js') ?>"></script>

</body>

</html>