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

	<nav id="header-navbar" class="navbar navbar-expand-lg py-4" style="background-color: rgba(0, 0, 0, 0.5);">
		<?php $this->load->view('sijon/header') ?>
	</nav>

	<div id="side-nav" class="sidenav">
		<?php $this->load->view('sijon/sidenav') ?>
	</div>

	<div id="side-search" class="sidenav">
		<?php $this->load->view('sijon/sidesearch') ?>
	</div>

	<!-- Page Content -->
	<div>

		<!-- Jumbotron Header -->
		<div style="width: 100%; padding: 20px; height: 400px; background-image: url(<?php echo base_url('img/kampus/BG_Cari_kampus.jpg') ?>);"
			class="text-white">
			<h1 class="display-5" style="padding-top: 100px;">Cari Kampus</h1>
			<p class="lead">Temukan kampus kamu disini. Pastikan memilih kampus berdasarkan informasi yang relevan.</p>
			<form method="get" action="<?php echo site_url('explorasi_kampus') ?>">
				<div class="form-inline">
					<input type="text" name="query" placeholder="Pencarian..." />
					<select name="filter">
						<option value="nama" selected>Nama</option>
						<option value="status">Status</option>
						<option value="akreditas">Akreditasi</option>
					</select>
				</div><br />
				<input type="submit" class="btn btn-primary" value="Cari Kampus" />
                <a class="btn btn-success" href="<?php echo site_url('explorasi_kampus') ?>">Reset Pencarian</a>
			</form>
		</div>
		<!-- Page Features -->
		<div class="container">
			<div class="my-4">
			</div>
			<div class="row text-center">
                <?php if (empty($kampus)) { ?>
                    <div style="margin-bottom: 200px;">
                        <b>Hasil pencarian kosong</b>
                    </div>
                <?php } ?>

				<?php foreach($kampus as $k) { ?>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card h-100 shadow-lg">
						<img class="card-img-top" src="<?php echo base_url('img/kampus/'.$k->img1) ?>" alt=""
							style="height: 250px;">
						<div class="card-body">
							<h4 class="card-title"><?php echo $k->Nama ?></h4>
							<p class="card-text"><?php echo strip_tags(word_limiter($k->Deskripsi, 21)) ?></p>
						</div>
						<div class="card-body">
							<a href="<?php echo site_url('view_kampus/'.$k->short_name) ?>" class="btn btn-primary">Baca
								Selengkapnya</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="mastfoot my-3">
		<?php $this->load->view('sijon/footer') ?>
	</footer>

	<?php $this->load->view('sijon/js') ?>

</body>

</html>
