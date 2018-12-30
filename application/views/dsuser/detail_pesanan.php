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
						<li class="trail-item trail-end"><span>Detail Pesanan</span></li>
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
								<table cellpadding="10" class="tdborderless">
									<tr class="font-weight-bold">
										<td valign="top">NO. INVOICE</td>
										<td valign="top">:</td>
										<td valign="top"># <?php echo $transaksi->id_transaksi; ?></td>
									</tr>
									<tr>
										<td valign="top">TANGGAL TRANSAKSI</td>
										<td valign="top">:</td>
										<td valign="top"><?php echo $transaksi->tgl_transaksi; ?></td>
									</tr>
									<tr>
										<td valign="top">ALAMAT PENGIRIMAN</td>
										<td valign="top">:</td>
										<td valign="top">
											<b><?php echo $transaksi->nama; ?></b><br>
											<?php echo $transaksi->alamat_pengiriman; ?><br>
											No Telp : <?php echo $transaksi->no_telp; ?>
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
												<?php if($transaksi->status == 2) {?>
												<th class="text-center" width="80">Status</th>
												<?php } else {?>
												<i>-</i><?php } ?>
												<th class="text-center" width="80">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="align-middle"><?php echo $transaksi->id_produk; ?></td>
												<td class="align-middle border-right-0" width="80px">
													<a  data-toggle="modal"  href="#gambarmodal" role="button">
														<img class="img-fluid" src="<?php echo base_url().$transaksi->gambar_produk; ?>" >
													</a>
												</td>
												<td class="align-middle border-left-0"><?php echo $transaksi->nama_produk; ?></td>
												<td class="align-middle text-right">Rp. <?php echo number_format($transaksi->harga_produk); ?></td>
												<td class="align-middle text-center"><?php echo $transaksi->qty; ?></td>
												<td class="align-middle text-right">Rp. <?php echo number_format($transaksi->total_harga); ?></td>
												<?php if($transaksi->status == 2) {?>
												<td class="align-middle text-center"><center><i class="fa fa-truck"></i></center></td>
												<?php } else {?>
												<i>-</i><?php } ?>

												<td class="align-middle text-center">
													<p><?php if($transaksi->status == 0) {?>
														<i>Belum Membayar</i>
														<?php } elseif($transaksi->status == 1) {?>
														<i>Belum terkonfirmasi</i><?php } elseif($transaksi->status == 2){ ?>
														<i>Terkonfirmasi</i><?php } else{ ?>
														<i>Dibatalkan</i><?php } ?></p>
													</td>
													<!-- MODAL IMAGES -->
												</tr> 
											</tbody>
											<tfoot>
												<tr>
													<td colspan="5" class="text-center align-middle font-weight-bold">SUB TOTAL : </td>
													<td class="text-right font-weight-bold align-middle" style="font-size: 24px">Rp. <?php echo number_format($transaksi->total_transaksi); ?></td>
												</tr>
											</tfoot>
										</table>
										<?php if($transaksi->status == 2) {?>
										<a href="<?php echo base_url() ?>Dashboard_user/Invoice/<?php echo $transaksi->id_transaksi ?>"><button style="margin-left: 640px">
											Cetak Invoice
										</button></a>
										<?php } else {?>
										<?php } ?>
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
