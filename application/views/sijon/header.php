<div class="container">
	<a class="navbar-brand d-flex align-items-center text-white" href="<?php echo site_url('home') ?>">
		<h3 class="font-weight-bolder mb-0">Simulasi Pemilihan Jurusan Online</h3>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header"
		aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
		<span class="lnr lnr-menu"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbar-nav-header">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('explorasi') ?>">Explorasi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('profil') ?>">Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('blog') ?>">Artikel</a>
			</li>
			<?php
				$status = $this->session->userdata('username');
				if (empty($status)) { ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('login') ?>">Login</a>
			</li> <?php } else { ?>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<?php echo $status ?>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?php echo site_url('login') ?>">Logout</a>
				</div>
			</li>
			<?php } ?>
			<li class="nav-item only-desktop">
				<a class="nav-link" id="side-nav-open" href="#">
					<span class="lnr lnr-menu"></span>
				</a>
			</li>
		</ul>
	</div>
</div>
