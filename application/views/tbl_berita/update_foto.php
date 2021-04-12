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

                <div class="card mb-3">
                    <div class="card-header">
                        <a class="btn btn-sm bg-gradient-primary" href="<?php echo site_url('databerita/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo $action ?>" method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Judul Berita</label>
                                    <input class="form-control <?php echo form_error('judul_berita') ? 'is-invalid':'' ?>"
                                     type="text" name="judul_berita" placeholder="Judul" value="<?php echo $judul_berita ?>" disabled/>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('judul_berita') ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="foto">Foto</label><br>
                                    <img width="300" src="<?php echo base_url(); ?>assets/berita/<?php echo $foto; ?>">
                                </div>    
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="foto">Foto</label>
                                    <input class="form-control <?php echo form_error('foto') ? 'is-invalid':'' ?>"
                                     type="file" name="foto" placeholder="Foto" value="<?php echo $foto ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('foto') ?>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>" />

                            <button type="submit" class="btn btn-sm bg-gradient-success my-3"><?php echo $button ?></button>
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
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
</html>