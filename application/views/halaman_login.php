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
		style="background-image: url(<?php echo base_url('img/coba.png') ?>); background-repeat: no-repeat;">
		<div class="container text-center">
			<h1 class="display-2 mb-4">Login</h1>
		</div>
	</div>

	<section id="who-we-are" class="bg-white" style="margin-top: 50px; margin-bottom: 50px;">
		<div class="container">

			<div class="row d-flex justify-content-center">
				<aside class="col-sm-4 align-self-center">

					<div class="card">
						<article class="card-body">
							<a href="<?php echo site_url('registers') ?>" class="float-right btn btn-outline-info">Sign up</a>
							<h4 class="card-title mb-4 mt-1">Sign in</h4>
							<p>
								<a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i>  
									Login
									via
									Twitter</a>
								<a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-facebook-f"></i>
									 
									Login
									via facebook</a>
							</p>
							<hr>
							<form action="<?php echo site_url("login/proses_login")?>" method="post">
								<div class="form-group">
									<input name="username" id="username" class="form-control"
										placeholder="Email or Username" type="text">
								</div> <!-- form-group// -->
								<div class="form-group">
									<input name="password" id="password" class="form-control" placeholder="******"
										type="password">
								</div> <!-- form-group// -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block"> Login </button>
										</div> <!-- form-group// -->
									</div>
									<div class="col-md-6 text-right">
										<a class="small" href="#">Forgot password?</a>
									</div>
								</div> <!-- .row// -->
							</form>
						</article>
					</div> <!-- card.// -->

				</aside> <!-- col.// -->
			</div> <!-- row.// -->

		</div>
		<!--container end.//-->
	</section>

	</div>
	<footer class="mastfoot my-3">
        <?php $this->load->view("sijon/footer.php") ?>
    </footer>

    <!-- External JS -->
	<?php $this->load->view("sijon/js.php") ?>

</body>

</html>
