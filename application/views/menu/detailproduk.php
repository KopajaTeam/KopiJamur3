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

			<div id="custom-header" >
				<div class="custom-header-content">
					<div class="container">
						<h1 class="page-title">Produk</h1>
						<div id="breadcrumb">
							<div aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
								<ul class="trail-items">
									<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
									<li class="trail-item"><span>Produk</span></li>
									<li class="trail-item trail-end"><span>Detail Produk</span></li>
								</ul>
							</div> <!-- .breadcrumbs -->
						</div> <!-- #breadcrumb -->
					</div> <!-- .container -->
				</div>  <!-- .custom-header-content -->
			</div> <!-- .custom-header -->	<br>
			<div id="content" class="site-content global-layout-no-sidebar" style="margin-top: -100px">
				<form method="post" action="<?php echo base_url('Produk/insertKranjang') ?>">
					<div class="container">
						<div class="inner-wrapper">
							<div id="primary" class="content-area">
								<main id="main" class="site-main" >
									<section class="section portfolio-single-main">
										<div class="container">
											<form method="post" action="<?php echo base_url('Produk/insertKranjang') ?>">
												<div class="inner-wrapper">
													<div class="col-grid-6">
														<img style="width: 1000px; height: 350px " src="<?php echo base_url().$produk->gambar_produk; ?>">
													</div>
													<div class="col-grid-6">
														<input type="text"  name="idProduk" hidden="" value="<?php echo $produk->id_produk; ?>" >
														<input type="text" name="hrgProduk" hidden="" value="<?php echo $produk->harga_produk; ?>">
														<h2><strong><?php echo $produk->nama_produk; ?></strong> (<?php echo $produk->nama_kategori_produk; ?>)</h2>
														<h5>Berat : <?php echo $produk->berat_produk; ?> <?php echo $produk->satuan_produk; ?> /<?php echo $produk->jenis_satuan_produk; ?></h5>
														<h5>Harga : Rp. <?php echo $produk->harga_produk; ?></h5>
														<hr style="margin-top: -2px; margin-bottom: 10px;">
														<h5>Deskripsi Produk : </h5>
														<p style="font-size: 19px"><?php echo $produk->detail_produk; ?></p> <br>
													</div>
												</div>
												<button type="submit" class="custom-button button-curved" style="margin-left: 9px;float: right;" href=""><i class="fas fa-cart-plus"></i> Beli</button>
											</form>
										</div><!-- .container -->
									</section><!-- .portfolio-single-main -->
								</main> <!-- #main -->
							</div> <!-- #primary -->
						</div> <!-- .inner-wrapper -->
					</div> <!-- .container -->
				</div> <!-- #content-->
			</form>
			<?php $this->load->view('user/wiget') ?>
			<?php $this->load->view('user/sosmed') ?>

			<?php $this->load->view('user/footer') ?>	