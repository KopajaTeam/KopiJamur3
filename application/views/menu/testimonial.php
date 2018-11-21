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
						<h1 class="page-title">Testimonial</h1>
						<div id="breadcrumb">
							<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
								<ul class="trail-items">
									<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
									<li class="trail-item trail-end"><span>Testimonial</span></li>
								</ul>
							</div> <!-- .breadcrumbs -->
						</div> <!-- #breadcrumb -->
					</div> <!-- .container -->
				</div>  <!-- .custom-header-content -->
			</div> <!-- .custom-header -->
			<aside class="section section-testimonial dark-background">
				<div class="container"><br><br>
					<div class="testimonial-carousel-wrapper iteam-col-3 section-carousel-enabled">
						<?php foreach ($testimoni as $testi) { ?>
							<div class="testimonial-item col-grid-6">
								<div class="testimonial-wrapper">
									<div class="testimonial-thumb">
										<a href="#"><img style="margin-bottom: -20px" alt="" src="<?php echo base_url($testi->foto); ?>"></a>
									</div><!-- .testimonial-thumb -->
									<div class="testimonial-summary">
										<p><?php echo $testi->nama; ?></p>
												
														<h3 class="testimonial-title"><?php echo $testi->nama_produk; ?></h3>
														
													</div><!-- .testimonial-summary -->
													<div class="portfolio-item  graphic-design"  style="border-radius: 0;">
														<div class="item-inner-wrapper" >
															<img style="border-radius: 0"  src="<?php echo base_url($testi->gambar_testi); ?>" alt="Portfolio" class="portfolio-thumb">
															<div class="overlay"></div>
															<div class="portfolio-content">
																<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url($testi->gambar_testi); ?>"><i class="fas fa-search" aria-hidden="true"></i></a>
																<h3><a href="#" ></a></h3>
																<p></p>
															</div>
														</div>
													</div><!-- end item -->
													
													<p class="testimonial-position"  ><?php echo $testi->komentar; ?></p>
												</div> <!-- .testimonial-wrapper -->

											</div> <!-- .testimonial-item  -->

										<?php } ?>
									</div> <!-- .testimonial-carousel-wrapper -->

								</div><!-- .container -->
							</aside> <!-- .section section-testimonial-carousel -->


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