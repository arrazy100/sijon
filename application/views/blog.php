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

	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/background.jpg)">
		<div class="container text-center">
			<h1 class="display-2 mb-4">Artikel</h1>
		</div>
    </div>

    <!-- Blog Section -->
	<section id="blog" class="bg-grey">
		<div class="container">
			<div class="section-content">
				<div class="title-wrap mb-5" data-aos="fade-up">
					<h2 class="section-title">Latest <b>news</b></h2>
					<p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
				</div>
				<div class="row">
					<!-- Blog -->
					<div class="col-md-12 blog-holder">
						<div class="row">
							<?php foreach($artikel as $artikel): ?>
								<!-- Blog Item -->
								<div class="col-md-4 blog-item-wrapper" data-aos="fade-up">
									<div class="blog-item">
										<div class="blog-img">
											<a href="single.html"><img src="<?php echo base_url('upload/blog/'.$artikel->thumbnail) ?>" alt=""></a>
										</div>
										<div class="blog-text">
											<div class="blog-tag">
												<a href="#">
													<h6><small><?php echo $artikel->kategori ?></small></h6>
												</a>
											</div>
											<div class="blog-title">
												<a href="single.html">
													<h4><?php echo $artikel->judul ?></h4>
												</a>
											</div>
											<div class="blog-meta">
												<p class="blog-date"><?php echo $artikel->tanggal_rilis ?></p> /
												<p class="blog-comment"><a href="">0 Comments</a></p>
											</div>
											<div class="blog-desc">
												<p><?php echo strip_tags(word_limiter($artikel->isi_artikel, 21)) ?></p>
											</div>
											<div class="blog-author">
												<p><?php echo $artikel->penulis ?></p>
											</div>
											<div class="blog-share-wrapper">
												<a class="blog-share" href="google.com">
													<i class="fab fa-facebook-square"></i>
												</a>
												<a class="blog-share" href="google.com">
													<i class="fab fa-twitter-square"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End of Blog Item -->
							<?php endforeach; ?>
						</div>
					</div>
					<!-- End of Blog -->
				</div>
			</div>
		</div>
	</section>
	<!-- End of Blog Section -->
	<!-- Features Section-->

	<!-- End of Features Section-->
	</div>
	<footer class="mastfoot my-3">
        <?php $this->load->view("sijon/footer.php") ?>
    </footer>

    <!-- External JS -->
    <?php $this->load->view("sijon/js.php") ?>

</body>

</html>
