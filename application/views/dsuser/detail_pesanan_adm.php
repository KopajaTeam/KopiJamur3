<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header card-header-rose card-header-text">
					<div class="card-text">
						<h4 class="card-title">Detail Pesanan</h4>
					</div>
				</div>
				<aside class="section section-services service-layout-1" style="margin-top: -50px">
					<div class="container">
						<div class="container target">
							<div class="row">
								<!--/col-3-->
								<div class="col-sm-12" style="" contenteditable="false">
									<div class="card card-default">
										<div class="card-body">
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
														<td valign="top">ATAS NAMA</td>
														<td valign="top">:</td>
														<td valign="top"><b><?php echo $transaksi->nama; ?></b></td>
													</tr>
													<tr>
														<td valign="top">ALAMAT PENGIRIMAN</td>
														<td valign="top">:</td>
														<td valign="top">
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
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>

			<?php $this->load->view("admin/side/footer") ?>
			<?php $this->load->view("admin/side/js") ?>