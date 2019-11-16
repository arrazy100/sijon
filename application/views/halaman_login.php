<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
	.bg {

		/* Full height */
		height: 100%;

		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.card {
		background-color: rgba(255, 255, 255, 0.9);
	}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body style="background-image: url('../img/bg-login.jpg')" class="bg">
	<div class="container h-100">

		<div class="row d-flex h-100 justify-content-center">
			<aside class="col-sm-4 align-self-center">

				<div class="card">
					<article class="card-body">
						<a href="" class="float-right btn btn-outline-primary">Sign up</a>
						<h4 class="card-title mb-4 mt-1">Sign in</h4>
						<p>
							<a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i>   Login
								via
								Twitter</a>
							<a href="" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>  
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

</body>
