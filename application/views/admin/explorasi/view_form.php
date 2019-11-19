<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumbs.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/explorasi/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Soal</th>
										<th>Jawaban A</th>
										<th>Jawaban B</th>
										<th>Jawaban C</th>
										<th>Jawaban D</th>
										<th>Poin</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($soal as $s): ?>
									<tr>
										<td>
											<?php echo $s->nomor ?>
										</td>
										<td width="200">
											<?php echo $s->soal ?>
										</td>
										<td>
											<?php echo $s->jawaban_a ?>
										</td>
										<td>
											<?php echo $s->jawaban_b ?>
										</td>
										<td>
											<?php echo $s->jawaban_c ?>
										</td>
										<td>
											<?php echo $s->jawaban_d ?>
										</td>
										<td>
											<?php echo $s->poin ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>

					</div>

				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
