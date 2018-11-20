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
								<div class="invoice-box">
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
														<strong>Kode Invoice : 41234124</strong> <i class="fas fa-print" style="float: right;"></i>
													</div>
												</div>
												<div class="equalHWrap eqWrap nomargin-nopadding to-block">
													<div class="equalHW eq nomargin-nopadding title">
														<p style="margin-top: 20px; margin-bottom: 0px">- Nama Pemesan : Panji Budi Satria</p>
														<p style="margin-bottom: -10px">- Alamat Lengkap : Jalan blabblablal asdasdasdasd asdasdasdasdasdas asdasdasd asddasdasd asdasdadsasdasd asdasda sdasdasd a</p>
													</div>
												</div>
												<table class="table">
													<tr class="titles">
														<th>Nama Barang</th>
														<th>Quantity</th>
														<th>Enhet</th>
														<th>Enhetspris</th>
														<th>Rabatt</th>
														<th>MVA</th>
														<th>Sum eks MVA</th>
													</tr>
													<tr class="item" id="ProductList">
														<td id="Product"><span id="ProuductName">Medium Hosting<span></span></span></td>
														<td><span id="ProductNumUnits">6<span></span></span></td>
														<td><span id="ProductUnit">KG<span></span></span></td>
														<td><span id="ProductUnitPrice">300kr</span></td>
														<td><span id="ProductDiscount">Rabatt</span></td>
														<td><span id="ProductTax">20%</span></td>
														<td><span id="ProductCost">900 KR</span></td>
													</tr>
													<tr class="item">
														<td><span id="ProuductName">Medium Hosting<span></span></span></td>
														<td><span id="ProductNumUnits">6<span></span></span></td>
														<td><span id="ProductUnit">KG<span></span></span></td>
														<td><span id="ProductUnitPrice">300kr</span></td>
														<td><span id="ProductDiscount">Rabatt</span></td>
														<td><span id="ProductTax">20%</span></td>
														<td><span id="ProductCost">900 KR</span></td>
													</tr>
													<tr class="item">
														<td><span id="ProuductName">Medium Hosting<span></span></span></td>
														<td><span id="ProductNumUnits">6<span></span></span></td>
														<td><span id="ProductUnit">KG<span></span></span></td>
														<td><span id="ProductUnitPrice">300kr</span></td>
														<td><span id="ProductDiscount">Rabatt</span></td>
														<td><span id="ProductTax">20</span>%</td>
														<td><span id="ProductCost">900</span> <span id="InvoiceCurrency">KR</span></td>
													</tr>
													<tr class="item">
														<td><span id="ProuductName">Soup<span></span></span></td>
														<td><span id="ProductNumUnits">6 <span></span></span></td>
														<td><span id="ProductUnit">Liter <span></span></span></td>
														<td><span id="ProductUnitPrice">300kr</span></td>
														<td><span id="ProductDiscount">90%</span></td>
														<td><span id="ProductTax">20%</span></td>
														<td><span id="ProductCost">900 KR</span></td>
													</tr>
												</table>
											</div>
											<div class="row">
												<div class="equalHWrap eqWrap">
													<div class="equalHW eq">
														<table class="right">
															<tr>
																<td><span style="display:inline-block;margin-right:10px;"><strong>Total MVA:</strong></span></td>
																<td><span id="InvoceTotalVat">202</span> <span id="InvoiceCurrency1">KR</span><br></td>
															</tr>
															<tr>
																<td><span style="display:inline-block;margin-right:10px;"><strong>Sum eks MVA:</strong></span></td>
																<td><span id="InvoiceSumExVat">900</span> <span id="InvoiceCurrency2">KR</span></td>
															</tr>
															<tr>
																<td><span style="display:inline-block;margin-right:10px;"><strong>Å betale:</strong></span></td>
																<td><span id="ProductCost">1102</span> <span id="InvoiceCurrency3">KR</span></td>
															</tr>
														</table>
													</div>
												</div>
												<div class="center">
													<a href="https://sequra.no" style="text-decoration:none;">Prøv gratis fakturerings program - rett i nettleseren <span style="border-bottom:1px solid #000;">Sequra</span></a>
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

<?php $this->load->view('user/wiget') ?>
<?php $this->load->view('user/sosmed') ?>

<?php $this->load->view('user/footer') ?>