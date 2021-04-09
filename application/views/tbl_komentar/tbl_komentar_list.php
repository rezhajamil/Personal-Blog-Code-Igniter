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
        <h2 style="margin-top:0px">Tbl_komentar List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tbl_komentar/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tbl_komentar/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbl_komentar'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Parent Komen</th>
		<th>Id Berita</th>
		<th>Email</th>
		<th>Nama</th>
		<th>Komen</th>
		<th>Captcha</th>
		<th>Tgl Input</th>
		<th>Status</th>
		<th>Action</th>
            </tr><?php
            foreach ($tbl_komentar_data as $tbl_komentar)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tbl_komentar->id_parent_komen ?></td>
			<td><?php echo $tbl_komentar->id_berita ?></td>
			<td><?php echo $tbl_komentar->email ?></td>
			<td><?php echo $tbl_komentar->nama ?></td>
			<td><?php echo $tbl_komentar->komen ?></td>
			<td><?php echo $tbl_komentar->captcha ?></td>
			<td><?php echo $tbl_komentar->tgl_input ?></td>
			<td><?php echo $tbl_komentar->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tbl_komentar/read/'.$tbl_komentar->id_komen),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tbl_komentar/update/'.$tbl_komentar->id_komen),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tbl_komentar/delete/'.$tbl_komentar->id_komen),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>