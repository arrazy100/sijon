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

						<a href="<?php echo site_url('admin/blogs/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/blog/edit') ?>" method="post"
							enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $blog->id ?>" />

							<div class="form-group">
								<label for="thumbnail">Thumbnail</label>
								<input class="form-control-file <?php echo form_error('thumbnail') ? 'is-invalid':'' ?>"
									type="file" name="thumbnail" />
								<input type="hidden" name="old_image" value="<?php echo $blog->thumbnail ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('thumbnail') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kategori">Kategori*</label>
								<input class="form-control <?php echo form_error('kategori') ? 'is-invalid':'' ?>"
									type="text" name="kategori" placeholder="Kategori"
									value="<?php echo $blog->kategori ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="judul">Judul*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
									type="text" name="judul" min="0" placeholder="Judul"
									value="<?php echo $blog->judul ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="isi_artikel">Isi Artikel*</label>
								<textarea name="isi_artikel" class="form-control ckeditor">
									<?php echo $blog->isi_artikel ?>
								</textarea>
								<script>
									CKEDITOR.replace('isi_artikel');
								</script>
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
