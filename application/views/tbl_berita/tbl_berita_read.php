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
        <h2 style="margin-top:0px">Tbl_berita Read</h2>
        <table class="table">
	    <tr><td>Judul Berita</td><td><?php echo $judul_berita; ?></td></tr>
	    <tr><td>Desk</td><td><?php echo $desk; ?></td></tr>
	    <tr><td>Berita</td><td><?php echo $berita; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Tgl Input</td><td><?php echo $tgl_input; ?></td></tr>
	    <tr><td>Tgl Update</td><td><?php echo $tgl_update; ?></td></tr>
	    <tr><td>Url Slug</td><td><?php echo $url_slug; ?></td></tr>
	    <tr><td>Tags</td><td><?php echo $tags; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_berita') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>