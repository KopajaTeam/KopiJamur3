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

	
								<aside class="section section-teams">
									<div class="container"> <br>
										<div class="section-title-wrap" style="text-align: center;">
											<p class="section-subtitle"><strong>Berikut Produk Produk Kami</strong></p>
										</div> <!-- .section-title-wrap -->
										<div class="teams-section">
											<div class="inner-wrapper">
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img alt="Team" src="<?php echo base_url('assets/images/tea')?>m/gampro.jpg"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Kopi jamur 1</a></h3>
															<p class="team-position">cair</p>
														</div><!-- .team-text-wrap -->
														<!--  -->
														<a class="custom-button" href="Produk/detail_produk">Detail Produk</a>
														<!-- .social-links -->
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img alt="Team" src="<?php echo base_url('assets/images/tea')?>m/gampro.jpg"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Kopi Jamur 2</a></h3>
															<p class="team-position">bubuk</p>
														</div><!-- .team-text-wrap -->
														<a class="custom-button" href="#">Detail Produk</a>
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img alt="Team" src="<?php echo base_url('assets/images/tea')?>m/gampro.jpg"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Kopi jamur 3</a></h3>
															<p class="team-position">cair</p>
														</div><!-- .team-text-wrap -->
														<a class="custom-button" href="#">Detail Produk</a>
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img alt="Team" src="<?php echo base_url('assets/images/tea')?>m/gampro.jpg"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Kopi Jamur 4</a></h3>
															<p class="team-position">bubuk</p>
														</div><!-- .team-text-wrap -->
														<a class="custom-button" href="#">Detail Produk</a>
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="more-wrapper">
													<a href="#" class="custom-button">Explore More</a>
												</div>
											</div> <!-- .inner-wrapper -->
										</div> <!-- .teams-section -->
									</div> <!-- .container -->
								</aside> 

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