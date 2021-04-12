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
                        <a class="btn bg-gradient-success" href="<?php echo site_url('tbl_komentar/create') ?>"><i class="fas fa-plus"></i> Data Baru</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_berita" class="table table-bordered table-hover" >
                                <thead class="bg-gradient-info">
                                    <tr>
                                        <th>No.</th>
                                        <th>Id Komentar</th>
                                        <th>Id Parent Komentar</th>
                                        <th>URL SLug Berita</th>
                                        <th>Email</th>
                                        <th>Nama</th>
                                        <th>Komentar</th>
                                        <th>Tanggal Input</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;foreach ($tbl_komentar_data as $tbl_komentar): 

                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $i++ ?>
                                        </td>
                                        <td>
                                            <?php echo $tbl_komentar->id_komen ?>
                                        </td>
                                        <td>
                                            <?php echo $tbl_komentar->id_parent_komen ?>
                                        </td>
                                        <td>
                                            <?php echo $tbl_komentar->url_slug ?>
                                        </td>
                                        <td>
                                            <?php echo $tbl_komentar->email ?>
                                        </td>
                                        <td>
                                            <?php echo $tbl_komentar->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $tbl_komentar->komen ?>
                                        </td>
                                        <td>
                                            <?php 
                                                echo substr($tbl_komentar->tgl_input,0,10)
                                            ?>
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('tbl_komentar/update/'.$tbl_komentar->id_komen) ?>"
                                             class="btn btn-sm bg-gradient-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('tbl_komentar/delete/'.$tbl_komentar->id_komen) ?>')"
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