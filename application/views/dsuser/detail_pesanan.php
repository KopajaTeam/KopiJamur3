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
						<li class="trail-item trail-end"><span>Manggil Nama User</span></li>
					</ul>
				</div> <!-- .breadcrumbs -->
			</div> <!-- #breadcrumb -->
		</div> <!-- .container -->
	</div>  <!-- .custom-header-content -->
</div> <!-- .custom-header -->
<aside class="section section-services service-layout-1">
	<div class="container" style="margin-top: 35px">
		<div class="container target">
			<div class="row">
				<?php $this->load->view('dsuser/sidenav_dashuser') ?>
				<!--/col-3-->
				<div class="col-sm-9" style="" contenteditable="false">
					<div class="panel panel-default">
						<div class="panel-heading">Detail Pesanan</div>
						<div class="panel-body">
							<div class="content">
								<table cellpadding="10">
									<tr class="font-weight-bold">
										<td valign="top">NO. INVOICE</td>
										<td valign="top">:</td>
										<td valign="top">141231</td>
									</tr>
									<tr>
										<td valign="top">TANGGAL TRANSAKSI</td>
										<td valign="top">:</td>
										<td valign="top">11 1 2011</td>
									</tr>
									<tr>
										<td valign="top">ALAMAT PENGIRIMAN</td>
										<td valign="top">:</td>
										<td valign="top">
											<b>Nama Pengirim</b><br>
											Alamat yang dituju<br>
											No Telp : 0821412515
										</td>
									</tr>
								</table>
								<div class="table-responsive">
									<table class="table table-bordered" cellspacing="0" style="font-size: 12px">
										<thead class="bg-light">
											<tr>
												<th width="100">Kode Barang</th>
												<th colspan="2">Nama Barang</th>
												<th class="text-right">Harga</th>
												<th class="text-center" width="80">Kuantitas</th>
												<th class="text-right">Total Harga</th>
												<th class="text-center" width="80">Status</th>
												<th class="text-center" width="80">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="align-middle">Kode Barang</td>
												<td class="align-middle border-right-0" width="80px">
													<a  data-toggle="modal"  href="#gambarmodal" role="button">
														<img class="img-fluid" src="#" >
													</a>
												</td>
												<td class="align-middle border-left-0">Nama Barang</td>
												<td class="align-middle text-right">Rp. 1390814</td>
												<td class="align-middle text-center">11</td>
												<td class="align-middle text-right">Rp. 516616</td>
												<td class="align-middle text-center">
												</td>
												<td class="align-middle text-center">
													<a class="btn btn-success" data-toggle="modal"  href="#validmodal" role="button"><span class="fa fa-fa-truck ptooltip" data-toggle="tooltip" data-placement="top" title="Kirim Pesanan"></span></a>
												</td>
												<!-- MODAL IMAGES -->
											</tr> 
										</tbody>
										<tfoot>
											<tr>
												<td colspan="5" class="text-center align-middle font-weight-bold">SUB TOTAL : </td>
												<td class="text-right font-weight-bold align-middle" style="font-size: 24px">Rp. 15151151</td>
											</tr>
										</tfoot>
									</table>
									<button style="margin-left: 640px">
										Cetak Invoice
									</button>
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
