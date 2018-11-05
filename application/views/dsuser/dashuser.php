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

			
<?php $this->load->view('dsuser/kontends')?>

<?php $this->load->view('user/mainnav') ?>
<!-- <?php //$this->load->view('user/slide') ?> -->
<aside class="section section-services service-layout-1">
<div class="container">
										<div class="section-title-wrap">
											<h2 class="section-title">Hi Bahrul</h2>
											<span class="divider"></span>
											<p class="section-subtitle"> Selamat Berbelanja </p>
										</div>
										<div class="service-block-list">
											<div class="inner-wrapper">
												<div class="col-grid-4 service-block-item">
													<div class="service-block-inner box-shadow-block">
														<a class="service-icon" href="#" ><i class="icon-tools"></i></a>
														<div class="service-block-inner-content">
															<h3 class="service-item-title"><a href="#" >Riwayat Pembelian</a></h3>
															<div class="service-block-item-excerpt">
																<p></p>
																<a href="#" class="more-link">Klik Here</a>
															</div><!-- .service-block-item-excerpt -->
														</div><!-- .service-block-inner-content -->
													</div> <!-- .service-block-inner -->
												</div> <!-- .service-block-item -->
												<div class="col-grid-4 service-block-item">
													<div class="service-block-inner box-shadow-block">
														<a class="service-icon" href="#" ><i class="icon-clipboard"></i></a>
														<div class="service-block-inner-content">
															<h3 class="service-item-title"><a href="#" >Data Diri</a>  </h3>
															<div class="service-block-item-excerpt">
																<p></p>
																<a href="#" class="more-link">Klik Here</a>
															</div><!-- .service-block-item-excerpt -->
														</div><!-- .service-block-inner-content -->
													</div> <!-- .service-block-inner -->
												</div> <!-- .service-block-item -->
												<div class="col-grid-4 service-block-item">
													<div class="service-block-inner box-shadow-block">
														<a class="service-icon" href="#" ><i class="icon-mobile"></i></a>
														<div class="service-block-inner-content">
															<h3 class="service-item-title"><a href="#" >Testimoni</a>  </h3>
															<div class="service-block-item-excerpt">
																<p></p>
																<a href="#" class="more-link">Klik Here</a>
															</div><!-- .service-block-item-excerpt -->
														</div><!-- .service-block-inner-content -->
													</div> <!-- .service-block-inner -->
												</div> <!-- .service-block-item -->
											</div>
										</div>
									</div>
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