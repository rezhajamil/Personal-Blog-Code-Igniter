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
                                     type="text" name="judul_berita" placeholder="Judul" value="<?php echo $judul_berita ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('judul_berita') ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="nama">Deskripsi</label>
                                    <textarea class="form-control <?php echo form_error('desk') ? 'is-invalid':'' ?>"
                                    name="desk" type="text" placeholder="Deskripsi" value="<?php echo $desk ?>" rows="5"><?php echo $desk ?> </textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('desk') ?>
                                    </div>
                                </div>    
                            </div>
                            
                            <div class="form-group">
                                <label for="berita">Berita</label>
                                <textarea class="form-control <?php echo form_error('berita') ? 'is-invalid':'' ?> ckeditor"
                                 type="text" name="berita" placeholder="Berita" id="ckeditor" value="<?php echo  html_entity_decode(strip_tags($berita)); ?>"></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('berita') ?>
                                </div>
                            </div>

                            <div class="row">
                                <?php if($button == 'Create') { ?>
                                <div class="form-group col-md-4">
                                    <label for="foto">Foto</label>
                                    <input class="form-control <?php echo form_error('foto') ? 'is-invalid':'' ?>"
                                     type="file" name="foto" placeholder="Foto" value="<?php echo $foto ?>" required />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('foto') ?>
                                    </div>
                                </div>
                                <?php } ?>

                                <div class="form-group col-md-4">
                                    <label for="url_slug">Url Slug*</label>
                                    <input class="form-control <?php echo form_error('url_slug') ? 'is-invalid':'' ?>"
                                     type="text" name="url_slug" placeholder="Url Slug" value="<?php echo $url_slug ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('url_slug') ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="tags">Tags</label>
                                    <input class="form-control <?php echo form_error('tags') ? 'is-invalid':'' ?>"
                                     type="text" name="tags" placeholder="Tags" value="<?php echo $tags ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tags') ?>
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