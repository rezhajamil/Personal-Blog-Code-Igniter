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
        <h2 style="margin-top:0px">Tbl_balas_komentar Read</h2>
        <table class="table">
	    <tr><td>Id Komen</td><td><?php echo $id_komen; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Komen</td><td><?php echo $komen; ?></td></tr>
	    <tr><td>Captcha</td><td><?php echo $captcha; ?></td></tr>
	    <tr><td>Tgl Input</td><td><?php echo $tgl_input; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_balas_komentar') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>