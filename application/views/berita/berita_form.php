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
        <h2 style="margin-top:0px">Berita <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul Berita <?php echo form_error('judul_berita') ?></label>
            <input type="text" class="form-control" name="judul_berita" id="judul_berita" placeholder="Judul Berita" value="<?php echo $judul_berita; ?>" />
        </div>
	    <div class="form-group">
            <label for="desk">Desk <?php echo form_error('desk') ?></label>
            <textarea class="form-control" rows="3" name="desk" id="desk" placeholder="Desk"><?php echo $desk; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="berita">Berita <?php echo form_error('berita') ?></label>
            <textarea class="form-control" rows="3" name="berita" id="berita" placeholder="Berita"><?php echo $berita; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="foto">Foto <?php echo form_error('foto') ?></label>
            <textarea class="form-control" rows="3" name="foto" id="foto" placeholder="Foto"><?php echo $foto; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="timestamp">Tgl Input <?php echo form_error('tgl_input') ?></label>
            <input type="text" class="form-control" name="tgl_input" id="tgl_input" placeholder="Tgl Input" value="<?php echo $tgl_input; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Tgl Update <?php echo form_error('tgl_update') ?></label>
            <input type="text" class="form-control" name="tgl_update" id="tgl_update" placeholder="Tgl Update" value="<?php echo $tgl_update; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Url Slug <?php echo form_error('url_slug') ?></label>
            <input type="text" class="form-control" name="url_slug" id="url_slug" placeholder="Url Slug" value="<?php echo $url_slug; ?>" />
        </div>
	    <div class="form-group">
            <label for="tags">Tags <?php echo form_error('tags') ?></label>
            <textarea class="form-control" rows="3" name="tags" id="tags" placeholder="Tags"><?php echo $tags; ?></textarea>
        </div>
	    <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('berita') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>