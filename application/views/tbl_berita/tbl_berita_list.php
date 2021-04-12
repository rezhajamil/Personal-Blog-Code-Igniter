<!DOCTYPE html>
<html lang="en">
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card">
					<div class="card-header">
						<h4>Data Berita</h4>
						<a class="btn bg-gradient-success" href="<?php echo site_url('tbl_berita/create') ?>"><i class="fas fa-plus"></i> Data Baru</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="table_berita" class="table table-bordered table-hover" >
								<thead class="bg-gradient-info">
									<tr>
										<th>No.</th>
										<th>Judul</th>
										<th>Deskripsi</th>
										<th>Berita</th>
										<th>Foto</th>
										<th>Tanggal Input</th>
										<th>Tanggal Update</th>
										<th>Url Slug</th>
										<th>Tags</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;foreach ($tbl_berita_data as $tbl_berita): 

									?>
									<tr>
										<td>
											<?php echo $i++ ?>
										</td>
										<td>
											<?php echo $tbl_berita->judul_berita ?>
										</td>
										<td>
											<?php echo substr($tbl_berita->desk,0,100) ?>
										</td>
										<td>
											<?php echo substr($tbl_berita->berita,0,300) ?>
										</td>
										<td><a href="<?php echo site_url('databerita/update_foto/'.$tbl_berita->id_berita) ?>">
											<img style="width:100px;"  class="img-responsive" src="<?php echo base_url(); ?>assets/berita/<?php echo $tbl_berita->foto ?>">
											</a>
											
										</td>
										<td>
											<?php 
												echo substr($tbl_berita->tgl_input,0,10)
											?>
										</td>
										<td>
											<?php echo substr($tbl_berita->tgl_update,0,10) ?>
										</td>
										<td>
											<?php echo $tbl_berita->url_slug ?>
										</td>
										<td>
											<?php echo $tbl_berita->tags ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('databerita/update/'.$tbl_berita->id_berita) ?>"
											 class="btn btn-sm bg-gradient-primary"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('tbl_berita/delete/'.$tbl_berita->id_berita) ?>')"
											 href="#!" class="btn btn-sm text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
		function deleteConfirm(url)
		{
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
	<script>
		$(function () {
			$("#table_berita").DataTable({
			  "responsive": true,
			  "autoWidth": false,
			});
		});
	</script>

</body>
</html>