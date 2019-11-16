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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/blogs/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id</th>
										<th>Thumbnail</th>
										<th>Kategori</th>
										<th>Judul</th>
										<th>Isi Artikel</th>
										<th>Tanggal Rilis</th>
										<th>Penulis</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($blogs as $blog): ?>
									<tr>
										<td>
											<?php echo $blog->id ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/blog/'.$blog->thumbnail) ?>"
												width="64" />
										</td>
										<td>
											<?php echo $blog->kategori ?>
										</td>
										<td>
											<?php echo $blog->judul ?>
										</td>
										<td width="150">
											<?php echo word_limiter($blog->isi_artikel, 10) ?>
										</td>
										<td>
											<?php echo $blog->tanggal_rilis ?>
										</td>
										<td>
											<?php echo $blog->penulis ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/blogs/edit/'.$blog->id) ?>"
												class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/blogs/delete/'.$blog->id) ?>')"
												href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i>
												Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>

</html>
