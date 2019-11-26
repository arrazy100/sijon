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

	<div>
		<div style="width: 100%;
            height: 400px;
            background-image: url(<?php echo base_url('img/kampus/'.$kampus[0]->img2) ?>);
            background-repeat: no-repeat;
            background-size: cover;">
			<div style="background: rgba(0, 0, 0, 0.685);
                padding: 60px;
                margin: 0;
                height: 100%;">
				<div style="padding-top: 200px;">
					<h1 class="text-white"><?php echo $kampus[0]->short_name ?></h1>
				</div>
				<div>
					<h2 class="text-white"><?php echo $kampus[0]->Nama ?></h2>
				</div>
			</div>
		</div>
		<div class="container my-4">
			<div class="row text-left">
				<div class="col-lg-6 col-md-6 mb-4">
					<div class="card shadow-lg">
						<div class="card-body">
							<ul class="list-group">
								<style>td { padding: 15px; }</style>
								<table border="1">
									<tr>
										<td>
											<b>Nama</b>
										</td>
										<td>
												<?php echo $kampus[0]->Nama ?>
										</td>

									<tr>
										<td>
											<b>Akreditasi</b>
										</td>
										<td>
												<?php echo $kampus[0]->akreditas ?>
										</td>

									<tr>
										<td>
											<b>Status</b>
										</td>
										<td>
												<?php echo $kampus[0]->status ?>
										</td>

									<tr>
										<td>
											<b>Alamat</b>
										</td>
										<td>
												<?php echo $kampus[0]->Alamat ?>
										</td>

									<tr>
										<td>
											<b>Tahun</b>
										</td>
										<td>
												<?php echo $kampus[0]->tahun ?>
										</td>

								</table>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-4">
					<div class="card shadow-lg">
						<div class="card-body">
							<b>Deskripsi</b><br>
                            <br><?php echo $kampus[0]->Deskripsi ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="mastfoot my-3">
		<?php $this->load->view('sijon/footer') ?>
	</footer>

	<?php $this->load->view('sijon/js') ?>

</body>

</html>
