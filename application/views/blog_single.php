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

	<div class="py-md-5 pt-5 pb-3 blog-post text-center">
		<div class="container pt-lg-4 pt-md-3">
			<h4 class="text-tersier">Single post </h4>
			<h1 class="title text-sekunder text-center mb-md-4 mb-3">Why it is important to know who your competition is and their prices</h1>
			<div class="author align-items-center mt-4 mb-1 ">
				<div class="row">
					<div class="col-lg-6 text-right">
						<img src="<?php echo base_url('assets/images/team1.jpg') ?>" alt="" class="img-fluid rounded-circle">
					</div>
					<div class="col-lg-6 text-left pt-lg-4">
						<a href="author.html">Mike Tyson</a> 
						in 
						<a href="#url">Html Design</a>
						<p><span class="text-muted h6">July 20, 2020</span></p>		
					</div>
				</div>


			</div>
		</div>
	</div>
	<section class="blog-post-main">
		<div class="blog-content pb-5">
			<div class="container pb-lg-4">
				<div class="single-post-image pb-5">
					<img src="<?php echo base_url('assets/images/blogsingle.jpg') ?>" alt="" class="img-fluid rounded-lg">
				</div>	
				<div class="single-post-content">
					<p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus odit, possimus aut dolores, itaque a cum fugiat officiis consectetur obcaecati non voluptate accusamus et veniam est atque iste saepe quae.</p>
					<p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus odit, possimus aut dolores, itaque a cum fugiat officiis consectetur obcaecati non voluptate accusamus et veniam est atque iste saepe quae.</p>
					<h3 class="m-0 mb-4 font-weight-bold">What makes a good blog post?</h3>
					<p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita esse error enim repellat, architecto corporis rerum ipsa alias cum!</p>
					<p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis.</p>
					<p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita esse error enim repellat, architecto corporis rerum ipsa alias cum!</p>
					<div class="sing-post-thumb mb-5 row pt-3">
						<div class="col-sm-6">
							<a href="#url"><img src="<?php echo base_url('assets/images/blog1.jpg') ?>" class="img-fluid rounded-lg" alt=""></a>
						</div>
						<div class="col-sm-6 mt-sm-0 mt-3">
							<a href="#url"><img src="<?php echo base_url('assets/images/blog2.jpg') ?>" class="img-fluid rounded-lg"></a>
						</div>
					</div>
					<h3 class="m-0 mb-4 font-weight-bold">How to wite a Blog Post</h3>

					<p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Lorem ipsum dolor, sit amet elit.</p>
					<div class="text-list mb-4">
						<ol>
							<li>Understand your audience. </li>
							<li>Create your blog domain. </li>
							<li>Sign Up With a Content Management System </li>
							<li>Register a Domain or Subdomain With a Website Host </li>
							<li>Customize your blog's theme. </li>
							<li>Identify your first blog post's topic.</li>
						</ol>
					</div>
					<p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita esse error enim repellat, architecto corporis rerum ipsa alias cum!</p>
					<p class="mb-5">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis.</p>
					<h3 class="m-0 mb-4 font-weight-bold">Search for Inspiration</h3>
					<p class="mb-4">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Domains In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. Sub Domains In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</p>
					<p class="mb-4">Dolor sit sed amet, excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis.</p>
					<!-- Tags -->
					<div class="d-grid left-right mt-5 pb-md-5">
						<div class="buttons-singles tags">
							<h4>Tags :</h4>
							<a href="#blog-tag">Culture</a>
							<a href="#blog-tag">Sports</a>
							<a href="#blog-tag">Technology</a>
						</div>
						<div class="buttons-singles">
							<h4>Share :</h4>
							<a href="#blog-share"><span class="bi bi-facebook" aria-hidden="true"></span></a>
							<a href="#blog-share"><span class="bi bi-twitter" aria-hidden="true"></span></a>
							<a href="#blog-share"><span class="bi bi-linkedin" aria-hidden="true"></span></a>
							<a href="#blog-share"><span class="bi bi-instagram" aria-hidden=" true"></span></a>
						</div>
					</div>
					<!-- Author -->
					<div class="author-card mt-5">
						<div class="row align-items-center">
							<div class="col-lg-3 col-md-4 col-6">
								<div class="author-img">
									<img src="<?php echo base_url('assets/images/team2.jpg') ?>" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-lg-9 col-md-8 mt-sm-0 mt-3">
								<h3 class="mb-3 title">Mike Tyson</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sed et excepturi.
									Distinctio fugit odit? Fugit ipsam. Lorem ipsum dolor sit.
								</p>
								<ul class="author-icons mt-4 p-0">
									<li><a class="instagram" href="#url"><span class="bi bi-instagram" aria-hidden="true"></span></a> </li>
									<li><a class="linkedin" href="#url"><span class="bi bi-linkedin" aria-hidden="true"></span></a></li>
									<li><a class="facebook" href="#url"><span class="fa bi bi-facebook" aria-hidden="true"></span></a>
									</li>
									<li><a class="twitter" href="#url"><span class="bi bi-twitter" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Comment -->
					<div class="comments mt-5">
						<h4 class="side-title ">Comments (2)</h4>
						<div class="media mt-4">
							<div class="img-circle">
								<img src="<?php echo base_url('assets/images/Avatar1.png') ?>" class="img-fluid" alt="...">
							</div>
							<div class="media-body">

								<ul class="time-rply mb-2 p-0">
									<li><a href="#URL" class="name mt-0 mb-2 d-block text-decoration-none">William Jack</a>
										July 20, 2020 - 10:02 pm
									</li>
									<li class="reply-last">
										<a href="#reply" class="reply">
										Reply</a>
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, hic
								reprehenderit eum cupiditate deleniti, Lorem ipsum dolor sit amet adipisicing.</p>
							</div>
						</div>
						<div class="media">
							<div class="img-circle">
								<img src="<?php echo base_url('assets/images/Avatar1.png') ?>" class="img-fluid" alt="...">
							</div>
							<div class="media-body">
								<ul class="time-rply mb-2 p-0">
									<li><a href="#URL" class="name mt-0 mb-2 d-block">James Harper</a>
										July 20, 2020 - 12:30 pm

									</li>
									<li class="reply-last">
										<a href="#reply" class="reply">
										Reply</a>
									</li>
								</ul>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing. Ea illum facere aperiam sequi optio
									consectetur adipisicing elitFuga,
								suscipit totam animi.</p>
								<div class="media second mt-4 p-0 pt-2">
									<a class="img-circle img-circle-sm" href="#url">
										<img src="<?php echo base_url('assets/images/Avatar1.png') ?>" class="img-fluid" alt="...">
									</a>
									<div class="media-body">
										<ul class="time-rply mb-2 p-0">
											<li><a href="#URL" class="name mt-0 mb-2 d-block">Jackson Wyatt</a>
												July 20, 2020 - 14:20 pm

											</li>
											<li class="reply-last">
												<a href="#reply" class="reply"> Reply</a>
											</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
										corrupti quos dolores et. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Comment Form -->
					<div class="leave-comment-form mt-5" id="reply">
						<h4 class="side-title mb-2">Leave a Reply</h4>
						<p class="mb-4">Your email address will not be published. Required fields are marked *
						</p>
						<form action="#" method="post">

							<div class="form-group">
								<textarea name="Comment" class="form-control" placeholder="Your Comment*" required="" spellcheck="false"></textarea>
							</div>
							<div class="input-grids row">

								<div class="form-group col-lg-6">
									<input type="text" name="Name" class="form-control" placeholder="Your Name*" required="">
								</div>
								<div class="form-group col-lg-6">
									<input type="email" name="Email" class="form-control" placeholder="Email*" required="">
								</div>
							</div>

							<div class="submit text-right">
								<button class="btn btn-quartener p-3 px-5 text-white">Post Comment </button></div>
							</form>
						</div>
						<!-- Related Post -->
						<div class="related-post mt-5 pt-lg-5">
							<h3 class="section-title-left mb-4 pb-lg-2">Maybe You are Interested in </h3>
							<div class="row">
								<div class="col-lg-6">
									<div class="grids5-info">
										<a href="<?php echo base_url() ?>blog_single">
											<img src="<?php echo base_url('assets/images/blog1.jpg') ?>" alt="" class="img-fluid rounded-lg">
										</a>
										<div class="blog-info align-self-center">
											<a href="<?php echo base_url() ?>blog_single" class="text-decoration-none">
												<h5 class="blog-title">Top Marketing Tips from Pro Photographers</h5>
											</a>
											<div class="author align-items-center mt-4 mb-1">
												<a href="author.html">Mike Tyson</a> 
												in 
												<a href="#url">Html Design</a>
												<p><span class="text-muted h6">July 20, 2020</span></p>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="grids5-info">
										<a href="<?php echo base_url() ?>blog_single">
											<img src="<?php echo base_url('assets/images/blog3.jpg') ?>" alt="" class="img-fluid rounded-lg">
										</a>
										<div class="blog-info align-self-center">
											<a href="<?php echo base_url() ?>blog_single" class="text-decoration-none">
												<h5 class="blog-title">The Best Site of the day for Weather Conditions</h5>
											</a>
											<div class="author align-items-center mt-4 mb-1">
												<a href="author.html">Mike Tyson</a> 
												in 
												<a href="#url">Html Design</a>
												<p><span class="text-muted h6">July 20, 2020</span></p>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
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
