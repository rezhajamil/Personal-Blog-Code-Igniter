<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Personal Blog - Eko Surya</title>

	<?php $this->load->view('css') ?>
</head>
<body>

	<nav class="navbar navbar-expand-lg fixed-top bg-premier shadow">
		<div class="container">
			<a class="navbar-brand py-1 my-1 col-lg-4" href="<?php echo base_url() ?>"><h2 class="font-weight-bolder m-3">Eko Surya</h2></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  col-lg-6" id="navbar">
				<ul class="navbar-nav">
					<li class="nav-item px-2 active">
						<a class="nav-link scroll" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link scroll" href="#services">My Services</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link scroll" href="<?php echo base_url() ?>blog">Blog</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link scroll" href="#contact">Contact</a>
					</li>
					<li class="nav-item px-2 dropdown">
						<a class="nav-link scroll dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							More
						</a>
						<div class="dropdown-menu text-sekunder" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item scroll" href="#skills">My Skills</a>
							<a class="dropdown-item scroll" href="#awards">Awards</a>
							<a class="dropdown-item scroll" href="#portofolio">My Portofolio</a>
							<a class="dropdown-item scroll" href="#partners">Partners</a>
							<a class="dropdown-item scroll" href="#testimonial">Testimonial</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="about pt-5 pb-1">
		<div class="container pb-md-3">
			<div class="row text-center">
				<h4 class="mb-3 col-lg text-tersier">About Me</h4>
			</div>
			<div class="row text-center">
				<h1 class="col-lg-12 font-weight-normal text-sekunder title">Hello, <span class="nama" style="position: relative; display: inline-block;"><div class="cursor"></div><span class="nama font-weight-bold">I’m Eko Surya</span></span><br>
				I’m working as Web Developer.</h1>
				<p class="col-lg mx-lg-5">I love <b class="text-sekunder">Graphic design</b> and <b class="text-sekunder">Photography</b> and have been working on my portfolio since 2016. I Can give your business a new Creative start right away!
				</p>
			</div>
			<div class="row text-center">
				<div class="col-sm">
					<img class="img-fluid" src="<?php echo base_url('assets/images/about.png') ?>" >
				</div>
			</div>
		</div>
	</section>

	<section class="services pb-5 pt-1" id="services">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-6">
					<h4 class="mb-3 col-lg text-tersier px-0">My Services</h4>
					<h1 class="font-weight-normal text-sekunder title"><span class="nama">Build your brand</span> and grow your business</h1>
					<p class="mt-4">I can give your business a new creative start right away! You can download my resume in order to learn the details of my professional life as a designer and photographer.</p>
					<ul class="service-list mt-md-5 mt-4 px-0">
						<li class="service-link"><a href="#">UI/UX Design and Development</a></li>
						<li class="service-link"><a href="#">Branding Design and Identity</a></li>
						<li class="service-link"><a href="#">Mobile App Design</a></li>
						<li class="service-link"><a href="#">Art, Logo, SVG &amp; Illustration</a></li>
						<li class="service-link"><a href="#">3D Modeling &amp; Motion</a></li>
						<li class="service-link"><a href="#">PSD Design, Photoshop</a></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="position-relative">
						<img src="<?php echo base_url('assets/images/service.png') ?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="skill py-3" id="skills">
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-6">
					<img src="<?php echo base_url('assets/images/skills.png') ?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 mt-lg-0 mt-4">
					<h4 class="mb-3 col-lg text-tersier px-0">My Featured Skills</h4>
					<h1 class="font-weight-normal text-sekunder title">I’m using <span class="nama">top leading</span>  design methods.</h1>
					<p class="mt-4">I Specialize in Branding and Strategy, and am passionate about creating Awesome Portfolio work. And I always ready to impress the audience with my Creativity.</p>
					<h6 class="progress-title mt-4">UI/UX Design</h6>
					<div class="progress my-2 rounded">
						<div class="progress-bar bg-quartener wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h6 class="progress-title">Ideas & Technology</h6>
					<div class="progress my-2 rounded">
						<div class="progress-bar bg-quartener wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h6 class="progress-title">Branding Design</h6>
					<div class="progress my-2 rounded">
						<div class="progress-bar bg-quartener wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h6 class="progress-title">Progressive Web Design</h6>
					<div class="progress my-2 rounded">
						<div class="progress-bar bg-quartener wow slideInLeft" data-wow-duration="1s" data-wow-delay=".1s" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="award py-5" id="awards">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-6">
					<h4 class="mb-3 col-lg text-tersier px-0">My Awards and Achievement</h4>
					<h1 class="font-weight-normal text-sekunder title">Professional awards and honors <span class="nama">I’ve reached.</span></h1>
					<p class="mt-4">Personal awards. Having O7 Years of Experience that Motivated by the Desire to achieve Success</p>
					<div class="award-list mt-5">
						<div class="award-item">
							<div class="award-item-photo">
								<img src="<?php echo base_url('assets/images/awards1.png') ?>" alt="" class="img-fluid">
							</div>
							<div class="award-item-detail">
								<span class="award-item-title">Web Design Award</span>
								<p class="award-item-desc">For Best UI/UX Design App</p>
							</div>
						</div>
						<div class="award-item">
							<div class="award-item-photo">
								<img src="<?php echo base_url('assets/images/awards2.png') ?>" alt="" class="img-fluid">
							</div>
							<div class="award-item-detail">
								<span class="award-item-title">INOVATIVE IDEAS DESIGN AWARDS</span>
								<p class="award-item-desc">For Most Loved Illustration</p>
							</div>
						</div>
						<div class="award-item">
							<div class="award-item-photo">
								<img src="<?php echo base_url('assets/images/awards1.png') ?>" alt="" class="img-fluid">
							</div>
							<div class="award-item-detail">
								<span class="award-item-title">CREATIVE DESIGN AWARDS</span>
								<p class="award-item-desc">For Best UX/UI Project Design</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="position-relative px-5">
						<img src="<?php echo base_url('assets/images/awards.png') ?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="portofolio py-5" id="portofolio">
		<div class="row text-center">
			<h4 class="mb-3 col-lg text-tersier">About Me</h4>
		</div>
		<div class="row text-center mb-5">
			<h1 class="col-lg-12 font-weight-normal text-sekunder title">Some of My <span class="nama">Latest Works</span></h1>
		</div>
		<div class="row">
			<div id="carouselPortofolio" class="carousel slide" data-ride="carousel" data-interval="7000">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row row-porto">
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto1.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Digital - Corporate Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto2.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Solutions - Corporate Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto3.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Medpill - Medical Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row row-porto">
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto1.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Digital - Corporate Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto2.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Solutions - Corporate Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto3.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Medpill - Medical Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row row-porto">
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto1.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Digital - Corporate Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto2.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Solutions - Corporate Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url('assets/images/porto3.jpg') ?>" class="img-fluid rounded">
								<a href="#" class="porto-info">
									<h6>Medpill - Medical Template</h6>
									<span>HTML Template</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<ol class="carousel-indicators position-relative mt-4">
					<li data-target="#carouselPortofolio" data-slide-to="0" class="active"></li>
					<li data-target="#carouselPortofolio" data-slide-to="1"></li>
					<li data-target="#carouselPortofolio" data-slide-to="2"></li>
				</ol>
			</div>
		</div>
	</section>

	<section class="partner py-5" id="partners">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-6">
					<h4 class="mb-3 col-lg text-tersier px-0">My Clients and Partners</h4>
					<h1 class="font-weight-normal text-sekunder title">Clients / Partners and <span class="nama">Collaborations.</span></h1>
					<p class="mt-4">Over the past ten years, I've been fortunate to work with and for people from some amazing organizations.</p>
					<div class="award-list mt-5">
						<div class="award-item">
							<div class="award-item-photo">
								1k+
							</div>
							<div class="award-item-detail">
								<span class="award-item-title">TOTAL CLIENTS</span>
								<p class="award-item-desc">over 18 countries</p>
							</div>
						</div>
						<div class="award-item mt-3">
							<div class="award-item-photo">
								95%
							</div>
							<div class="award-item-detail">
								<span class="award-item-title">SENSITIVE FEEDBACK</span>
								<p class="award-item-desc">For Design quality</p>
							</div>
						</div>
						<div class="award-item mt-3">
							<div class="award-item-photo">
								150+
							</div>
							<div class="award-item-detail">
								<span class="award-item-title">TRUSTED SPONSERS</span>
								<p class="award-item-desc">Featued by top rankers</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 text-center mt-4">
					<div class="images">
						<img src="<?php echo base_url('assets/images/partner1.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner2.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner3.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner4.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner1.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner3.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner2.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner4.jpeg') ?>" class="img-fluid">
						<img src="<?php echo base_url('assets/images/partner1.jpeg') ?>" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testi py-3" id="testimonial">
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-6">
					<img src="<?php echo base_url('assets/images/testi.png') ?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 mt-lg-0 mt-4">
					<h4 class="mb-3 col-lg text-tersier px-0">Testimonial</h4>
					<h1 class="font-weight-normal text-sekunder title">What my <span class="nama">clients think</span>about Me</h1>
					<div id="carouselTesti" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<p><span class="mr-1 mb-1 h2"><i class="bi bi-chat-square-quote-fill text-tersier"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta officiis ad, aliquam cumque ut quidem? Atque, pariatur, ratione? Ipsa, dignissimos eos autem fugiat, ut tempore?</p>
								<div class="row mt-4">
									<div class="col-3">
										<img src="<?php echo base_url('assets/images/team1.jpg') ?>" alt="" class="img-fluid rounded-circle">
									</div>
									<div class="col-8 pt-3 px-0">
										<h5 class="name">John Wilson</h5>
										<p class="text-quartener">Seattle,Washington</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<p><span class="mr-1 mb-1 h2"><i class="bi bi-chat-square-quote-fill text-tersier"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta officiis ad, aliquam cumque ut quidem? Atque, pariatur, ratione? Ipsa, dignissimos eos autem fugiat, ut tempore?</p>
								<div class="row mt-4">
									<div class="col-3">
										<img src="<?php echo base_url('assets/images/team2.jpg') ?>" alt="" class="img-fluid rounded-circle">
									</div>
									<div class="col-8 pt-3 px-0">
										<h5 class="name">Mike Tyson</h5>
										<p class="text-quartener">Seattle,Washington</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<p><span class="mr-1 mb-1 h2"><i class="bi bi-chat-square-quote-fill text-tersier"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta officiis ad, aliquam cumque ut quidem? Atque, pariatur, ratione? Ipsa, dignissimos eos autem fugiat, ut tempore?</p>
								<div class="row mt-4">
									<div class="col-3">
										<img src="<?php echo base_url('assets/images/team1.jpg') ?>" alt="" class="img-fluid rounded-circle">
									</div>
									<div class="col-8 pt-3 px-0">
										<h5 class="name">John Wilson</h5>
										<p class="text-quartener">Seattle,Washington</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<p><span class="mr-1 mb-1 h2"><i class="bi bi-chat-square-quote-fill text-tersier"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta officiis ad, aliquam cumque ut quidem? Atque, pariatur, ratione? Ipsa, dignissimos eos autem fugiat, ut tempore?</p>
								<div class="row mt-4">
									<div class="col-3">
										<img src="<?php echo base_url('assets/images/team2.jpg') ?>" alt="" class="img-fluid rounded-circle">
									</div>
									<div class="col-8 pt-3 px-0">
										<h5 class="name">Mike Tyson</h5>
										<p class="text-quartener">Seattle,Washington</p>
									</div>
								</div>
							</div>
						</div>
						<ol class="carousel-indicators position-relative mt-1">
							<li data-target="#carouselTesti" data-slide-to="0" class="active"></li>
							<li data-target="#carouselTesti" data-slide-to="1"></li>
							<li data-target="#carouselTesti" data-slide-to="2"></li>
							<li data-target="#carouselTesti" data-slide-to="3"></li>
						</ol>
					</div>						
				</div>
			</div>
		</div>
	</section>

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
									<a href="<?php echo base_url() ?>blog/<?php echo $tbl_berita->url_slug ?>">
										<img src="<?php echo base_url('assets/berita/') ?><?php echo $tbl_berita->foto ?>" alt="" class="img-fluid rounded-lg">
									</a>
								</div>
								<div class="col-lg-6 blog-info">
									<a href="<?php echo base_url() ?>blog/<?php echo $tbl_berita->url_slug ?>" class="text-decoration-none">
										<h6 class="blog-title"><?php echo $tbl_berita->judul_berita ?></h6>
									</a>
									<p class ="blog-desc"><?php echo substr($tbl_berita->desk,0,400) ?>...</p>
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

		<section class="contact py-5" id="contact">
			<div class="container">
				<div class="row text-center">
					<h4 class="mb-3 col-lg text-tersier">Get in Touch With Me</h4>
				</div>
				<div class="row text-center mb-2">
					<h1 class="col-lg-12 font-weight-normal text-sekunder title">Are you ready to <span class="nama">work together</span></h1>
				</div>
				<div class="text-center mb-5">
					<p>Let's start a Project! Hire Me.</p>
				</div>
				<div class="row mt-md-5 mt-4 pt-lg-3">
					<div class="col-lg-5">
						<p>I’m open to any communication! Feel free to contact me any convenient way!
							I’m always interested in hearing about new projects and opportunities.
						</p>
						<ul class="address mt-md-5 mt-4 list-unstyled">
							<li class="mb-3">
								<p><i class="bi bi-telephone-fill pr-2"></i> <a href="tel:+6285765344445" class="text-sekunder">0857-6534-4445</a></p>
							</li>
							<li class="mb-4">
								<p><i class="bi bi-envelope-fill pr-2"></i> <a href="mailto:hi@ekosurya.id" class="text-sekunder">hi@ekosurya.id</a></p>
							</li>
							<li class="">
								<p><i class="bi bi-geo-alt-fill pr-2"></i>  Jl Besar Tj Anom, Perum Griya Sembada 2, No 5, <br>Medan, Sumatera Utara.</p>
							</li>
						</ul>
					</div>
					<div class="col-lg-7 mt-lg-0 mt-md-5 mt-4">
						<form action="<?php echo site_url('tbl_kontak/create_action')?>" method="post" class="form-group">
							<div class="row">
								<input type="text" class="form-control mb-4 mr-auto p-4 col-md-5" name="nama" id="Name" placeholder="Name" required="">
								<input type="email" class="form-control mb-4 p-4 col-md-6" name="email" id="Sender" placeholder="Email" required="">
							</div>
							<div class="row">
								<input type="text" class="form-control mb-4 p-4" name="subjek" id="Subject" placeholder="Subject" required="">
							</div>
							<div class="row">
								<textarea name="pesan" class="form-control p-4" id="Message" placeholder="Message" required=""></textarea>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-sekunder mt-4">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<div class="copyright py-sm-5 py-4 text-center">
			<div class="container">
				<p class="copy-footer-29">© <?php echo date('Y'); ?> Eko Surya All rights reserved
				</div>
			</div>

			<a href="#" class="toTop btn-lightgreen" id="topBtn" onclick="topFunction()">
				<i class="bi bi-chevron-up"></i>
			</a>
		</body>

		<?php $this->load->view('js') ?>
</html>
