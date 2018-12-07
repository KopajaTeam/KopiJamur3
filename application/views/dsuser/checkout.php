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
									<li class="trail-item trail-end"><span>Checkout</span></li>
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
							<!--/col-3-->
							<div class="col-sm-12" style="" contenteditable="false">
								<div class="panel panel-default">
									<div class="panel-body">
										<form method="post" action="<?php echo base_url('Checkout/ckOut') ?>">
											<div class="row mb-5">
												<div class="col-lg-8">
													<div class="body">
														<div class="body-header text-white bg-primary" style="background-color: #bdc3c7">
															<h2 style="text-align: center;">Isi Alamat Pengiriman</h2>
														</div>
														<div class="body-body">
															<div class="namem-group row">
																<label name="namalengkap" class="col-lg-4 col-namem-label">Nama Lengkap</label>
																<div class="col-lg-8">
																	<!-- <input type="text"  name="idProduk" hidden="" value="<?php echo $data_produk->id_produk; ?>" > -->
																	<input type="text" readonly name="nama" class="namem-control" value="<?php echo $this->session->userdata('nama_user') ?>" id="namalengkap" placeholder="Nama Lengkap">
																</div>
															</div>
															<div class="namem-group row">
																<label name="kabupaten" class="col-lg-4 col-namem-label">Kabupaten / Kota</label>
																<div class="col-lg-8">
																	<input type="text" readonly class="namem-control-plaintext" id="staticEmail" value="Jember">
																	<p class="text-muted">Hanya untuk wilayah Jember</p>
																</div>
															</div>
															<div class="namem-group row">
																<label name="kecamatan" class="col-lg-4 col-namem-label">Kecamatan</label>
																<div class="col-lg-8">
																	<select data-plugin="select2" id="select2" name="kecamatan" class="namem-control pilih-kecamatan-dicheckout" style="width: 100%;">
																		<option value="">---  Pilih Kecamatan  ---</option>
																		<?php foreach ($kecamatan->result() as $kec): ?>
																			<option value="<?php echo $kec->nama_kecamatan; ?>"><?php echo $kec->nama_kecamatan; ?></option>
																		<?php endforeach ?>

																	</select>
																</div>
															</div>
															<div class="tempat-kelurahan">
															</div>
															<div class="namem-group row">
																<label class="col-namem-label col-lg-4" name="alamat">Alamat Lengkap</label>
																<div class="col-lg-8">
																	<textarea class="namem-control" rows="5" name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
																</div>
															</div>
															<div class="namem-group row">
																<label class="col-namem-label col-lg-4" name="no_telp">Nomor Handphone</label>
																<div class="col-lg-8">
																	<div class="input-group">
																		<span class="input-group-addon">+62 </span>
																		<input type="number" class="namem-control" value="#" rows="5" name="no_telp" id="no_telp" placeholder="Nomor Handphone">
																	</div>
																</div>
															</div> 	
														</div>
													</div>
												</div>
												<div class="col-lg-4 mt-lg-0 mt-4">
													<div class="body">
														<div class="body-header text-white bg-primary" style="background-color: #bdc3c7">
															<h5>Rincian Pesanan <i class="text-light">( <?php echo $this->db->count_all_results('keranjang'); ?> item )</i></h5>
														</div>
														<div class="body-body p-0" style="margin-top: -20px">
															<table class="table table-responsive" style="font-size: 10px">
																<thead class="bg-light">
																	<tr>
																		<th scope="col" width="180px">PRODUK</th>
																		<th scope="col" class="text-center">KUANTITAS</th>
																		<th scope="col" width="100px" class="text-right">HARGA</th>
																	</tr>
																</thead>
																<tbody>
																	<?php $total=0; foreach ($keranjang as $keranjangs ) { $total = $total+($keranjangs->harga_produk*$keranjangs->qty)?>
																	<tr>
																		<td scope="row"><?php echo $keranjangs->nama_produk; ?></td>
																		<td class="text-center"><?php echo number_format($keranjangs->qty); ?></td>
																		<td class="text-right"><?php echo number_format($keranjangs->harga_produk); ?></td>
																	</tr>
																	<?php } ?>
																</tbody>
																<tfoot class="bg-light">
																	<tr style="font-size: 16px">
																		<td colspan="3" class="font-weight-bold">
																			TOTAL <font class="float-right text-primary">Rp. <?php echo number_format($total+10000); ?></font>
																			<p class="text-muted" style="font-size: 8px">(termasuk biaya ongkir Rp.10.000*)</p>
																		</td>
																		<input type="hidden" name="total_transaksi" value="<?php echo ($total+10000); ?>">
																	</tr>
																</tfoot>
															</table>
														</div>
														<div class="body-footer" style="margin-left: 80px">
															<button type="submit" name="konfirmasi_pesanan" class="btn btn-primary"> KONFIRMASI PESANAN</button>
														</div>
													</div>
												</div>
											</div>
										</form	>
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