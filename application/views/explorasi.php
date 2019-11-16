<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("sijon/head.php") ?>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
        <?php $this->load->view("sijon/sidenav.php") ?>
    </div>

	<div id="side-search" class="sidenav">
        <?php $this->load->view("sijon/sidesearch.php") ?>
    </div>

	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
        <?php $this->load->view("sijon/header.php") ?>
	</nav>

	<div id="side-nav" class="sidenav">
        <?php $this->load->view("sijon/sidenav.php") ?>
    </div>

	<div id="side-search" class="sidenav">
        <?php $this->load->view("sijon/sidesearch.php") ?>
    </div>

	<div class="jumbotron jumbotron-single d-flex align-items-center"
		style="background-image: url(../img/coba.png); background-repeat: no-repeat;">
		<div class="container text-center">
			<h1 class="display-2 mb-4">Explorasi</h1>
		</div>
	</div>

	<section id="who-we-are" class="bg-white">
		<div class="container">
			<div class="section-content">
				<div class="title-wrap" data-aos="fade-up">
					<h2 class="section-title">Selamat bergabung di <b> Sijon! </b></h2>
					<p class="section-sub-title">Sijon akan mendampingimu sepanjang perjalanan untuk menemukan jurusan
						kuliah yang cocok<br>sesuai dengan keunikan dan potensi dirimu, yang diperoleh dari hasil
						pengerjaan soal simulasi jurusan yang kamu inginkan.<br> Ayo selesaikan simulasimu sekarang!</p>
				</div>

				<div class="row text-center">
					<div class="col-md-4 col-sm-6" data-aos="fade-up">
						<img class="rounded-circle" src="../img/icons/animat-checkmark.gif" alt="Generic placeholder image"
							width="140" height="140">
						<h5 class="mb-4">Explorasi Jurusan</h5>
						<p><a class="btn btn-link" href="#" role="button">Mulai</a></p>
					</div>
					<!-- /.col-md-4 col-sm-6  -->
					<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
						<img class="rounded-circle" src="../img/icons/animat-checkmark.gif" alt="Generic placeholder image"
							width="140" height="140">
						<h5 class="mb-4">Explorasi Kampus</h5>
						<p><a class="btn btn-link" href="#" role="button">Mulai</a></p>
					</div>
					<!-- /.col-md-4 col-sm-6  -->
					<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
						<img class="rounded-circle" src="../img/icons/animat-checkmark.gif" alt="Generic placeholder image"
							width="140" height="140">
						<h5 class="mb-4">Tanya Mentor</h5>
						<p><a class="btn btn-link" href="#" role="button">Mulai</a></p>
					</div>
					<!-- /.col-md-4 col-sm-6  -->
				</div>
				<!-- /.row -->
			</div>
		</div>
	</section>

	<section id="skills" class="bg-white">
		<div class="container">
			<div class="section-content pt-0">
				<h2 class="section-title"><b>Progress Simulasi Kamu</b></h2>
				<div class="row">
					<div class="col-md-6" data-aos="fade-right">
						<!-- Skill Item -->
						<div class="skill-item">
							<div class="d-flex justify-content-between">
								<p>Jurusan Pilihan Pertama</p>
								<p class="text-muted">90%</p>
							</div>
							<div class="progress" data-percent="90%">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
									aria-valuemax="100" style="width: 0"></div>
							</div>
						</div>
						<!-- End Skill Item -->
						<!-- Skill Item -->
						<div class="skill-item">
							<div class="d-flex justify-content-between">
								<p>Jurusan Pilihan Pertama</p>
								<p class="text-muted">85%</p>
							</div>
							<div class="progress" data-percent="85%">
								<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
									aria-valuemax="100" style="width: 0"></div>
							</div>
						</div>
						<!-- End Skill Item -->

					</div>
					<div class="col-md-6" data-aos="fade-left">
						<!-- Skill Item -->
						<div class="skill-item">
							<div class="d-flex justify-content-between">
								<p>Kampus Pilihan</p>
								<p class="text-muted">80%</p>
							</div>
							<div class="progress" data-percent="80%">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
									aria-valuemax="100" style="width: 0"></div>
							</div>
						</div>
						<!-- End Skill Item -->
						<!-- Skill Item -->
						<div class="skill-item">
							<div class="d-flex justify-content-between">
								<p>Diskusi Dengan Mentor</p>
								<p class="text-muted">60%</p>
							</div>
							<div class="progress" data-percent="60%">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
									aria-valuemax="100" style="width: 0"></div>
							</div>
						</div>
						<!-- End Skill Item -->

					</div>
				</div>
			</div>
		</div>
	</section> <!-- Features Section-->

	<!-- End of Features Section-->
	</div>
	<footer class="mastfoot my-3">
        <?php $this->load->view("sijon/footer.php") ?>
    </footer>

    <!-- External JS -->
    <?php $this->load->view("sijon/js.php") ?>

</body>

</html>
