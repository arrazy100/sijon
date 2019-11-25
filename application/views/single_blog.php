<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('sijon/head') ?>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
        <?php $this->load->view('sijon/sidenav') ?>
	</div>

	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
        <?php $this->load->view('sijon/header') ?>
	</nav>

	<div id="side-nav" class="sidenav">
        <?php $this->load->view('sijon/sidenav') ?>
	</div>

    <div class="jumbotron jumbotron-single d-flex align-items-center"
		style="background-image: url(<?php echo base_url('img/coba.png') ?>); background-repeat: no-repeat;">
		<div class="container text-center">
			<h1 class="display-2 mb-4"><?php echo $blog[0]->judul ?></h1>
		</div>
	</div>

     <!-- Contact Form Section -->
	<section id="single-content" class="bg-white">
		<div class="container">
			<div class="section-content blog-content">

				<div class="row">
					<!-- Single Content Holder -->
					<div class="col-md-8 offset-md-2 mt-4">
						<h4><?php echo $blog[0]->judul ?></h4>
						<img class="float-left" width="320px" src="<?php echo base_url('upload/blog/'.$blog[0]->thumbnail) ?>" alt="">
						<?php echo $blog[0]->isi_artikel ?>
					</div>
					<!-- End of Contact Form Holder -->
				</div>
			</div>
		</div>
	</section>
	<!-- End of Contact Form Section -->
	</div>
	<footer class="mastfoot my-3">
		<?php $this->load->view('sijon/footer') ?>
	</footer>

    <!-- External JS -->
    <?php $this->load->view('sijon/js') ?>

	<!-- Main JS -->
	<script src="<?php echo base_url('js/app.min.js') ?>"></script>
</body>

</html>
