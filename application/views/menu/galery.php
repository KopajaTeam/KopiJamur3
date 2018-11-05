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
								<aside class="section section-portfolio">
									<div class="container">
										<nav class="portfolio-filter">
											<ul>
												<li><a class="active" href="#" data-filter="*"><span></span> Kegiatan Perusahan</a></li>
												<!-- <li><a class="" href="#" data-filter=".web-design">Kegiatan Perusahan</a></li> -->
												<!-- <li><a class="" href="#" data-filter=".graphic-design">Graphic Design</a></li> -->
												<!-- <li><a class="" href="#" data-filter=".photography">Photography</a></li> -->
											</ul>
										</nav>

										<div id="portfolio" class="masonry-wrapper row-fluid wow fadeInUp">
											<div class="portfolio-item  photography">
												<div class="item-inner-wrapper">
													<img src="<?php echo base_url('assets/images/portfolio')?>/portfolio-1.jpg" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url('assets/images/portfolio')?>/portfolio-1.jpg"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" >Works Title</a></h3>
														<p>Web Design, Business, Photography</p>
													</div>
												</div>
											</div><!-- end item -->
											<div class="portfolio-item  graphic-design">
												<div class="item-inner-wrapper">
													<img src="<?php echo base_url('assets/images/portfolio')?>/portfolio-2.jpg" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url('assets/images/portfolio')?>/portfolio-2.jpg"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" >Works Title</a></h3>
														<p>Kegiatan Perusahaan</p>
													</div>
												</div>
											</div><!-- end item -->
											<div class="portfolio-item  photography">
												<div class="item-inner-wrapper">
													<img src="<?php echo base_url('assets/images/portfolio')?>/portfolio-3.jpg" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url('assets/images/portfolio')?>/portfolio-3.jpg"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" >Works Title</a></h3>
														<p>Kegiatan Perusahaan</p>
													</div>
												</div>
											</div><!-- end item -->
											<div class="portfolio-item  web-design">
												<div class="item-inner-wrapper">
													<img src="<?php echo base_url('assets/images/portfolio')?>/portfolio-4.jpg" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url('assets/images/portfolio')?>/portfolio-4.jpg"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" >Works Title</a></h3>
														<p>Web Design, Business, Photography</p>

													</div>
												</div>
											</div><!-- end item -->
											<div class="portfolio-item  photography">
												<div class="item-inner-wrapper">
													<img src="<?php echo base_url('assets/images/portfolio')?>/portfolio-5.jpg" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url('assets/images/portfolio')?>/portfolio-5.jpg"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" >Works Title</a></h3>
														<p>Web Design, Business, Photography</p>

													</div>
												</div>
											</div><!-- end item -->
											<div class="portfolio-item  graphic-design">
												<div class="item-inner-wrapper">
													<img src="<?php echo base_url('assets/images/portfolio')?>/portfolio-6.jpg" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url('assets/images/portfolio')?>/portfolio-6.jpg"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" >Works Title</a></h3>
														<p>Web Design, Business, Photography</p>
													</div>
												</div>
											</div><!-- end item -->
										</div>
										<div class="more-wrapper">
											<a href="#" class="custom-button">Explore More</a>
										</div>
									</div><!-- end masonry-wrapper -->
								</aside><!-- end portfolio -->
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