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
						<li class="trail-item"><span>Produk</span></li>
						<li class="trail-item trail-end"><span>Detail Produk</span></li>
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
								<section class="section portfolio-single-main">
									<div class="container">
										<div class="inner-wrapper">
											<div class="col-grid-6">
												<img style="width: 1000px; height: 350px " src="<?php echo base_url('assets/images')?>/portfolio/single-portfolio.jpg">
											</div>
											<div class="col-grid-6">
											 <h3> Produk 1</h3>
											 <p>Berikut profil singkat saya. M zainudin sebaagai owner Kopi Jamur Prestasi.</p>
											 <div class="portfolio-info">
												 <ul class="list-check">
												 	 <li><strong><i>Pendidikan Terakhir Di</i></strong>: <span>POLITEKNIK NEGERI JEMBER</span></li> <br>
													<li><strong><i>Jurusan</i></strong>: <span>Pertanian</span></li><br>
													<li><strong><i>Prodi </i></strong>: <span>D3 Manajemen Hasil Pertanian</span></li> <br>
													<li><strong><i>Jabatan Dalam Perusahaan</i></strong> : <span>Owner Kopi Jamur Prestasi</span> </li>
												 </ul>
											 </div>
											 <br>
											 <div class="social-links circle brand-color">
											 <h4> Sosial media</h4>
												<ul>
													<li><a href="http://facebook.com/" target="_blank"></a></li>
													<li><a href="http://instagram.com/" target="_blank"></a></li>
													<li><a href="http://youtube.com/" target="_blank"></a></li>
													<li><a href="http://twitter.com/" target="_blank"></a></li>
													<!-- <li><a href="http://linkedin.com/" target="_blank"></a></li> -->
												</ul>
											</div>
											</div>
										</div>
									</div><!-- .container -->
								</section><!-- .portfolio-single-main -->
								
							</main> <!-- #main -->
						</div> <!-- #primary -->
					</div> <!-- .inner-wrapper -->
				</div> <!-- .container -->
			</div> <!-- #content-->
<?php $this->load->view('user/wiget') ?>
<?php $this->load->view('user/sosmed') ?>

<?php $this->load->view('user/footer') ?>	