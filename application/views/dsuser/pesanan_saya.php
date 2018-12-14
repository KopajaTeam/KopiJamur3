<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<body class="home header-v1">
	<!-- <div id="fakeloader"></div> -->
	<!-- <div class="color-switcher" id="choose_color"> -->
		<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
			<?php $this->load->view('user/head') ?>
			<?php $this->load->view('user/header')?>
			<?php $this->load->view('user/mainnav') ?>

			<div id="custom-header">
				<div class="custom-header-content">
					<div class="container">
						<h1 class="page-title">Dashboard User</h1>
						<div id="breadcrumb">
							<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
								<ul class="trail-items">
									<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
									<li class="trail-item trail-end"><span>Pesanan Saya</span></li>
								</ul>
							</div> <!-- .breadcrumbs -->
						</div> <!-- #breadcrumb -->
					</div> <!-- .container -->
				</div>  <!-- .custom-header-content -->
			</div> <!-- .custom-header -->
			<aside class="section section-services service-layout-1">
				<div class="container">
					<hr class="">
					<div class="container target">
						<div class="row">
							<?php $this->load->view('dsuser/sidenav_dashuser') ?>
							<!--/col-3-->
							<div class="col-sm-9" style="" contenteditable="false">
								<div class="panel panel-default target">
									<div class="panel-heading" contenteditable="false">Pesanan Saya</div>
									<div class="panel-body">
										<?php $no=0; foreach ($transaksi as $detail ){ ++$no; ?>
										<?php $det= $this->K_jamur->detail_transaksi($detail->id_transaksi)->result(); ?>
										<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $no ?>">
															Transaksi #<?php echo $detail->id_transaksi; ?> <a style="color: #34ace0;margin-left: 530px" href="<?php echo base_url() ?>Dashboard_user/detail_pesanan/<?php echo $detail->id_transaksi ?>">Detail Pesanan</a>
														</a>
													</h4>
												</div>
												<div id="collapse<?php echo $no ?>" class="panel-collapse collapse in">
													<?php foreach ($det as $deta){ ?>
													<div class="panel-body	">
														<img class="col-grid-1" src="<?php echo base_url($deta->gambar_produk); ?>" style="margin-bottom: 15px;height: 150px;width: 180px">
														<div class="col-grid-4">
															<p><?php echo $deta->nama_produk; ?></p> <br>
															<p><?php if($detail->status == 0) {?>
																<span class="label label-default"><i>Belum Membayar</i></span>
																<?php } elseif($detail->status == 1) {?>
																<span class="label label-warning"><i>Belum terkonfirmasi</i></span><?php } elseif($detail->status == 2){ ?>
																<span class="label label-success"><i>Terkonfirmasi</i></span><?php } else{ ?>
																<i><span class="label label-danger">Dibatalkan</span></i><?php } ?></p>
															</div>
														</div>
														<?php } ?>
													</div>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<?php $this->load->view("admin/side/js") ?>
				<?php $this->load->view('user/wiget') ?>
				<?php $this->load->view('user/sosmed') ?>
				<?php $this->load->view('user/footer') ?>
				<script type="text/javascript">
					$(document).ready(function(){
					 // alert("coba");
					    $('.panel-collapse').removeClass('in');
					 });
				</script>
