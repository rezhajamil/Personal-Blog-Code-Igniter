<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Csrf Token -->
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
			<h1 class="title text-sekunder text-center mb-md-4 mb-3"><?php echo $judul_berita ?></h1>
			<div class="author align-items-center mt-4 mb-1 ">
				<div class="row">
					<div class="col-lg-6 text-right">
						<img src="<?php echo base_url('assets/images/team1.jpg') ?>" alt="" class="img-fluid rounded-circle">
					</div>
					<div class="col-lg-6 text-left pt-lg-4">
						<a href="author.html">Eko Surya</a> 
						in 
						<a href="#url">Html Design</a>
						<p><span class="text-muted h6"><?php echo date("F d, Y", strtotime(substr($tgl_input,0,10)));;  ?></span></p>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="blog-post-main">
		<div class="blog-content pb-5">
			<div class="container pb-lg-4">
				<div class="single-post-image pb-5 text-center">
					<img src="<?php echo base_url('assets/berita/') ?><?php echo $foto ?>" alt="" class="img-fluid rounded-lg">
				</div>	
				<div class="single-post-content">
					<?php echo $berita; ?>
					<!-- Tags -->
					<div class="d-grid left-right mt-5 pb-md-5">
						<div class="buttons-singles tags text-capitalize">
							<h4>Tags :</h4>
							<?php $tag= explode(",",$tags); foreach ($tag as $tag) {?>
								<a href="<?php echo base_url('blog?tag='.$tag) ?>">
									<?php echo $tag;?></a><?php } ?>
								</div>
								<div class="buttons-singles">
									<h4>Share :</h4>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(base_url()) ?><?php echo urlencode($url_slug)  ?>" target="_blank"><span class="bi bi-facebook" aria-hidden="true"></span></a>
									<a href="http://twitter.com/share?url=<?php echo urlencode(base_url()) ?><?php echo urlencode($url_slug)  ?>"><span class="bi bi-twitter" aria-hidden="true" target="_blank"></span></a>
									<a href="whatsapp://send?text=<?php echo urlencode(base_url()) ?><?php echo urlencode($url_slug)  ?>" data-action="share/whatsapp/share" target="_blank"><span class="bi bi-whatsapp" aria-hidden=" true"></span></a>
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
										<h3 class="mb-3 title">Eko Surya</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sed et excepturi.
											Distinctio fugit odit? Fugit ipsam. Lorem ipsum dolor sit.
										</p>
										<ul class="author-icons mt-4 p-0">
											<li><a class="instagram" href="https://www.instagram.com/ekosurya_id/" target="_blank"><span class="bi bi-instagram" aria-hidden="true"></span></a> </li>
											<li><a class="facebook" href="https://web.facebook.com/ekosurya.id/" target="_blank"><span class="fa bi bi-facebook" aria-hidden="true"></span></a>
											</li>
											<li><a class="whatsapp" href="http://wa.me/6285765344445" target="_blank"><span class="bi bi-whatsapp" aria-hidden="true"></span></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="comments mt-5" id="display_comment">
								<h4 class="side-title ">Comments</h4>
								<!-- Comment -->
								<?php
								$id_berita =  $id_berita;
								$query=$this->Tbl_komentar_model->get_by_id_parent('0',$id_berita);
								foreach ($query as $utama):
									?>
									<div class="media mt-4">
										<div class="img-circle">
											<img src="<?php echo base_url('assets/images/Avatar1.png') ?>" class="img-fluid" alt="...">
										</div>
										<div class="media-body">
											<ul class="time-rply mb-2 p-0">
												<li><a href="#URL" class="name mt-0 mb-2 d-block"><?php echo $utama->nama; ?></a>
													<?php echo date("F d, Y", strtotime(substr($utama->tgl_input,0,10)));; ?>

												</li>
												<li class="reply-last">
													<a href="#<?php echo $utama->id_komen ?>" class="reply scroll" onclick="replyBtn('<?php echo $utama->id_komen?>')">
													Reply</a>
												</li>
											</ul>
											<p><?php echo $utama->komen; ?></p>
											<?php
											$id_berita = $id_berita;
											$id_komen=$utama->id_komen;
											$query=$this->Tbl_komentar_model->get_by_id_parent($id_komen,$id_berita);
											foreach ($query as $balasan):
												?>
												<div class="media second mt-4 p-0 pt-2">
													<a class="img-circle img-circle-sm" href="#url">
														<img src="<?php echo base_url('assets/images/Avatar1.png') ?>" class="img-fluid" alt="...">
													</a>
													<div class="media-body">
														<ul class="time-rply mb-2 p-0">
															<li><a href="#URL" class="name mt-0 mb-2 d-block"><?php echo $balasan->nama; ?></a>
																<?php echo date("F d, Y", strtotime(substr($balasan->tgl_input,0,10)));; ?>

															</li>
														</ul>
														<p><?php echo $balasan->komen; ?></p>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>

									<!--Reply Comment Form -->
									<div class="leave-comment-form mt-5 form-balas" id="<?php echo $utama->id_komen ?>" style="display: none;">
										<h4 class="side-title mb-2">Reply Comment</h4>
										<p class="mb-4">Your email address will not be published. Required fields are marked *
										</p>
										<form action="<?php echo base_url('tbl_komentar/create_action');?>
										" method="post" id="form_komen">

										<div class="form-group">
											<textarea name="komen" class="form-control" placeholder="Your Comment*" required="" spellcheck="false" id="komen"></textarea>
										</div>
										<div class="input-grids row">

											<div class="form-group col-lg-6">
												<input type="text" name="nama" class="form-control" placeholder="Your Name*" required="" id="nama_pengirim">
											</div>
											<div class="form-group col-lg-6">
												<input type="email" name="email" class="form-control" placeholder="Email*" required="" id="email">
											</div>
										</div>
										<div class="form-group col-lg-4 p-0">
											<?php  echo $cap_img; ?>
											<div class="validation"> <label for="varchar"> <?php echo form_error('captcha') ?></label></div>
											<input type="text" class="form-control" name="captcha" id="captcha" placeholder="Kode Validasi" data-rule="captcha"  />
											<input type="hidden" name="id_berita" value="<?php echo $id_berita ?>" id="berita_id">
											<input type="hidden" name="url_slug" value="<?php echo $url_slug ?>" id="url_slug">
											<input type="hidden" name="id_parent_komen" id="komentar_id" value="<?php echo $utama->id_komen ?>" >
											<input type="hidden" name="id_komen" id="komentar_id" >
										</div>
										<div class="submit text-right">
											<button class="btn btn-quartener p-3 px-5 text-white">Post Comment </button></div>
										</form>
									</div>	
									<?php 
								endforeach; ?>

								<!-- Comment Form -->
								<div class="leave-comment-form mt-5 form_kirim" id="comment">
									<h4 class="side-title mb-2">Send a Comment</h4>
									<p class="mb-4">Your email address will not be published. Required fields are marked *
									</p>
									<form action="<?php echo base_url('tbl_komentar/create_action');?>
									" method="post" id="form_komen">

									<div class="form-group">
										<textarea name="komen" class="form-control" placeholder="Your Comment*" required="" spellcheck="false" id="komen"></textarea>
									</div>
									<div class="input-grids row">

										<div class="form-group col-lg-6">
											<input type="text" name="nama" class="form-control" placeholder="Your Name*" required="" id="nama_pengirim">
										</div>
										<div class="form-group col-lg-6">
											<input type="email" name="email" class="form-control" placeholder="Email*" required="" id="email">
										</div>
									</div>
									<div class="form-group col-lg-4 p-0">
										<?php  echo $cap_img; ?>
										<div class="validation"> <label for="varchar"> <?php echo form_error('captcha') ?></label></div>
										<input type="text" class="form-control" name="captcha" id="captcha" placeholder="Kode Validasi" data-rule="captcha"  />
										<input type="hidden" name="id_berita" value="<?php echo $id_berita ?>" id="berita_id">
										<input type="hidden" name="url_slug" value="<?php echo $url_slug ?>" id="url_slug">
										<input type="hidden" name="id_komen" id="komentar_id" >
										<input type="hidden" name="id_parent_komen" id="komentar_id" value="0" >
									</div>
									<div class="submit text-right">
										<button class="btn btn-quartener p-3 px-5 text-white">Post Comment </button>
									</div>
									</form>
								</div>
							</div>
							<!-- Related Post -->
							<div class="related-post mt-5 pt-lg-5">
								<h3 class="section-title-left mb-4 pb-lg-2">Maybe You are Interested in </h3>
								<div class="row">
									<?php foreach($tbl_berita_data as $tbl_berita) { ?>
									<div class="col-lg-6">
										<div class="grids5-info">
											<a href="<?php echo base_url() ?>blog/<?php echo $tbl_berita->url_slug ?>">
												<img src="<?php echo base_url('assets/berita/') ?><?php echo $tbl_berita->foto ?>" alt="" class="img-fluid rounded-lg">
											</a>
											<div class="blog-info align-self-center">
												<a href="<?php echo base_url() ?>blog/<?php echo $tbl_berita->url_slug ?>" class="text-decoration-none">
													<h5 class="blog-title"><?php echo $tbl_berita->judul_berita ?></h5>
												</a>
												<div class="author align-items-center mt-4 mb-1">
													<a href="author.html">Eko Surya</a> 
													in 
													<a href="#url">Html Design</a>
													<p><span class="text-muted h6"><?php echo date("F d, Y", strtotime(substr($tgl_input,0,10)));;  ?></span></p>
												</div>	
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Footer -->
			<div class="copyright py-sm-5 py-4 text-center">
				<div class="container">
					<p class="copy-footer-29">© <?php echo date('Y') ?> Eko Surya All rights reserved
					</div>
				</div>

				<a href="#" class="toTop" id="topBtn" onclick="topFunction()">
					<i class="bi bi-chevron-up"></i>
				</a>
			</body>
			<?php $this->load->view('js') ?>
			</html>
