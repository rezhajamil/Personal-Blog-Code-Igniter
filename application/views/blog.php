<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Personal Blog - Eko Surya</title>
	<?php $this->load->view('css') ?>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-premier shadow">
		<div class="container">
			<a class="navbar-brand py-1 my-1 col-lg-4" href="<?php echo base_url() ?>"><h2 class="font-weight-bolder m-3">Eko Surya</h2></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  col-lg-6" id="navbar">
				<ul class="navbar-nav">
					<li class="nav-item px-2 active">
						<a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="<?php echo base_url() ?>#services">My Services</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="<?php echo base_url() ?>blog">Blog</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="<?php echo base_url() ?>#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	
	<section class="blog-slider py-5" id="blog">
		<div class="container">
			<div class="row text-center">
				<h4 class="mb-3 col-lg text-tersier">My Blog</h4>
			</div>
			<div class="row text-center mb-5">
				<h1 class="col-lg-12 font-weight-normal text-sekunder title">Some of My <span class="nama">Blog Posts</span></h1>
			</div>
			<div id="carouselBlog" class="carousel slide" data-ride="carousel" data-interval="7000">
				<div class="carousel-inner">
					<?php 
					$counter=1;
					foreach ($tbl_berita_data as $tbl_berita) { ?>
						<div class="carousel-item <?php if($counter <= 1){echo " active"; } ?>">
							<div class="row">
								<div class="col-lg-6 blog-image mb-4">
									<a href="<?php echo base_url() ?><?php echo $tbl_berita->url_slug ?>">
										<img src="<?php echo base_url('assets/berita/') ?><?php echo $tbl_berita->foto ?>" alt="" class="img-fluid rounded-lg">
									</a>
								</div>
								<div class="col-lg-6 blog-info">
									<a href="<?php echo base_url() ?><?php echo $tbl_berita->url_slug ?>" class="text-decoration-none">
										<h6 class="blog-title"><?php echo $tbl_berita->judul_berita ?></h6>
									</a>
									<p class ="blog-desc"><?php echo substr($tbl_berita->desk,0,500) ?>...</p>
									<div class="author align-items-center mt-4 mb-1">
										<a href="author.html">Mike Tyson</a> 
										in 
										<a href="#url">Html Design</a>
										<p><span class="text-muted h6"><?php echo date("F d, Y", strtotime(substr($tbl_berita->tgl_input,0,10)));; ?></span></p>
									</div>
								</div>
							</div>
							</div><?php $counter++;} ?>
							<ol class="carousel-indicators mt-4">
								<li data-target="#carouselBlog" data-slide-to="0" class="active"></li>
								<li data-target="#carouselBlog" data-slide-to="1"></li>
								<li data-target="#carouselBlog" data-slide-to="2"></li>
							</ol>
						</div>
					</section>

					<section class="blog-block mt-lg-4 mb-1">
						<div class="container pb-lg-5">
							<div class="row">
								<?php foreach ($tbl_berita_data as $tbl_berita) { ?>
									<div class="col-lg-4 col-md-6 mt-lg-5">
										<div class="card border-0">
											<img src="<?php echo base_url('assets/berita/') ?><?php echo $tbl_berita->foto ?>" class="card-img-top blog-image">
											<div class="card-body p-0">
												<h5 class="blog-title blog-title-sm"><?php echo $tbl_berita->judul_berita; ?></h5>
												<p class="blog-desc blog-desc-bottom"><?php echo substr($tbl_berita->desk,0,100); ?> ...</p>
												<a href="<?php echo base_url() ?><?php echo $tbl_berita->url_slug ?>" class="btn btn-tersier mt-3 ">Read More</a>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</section>                  

					<div class="row text-center">
						<div class="container">
							<?php echo $pagination; ?>
						</div>
					</div>


					<div class="copyright py-sm-5 py-4 text-center">
						<div class="container">
							<p class="copy-footer-29">© 2021 Eko Surya All rights reserved
							</div>
						</div>

						<a href="#" class="toTop" id="topBtn" onclick="topFunction()">
							<i class="bi bi-chevron-up"></i>
						</a>
					</body>
					<?php $this->load->view('js') ?>
					</html>
