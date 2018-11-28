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
			<h1 class="page-title">Gallery</h1>
			<div id="breadcrumb">
				<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
					<ul class="trail-items">
						<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
						<li class="trail-item trail-end"><span>Gallery</span></li>
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
											<?php foreach ($gallery as $data_galeri) { ?>
											<div class="portfolio-item  photography">
												<div class="item-inner-wrapper">
													<img style="width: 500px;height: 300px" src="<?php echo base_url($data_galeri->gambar_gallery )?>" alt="Portfolio" class="portfolio-thumb">
													<div class="overlay"></div>
													<div class="portfolio-content">
														<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url($data_galeri->gambar_gallery)?>"><i class="fas fa-search" aria-hidden="true"></i></a>
														<h3><a href="#" ><?php echo $data_galeri->nama_gallery;?></a></h3>
														<p><?php echo $data_galeri->deskripsi_gallery;?></p>
													</div>
												</div>
											</div><!-- end item -->
											<?php } ?>
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