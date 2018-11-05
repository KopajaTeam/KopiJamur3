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

<!-- <?php //$this->load->view('user/slide') ?> -->
	
<?php $this->load->view('user/headnav') ?>	

<div id="content" class="site-content default-full-width blog-grid-layout">
<div class="container">
					<div class="inner-wrapper">
						<div id="primary" class="content-area">
							<main id="main" class="site-main">
								<div class="inner-wrapper">
									<article class="hentry post col-grid-4">
										<div class="entry-content-wrapper box-shadow-block">
											<div class="entry-thumb aligncenter">
												<a  href="#" >
													<img  src="<?php echo base_url('assets/images/blog')?>/blog-1.jpg" alt="Blog">
												</a>
											</div> <!-- .entry-thumb -->
												<header class="entry-header">
													<h2 class="entry-title"><a href="#" rel="bookmark">Product Designing & Marketing</a></h2>
												</header><!-- .entry-header -->
												<div class="entry-meta">
													<span class="posted-on">June 13, 2017</span>
													<span class="cat-links"><a href="#" rel="category tag">Agency</a></span>
												</div><!-- .entry-meta -->
												<div class="entry-content">
													<p>aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet.</p>
													<a href="<?php echo base_url('Forum/detail_forum')?>" class="custom-button">Read More</a>
												</div><!-- .entry-content -->
											</div><!-- .entry-content-wrapper -->
									</article><!-- .post -->
									<article class="hentry post col-grid-4">
										<div class="entry-content-wrapper box-shadow-block">
											<div class="entry-thumb aligncenter">
												<a  href="#" >
													<img  src="<?php echo base_url('assets/images/blog')?>/blog-2.jpg" alt="Blog">
												</a>
											</div> <!-- .entry-thumb -->
											<header class="entry-header">
												<h2 class="entry-title"><a href="#" rel="bookmark">Investment & Brand Acquisition</a></h2>
											</header><!-- .entry-header -->
											<div class="entry-meta">
												<span class="posted-on">June 13, 2017</span>
												<span class="cat-links"><a href="#" rel="category tag">Business</a></span>
											</div><!-- .entry-meta -->
											<div class="entry-content">
												<p>aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet.</p>
												<a href="#" class="custom-button">Read More</a>
											</div><!-- .entry-content -->
										</div><!-- .entry-content-wrapper -->
									</article><!-- .post -->
									<article class="hentry post col-grid-4">
										<div class="entry-content-wrapper box-shadow-block">
											<div class="entry-thumb aligncenter">
												<a  href="#" >
													<img  src="<?php echo base_url('assets/images/blog')?>/blog-3.jpg" alt="Blog">
												</a>
											</div> <!-- .entry-thumb -->
											<header class="entry-header">
												<h2 class="entry-title"><a href="#" rel="bookmark">Website Design & Development</a></h2>
											</header><!-- .entry-header -->
											<div class="entry-meta">
												<span class="posted-on">June 13, 2017</span>
												<span class="cat-links"><a href="#" rel="category tag">Corporate</a></span>
											</div><!-- .entry-meta -->
											<div class="entry-content">
												<p>aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet.</p>
												<a href="#" class="custom-button">Read More</a>
											</div><!-- .entry-content -->
										</div><!-- .entry-content-wrapper -->
									</article><!-- .post -->
									<article class="hentry post col-grid-4">
										<div class="entry-content-wrapper box-shadow-block">
											<div class="entry-thumb aligncenter">
												<a  href="#" >
													<img  src="<?php echo base_url('assets/images/blog')?>/blog-4.jpg" alt="Blog">
												</a>
											</div> <!-- .entry-thumb -->

											<header class="entry-header">
												<h2 class="entry-title"><a href="#" rel="bookmark">Beautiful Day With Friends </a></h2>
											</header><!-- .entry-header -->
											<div class="entry-meta">
												<span class="posted-on">June 13, 2017</span>
												<span class="cat-links"><a href="#" rel="category tag">Business</a></span>
											</div><!-- .entry-meta -->
											<div class="entry-content">
												<p>aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet.</p>
												<a href="#" class="custom-button">Read More</a>
											</div><!-- .entry-content -->
										</div><!-- .entry-content-wrapper -->
									</article> <!-- .post -->
									<article class="hentry post col-grid-4">
										<div class="entry-content-wrapper box-shadow-block">
											<div class="entry-thumb aligncenter">
												<a  href="#" >
													<img  src="<?php echo base_url('assets/images/blog')?>/blog-5.jpg" alt="Blog">
												</a>
											</div> <!-- .entry-thumb -->
											<header class="entry-header">
												<h2 class="entry-title"><a href="#" rel="bookmark">Friends In Paris Streets</a></h2>
											</header><!-- .entry-header -->
											<div class="entry-meta">
												<span class="posted-on">June 13, 2017</span>
												<span class="cat-links"><a href="#" rel="category tag">Nature</a></span>
											</div><!-- .entry-meta -->
											<div class="entry-content">
												<p>aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet.</p>
												<a href="#" class="custom-button">Read More</a>
											</div><!-- .entry-content -->
										</div><!-- .entry-content-wrapper -->
									</article> <!-- .post -->
									<article class="hentry post col-grid-4">
										<div class="entry-content-wrapper box-shadow-block">
											<div class="entry-thumb aligncenter">
												<a  href="#" >
													<img  src="<?php echo base_url('assets/images/blog')?>/blog-3.jpg" alt="Blog">
												</a>
											</div> <!-- .entry-thumb -->
											<header class="entry-header">
												<h2 class="entry-title"><a href="#" rel="bookmark">Website Design & Development</a></h2>
											</header><!-- .entry-header -->
											<div class="entry-meta">
												<span class="posted-on">June 13, 2017</span>
												<span class="cat-links"><a href="#" rel="category tag">Corporate</a></span>
											</div><!-- .entry-meta -->
											<div class="entry-content">
												<p>aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet.</p>
												<a href="#" class="custom-button">Read More</a>
											</div><!-- .entry-content -->
										</div><!-- .entry-content-wrapper -->
									</article><!-- .post -->
								</div> <!-- .inner-wrapper -->
								<nav class="navigation pagination">
									<div class="nav-links">
										<span class="page-numbers current">1</span>
										<a class="page-numbers" href="#" >2</a>
										<a class="page-numbers" href="#" >3</a>
										<a class="next page-numbers" href="#" >Next »</a>
									</div> <!-- .nav-links -->
								</nav> <!-- .navigation.pagination -->
							</main> <!-- #main -->
						</div> <!-- #primary -->

					</div> <!-- #inner-wrapper -->
				</div><!-- .container -->
			</div> <!-- #content--> 	
		</div>

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