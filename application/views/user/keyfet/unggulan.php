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
<?php $this->load->view('user/headnav') ?>
			<div id="content" class="site-content global-layout-no-sidebar">
				<div class="container">
					<div class="inner-wrapper">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" >
								<section class="section portfolio-single-main">
									<div class="container">
										<div class="inner-wrapper">
											<div class="col-grid-6">
												<img src="<?php echo base_url();?>assets/images/portfolio/portfolio-1.jpg">
											</div>
											<div class="col-grid-6">
												<h3>Project Details</h3>
												<p>Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.</p>
												
												<div class="social-links circle brand-color">
													<h4> Share:</h4>
													<ul>
														<li><a href="http://facebook.com/" target="_blank"></a></li>
														<li><a href="http://instagram.com/" target="_blank"></a></li>
														<li><a href="http://youtube.com/" target="_blank"></a></li>
														<li><a href="http://twitter.com/" target="_blank"></a></li>
														<li><a href="http://linkedin.com/" target="_blank"></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div><!-- .container -->
								</section><!-- .portfolio-single-main -->
								<aside class="section section-call-to-action cta-fluid lite-background">
									<div class="call-to-action-inner-wrapper">
										<div class="container">
											<div class="call-to-action-content">
												<div class="call-to-action-description">
													<p class="section-top-subtitle">Customize Work</p>
													<h2 class="section-title">Interested in work with us?</h2>
													<p class="section-subtitle">Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. Praesent sed elit. Nulla posuere. Etiam sit amet turpis. Nullam mattis libero non</p>
												</div><!-- .call-to-action-description -->
												<div class="call-to-action-buttons">
													<a href="#"  class="custom-button custom-primary">Contact Us</a>
												</div><!-- .call-to-action-buttons -->
											</div><!-- .call-to-action-content -->
										</div> <!-- .container -->
									</div> <!-- .call-to-action-inner-wrapper" -->
								</aside> <!-- .section-call-to-action -->
							</main> <!-- #main -->
						</div> <!-- #primary -->
					</div> <!-- .inner-wrapper -->
				</div> <!-- .container -->
			</div> <!-- #content-->
<?php $this->load->view('user/wiget') ?>

<?php $this->load->view('user/sosmed') ?>

<?php $this->load->view('user/footer') ?>	
		
		</div> <!--#page-->
		<div id="btn-scrollup">
			<a  title="Go Top"  class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
		</div>
<?php $this->load->view('user/jscript') ?>	
	</body>

</html>