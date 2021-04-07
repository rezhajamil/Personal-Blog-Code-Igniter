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
					<div class="carousel-item active">
						<div class="row">
							<div class="col-lg-6 blog-image">
								<a href="<?php echo base_url() ?>blog_single">
									<img src="<?php echo base_url('assets/images/blog1.jpg') ?>" alt="" class="img-fluid rounded-lg">
								</a>
							</div>
							<div class="col-lg-6 blog-info">
								<a href="<?php echo base_url() ?>blog_single" class="text-decoration-none">
									<h6 class="blog-title">Welcome to WordPress. This is your first post. Edit or delete it.</h6>
								</a>
								<p class ="blog-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis, odit non
									asperiores
									possimus voluptas sit nihil nam id explicabo saepe sapiente excepturi similique, dicta
									officia odio natus nemo. Ratione ipsa distinctio explicabo esse quod autem
								veritatis, in fugit odio.</p>
								<div class="author align-items-center mt-4 mb-1">
									<a href="author.html">Mike Tyson</a> 
									in 
									<a href="#url">Html Design</a>
									<p><span class="text-muted h6">July 20, 2020</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-lg-6 blog-image">
								<a href="<?php echo base_url() ?>blog_single">
									<img src="<?php echo base_url('assets/images/blog2.jpg') ?>" alt="" class="img-fluid rounded-lg">
								</a>
							</div>
							<div class="col-lg-6 blog-info">
								<a href="<?php echo base_url() ?>blog_single" class="text-decoration-none">
									<h6 class="blog-title">What Else you need to reach the next level of Blogging
									</h6>
								</a>
								<p class ="blog-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis, odit non
									asperiores
									possimus voluptas sit nihil nam id explicabo saepe sapiente excepturi similique, dicta
									officia odio natus nemo. Ratione ipsa distinctio explicabo esse quod autem
								veritatis, in fugit odio.</p>
								<div class="author align-items-center mt-4 mb-1">
									<a href="author.html">Johnson Smith</a> 
									in 
									<a href="#url">Design</a>
									<p><span class="text-muted h6">July 20, 2020</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-lg-6 blog-image">
								<a href="<?php echo base_url() ?>blog_single">
									<img src="<?php echo base_url('assets/images/blog3.jpg') ?>" alt="" class="img-fluid rounded-lg">
								</a>
							</div>
							<div class="col-lg-6 blog-info">
								<a href="<?php echo base_url() ?>blog_single" class="text-decoration-none">
									<h6 class="blog-title">How to select a great domain name for your Business
									</h6>
								</a>
								<p class ="blog-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis, odit non
									asperiores
									possimus voluptas sit nihil nam id explicabo saepe sapiente excepturi similique, dicta
									officia odio natus nemo. Ratione ipsa distinctio explicabo esse quod autem
								veritatis, in fugit odio.</p>
								<div class="author align-items-center mt-4 mb-1">
									<a href="author.html">Johnson Smith</a> 
									in 
									<a href="#url">Design</a>
									<p><span class="text-muted h6">July 20, 2020</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<ol class="carousel-indicators position-relative mt-4">
					<li data-target="#carouselBlog" data-slide-to="0" class="active"></li>
					<li data-target="#carouselBlog" data-slide-to="1"></li>
					<li data-target="#carouselBlog" data-slide-to="2"></li>
				</ol>
			</div>
		</section>

		<section class="blog-block mt-lg-4 mb-1">
			<div class="container pb-lg-5">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="card border-0">
							<img src="<?php echo base_url('assets/images/blog1.jpg') ?>" class="card-img-top">
							<div class="card-body p-0">
								<h5 class="blog-title blog-title-sm">The purpose of this HTML is to help determine what default...</h5>
								<p class="blog-desc">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
								<a href="<?php echo base_url() ?>blog_single" class="btn btn-tersier mt-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0">
							<img src="<?php echo base_url('assets/images/blog2.jpg') ?>" class="card-img-top">
							<div class="card-body p-0">
								<h5 class="blog-title blog-title-sm">Restaurant Will Make You Tons Of Cash. Here's How!</h5>
								<p class="blog-desc">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
								<a href="<?php echo base_url() ?>blog_single" class="btn btn-tersier mt-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card border-0">
							<img src="<?php echo base_url('assets/images/blog3.jpg') ?>" class="card-img-top">
							<div class="card-body p-0">
								<h5 class="blog-title blog-title-sm">Welcome to WordPress. This is your first post.</h5>
								<p class="blog-desc">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
								<a href="<?php echo base_url() ?>blog_single" class="btn btn-tersier mt-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-lg-5">
						<div class="card border-0">
							<img src="<?php echo base_url('assets/images/blog2.jpg') ?>" class="card-img-top">
							<div class="card-body p-0">
								<h5 class="blog-title blog-title-sm">Restaurant Will Make You Tons Of Cash. Here's How!</h5>
								<p class="blog-desc">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
								<a href="<?php echo base_url() ?>blog_single" class="btn btn-tersier mt-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-lg-5">
						<div class="card border-0">
							<img src="<?php echo base_url('assets/images/blog1.jpg') ?>" class="card-img-top">
							<div class="card-body p-0">
								<h5 class="blog-title blog-title-sm">The purpose of this HTML is to help determine what default...</h5>
								<p class="blog-desc">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
								<a href="<?php echo base_url() ?>blog_single" class="btn btn-tersier mt-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-lg-5">
						<div class="card border-0">
							<img src="<?php echo base_url('assets/images/blog3.jpg') ?>" class="card-img-top">
							<div class="card-body p-0">
								<h5 class="blog-title blog-title-sm">Welcome to WordPress. This is your first post.</h5>
								<p class="blog-desc">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
								<a href="<?php echo base_url() ?>blog_single" class="btn btn-tersier mt-3">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>                  

		<nav aria-label="Blog Page navigation" class="mb-5">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>



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
