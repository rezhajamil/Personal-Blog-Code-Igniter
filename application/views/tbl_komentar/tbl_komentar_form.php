<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_komentar <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Parent Komen <?php echo form_error('id_parent_komen') ?></label>
            <input type="text" class="form-control" name="id_parent_komen" id="id_parent_komen" placeholder="Id Parent Komen" value="<?php echo $id_parent_komen; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Berita <?php echo form_error('id_berita') ?></label>
            <input type="text" class="form-control" name="id_berita" id="id_berita" placeholder="Id Berita" value="<?php echo $id_berita; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="komen">Komen <?php echo form_error('komen') ?></label>
            <textarea class="form-control" rows="3" name="komen" id="komen" placeholder="Komen"><?php echo $komen; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Captcha <?php echo form_error('captcha') ?></label>
            <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Captcha" value="<?php echo $captcha; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Tgl Input <?php echo form_error('tgl_input') ?></label>
            <input type="text" class="form-control" name="tgl_input" id="tgl_input" placeholder="Tgl Input" value="<?php echo $tgl_input; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <input type="hidden" name="id_komen" value="<?php echo $id_komen; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_komentar') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>