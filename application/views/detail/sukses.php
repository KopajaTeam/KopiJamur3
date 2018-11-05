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
			
<?php $this->load->view('dsuser/kontends')?>

<?php $this->load->view('user/mainnav') ?>	

<?php $this->load->view('detail/headdet') ?>

	<!-- Total -->
			<div style="margin-left: 100px;" class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">

				<h5 class="m-text20 p-b-24">
					Riwayat Pembelian
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						Rp.22.000
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Perhatian
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Produk tidak ready stok, jadi untuk lama masa tunggu sampai siap kirim membutuhkan waktu 2 hari produksi. Jadi untuk lama pengiriman akan memakan tambahan waktu tersebut.
						</p>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-20 p-b-26">
					<span class="m-text22 w-size19 w-full-sm">
						Total dengan Ongkir:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						Rp.27.000
					</span>
				</div>
	<div class="form-group">
		<label for="exampleInputFile">Silakan transfer pembayaran pada rekening (XXXXXXXX) Bank X, Atas Nama Kopi Jamur Prestasi</label>
                  <label for="exampleInputFile">Silakan Upload Bukti Transfer</label>
            <input type="file" id="exampleInputFile">
         <p class="help-block">Bukti Transfer Telah di Verivikasi</p>
    </div>
		<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Kembali
					</button>
				</div>
			</div>
		</div>
	<br>

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