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
<?php $this->load->view('user/header')?>>
<?php $this->load->view('user/mainnav') ?>

<div id="custom-header">
	<div class="custom-header-content">
		<div class="container">
			<h1 class="page-title">Dashboard User</h1>
			<div id="breadcrumb">
				<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
					<ul class="trail-items">
						<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
						<li class="trail-item trail-end"><span>Manggil Nama User</span></li>
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
					<div class="panel panel-default">
						<div class="panel-heading">Invoice</div>
						<div class="panel-body" style="margin-top: -45px">
							<div class="content">
								<div class="watermark">
									<span id="watermark" style="display:none;">WATERMARK</span>
								</div>
								<div class="invoice-box" id="printableArea">
									<div class="container">
										<div class="row">
											<div class="equalHWrap eqWrap top">
												<div class="equalHW eq center logo-block">
													<a href=""><img src="<?php echo base_url('assets/images')?>/test1.png" style="width:100%; max-width:130px;"></a>
												</div>
												<div class="equalHW eq contact-info-block">
												</div>
												<div class="equalHW eq title-block" style="margin-left: 70px">
													<span id="AccountEmail">kopijamurprestasi@gmail.com</span><br>
													<span id="AccountPhone">047 226 47 280</span>
												</div>
											</div>
											<div class="row" style="margin-top:20px;">
												<div class="equalHWrap eqWrap nomargin-nopadding to-block">
													<div class="equalHW eq nomargin-nopadding " style="margin-left: 8px">
														<strong><p>Kode Invoice : #<?php echo $transaksi->id_transaksi; ?></strong></p> <a href="" type="button" onclick="printDiv('printableArea')" value="print a div!"><i class="fas fa-print" style="float: right;"></i></a>
													</div>
												</div>
												<div class="equalHWrap eqWrap nomargin-nopadding to-block">
													<div class="equalHW eq nomargin-nopadding title">
														<p style="margin-top: 20px; margin-bottom: 0px">- Nama Pemesan : <?php echo $transaksi->nama; ?></p>
														<p style="margin-bottom: -10px">- Alamat Lengkap : <?php echo $transaksi->alamat; ?></p>
													</div>
												</div>
												<table class="table">
													<tr class="titles">
														<th>Nama Barang</th>
														<th>Quantity</th>
														<th>Harga</th>
													</tr>
													<?php foreach ($transaksi1 as $detail): ?>
														<tr class="item" id="ProductList">
														<td id="Product"><span id="ProuductName"><?php echo $detail->nama_produk; ?><span></span></span></td>
														<td><span id="ProductNumUnits"><?php echo $detail->qty; ?></span></td>
														<td><span id="ProductUnitPrice"> Rp. <?php echo number_format($detail->harga_produk); ?></span></td>
													</tr>
													<?php endforeach ?>
												</table>
											</div>
											<div class="row">
												<div class="equalHWrap eqWrap">
													<div class="equalHW eq">
														<table class="right">
															<tr>
																<td><span style="display:inline-block;margin-right:10px;"><strong>Total Harga + Ongkir *10.000:</strong></span></td>
																<td><span id="ProductCost">Rp. <?php echo number_format($transaksi->total_transaksi); ?></span>
															</tr>
														</table>
													</div>
												</div>
												<div class="center">
													<p>Terima Kasih telah Membeli Produk Kami</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>
<?php $this->load->view("admin/side/js") ?>
<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<?php $this->load->view('user/wiget') ?>
<?php $this->load->view('user/sosmed') ?>

<?php $this->load->view('user/footer') ?>