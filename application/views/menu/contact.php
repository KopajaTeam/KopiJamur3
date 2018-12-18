<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/head') ?>
<body class="home header-v1">
		<!-- <div id="fakeloader"></div> -->
		<!-- <div class="color-switcher" id="choose_color"> -->
			<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
<?php $this->load->view('user/header') ?>
<?php $this->load->view('user/mainnav') ?>

<div id="custom-header">
	<div class="custom-header-content">
		<div class="container">
			<h1 class="page-title">Contact</h1>
			<div id="breadcrumb">
				<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
					<ul class="trail-items">
						<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
						<li class="trail-item trail-end"><span>Contact</span></li>
					</ul>
				</div> <!-- .breadcrumbs -->
			</div> <!-- #breadcrumb -->
		</div> <!-- .container -->
	</div>  <!-- .custom-header-content -->
</div> <!-- .custom-header -->	

<div id="content" class="site-content global-layout-no-sidebar">
	<div class="container">
		<div class="inner-wrapper">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<aside class="section section-testimonial lite-background">
						<div class="container">
							<div class="testimonial-carousel-wrapper">
								<div class="testimonial-item col-grid-6">
									<div class="testimonial-wrapper">
										<div class="testimonial-thumb">
											<a href="#"><img alt="" src="<?php echo base_url('assets/images')?>/team/team1.jpg"></a>
										</div><!-- .testimonial-thumb -->
										<div class="testimonial-summary">
											<h3 class="testimonial-title"><a href="#">M. Zainudin</a></h3>
											<p class="testimonial-position">(Owner)</p>
											<br>
											<div>
												<p class="fa fa-address-book"> : 082143211521</p> <br>
												<p class="fa fa-envelope"> : kopijamurprestasi@gmail.com</p>
											</div>
										</div><!-- .testimonial-summary -->
									</div> <!-- .testimonial-wrapper -->
								</div> <!-- .testimonial-item  -->
								<div class="testimonial-item col-grid-6">
									<div class="testimonial-wrapper">
										<div class="testimonial-thumb">
											<a href="#"><img alt="" src="<?php echo base_url('assets/images')?>/team/team2.jpg"> </a>
										</div><!-- .testimonial-thumb -->
										<div class="testimonial-summary">
											<h3 class="testimonial-title"><a href="#">mbak sekretaris</a></h3>
											<p class="testimonial-position">(Sekretaris)</p>
											<br>
											<div>
												<p class="fa fa-address-book"> : 082143211521</p> <br>
												<p class="fa fa-envelope"> : kopijamurprestasi@gmail.com</p>
											</div>
										</div><!-- .testimonial-summary -->
									</div> <!-- .testimonial-wrapper -->
								</div> <!-- .testimonial-item  -->
								<div class="testimonial-item col-grid-6">
									<div class="testimonial-wrapper">
										<div class="testimonial-thumb">
											<a href="#"><img alt="" src="<?php echo base_url('assets/images')?>/team/team3.jpg"> </a>
										</div><!-- .testimonial-thumb -->
										<div class="testimonial-summary">
											<h3 class="testimonial-title"><a href="#">Mbak bendahara</a></h3>
											<p class="testimonial-position">(Bendahara)</p>
											<br>
											<div>
												<p class="fa fa-address-book"> : 082143211521</p> <br>
												<p class="fa fa-envelope"> : kopijamurprestasi@gmail.com</p>
											</div>
										</div><!-- .testimonial-summary -->
									</div> <!-- .testimonial-wrapper -->
								</div> <!-- .testimonial-item  -->
								<div class="testimonial-item col-grid-6">
									<div class="testimonial-wrapper">
										<div class="testimonial-thumb">
											<a href="#"><img alt="" src="<?php echo base_url('assets/images')?>/team/team3.jpg"> </a>
										</div><!-- .testimonial-thumb -->
										<div class="testimonial-summary">
											<h3 class="testimonial-title"><a href="#">Bebas</a></h3>
											<p class="testimonial-position">(Bebas)</p>
											<br>
											<div>
												<p class="fa fa-address-book"> : 082143211521</p> <br>
												<p class="fa fa-envelope"> : kopijamurprestasi@gmail.com</p>
											</div>
										</div><!-- .testimonial-summary -->
									</div> <!-- .testimonial-wrapper -->
								</div> <!-- .testimonial-item  -->
							</div> <!-- .testimonial-carousel-wrapper -->
						</div><!-- .container -->
					</aside> <!-- .section section-testimonial-carousel -->
				</main> <!-- #main -->
			</div> <!-- #primary -->
		</div> <!-- .inner-wrapper -->
	</div>
</div>
<div id="btn-scrollup">
			<a  title="Go Top"  class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
		</div>

<?php $this->load->view('user/wiget') ?>
<?php $this->load->view('user/sosmed') ?>
<?php $this->load->view('user/footer') ?>	
<?php $this->load->view('user/jscript') ?>