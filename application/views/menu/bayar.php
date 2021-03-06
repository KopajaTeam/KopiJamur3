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


			<section class="cart bgwhite p-t-70 p-b-100" id="cart">
				<div class="container">
					<div class="wrap-table-shopping-cart bgwhite">
						<table class="table-shopping-cart">
							<tr class="table-head">
								<th class="column-1"></th>
								<th class="column-2" style="text-align: center">Product</th>
								<th class="column-3" style="text-align: center">Price</th>
								<th class="column-4 " style="text-align: center">Quantity</th>
								<th class="column-5" style="text-align: center">Total</th>
								<th class="column-6" style="text-align: center">Action</th>>
							</tr>
							<?php foreach ($keranjang->result() as $ker): ?>
								<!-- <input type="text" hidden="" name="nama_barang"> -->
								<tr class="table-row">
										<td class="column-1">
											<div class="cart-img-product b-rad-4 o-f-hidden">
												<img  src="<?php echo base_url().$ker->gambar_produk?>" alt="IMG-PRODUCT">
											</div>
										</td>
										<td class="column-2"><?php echo $ker->nama_produk ?></td>
										<td class="column-3">Rp. <?php echo $ker->harga_produk ?></td>
										<td class="column-4">
											<div class="flex-w bo5 of-hidden w-size17">
												<form method="post" action="<?php echo base_url('Keranjang/insert_transaksi') ?>">
												<input hidden="" type="text" name="id_produk" value="<?php echo $ker->id_produk ?>">
												<button type="submit" name="minus" class="btn btn-primary">
													<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="size8 m-text18 t-center num-product" type="text" name="qty" value="<?php echo $ker->qty ?>">

												<button type="submit" name="plus" class="btn btn-primary">
													<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
												</button>
												</form>
											</div>
										</td>
										<td class="column-5">Rp. <?php echo $ker->harga_produk*$ker->qty ?></td>
										<td><a class="btn btn-danger text-white" href="<?php echo base_url('Keranjang/hapus/'.$ker->kd_keranjang) ?>"><i class="fa fa-trash"></i></a></td>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-lr-15-sm" style="padding-right: 35px; margin-top: -17px">
						<!-- <h2 class="m-text15" style="padding-left: 800px">Harga Total :</h2> <h2 class="m-text15 w-full-sm">Rp. 1.000.000</h2> -->
						<?php if ($jml_keranjang==0) { ?>
							<?php redirect (base_url()) ?>
						<?php  }else{ ?>
						<div class="size15 trans-0-4">
							<a href="<?php echo base_url('Checkout') ?>"><button type="submit" class="flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-left: 400px; margin-top: 10px;width: 300px">
								Checkout
							</button></a>
						</div>
						<?php } ?>
					</div>
					<!-- Total -->
					
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