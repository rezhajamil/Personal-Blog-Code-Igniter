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
        <h2 style="margin-top:0px">Tbl_kontak Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Subjek</td><td><?php echo $subjek; ?></td></tr>
	    <tr><td>Pesan</td><td><?php echo $pesan; ?></td></tr>
	    <tr><td>Tgl Input</td><td><?php echo $tgl_input; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_kontak') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>