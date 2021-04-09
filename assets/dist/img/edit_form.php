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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a class="btn btn-sm bg-gradient-primary" href="<?php echo site_url('admin/jurusan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/jurusan/edit/ID --->

							<input type="hidden" name="id_jurusan" value="<?php echo $jurusan->id_jurusan?>" />

							<div class="form-group">
								<label for="nama">Nama Jurusan*</label>
								<input class="form-control <?php echo form_error('nama_jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $jurusan->nama_jurusan ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_jurusan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kode">Kode Jurusan*</label>
								<input class="form-control <?php echo form_error('kode_jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="kode_jurusan" placeholder="Kode jurusan" value="<?php echo $jurusan->kode_jurusan ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('kode_jurusan') ?>
								</div>
							</div>

							<input class="btn btn-sm bg-gradient-success" type="submit" name="btn" value="Save" />
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