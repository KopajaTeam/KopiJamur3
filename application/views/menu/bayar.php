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
			<?php $this->load->view('detail/headdet') ?>


			<div id="custom-header" >
				<div class="custom-header-content">
					<div class="container">
						<h1 class="page-title">Keranjang</h1>
						<div id="breadcrumb">
							<div aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
								<ul class="trail-items">
									<li class="trail-item trail-begin" style="font-size: 16px"><span><u>Home</u></span></a></li>
									<li class="trail-item trail-end" style="font-size: 16px"><span>Keranjang</span></li>
								</ul>
							</div> <!-- .breadcrumbs -->
						</div> <!-- #breadcrumb -->
					</div> <!-- .container -->
				</div>  <!-- .custom-header-content -->
			</div> <!-- .custom-header -->	<br>

			<section class="cart bgwhite p-t-70 p-b-100">
				<div class="container">
<<<<<<< HEAD
=======
					<div class="container-table-cart pos-relative">
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
						<div class="wrap-table-shopping-cart bgwhite">
							<table class="table-shopping-cart">
								<tr class="table-head">
									<th class="column-1"></th>
									<th class="column-2">Product</th>
									<th class="column-3">Price</th>
									<th class="column-4 p-l-70">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

								<tr class="table-row">
									<td class="column-1">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="<?php echo base_url('assets/tempdet/images')?>/item-10.jpg" alt="IMG-PRODUCT">
										</div>
									</td>
									<td class="column-2">Kopi Jamur Ligzi</td>
									<td class="column-3">Rp.10.000</td>
									<td class="column-4">
										<div class="flex-w bo5 of-hidden w-size17">
											<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
												<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
											</button>

											<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

											<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
												<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
											</button>
										</div>
									</td>
									<td class="column-5">Rp.10.000</td>
								</tr>

								<tr class="table-row">
									<td class="column-1">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="<?php echo base_url('assets/tempdet/images')?>/item-05.jpg" alt="IMG-PRODUCT">
										</div>
									</td>
									<td class="column-2">Kopi Jamur Tiram</td>
									<td class="column-3">Rp12.000</td>
									<td class="column-4">
										<div class="flex-w bo5 of-hidden w-size17">
											<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
												<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
											</button>

											<input class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="1">

											<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
												<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
											</button>
										</div>
									</td>
									<td class="column-5">Rp.12.000</td>
								</tr>
							</table>
						</div>
<<<<<<< HEAD
					<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-lr-15-sm" style="padding-right: 35px; margin-top: -17px">
=======
					</div>
					<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-lr-15-sm" style="padding-right: 35px">
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
						<h2 class="m-text15" style="padding-left: 800px">Harga Total :</h2> <h2 class="m-text15 w-full-sm">Rp. 1.000.000</h2>
					</div>

					<!-- Total -->
					<div class="bo9 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
						<h5 class="m-text20 p-b-24" >
							Total Pembelian
						</h5>

						<!--  -->
						<div class="flex-w flex-sb-m p-b-12">
							<span class="s-text18 w-size19 w-full-sm">
								Nama Customer
							</span>

							<span class="s-text19 w-size20 w-full-sm">
								Panjol
							</span>
							<br><br><br>
							<span class="s-text18 w-size19 w-full-sm">
								Alamat Customer
							</span>

							<span class="s-text19 w-size20 w-full-sm">
								Jalan baru dijember sebelahnya ada gang kecil masuk belok kiri lalu kanan lalu setelah belok kanan ada masjid nah disebelah kanan masjid itu ada gang lagi masuk aja terus sampe pertigaan nah belok kanan baru sampe
							</span>
<<<<<<< HEAD
=======
						</div>
						<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
							<span class="s-text18 w-size19 w-full-sm">
								Perhatian
							</span>

							<div class="w-size20 w-full-sm">
								<p class="s-text8 p-b-23">
									<sup>* </sup>Produk tidak ready stok, jadi untuk lama masa tunggu sampai siap kirim membutuhkan waktu 2 hari produksi. Jadi untuk lama pengiriman akan memakan tambahan waktu tersebut.
								</p>

								<span class="s-text19">
									Pilih Kurir untuk menentukan ongkos kirim
								</span>

								<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size13 m-t-8 m-b-12" style="font-size: 13px">
									<select class="selection-2" name="country">
										<option>Pilih Kurir</option>
										<option>JNE</option>
										<option>JNT</option>
										<option>Tiki</option>
									</select>
								</div>
								<div class="m-b-12" style="font-size: 13px">
									<textarea placeholder="Tambahkan Catatan untuk Penjual" style="height: 100px"></textarea>
								</div>

								<div class="size13 bo4 m-b-22" style="font-size: 13px">
									<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Kode Pos">
								</div>
							</div>
							<span class="s-text18 w-size19 w-full-sm">
								Subtotal:
							</span>

							<span class="m-text15 w-size20 w-full-sm">
								Rp.22.000
							</span>
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
						</div>
						<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
							<span class="s-text18 w-size19 w-full-sm">
								Perhatian
							</span>

							<div class="w-size20 w-full-sm">
								<p class="s-text8 p-b-23">
									<sup>* </sup>Produk tidak ready stok, jadi untuk lama masa tunggu sampai siap kirim membutuhkan waktu 2 hari produksi. Jadi untuk lama pengiriman akan memakan tambahan waktu tersebut.
								</p>

								<span class="s-text19">
									Pilih Kurir untuk menentukan ongkos kirim
								</span>

								<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size13 m-t-8 m-b-12" style="font-size: 13px">
									<select class="selection-2" name="country">
										<option>Pilih Kurir</option>
										<option>JNE</option>
										<option>JNT</option>
										<option>Tiki</option>
									</select>
								</div>
								<div class="m-b-12" style="font-size: 13px">
									<textarea placeholder="Tambahkan Catatan untuk Penjual" style="height: 100px"></textarea>
								</div>

<<<<<<< HEAD
								<div class="size13 bo4 m-b-22" style="font-size: 13px">
									<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Kode Pos">
								</div>
							</div>
							<span class="s-text18 w-size19 w-full-sm">
								Subtotal:
							</span>

							<span class="m-text15 w-size20 w-full-sm">
								Rp.22.000
=======
						<!--  -->
						<div class="flex-w flex-sb-m p-t-26 p-b-30">
							<span class="m-text22 w-size19 w-full-sm">
								Total:
							</span>

							<span class="m-text15 w-size20 w-full-sm">
								Rp.27.000
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
							</span>
						</div>
						<div class="form-group" style="font-size: 13px">
							<span for="exampleInputFile">Silakan upload bukti pembayaran pada rekening (XXXXXXXX) Bank X, Atas Nama Kopi Jamur Prestasi</span>
							<input type="file" id="exampleInputFile" style="margin-top: 10px">

<<<<<<< HEAD
						<!--  -->
						<div class="flex-w flex-sb-m p-t-26 p-b-30">
							<span class="m-text22 w-size19 w-full-sm">
								Total:
							</span>

							<span class="m-text15 w-size20 w-full-sm">
								Rp.27.000
							</span>
						</div>
						<div class="size15 trans-0-4">
							<!-- Button -->
							<button class="flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-left: 400px; margin-top: 70px;">
								Konfirmasi Pemesanan
=======
						</div>

						<div class="size15 trans-0-4">
							<!-- Button -->
							<button class="flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-left: 400px; margin-top: 70px;">
								Konfirmasi Pembayaran
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
							</button>
						</div>
					</div>
				</div>
			</section>

			<?php $this->load->view('detail/jsdet') ?>

			<?php $this->load->view('user/wiget') ?>	

			<?php $this->load->view('user/sosmed') ?>

			<?php $this->load->view('user/footer') ?>	

		</div> <!--#page-->
		<div id="btn-scrollup">
			<a  title="Go Top"  class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
		</div>
		<?php $this->load->view('user/jscript') ?>	
	</body>

	</html>