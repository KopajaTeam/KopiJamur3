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
						<h1 class="page-title">Produk</h1>
						<div id="breadcrumb">
							<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
								<ul class="trail-items">
									<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
									<li class="trail-item trail-end"><span>Produk</span></li>
								</ul>
							</div> <!-- .breadcrumbs -->
						</div> <!-- #breadcrumb -->
					</div> <!-- .container -->
				</div>  <!-- .custom-header-content -->
			</div> <!-- .custom-header -->	


			<aside class="section section-teams">
				<div class="container"> <br>
					<div class="teams-section">
						<div class="inner-wrapper">
							<?php foreach ($produk as $data_produk) { ?>
							<div class="col-grid-3 team-item">
								<div class="thumb-summary-wrap box-shadow-block">
									<div class="team-thumb">
										<a href="#" target="-sefl"> <img alt="Team" src="<?php echo base_url('assets/images/tea')?>m/gampro.jpg"></a>
									</div><!-- .team-thumb-->
									<div class="team-text-wrap">
										<h3 class="team-title"><a href="#"><?php echo $data_produk->nama_produk; ?></a></h3>
										<p class="team-position"><?php echo $data_produk->nama_kategori_produk; ?></p>
									</div><!-- .team-text-wrap -->
									<!--  -->
									<a class="custom-button" href="Produk/detail_produk">Detail Produk</a>
									<!-- .social-links -->
								</div> <!-- .team-item -->
							</div> <!-- .team-item  -->
							<?php } ?>
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