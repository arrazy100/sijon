<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view("sijon/head.php") ?>

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet"
		href="<?php echo base_url('fonts/material-design-iconic-font/css/material-design-iconic-font.css')?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/soal.css')?>">
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

	<div class="wrapper" style="margin-top:100px; margin-bottom: 100px;">
		<form action="">
			<h1 style="color: white; text-align: center">Soal Simulasi - Teknik Informatika</h1>
			<div id="wizard">
				<?php foreach($soal as $s) { ?>
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<h5><?php echo $s->nomor.'. '.$s->soal ?></h5>
					<div class="inputGroup">
						<input id="radio<?php echo $s->nomor ?>" name="radio" type="radio" />
						<label for="radio<?php echo $s->nomor ?>"><?php echo $s->jawaban_a ?></label>
					</div><br>
					<div class="inputGroup">
						<input id="radio<?php echo $s->nomor ?>" name="radio" type="radio" />
						<label for="radio<?php echo $s->nomor ?>"><?php echo $s->jawaban_b ?></label>
					</div><br>
					<div class="inputGroup">
						<input id="radio<?php echo $s->nomor ?>" name="radio" type="radio" />
						<label for="radio<?php echo $s->nomor ?>"><?php echo $s->jawaban_c ?></label>
					</div><br>
					<div class="inputGroup">
						<input id="radio<?php echo $s->nomor ?>" name="radio" type="radio" />
						<label for="radio<?php echo $s->nomor ?>"><?php echo $s->jawaban_d ?></label>
					</div>
				</section>
				<?php } ?>
			</div>
		</form>
	</div>

	<footer class="mastfoot my-3" style="color: white;">
		<?php $this->load->view("sijon/footer.php") ?>
    </footer>

    <!-- External JS -->
	<?php $this->load->view("sijon/js.php") ?>

	<script src="<?php echo base_url('js/jquery-3.3.1.min.js')?>"></script>

	<!-- JQUERY STEP -->
	<script src="<?php echo base_url('js/jquery.steps.js')?>"></script>

	<script src="<?php echo base_url('js/main.js')?>"></script>
	<!-- Template created and distributed by Colorlib -->

</body>

</html>
