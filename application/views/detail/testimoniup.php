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
					Testimonial Pembeli
				</h5>

				<!--  -->
				

				<!--  -->
			

				<!--  -->
		
	<div class="form-group">
		<label for="exampleInputFile"></label>
                  <label for="exampleInputFile">Silakan Upload Gambar Testimoni</label>
            <input type="file" id="exampleInputFile">
         <p class="help-block">Kepuasan Pembeli Pioritas Kami</p>
    </div>
      <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
                </div>
		<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Upload
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