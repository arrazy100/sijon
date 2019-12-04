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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/explorasi/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/explorasi/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="id">Id*</label>
								<input class="form-control <?php echo form_error('id') ? 'is-invalid':'' ?>"
									type="text" name="id" min="0" placeholder="Id" />
								<div class="invalid-feedback">
									<?php echo form_error('id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="judul">Jurusan*</label>
								<input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
									type="text" name="jurusan" min="0" placeholder="Jurusan" />
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="dokumen">Import Soal dari Excel*</label>
								<br />Contoh dokumen excel yang valid <input type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('panduan') ?>'" value="Download" />
								<input class="form-control-file <?php echo form_error('dokumen') ? 'is-invalid':'' ?>"
									type="file" name="dokumen" accept=".xls, .xlsx" required="" />
								<div class="invalid-feedback">
									<?php echo form_error('dokumen') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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
