<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('sijon/head') ?>

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet"
		href="<?php echo base_url('fonts/material-design-iconic-font/css/material-design-iconic-font.css') ?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/register.css') ?>">
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
		<?php $this->load->view("sijon/header.php") ?>
	</nav>

	<div id="side-nav" class="sidenav">
		<?php $this->load->view("sijon/sidenav.php") ?>
	</div>

	<div id="side-search" class="sidenav">
		<?php $this->load->view("sijon/sidesearch.php") ?>
	</div>

	<div class="wrapper" style="margin-bottom: 100px; margin-top: 100px;">
		<form action="<?php echo site_url('registers') ?>" method="post" id="hitung" enctype="multipart/form-data">
			<div id="wizard">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="form-header">
						<div class="avartar">
							<a href="#">
								<img id="avatar" width="146px" height="146px"
									src="<?php echo base_url('img/avartar.png') ?>" alt="">
							</a>
							<div class="avartar-picker">
								<input type="file" name="gambar" id="gambar-avatar" class="inputfile"
									onchange="readURL(this)" />
								<label for="gambar-avatar">
									<i class="fa fa-camera"></i>
									<span>Pilih Foto</span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-holder active">
								<input type="text" name="first_name" placeholder="Nama Pertama"
									class="form-control <?php echo form_error('first_name') ? 'is-invalid':'' ?>">
								<div class="invalid-feedback">
									<?php echo form_error('first_name') ?>
								</div>
							</div>
							<div class="form-holder">
								<input type="text" name="last_name" placeholder="Nama Akhir"
									class="form-control <?php echo form_error('last_name') ? 'is-invalid':'' ?>">
								<div class="invalid-feedback">
									<?php echo form_error('last_name') ?>
								</div>
							</div>
							<div class="form-holder">
								<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Laki-laki"
										checked>Laki-laki</label>
								<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Perempuan">
									Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-holder">
						<input type="text" name="username" placeholder="Username"
							class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>">
						<div class="invalid-feedback">
							<?php echo form_error('username') ?>
						</div>
					</div>
					<div class="form-holder">
						<input type="email" name="email" placeholder="Email"
							class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>">
						<div class="invalid-feedback">
							<?php echo form_error('email') ?>
						</div>
					</div>
					<div class="form-holder">
						<input type="password" name="password" placeholder="buat password"
							class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>">
						<div class="invalid-feedback">
							<?php echo form_error('password') ?>
						</div>
					</div>
				</section>

				<!-- SECTION 2 -->
				<h4></h4>
				<section>
					<div class="grid">
						<div class="row">
							<a href="#" class="grid-item"
								style="background-image: url(<?php echo base_url('img/tour-guide-bg.jpg') ?>);">
								<label class="radio"><input type="radio" name="sekolah" value="SMK" checked>
									<div class="inner">
										<img src="<?php echo base_url('img/tour-guide.png') ?>" alt="">
										<span>SMK</span>
									</div>
							</a>
							<a href="#" class="grid-item"
								style="background-image: url(<?php echo base_url('img/tour-guide-bg.jpg') ?>);">
								<label class="radio"><input type="radio" name="sekolah" value="SMA">
									<div class="inner">
										<img src="<?php echo base_url('img/tour-guide.png') ?>" alt="">
										<span>SMA</span>
									</div>
							</a>
							<a href="#" class="grid-item"
								style="background-image: url(<?php echo base_url('img/tour-guide-bg.jpg') ?>);">
								<label class="radio"><input type="radio" name="sekolah" value="MA">
									<div class="inner">
										<img src="<?php echo base_url('img/tour-guide.png') ?>" alt="">
										<span>MA</span>
									</div>
							</a>
						</div>
					</div>
				</section>

				<!-- SECTION 3 -->
				<h4></h4>
				<section>
					<div class="form-row">
						<div class="form-holder">
							<select style="width: 100%;" class="form-control <?php echo form_error('jurusan_pertama') ? 'is-invalid':'' ?>"
								name="jurusan_pertama">
								<option value="">Pilih Jurusan Pertama</option>
								<?php foreach($jurusan as $j) { ?>
									<option value="<?php echo $j->jurusan ?>">
										<?php echo $j->jurusan ?>
									</option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('jurusan_pertama') ?>
							</div>
						</div>
						<div class="form-holder">
							<select style="width: 100%;" class="form-control <?php echo form_error('jurusan_kedua') ? 'is-invalid':'' ?>"
								name="jurusan_kedua">
								<option value="">Pilih Jurusan Pertama</option>
								<?php foreach($jurusan as $j) { ?>
									<option value="<?php echo $j->jurusan ?>">
										<?php echo $j->jurusan ?>
									</option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('jurusan_kedua') ?>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-holder">
							<input type="text" name="kampus_pertama" placeholder="Pilihan Kampus Pertama"
								class="form-control <?php echo form_error('kampus_pertama') ? 'is-invalid':'' ?>">
							<div class="invalid-feedback">
								<?php echo form_error('kampus_pertama') ?>
							</div>
						</div>
						<div class="form-holder">
							<input type="text" name="kampus_kedua" placeholder="Pilihan Kampus Kedua"
								class="form-control <?php echo form_error('kampus_kedua') ? 'is-invalid':'' ?>">
							<div class="invalid-feedback">
								<?php echo form_error('kampus_kedua') ?>
							</div>
						</div>
				</section>
			</div>
		</form>
	</div>

	<footer class="mastfoot my-3" style="color: white;">
		<?php $this->load->view("sijon/footer.php") ?>
	</footer>

	<?php $this->load->view("sijon/js.php") ?>

	<script type="text/javascript">
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#avatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

	</script>

	<!-- JQUERY STEP -->
	<script src="<?php echo base_url('js/jquery.steps.js') ?>"></script>

	<script src="<?php echo base_url('js/main.js') ?>"></script>
	<!-- Template created and distributed by Colorlib -->
</body>

</html>
