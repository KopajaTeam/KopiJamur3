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
							<form method="post" action="#">
							<div class="row mb-5">
								<div class="col-lg-8">
									<div class="body">
										<div class="body-header text-white bg-primary" style="background-color: #bdc3c7">
											<h2 style="text-align: center;">Isi Alamat Pengiriman</h2>
										</div>
										<div class="body-body">
											<div class="form-group row">
												<label for="namalengkap" class="col-lg-4 col-form-label">Nama Lengkap</label>
												<div class="col-lg-8">
													<input type="text" name="nama" class="form-control" value="#" id="namalengkap" placeholder="Nama Lengkap">
												</div>
											</div>
											<div class="form-group row">
												<label for="kabupaten" class="col-lg-4 col-form-label">Kabupaten / Kota</label>
												<div class="col-lg-8">
													<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Jember">
													<p class="text-muted">Hanya untuk wilayah Jember</p>
												</div>
											</div>
											<div class="form-group row">
												<label for="kecamatan" class="col-lg-4 col-form-label">Kecamatan</label>
												<div class="col-lg-8">
													<select data-plugin="select2" id="select2" name="kecamatan" class="form-control pilih-kecamatan-dicheckout" style="width: 100%;">
														<option value="">---  Pilih Kecamatan  ---</option>

															<option value="#">KEcamatan basaklsari</option>
														</select>
													</div>
												</div>
												<div class="tempat-kelurahan">
												</div>
												<div class="form-group row">
													<label class="col-form-label col-lg-4" for="alamat">Alamat Lengkap</label>
													<div class="col-lg-8">
														<textarea class="form-control" rows="5" name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-lg-4" for="no_telp">Nomor Handphone</label>
													<div class="col-lg-8">
														<div class="input-group">
															<span class="input-group-addon">+62 </span>
															<input type="number" class="form-control" value="#" rows="5" name="no_telp" id="no_telp" placeholder="Nomor Handphone">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 mt-lg-0 mt-4">
										<div class="body">
											<div class="body-header text-white bg-primary" style="background-color: #bdc3c7">
												<h5>Rincian Pesanan <i class="text-light">( 1 Items )</i></h5>
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
														<tr>
															<td scope="row">Kopi Jamur oaisjdasd</td>
															<td class="text-center">5</td>
															<td class="text-right">50000</td>
														</tr>
													</tbody>
													<tfoot class="bg-light">
														<tr style="font-size: 16px">
															<td colspan="3" class="font-weight-bold">
																TOTAL <font class="float-right text-primary">Rp. 50000</font>
																<p class="text-muted" style="font-size: 8px">(termasuk PPN, jika ada*)</p>
															</td>
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
							</form>
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